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

class Migration_Add_provider_professional_fields extends EA_Migration
{
    /**
     * Upgrade method.
     *
     * Maps custom_field_1 as "CRP" and custom_field_2 as "Especialidade"
     * using the existing custom_field_label settings infrastructure.
     */
    public function up(): void
    {
        $settings = [
            [
                'name'  => 'custom_field_1_label',
                'value' => 'CRP',
            ],
            [
                'name'  => 'custom_field_2_label',
                'value' => 'Especialidade',
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
        $this->db->delete('settings', ['name' => 'custom_field_1_label']);
        $this->db->delete('settings', ['name' => 'custom_field_2_label']);
    }
}
