<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * DoutPsi - Online Appointment Scheduler
 *
 * @package     DoutPsi
 * @author      A.Tselegidis <contato@doutpsi.com.br>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://DoutPsi.org
 * @since       v1.6.0
 * ---------------------------------------------------------------------------- */

/**
 * Evolution GO client library.
 *
 * Handles communication with the Evolution GO WhatsApp API server.
 * Evolution GO is a high-performance WhatsApp API built in Go by Evolution Foundation.
 * Docs: https://docs.evolutionfoundation.com.br
 *
 * @package Libraries
 */
class Evolution_client
{
    /**
     * @var string Base URL of the Evolution GO server (e.g. http://localhost:8080)
     */
    private string $base_url;

    /**
     * @var string Global API key for the Evolution GO server
     */
    private string $api_key;

    /**
     * @var EA_Controller|CI_Controller
     */
    protected EA_Controller|CI_Controller $CI;

    /**
     * Evolution_client constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance();

        $this->base_url = rtrim(setting('evolution_api_url') ?: '', '/');
        $this->api_key  = setting('evolution_api_global_key') ?: '';
    }

    /**
     * Check if Evolution GO is properly configured.
     *
     * @return bool
     */
    public function is_configured(): bool
    {
        return !empty($this->base_url) && !empty($this->api_key);
    }

    /**
     * Generate a standard instance name from a provider ID.
     *
     * @param int $provider_id
     *
     * @return string e.g. "psi-42"
     */
    public function generate_instance_name(int $provider_id): string
    {
        return 'psi-' . $provider_id;
    }

    /**
     * Create a new WhatsApp instance on Evolution GO.
     *
     * POST /instance/create
     * Body: { "instanceName": "psi-42", "integration": "WHATSAPP-BAILEYS" }
     *
     * @param string $instance_name
     *
     * @return bool
     */
    public function create_instance(string $instance_name): bool
    {
        try {
            $response = $this->request('POST', '/instance/create', [
                'instanceName' => $instance_name,
                'integration'  => 'WHATSAPP-BAILEYS',
            ]);

            return isset($response['instance']['instanceName']);
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::create_instance - ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Get the connection state of a WhatsApp instance.
     *
     * GET /instance/connectionState/{instanceName}
     *
     * @param string $instance
     *
     * @return string 'open' | 'close' | 'connecting'
     */
    public function get_connection_state(string $instance): string
    {
        try {
            $response = $this->request('GET', '/instance/connectionState/' . urlencode($instance));

            return $response['instance']['state'] ?? 'close';
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::get_connection_state - ' . $e->getMessage());

            return 'close';
        }
    }

    /**
     * Get the QR Code for pairing a WhatsApp instance.
     *
     * GET /instance/connect/{instanceName}
     *
     * @param string $instance
     *
     * @return string Base64 encoded QR code image (data:image/png;base64,...)
     */
    public function get_qr_code(string $instance): string
    {
        try {
            $response = $this->request('GET', '/instance/connect/' . urlencode($instance));

            return $response['base64'] ?? '';
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::get_qr_code - ' . $e->getMessage());

            return '';
        }
    }

    /**
     * Send a text message via a WhatsApp instance.
     *
     * POST /message/sendText/{instanceName}
     * Body: { "number": "5511999999999", "text": "Hello!" }
     *
     * @param string $instance  The instance name (e.g. "psi-42")
     * @param string $phone     Phone number in E.164 format without + (e.g. "5511999999999")
     * @param string $message   Message text (supports WhatsApp markdown: *bold*, _italic_)
     *
     * @return bool
     */
    public function send_text(string $instance, string $phone, string $message): bool
    {
        try {
            $phone = $this->normalize_phone($phone);

            $response = $this->request('POST', '/message/sendText/' . urlencode($instance), [
                'number' => $phone,
                'text'   => $message,
            ]);

            return isset($response['key']['id']);
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::send_text - ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Delete (remove) a WhatsApp instance from Evolution GO.
     *
     * DELETE /instance/delete/{instanceName}
     *
     * @param string $instance_name
     *
     * @return bool
     */
    public function delete_instance(string $instance_name): bool
    {
        try {
            $response = $this->request('DELETE', '/instance/delete/' . urlencode($instance_name));

            return isset($response['status']) && $response['status'] === 'SUCCESS';
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::delete_instance - ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Disconnect a WhatsApp number from an instance (keeps the instance).
     *
     * DELETE /instance/logout/{instanceName}
     *
     * @param string $instance
     *
     * @return bool
     */
    public function logout_instance(string $instance): bool
    {
        try {
            $response = $this->request('DELETE', '/instance/logout/' . urlencode($instance));

            return true;
        } catch (Throwable $e) {
            log_message('error', 'Evolution_client::logout_instance - ' . $e->getMessage());

            return false;
        }
    }

    /**
     * Send an appointment reminder via WhatsApp.
     *
     * @param array $appointment Appointment data
     * @param array $customer    Customer (patient) data
     * @param array $service     Service data
     * @param array $provider    Provider (psychologist) data
     *
     * @return bool
     */
    public function send_appointment_reminder(
        array $appointment,
        array $customer,
        array $service,
        array $provider,
    ): bool {
        $instance = $provider['settings']['evolution_instance'] ?? null;

        if (empty($instance)) {
            return false;
        }

        $phone = $customer['phone_number'] ?? '';

        if (empty($phone)) {
            return false;
        }

        $start    = new DateTime($appointment['start_datetime']);
        $day      = $start->format('d/m/Y');
        $time     = $start->format('H:i');
        $weekdays = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
        $weekday  = $weekdays[(int) $start->format('w')];

        $provider_name = $provider['first_name'] . ' ' . $provider['last_name'];
        $patient_name  = $customer['first_name'];

        $location     = !empty($appointment['meeting_link'])
            ? "\n🔗 Link: " . $appointment['meeting_link']
            : (!empty($appointment['location']) ? "\n📍 Local: " . $appointment['location'] : '');

        $reschedule_link = site_url('booking/reschedule/' . $appointment['hash']);

        $message = "🗓️ *Sessão Confirmada*\n\n"
            . "Olá, {$patient_name}!\n\n"
            . "Sua consulta com {$provider_name} foi confirmada:\n\n"
            . "📅 {$weekday}, {$day} às {$time}"
            . $location . "\n\n"
            . "Para reagendar: {$reschedule_link}\n\n"
            . "Até breve! 🌿";

        return $this->send_text($instance, $phone, $message);
    }

    /**
     * Send an appointment cancellation notice via WhatsApp.
     *
     * @param array  $appointment        Appointment data
     * @param array  $customer           Customer data
     * @param array  $service            Service data
     * @param array  $provider           Provider data
     * @param string $cancellation_reason Optional reason
     *
     * @return bool
     */
    public function send_appointment_cancelled(
        array $appointment,
        array $customer,
        array $service,
        array $provider,
        string $cancellation_reason = '',
    ): bool {
        $instance = $provider['settings']['evolution_instance'] ?? null;

        if (empty($instance)) {
            return false;
        }

        $phone = $customer['phone_number'] ?? '';

        if (empty($phone)) {
            return false;
        }

        $start         = new DateTime($appointment['start_datetime']);
        $day           = $start->format('d/m/Y');
        $time          = $start->format('H:i');
        $provider_name = $provider['first_name'] . ' ' . $provider['last_name'];
        $patient_name  = $customer['first_name'];

        $booking_link = site_url('booking');

        $reason_text = !empty($cancellation_reason)
            ? "\n_Motivo: {$cancellation_reason}_\n"
            : '';

        $message = "❌ *Sessão Cancelada*\n\n"
            . "Olá, {$patient_name}.\n\n"
            . "Sua consulta de {$day} às {$time} com {$provider_name} foi cancelada."
            . $reason_text . "\n"
            . "Para reagendar: {$booking_link}\n\n";

        return $this->send_text($instance, $phone, $message);
    }

    /**
     * Normalize a phone number to E.164 format (digits only).
     *
     * @param string $phone
     *
     * @return string
     */
    private function normalize_phone(string $phone): string
    {
        // Remove all non-digits
        $digits = preg_replace('/\D/', '', $phone);

        // If Brazilian number without country code, add 55
        if (strlen($digits) === 11 || strlen($digits) === 10) {
            $digits = '55' . $digits;
        }

        return $digits;
    }

    /**
     * Perform an HTTP request to the Evolution GO API.
     *
     * @param string     $method  HTTP method (GET, POST, DELETE)
     * @param string     $path    API endpoint path (e.g. /instance/create)
     * @param array|null $body    JSON body for POST requests
     *
     * @return array Decoded JSON response
     *
     * @throws RuntimeException On HTTP or JSON error
     */
    private function request(string $method, string $path, ?array $body = null): array
    {
        if (empty($this->base_url)) {
            throw new RuntimeException('Evolution GO: base_url not configured.');
        }

        $url = $this->base_url . $path;

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 15,
            CURLOPT_HTTPHEADER     => [
                'apikey: ' . $this->api_key,
                'Content-Type: application/json',
                'Accept: application/json',
            ],
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        switch (strtoupper($method)) {
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body ?? []));
                break;

            case 'DELETE':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;

            case 'GET':
            default:
                // Default is GET
                break;
        }

        $raw      = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error    = curl_error($ch);

        curl_close($ch);

        if ($error) {
            throw new RuntimeException('Evolution GO cURL error: ' . $error);
        }

        $decoded = json_decode($raw, true);

        if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException('Evolution GO: Invalid JSON response (HTTP ' . $http_code . '): ' . $raw);
        }

        return $decoded ?? [];
    }
}
