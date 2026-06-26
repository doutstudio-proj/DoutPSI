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
 * Patient records model.
 *
 * Handles database operations for patient records (prontuários).
 * Includes automatic encryption/decryption of the content using AES-256-CBC.
 *
 * @package Models
 */
class Patient_records_model extends EA_Model
{
    /**
     * @var string
     */
    protected string $table_name = 'patient_records';

    /**
     * @var string
     */
    private string $encryption_key = '';

    /**
     * Patient_records_model constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('settings_model');
        
        $key = setting('record_encryption_key');
        if (!empty($key)) {
            // Key is stored as hex
            $this->encryption_key = hex2bin($key);
        }
    }

    /**
     * Get a specific record.
     * 
     * @param int $id The record ID.
     * @param int $provider_id The provider ID (for authorization).
     * 
     * @return array
     */
    public function find(int $id, int $provider_id): array
    {
        $record = $this->db->get_where('patient_records', [
            'id' => $id,
            'id_users_provider' => $provider_id
        ])->row_array();

        if (empty($record)) {
            return [];
        }

        $record['content'] = $this->decrypt($record['content'], $record['content_iv']);

        return $record;
    }

    /**
     * Get records for a specific customer/provider pair.
     *
     * @param int $customer_id
     * @param int $provider_id
     * @param string|null $type Optional type filter
     *
     * @return array
     */
    public function get_by_customer(int $customer_id, int $provider_id, ?string $type = null): array
    {
        $this->db->where('id_users_customer', $customer_id);
        $this->db->where('id_users_provider', $provider_id);
        
        if (!empty($type)) {
            $this->db->where('record_type', $type);
        }

        $this->db->order_by('record_date', 'DESC');
        $this->db->order_by('created_at', 'DESC');
        
        $records = $this->db->get('patient_records')->result_array();

        foreach ($records as &$record) {
            $record['content'] = $this->decrypt($record['content'], $record['content_iv']);
        }

        return $records;
    }

    /**
     * Save a new patient record.
     * Records are IMMUTABLE. This will always perform an INSERT.
     *
     * @param array $record The record data.
     *
     * @return int The ID of the inserted record.
     *
     * @throws RuntimeException
     */
    public function save(array $record): int
    {
        // Enforce required fields
        $required = ['id_users_provider', 'id_users_customer', 'record_date', 'record_type', 'content'];
        foreach ($required as $field) {
            if (!isset($record[$field]) || empty($record[$field])) {
                throw new InvalidArgumentException("Field {$field} is required.");
            }
        }

        // Encrypt content
        $encrypted = $this->encrypt($record['content']);
        $record['content'] = $encrypted['ciphertext'];
        $record['content_iv'] = $encrypted['iv'];

        $record['created_at'] = date('Y-m-d H:i:s');

        // Always insert, never update
        if (!$this->db->insert('patient_records', $record)) {
            throw new RuntimeException('Could not insert patient record.');
        }

        return $this->db->insert_id();
    }
    
    /**
     * Override update to prevent modifications (Immutability).
     */
    protected function update(array $record): int
    {
        throw new RuntimeException('Patient records are immutable and cannot be updated.');
    }

    /**
     * Encrypt a plaintext string using AES-256-CBC.
     *
     * @param string $plaintext
     * @return array ['ciphertext' => base64, 'iv' => hex]
     */
    private function encrypt(string $plaintext): array
    {
        if (empty($this->encryption_key)) {
            throw new RuntimeException('Record encryption key is not configured.');
        }

        $iv = random_bytes(16); // 128-bit IV for AES
        $ciphertext = openssl_encrypt($plaintext, 'AES-256-CBC', $this->encryption_key, 0, $iv);

        if ($ciphertext === false) {
            throw new RuntimeException('Failed to encrypt record content.');
        }

        return [
            'ciphertext' => base64_encode($ciphertext),
            'iv' => bin2hex($iv)
        ];
    }

    /**
     * Decrypt a ciphertext string using AES-256-CBC.
     *
     * @param string $ciphertext Base64 encoded ciphertext
     * @param string $iv_hex Hex encoded IV
     * @return string
     */
    private function decrypt(string $ciphertext, string $iv_hex): string
    {
        if (empty($this->encryption_key)) {
            throw new RuntimeException('Record encryption key is not configured.');
        }

        $iv = hex2bin($iv_hex);
        $plaintext = openssl_decrypt(base64_decode($ciphertext), 'AES-256-CBC', $this->encryption_key, 0, $iv);

        if ($plaintext === false) {
            // Depending on the use case, you might want to return a fallback string or throw an error.
            return '[Erro ao decriptar o conteúdo. A chave pode estar incorreta.]';
        }

        return $plaintext;
    }
}
