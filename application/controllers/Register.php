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
 * Register controller.
 *
 * Handles the registration of new psychologists (providers).
 *
 * @package Controllers
 */
class Register extends EA_Controller
{
    /**
     * Register constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('providers_model');
        $this->load->model('settings_model');
    }

    /**
     * Render the registration page.
     */
    public function index(): void
    {
        method('get');

        if (session('user_id')) {
            redirect('calendar');
            return;
        }

        html_vars([
            'page_title' => 'Cadastro de Psicólogo',
            'base_url' => config('base_url'),
            'company_name' => setting('company_name'),
            'require_captcha' => setting('require_captcha'),
            'altcha_enabled' => setting('altcha_enabled'),
        ]);

        $this->load->view('pages/register');
    }

    /**
     * Complete Google Registration.
     * Shows the registration form pre-filled with Google data.
     */
    public function complete_google(): void
    {
        method('get');

        if (session('user_id')) {
            redirect('calendar');
            return;
        }

        $google_info = $this->session->userdata('google_register_info');
        
        if (!$google_info) {
            redirect('register');
            return;
        }

        html_vars([
            'page_title' => 'Complete seu Cadastro',
            'base_url' => config('base_url'),
            'company_name' => setting('company_name'),
            'google_info' => $google_info,
            'require_captcha' => '0', // skip captcha if coming from google
        ]);

        $this->load->view('pages/register');
    }

    /**
     * Perform the registration logic.
     */
    public function perform(): void
    {
        try {
            method('post');

            if (session('user_id')) {
                abort(403, 'Already logged in');
            }

            check('first_name', 'string');
            check('last_name', 'string');
            check('email', 'string');
            check('crp', 'string');
            check('specialty', 'string');
            check('phone_number', 'string');
            
            $google_info = $this->session->userdata('google_register_info');
            $google_token = $this->session->userdata('google_register_token');
            
            $email = request('email');
            
            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException('E-mail inválido.');
            }

            // Check if email exists
            if ($this->db->get_where('users', ['email' => $email])->num_rows() > 0) {
                throw new InvalidArgumentException('Este e-mail já está em uso.');
            }

            if (!$google_info) {
                check('password', 'string');
                $password = request('password');
                if (strlen($password) < 6) {
                    throw new InvalidArgumentException('A senha deve ter no mínimo 6 caracteres.');
                }
            } else {
                // Generate a random password for Google users so they can still reset it if they want
                $password = bin2hex(random_bytes(16));
                
                // Force email from google info to prevent tampering
                $email = $google_info['email'];
            }

            // Prepare provider data
            $provider = [
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'email' => $email,
                'phone_number' => request('phone_number'),
                'mobile_number' => request('phone_number'),
                'custom_field_1' => request('crp'),
                'custom_field_2' => request('specialty'),
                'timezone' => 'America/Sao_Paulo',
                'services' => [],
                'settings' => [
                    'username' => $email,
                    'password' => $password,
                    'working_plan' => '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"12:00","end":"13:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"12:00","end":"13:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"12:00","end":"13:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"12:00","end":"13:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"12:00","end":"13:00"}]},"saturday":null,"sunday":null}',
                    'notifications' => true,
                    'google_sync' => $google_info ? 1 : 0,
                    'google_calendar' => '',
                    'sync_past_days' => 30,
                    'sync_future_days' => 90,
                ]
            ];

            if ($google_info) {
                $provider['settings']['google_account_id'] = $google_info['google_id'];
                if ($google_token) {
                    $provider['settings']['google_token'] = json_encode($google_token);
                }
            }

            $provider_id = $this->providers_model->save($provider);

            // Clean up session
            $this->session->unset_userdata('google_register_info');
            $this->session->unset_userdata('google_register_token');

            // Log them in immediately
            $user_data = $this->db->get_where('users', ['id' => $provider_id])->row_array();
            $user_data['privileges'] = $this->db->get_where('roles', ['id' => $user_data['id_roles']])->row_array();
            
            $this->session->sess_regenerate(true);
            
            $session_data = [
                'user_id' => $user_data['id'],
                'user_email' => $user_data['email'],
                'role_slug' => $user_data['privileges']['slug'],
                'privileges' => $user_data['privileges'],
            ];
            
            session($session_data);

            json_response([
                'success' => true,
                'redirect' => site_url('calendar')
            ]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }
}
