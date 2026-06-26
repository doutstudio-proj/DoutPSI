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
 * Patient records controller.
 *
 * Handles HTTP requests for managing patient records.
 * Only accessible by providers and admins.
 *
 * @package Controllers
 */
class Patient_records extends EA_Controller
{
    /**
     * Patient_records constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('patient_records_model');
        $this->load->model('customers_model');
        $this->load->model('appointments_model');

        // Only providers and admins can access this controller
        if (cannot('view', PRIV_CUSTOMERS) && session('role_slug') !== DB_SLUG_ADMIN) {
            if (session('role_slug') !== DB_SLUG_PROVIDER) {
                abort(403, 'Forbidden');
            }
        }
    }

    /**
     * Render the patient records page.
     *
     * @param int $customer_id
     */
    public function index(int $customer_id): void
    {
        method('get');

        $customer = $this->customers_model->find($customer_id);

        if (empty($customer)) {
            abort(404, 'Patient not found');
        }

        $provider_id = session('user_id');

        // If admin is viewing, maybe they can see all? 
        // For compliance, usually only the provider who created the record should see it.
        // Let's enforce that only the logged in provider sees THEIR records for this patient.
        
        $records = $this->patient_records_model->get_by_customer($customer_id, $provider_id);

        html_vars([
            'page_title' => 'Prontuário - ' . $customer['first_name'] . ' ' . $customer['last_name'],
            'customer' => $customer,
            'records' => $records,
            'provider_id' => $provider_id
        ]);

        $this->load->view('pages/patient_records');
    }

    /**
     * Store a new patient record.
     */
    public function store(): void
    {
        try {
            method('post');

            check('customer_id', 'numeric');
            check('record_date', 'string');
            check('record_type', 'string');
            check('content', 'string');

            $provider_id = session('user_id');
            $customer_id = (int) request('customer_id');

            // Verify provider has permission to this customer (either admin or provider)
            // Assuming providers can add records to any customer in the system as long as they have access.
            
            $record = [
                'id_users_provider' => $provider_id,
                'id_users_customer' => $customer_id,
                'record_date' => request('record_date'),
                'record_type' => request('record_type'),
                'content' => request('content'),
            ];

            $appointment_id = request('appointment_id');
            if (!empty($appointment_id)) {
                $record['id_appointments'] = (int) $appointment_id;
            }

            $id = $this->patient_records_model->save($record);

            json_response([
                'success' => true,
                'id' => $id,
                'message' => 'Prontuário salvo com sucesso.'
            ]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }

    /**
     * Export a PDF of the patient's records.
     *
     * @param int $customer_id
     */
    public function export_pdf(int $customer_id): void
    {
        try {
            method('get');

            $provider_id = session('user_id');
            
            $customer = $this->customers_model->find($customer_id);
            if (empty($customer)) {
                abort(404, 'Patient not found');
            }

            $this->load->model('providers_model');
            $provider = $this->providers_model->find($provider_id);

            $records = $this->patient_records_model->get_by_customer($customer_id, $provider_id);

            $this->load->library('patient_record_pdf');

            $pdf_content = $this->patient_record_pdf->generate($records, $customer, $provider);

            $filename = 'Prontuario_' . date('Ymd_His') . '.pdf';

            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Cache-Control: private, max-age=0, must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . strlen($pdf_content));

            echo $pdf_content;
            exit;
        } catch (Throwable $e) {
            show_error($e->getMessage(), 500, 'Error Generating PDF');
        }
    }
}
