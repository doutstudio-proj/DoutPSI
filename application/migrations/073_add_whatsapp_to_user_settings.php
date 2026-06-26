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

class Migration_Add_whatsapp_to_user_settings extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('evolution_instance', 'user_settings')) {
            $fields = [
                'evolution_instance' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                    'null'       => true,
                    'after'      => 'caldav_calendar',
                ],
            ];

            $this->dbforge->add_column('user_settings', $fields);
        }

        if (!$this->db->field_exists('whatsapp_notifications', 'user_settings')) {
            $fields = [
                'whatsapp_notifications' => [
                    'type'       => 'TINYINT',
                    'constraint' => '4',
                    'default'    => 0,
                    'after'      => 'evolution_instance',
                ],
            ];

            $this->dbforge->add_column('user_settings', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('evolution_instance', 'user_settings')) {
            $this->dbforge->drop_column('user_settings', 'evolution_instance');
        }

        if ($this->db->field_exists('whatsapp_notifications', 'user_settings')) {
            $this->dbforge->drop_column('user_settings', 'whatsapp_notifications');
        }
    }
}
