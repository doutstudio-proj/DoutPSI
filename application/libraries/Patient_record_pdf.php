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
 * Patient record PDF library.
 *
 * Generates structured PDF exports of patient records (prontuários)
 * compliant with CFP Resolution 001/2009 requirements.
 *
 * Requires mPDF: composer require mpdf/mpdf
 *
 * @package Libraries
 */
class Patient_record_pdf
{
    /**
     * @var EA_Controller|CI_Controller
     */
    protected EA_Controller|CI_Controller $CI;

    /**
     * Patient_record_pdf constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance();
    }

    /**
     * Generate a PDF document for a patient's records.
     *
     * @param array $records  Patient record entries (decrypted)
     * @param array $customer Customer (patient) data
     * @param array $provider Provider (psychologist) data
     *
     * @return string PDF binary content
     *
     * @throws RuntimeException If mPDF is not installed
     */
    public function generate(array $records, array $customer, array $provider): string
    {
        if (!class_exists('\Mpdf\Mpdf')) {
            throw new RuntimeException(
                'mPDF is not installed. Run: composer require mpdf/mpdf'
            );
        }

        $mpdf = new \Mpdf\Mpdf([
            'mode'           => 'utf-8',
            'format'         => 'A4',
            'margin_top'     => 20,
            'margin_bottom'  => 20,
            'margin_left'    => 20,
            'margin_right'   => 20,
            'default_font'   => 'dejavusans',
        ]);

        $mpdf->SetTitle('Prontuário — ' . $customer['first_name'] . ' ' . $customer['last_name']);
        $mpdf->SetAuthor($provider['first_name'] . ' ' . $provider['last_name']);
        $mpdf->SetCreator('DoutPSI');

        $html = $this->build_html($records, $customer, $provider);

        $mpdf->WriteHTML($html);

        return $mpdf->Output('', 'S');
    }

    /**
     * Build the HTML content for the PDF.
     *
     * @param array $records
     * @param array $customer
     * @param array $provider
     *
     * @return string
     */
    private function build_html(array $records, array $customer, array $provider): string
    {
        $patient_name    = htmlspecialchars($customer['first_name'] . ' ' . $customer['last_name']);
        $patient_phone   = htmlspecialchars($customer['phone_number'] ?? '—');
        $patient_email   = htmlspecialchars($customer['email'] ?? '—');
        $provider_name   = htmlspecialchars($provider['first_name'] . ' ' . $provider['last_name']);
        $provider_crp    = htmlspecialchars($provider['custom_field_1'] ?? '—');
        $provider_spec   = htmlspecialchars($provider['custom_field_2'] ?? '—');
        $export_date     = date('d/m/Y H:i');
        $company_name    = htmlspecialchars(setting('company_name') ?: 'DoutPSI');

        $type_labels = [
            'anamnese'        => 'Anamnese',
            'sessao'          => 'Sessão',
            'evolucao'        => 'Evolução',
            'devolutiva'      => 'Devolutiva',
            'encaminhamento'  => 'Encaminhamento',
            'outros'          => 'Outros',
        ];

        $type_colors = [
            'anamnese'        => '#2196F3',
            'sessao'          => '#4CAF50',
            'evolucao'        => '#FF9800',
            'devolutiva'      => '#9C27B0',
            'encaminhamento'  => '#F44336',
            'outros'          => '#607D8B',
        ];

        $records_html = '';

        if (empty($records)) {
            $records_html = '<p style="color:#666;text-align:center;margin-top:30px;">Nenhum registro encontrado.</p>';
        } else {
            // Group by year-month
            $grouped = [];

            foreach ($records as $record) {
                $month_key = date('Y-m', strtotime($record['record_date']));
                $grouped[$month_key][] = $record;
            }

            krsort($grouped);

            foreach ($grouped as $month_key => $month_records) {
                $month_label = strftime('%B %Y', strtotime($month_key . '-01'));
                $month_label = ucfirst($month_label);

                $records_html .= '
                    <div style="margin-top:20px;">
                        <div style="background:#f5f5f5;padding:6px 12px;border-left:4px solid #1a73e8;margin-bottom:10px;">
                            <strong style="color:#333;font-size:13px;">' . htmlspecialchars($month_label) . '</strong>
                        </div>';

                foreach ($month_records as $record) {
                    $date    = date('d/m/Y', strtotime($record['record_date']));
                    $type    = $record['record_type'];
                    $label   = $type_labels[$type] ?? ucfirst($type);
                    $color   = $type_colors[$type] ?? '#607D8B';
                    $content = nl2br(htmlspecialchars($record['content']));

                    $records_html .= '
                        <div style="border:1px solid #e0e0e0;border-radius:4px;margin-bottom:12px;page-break-inside:avoid;">
                            <div style="background:#fafafa;padding:8px 12px;border-bottom:1px solid #e0e0e0;display:flex;justify-content:space-between;">
                                <span style="font-weight:bold;color:#333;">' . $date . '</span>
                                <span style="background:' . $color . ';color:#fff;padding:2px 10px;border-radius:12px;font-size:11px;">' . $label . '</span>
                            </div>
                            <div style="padding:12px;font-size:12px;line-height:1.6;color:#333;">
                                ' . $content . '
                            </div>
                        </div>';
                }

                $records_html .= '</div>';
            }
        }

        return '
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<style>
    body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #333; margin: 0; }
    .header { border-bottom: 2px solid #1a73e8; padding-bottom: 12px; margin-bottom: 20px; }
    .header-top { display: flex; justify-content: space-between; align-items: flex-start; }
    .logo-area h1 { font-size: 18px; color: #1a73e8; margin: 0 0 4px 0; }
    .logo-area p { margin: 0; font-size: 11px; color: #666; }
    .confidential { background: #FFF3E0; border: 1px solid #FF9800; padding: 8px 12px; border-radius: 4px; font-size: 10px; color: #E65100; text-align: center; margin: 12px 0; }
    .info-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin: 16px 0; }
    .info-box { background: #f9f9f9; border: 1px solid #e0e0e0; border-radius: 4px; padding: 10px 14px; }
    .info-box h3 { font-size: 11px; color: #1a73e8; margin: 0 0 6px 0; text-transform: uppercase; letter-spacing: 0.5px; }
    .info-box p { margin: 2px 0; font-size: 11px; }
    .info-box p strong { color: #555; }
    .section-title { font-size: 14px; font-weight: bold; color: #333; border-bottom: 1px solid #ddd; padding-bottom: 6px; margin: 20px 0 10px 0; }
    .footer { margin-top: 30px; border-top: 1px solid #ddd; padding-top: 12px; font-size: 10px; color: #888; text-align: center; }
    .signature { text-align: center; margin-top: 40px; }
    .signature-line { border-top: 1px solid #333; width: 250px; margin: 0 auto 6px; }
    .signature p { font-size: 11px; margin: 2px 0; }
</style>
</head>
<body>

<div class="header">
    <div class="header-top">
        <div class="logo-area">
            <h1>' . $company_name . '</h1>
            <p>Prontuário Eletrônico do Paciente</p>
        </div>
        <div style="text-align:right;font-size:10px;color:#666;">
            <p>Emitido em: ' . $export_date . '</p>
            <p>Total de registros: ' . count($records) . '</p>
        </div>
    </div>
</div>

<div class="confidential">
    ⚠️ <strong>DOCUMENTO CONFIDENCIAL</strong> — Uso restrito ao psicólogo responsável.<br>
    Conforme Resolução CFP nº 001/2009 e Lei nº 13.709/2018 (LGPD). Retenção mínima: 5 anos.
</div>

<div class="info-grid">
    <div class="info-box">
        <h3>Paciente</h3>
        <p><strong>Nome:</strong> ' . $patient_name . '</p>
        <p><strong>Telefone:</strong> ' . $patient_phone . '</p>
        <p><strong>E-mail:</strong> ' . $patient_email . '</p>
    </div>
    <div class="info-box">
        <h3>Psicólogo Responsável</h3>
        <p><strong>Nome:</strong> ' . $provider_name . '</p>
        <p><strong>CRP:</strong> ' . $provider_crp . '</p>
        <p><strong>Especialidade:</strong> ' . $provider_spec . '</p>
    </div>
</div>

<div class="section-title">Histórico de Registros</div>

' . $records_html . '

<div class="signature">
    <br><br>
    <div class="signature-line"></div>
    <p><strong>' . $provider_name . '</strong></p>
    <p>CRP ' . $provider_crp . '</p>
</div>

<div class="footer">
    <p>Documento gerado por ' . $company_name . ' em ' . $export_date . ' · Todos os registros são criptografados e imutáveis.</p>
</div>

</body>
</html>';
    }
}
