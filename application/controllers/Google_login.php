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
 * Google Login controller.
 *
 * Handles the OAuth flow for login and registration via Google.
 *
 * @package Controllers
 */
class Google_login extends EA_Controller
{
    /**
     * Google_login constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('google_sync');
        $this->load->model('providers_model');
        $this->load->model('settings_model');
    }

    /**
     * Redirect to Google OAuth consent screen.
     */
    public function redirect(): void
    {
        // Store referer to know where to redirect after login (e.g. login page or user settings)
        $referer = $this->input->server('HTTP_REFERER') ?: site_url('login');
        
        $action = $this->input->get('action') ?: 'login';
        
        $state = json_encode([
            'referer' => $referer,
            'action'  => $action
        ]);

        $this->google_sync->set_redirect_uri(site_url('google_login/callback'));
        $url = $this->google_sync->get_auth_url(base64_encode($state));
        redirect($url);
    }

    /**
     * OAuth callback for login and registration.
     */
    public function callback(): void
    {
        $state_encoded = $this->input->get('state');
        $code          = $this->input->get('code');

        if (empty($code)) {
            // User cancelled or error
            redirect('login');
            return;
        }

        $state   = $state_encoded ? json_decode(base64_decode($state_encoded), true) : [];
        $action  = $state['action'] ?? 'login';
        $referer = $state['referer'] ?? site_url('calendar');

        $this->google_sync->set_redirect_uri(site_url('google_login/callback'));
        
        try {
            $token = $this->google_sync->authenticate($code);
            $user_info = $this->google_sync->get_user_info($token['access_token']);
        } catch (Throwable $e) {
            log_message('error', 'Google Login Error: ' . $e->getMessage());
            redirect('login?error=auth_failed');
            return;
        }

        $email = $user_info['email'];
        $google_id = $user_info['google_id'];

        // Find user by email
        $user_data = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user_data) {
            // User exists! Link Google ID if not already linked
            $settings = $this->db->get_where('user_settings', ['id_users' => $user_data['id']])->row_array();
            
            if (empty($settings['google_account_id']) || $settings['google_account_id'] !== $google_id) {
                if ($settings) {
                    $this->db->update('user_settings', ['google_account_id' => $google_id], ['id_users' => $user_data['id']]);
                } else {
                    $this->db->insert('user_settings', [
                        'id_users' => $user_data['id'],
                        'google_account_id' => $google_id
                    ]);
                }
            }

            // Also save token if we don't have one for calendar sync
            if (empty($settings['google_token']) && isset($token['refresh_token'])) {
                $this->db->update('user_settings', ['google_token' => json_encode($token)], ['id_users' => $user_data['id']]);
            }

            // Start session
            $this->session->sess_regenerate(true);
            
            $user_data['privileges'] = $this->db->get_where('roles', ['id' => $user_data['id_roles']])->row_array();
            
            // Format session data matching EA_Accounts::check_login
            $session_data = [
                'user_id' => $user_data['id'],
                'user_email' => $user_data['email'],
                'role_slug' => $user_data['privileges']['slug'],
                'privileges' => $user_data['privileges'],
            ];
            
            session($session_data);
            
            log_message('info', 'Successful Google login for user: ' . $email . ' from IP: ' . $this->input->ip_address());
            
            redirect($referer);
        } else {
            // User does not exist, redirect to registration
            // Store google info in session temporarily
            $this->session->set_userdata('google_register_info', $user_info);
            $this->session->set_userdata('google_register_token', $token);
            
            redirect('register/complete_google');
        }
    }
}
