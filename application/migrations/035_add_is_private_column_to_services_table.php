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

class Migration_Add_is_private_column_to_services_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('is_private', 'services')) {
            $fields = [
                'is_private' => [
                    'type' => 'TINYINT',
                    'constraint' => '4',
                    'default' => '0',
                    'after' => 'attendants_number',
                ],
            ];

            $this->dbforge->add_column('services', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('is_private', 'services')) {
            $this->dbforge->drop_column('services', 'is_private');
        }
    }
}
