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

class Migration_Add_google_account_id_to_user_settings extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('google_account_id', 'user_settings')) {
            $fields = [
                'google_account_id' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => true,
                    'after'      => 'google_token',
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
        if ($this->db->field_exists('google_account_id', 'user_settings')) {
            $this->dbforge->drop_column('user_settings', 'google_account_id');
        }
    }
}
