<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * DoutPsi - Open Source Web Scheduler
 *
 * @package     DoutPsi
 * @author      A.Tselegidis <contato@doutpsi.com.br>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://DoutPsi.org
 * @since       v1.4.0
 * ---------------------------------------------------------------------------- */

class Migration_Add_id_caldav_calendar_column_to_appointments_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('id_caldav_calendar', 'appointments')) {
            $fields = [
                'id_caldav_calendar' => [
                    'type' => 'TEXT',
                    'null' => null,
                    'after' => 'id_google_calendar',
                ],
            ];

            $this->dbforge->add_column('appointments', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('id_caldav_calendar', 'appointments')) {
            $this->dbforge->drop_column('appointments', 'id_caldav_calendar');
        }
    }
}
