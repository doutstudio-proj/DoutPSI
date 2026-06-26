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
 * Evolution settings controller.
 *
 * Handles the configuration of Evolution GO settings by the admin.
 *
 * @package Controllers
 */
class Evolution_settings extends EA_Controller
{
    /**
     * Evolution_settings constructor.
     */
    public function __construct()
    {
        parent::__construct();

        // Only admins can access these settings
        if (session('role_slug') !== DB_SLUG_ADMIN) {
            abort(403, 'Forbidden');
        }

        $this->load->model('settings_model');
        $this->load->model('providers_model');
        $this->load->library('evolution_client');
    }

    /**
     * Render the settings page.
     */
    public function index(): void
    {
        method('get');

        $providers = $this->providers_model->get();

        // Fetch connection status for providers who have an instance
        foreach ($providers as &$provider) {
            $instance = $this->providers_model->get_setting($provider['id'], 'evolution_instance');
            $provider['evolution_instance'] = $instance;
            
            if (!empty($instance) && $this->evolution_client->is_configured()) {
                $provider['evolution_status'] = $this->evolution_client->get_connection_state($instance);
            } else {
                $provider['evolution_status'] = 'unconfigured';
            }
        }

        html_vars([
            'page_title' => 'Evolution GO / WhatsApp - ' . setting('company_name'),
            'evolution_api_url' => setting('evolution_api_url'),
            'evolution_api_global_key' => setting('evolution_api_global_key'),
            'providers' => $providers
        ]);

        $this->load->view('pages/evolution_settings');
    }

    /**
     * Save the settings.
     */
    public function save(): void
    {
        try {
            method('post');

            check('evolution_api_url', 'string');
            check('evolution_api_global_key', 'string');

            $this->settings_model->save([
                ['name' => 'evolution_api_url', 'value' => request('evolution_api_url')],
                ['name' => 'evolution_api_global_key', 'value' => request('evolution_api_global_key')]
            ]);

            json_response(['success' => true, 'message' => 'Configurações salvas com sucesso.']);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Create an instance for a provider.
     *
     * @param int $provider_id
     */
    public function create_instance(int $provider_id): void
    {
        try {
            method('post');

            if (!$this->evolution_client->is_configured()) {
                throw new RuntimeException('A API da Evolution não está configurada corretamente.');
            }

            $provider = $this->providers_model->find($provider_id);
            if (empty($provider)) {
                throw new InvalidArgumentException('Provider not found.');
            }

            $instance_name = $this->evolution_client->generate_instance_name($provider_id);

            // Attempt to create in Evolution GO
            if (!$this->evolution_client->create_instance($instance_name)) {
                throw new RuntimeException('Não foi possível criar a instância na Evolution API. Verifique os logs.');
            }

            // Save to provider settings
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
     * Remove an instance for a provider.
     *
     * @param int $provider_id
     */
    public function delete_instance(int $provider_id): void
    {
        try {
            method('post');

            if (!$this->evolution_client->is_configured()) {
                throw new RuntimeException('A API da Evolution não está configurada corretamente.');
            }

            $instance_name = $this->providers_model->get_setting($provider_id, 'evolution_instance');

            if (!empty($instance_name)) {
                $this->evolution_client->delete_instance($instance_name);
                
                $this->providers_model->set_settings($provider_id, [
                    'evolution_instance' => '',
                    'whatsapp_notifications' => 0
                ]);
            }

            json_response(['success' => true, 'message' => 'Instância removida com sucesso.']);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }
}
