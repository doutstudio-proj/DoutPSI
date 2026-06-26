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
 * WhatsApp settings controller.
 *
 * Handles the configuration of WhatsApp (Evolution GO) by the provider.
 *
 * @package Controllers
 */
class Whatsapp_settings extends EA_Controller
{
    /**
     * Whatsapp_settings constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Only providers and admins can access this
        if (session('role_slug') !== DB_SLUG_PROVIDER && session('role_slug') !== DB_SLUG_ADMIN) {
            abort(403, 'Forbidden');
        }

        $this->load->model('providers_model');
        $this->load->library('evolution_client');
    }

    /**
     * Render the WhatsApp settings page.
     */
    public function index(): void
    {
        method('get');

        $provider_id = session('user_id');
        $instance_name = $this->providers_model->get_setting($provider_id, 'evolution_instance');
        $notifications = filter_var($this->providers_model->get_setting($provider_id, 'whatsapp_notifications'), FILTER_VALIDATE_BOOLEAN);
        $connection_state = 'unconfigured';
        $qr_code = '';

        if ($this->evolution_client->is_configured()) {
            if (!empty($instance_name)) {
                $connection_state = $this->evolution_client->get_connection_state($instance_name);
            } else {
                $connection_state = 'no_instance';
            }
        }

        html_vars([
            'page_title' => 'WhatsApp - ' . setting('company_name'),
            'instance_name' => $instance_name,
            'notifications_enabled' => $notifications,
            'connection_state' => $connection_state,
            'is_configured' => $this->evolution_client->is_configured()
        ]);

        $this->load->view('pages/whatsapp_settings');
    }

    /**
     * Auto-provisioning: Provider creates their own instance.
     */
    public function provision(): void
    {
        try {
            method('post');

            if (!$this->evolution_client->is_configured()) {
                throw new RuntimeException('O serviço de WhatsApp não está configurado. Contate o administrador.');
            }

            $provider_id = session('user_id');
            $instance_name = $this->evolution_client->generate_instance_name($provider_id);

            if (!$this->evolution_client->create_instance($instance_name)) {
                throw new RuntimeException('Não foi possível criar a instância. Tente novamente mais tarde.');
            }

            $this->providers_model->set_settings($provider_id, [
                'evolution_instance' => $instance_name,
                'whatsapp_notifications' => 1
            ]);

            json_response(['success' => true, 'message' => 'Instância criada com sucesso!']);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Get QR Code as base64.
     */
    public function qr_code(): void
    {
        try {
            method('get');

            $provider_id = session('user_id');
            $instance_name = $this->providers_model->get_setting($provider_id, 'evolution_instance');

            if (empty($instance_name)) {
                throw new RuntimeException('Instância não encontrada.');
            }

            $qr = $this->evolution_client->get_qr_code($instance_name);

            json_response([
                'success' => true,
                'qr' => $qr
            ]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Polling status.
     */
    public function status(): void
    {
        try {
            method('get');

            $provider_id = session('user_id');
            $instance_name = $this->providers_model->get_setting($provider_id, 'evolution_instance');

            if (empty($instance_name)) {
                json_response(['success' => true, 'status' => 'no_instance']);
                return;
            }

            $state = $this->evolution_client->get_connection_state($instance_name);

            json_response([
                'success' => true,
                'status' => $state
            ]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Disconnect the WhatsApp session.
     */
    public function disconnect(): void
    {
        try {
            method('post');

            $provider_id = session('user_id');
            $instance_name = $this->providers_model->get_setting($provider_id, 'evolution_instance');

            if (empty($instance_name)) {
                throw new RuntimeException('Instância não encontrada.');
            }

            $this->evolution_client->logout_instance($instance_name);

            json_response(['success' => true, 'message' => 'Desconectado com sucesso.']);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Toggle notifications on/off.
     */
    public function toggle_notifications(): void
    {
        try {
            method('post');
            check('enabled', 'string');

            $provider_id = session('user_id');
            $enabled = filter_var(request('enabled'), FILTER_VALIDATE_BOOLEAN) ? 1 : 0;

            $this->providers_model->set_settings($provider_id, [
                'whatsapp_notifications' => $enabled
            ]);

            json_response(['success' => true]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }
}
