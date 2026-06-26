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

class Migration_Create_patient_records_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if ($this->db->table_exists('patient_records')) {
            return;
        }

        $this->dbforge->add_field([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_users_provider' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_users_customer' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'id_appointments' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
                'default'    => null,
            ],
            'record_date' => [
                'type' => 'DATE',
            ],
            'record_type' => [
                'type'       => 'ENUM',
                'constraint' => ['anamnese', 'sessao', 'evolucao', 'devolutiva', 'encaminhamento', 'outros'],
                'default'    => 'sessao',
            ],
            'content' => [
                'type' => 'LONGTEXT',
            ],
            'content_iv' => [
                'type'       => 'CHAR',
                'constraint' => 32,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => false,
            ],
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->add_key(['id_users_provider', 'id_users_customer']);
        $this->dbforge->add_key('record_date');

        $this->dbforge->create_table('patient_records');

        // Add foreign keys
        $this->db->query('
            ALTER TABLE patient_records
                ADD CONSTRAINT fk_pr_provider
                    FOREIGN KEY (id_users_provider) REFERENCES users(id) ON DELETE CASCADE,
                ADD CONSTRAINT fk_pr_customer
                    FOREIGN KEY (id_users_customer) REFERENCES users(id) ON DELETE CASCADE,
                ADD CONSTRAINT fk_pr_appointment
                    FOREIGN KEY (id_appointments) REFERENCES appointments(id) ON DELETE SET NULL
        ');
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->table_exists('patient_records')) {
            $this->db->query('ALTER TABLE patient_records DROP FOREIGN KEY fk_pr_provider');
            $this->db->query('ALTER TABLE patient_records DROP FOREIGN KEY fk_pr_customer');
            $this->db->query('ALTER TABLE patient_records DROP FOREIGN KEY fk_pr_appointment');
            $this->dbforge->drop_table('patient_records');
        }
    }
}
