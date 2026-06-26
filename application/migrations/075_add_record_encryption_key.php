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

class Migration_Add_record_encryption_key extends CI_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        $existing = $this->db->get_where('settings', ['name' => 'record_encryption_key'])->row_array();

        if (empty($existing)) {
            // Generate a random 32-byte key (256-bit) encoded as hex
            $key = bin2hex(random_bytes(32));

            $this->db->insert('settings', [
                'name'  => 'record_encryption_key',
                'value' => $key,
            ]);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        $this->db->delete('settings', ['name' => 'record_encryption_key']);
    }
}
