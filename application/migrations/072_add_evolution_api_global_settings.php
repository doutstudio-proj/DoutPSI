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

class Migration_Add_evolution_api_global_settings extends CI_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        $settings = [
            [
                'name'  => 'evolution_api_url',
                'value' => '',
            ],
            [
                'name'  => 'evolution_api_global_key',
                'value' => '',
            ],
            [
                'name'  => 'evolution_whatsapp_enabled',
                'value' => '0',
            ],
        ];

        foreach ($settings as $setting) {
            $existing = $this->db->get_where('settings', ['name' => $setting['name']])->row_array();

            if (empty($existing)) {
                $this->db->insert('settings', $setting);
            }
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        $names = ['evolution_api_url', 'evolution_api_global_key', 'evolution_whatsapp_enabled'];

        foreach ($names as $name) {
            $this->db->delete('settings', ['name' => $name]);
        }
    }
}
