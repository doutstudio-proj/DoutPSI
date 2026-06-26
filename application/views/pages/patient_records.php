<?php extend('layouts/backend_layout'); ?>

<?php section('content'); ?>

<div id="patient-records-page" class="container backend-page py-3">
    <div class="d-flex justify-content-between align-items-center border-bottom mb-4 py-2">
        <h4 class="mb-0 fw-light">
            <i class="fas fa-notes-medical me-2 text-primary"></i>
            Prontuário — <?= htmlspecialchars($customer['first_name'] . ' ' . $customer['last_name']) ?>
        </h4>

        <div>
            <a href="<?= site_url('customers') ?>" class="btn btn-outline-secondary me-2">
                <i class="fas fa-chevron-left me-2"></i> Voltar
            </a>
            <a href="<?= site_url('patient_records/export_pdf/' . $customer['id']) ?>" class="btn btn-outline-primary me-2" target="_blank">
                <i class="fas fa-file-pdf me-2"></i> Exportar PDF
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <!-- Timeline de Registros -->
            <h5 class="text-muted mb-4">Histórico de Registros</h5>
            
            <?php if (empty($records)): ?>
                <div class="alert alert-info py-2 small text-center">
                    Nenhum registro encontrado para este paciente.
                </div>
            <?php else: ?>
                <div class="timeline">
                    <?php 
                    $type_colors = [
                        'anamnese' => 'primary',
                        'sessao' => 'success',
                        'evolucao' => 'warning',
                        'devolutiva' => 'info',
                        'encaminhamento' => 'danger',
                        'outros' => 'secondary'
                    ];
                    
                    $current_month = '';
                    
                    foreach ($records as $record): 
                        $date = date('Y-m', strtotime($record['record_date']));
                        if ($date !== $current_month):
                            $current_month = $date;
                            // strftime is deprecated, using IntlDateFormatter for month name
                            $formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE, null, null, 'MMMM yyyy');
                            $month_name = ucfirst($formatter->format(new DateTime($current_month . '-01')));
                    ?>
                        <div class="bg-light px-3 py-1 fw-bold text-muted border-start border-4 border-primary mb-3">
                            <?= $month_name ?>
                        </div>
                    <?php endif; ?>
                    
                        <div class="card mb-3 shadow-sm border-0">
                            <div class="card-header bg-white d-flex justify-content-between align-items-center py-2">
                                <strong class="text-dark">
                                    <i class="far fa-calendar-alt me-1 text-muted"></i> 
                                    <?= date('d/m/Y', strtotime($record['record_date'])) ?>
                                </strong>
                                <?php $color = $type_colors[$record['record_type']] ?? 'secondary'; ?>
                                <span class="badge bg-<?= $color ?> rounded-pill px-3">
                                    <?= ucfirst($record['record_type']) ?>
                                </span>
                            </div>
                            <div class="card-body">
                                <div class="record-content small text-dark" style="white-space: pre-wrap;"><?= htmlspecialchars($record['content']) ?></div>
                            </div>
                            <div class="card-footer bg-white text-muted small text-end py-1 border-0">
                                Registrado em: <?= date('d/m/Y H:i', strtotime($record['created_at'])) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-5">
            <!-- Novo Registro -->
            <div class="card shadow-sm border-0 sticky-top" style="top: 20px;">
                <div class="card-header bg-white py-3 border-bottom-0">
                    <h5 class="mb-0 text-primary">Nova Entrada</h5>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning py-2 small d-none" id="record-error"></div>
                    
                    <form id="record-form">
                        <input type="hidden" name="customer_id" value="<?= $customer['id'] ?>">
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-medium small">Tipo de Registro</label>
                                <select name="record_type" class="form-select form-select-sm" required>
                                    <option value="sessao">Sessão</option>
                                    <option value="anamnese">Anamnese</option>
                                    <option value="evolucao">Evolução</option>
                                    <option value="devolutiva">Devolutiva</option>
                                    <option value="encaminhamento">Encaminhamento</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-medium small">Data Referência</label>
                                <input type="date" name="record_date" class="form-control form-control-sm" value="<?= date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-medium small d-flex justify-content-between">
                                Conteúdo
                                <span class="text-danger"><i class="fas fa-lock"></i> Criptografado</span>
                            </label>
                            <textarea name="content" class="form-control text-dark" rows="8" placeholder="Digite o conteúdo do prontuário aqui..." required></textarea>
                            <div class="form-text mt-2" style="font-size: 0.75rem;">
                                <strong>Atenção:</strong> De acordo com as resoluções do CFP, prontuários são documentos <strong>imutáveis</strong>. Após salvo, este registro não poderá ser editado ou excluído.
                            </div>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" id="btn-save" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i> Salvar Prontuário
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php end_section('content'); ?>

<?php section('scripts'); ?>
<script>
    $('#record-form').on('submit', function(e) {
        e.preventDefault();
        
        if (!confirm('Tem certeza que deseja salvar? O registro será permanente e não poderá ser editado depois.')) {
            return;
        }

        var form = $(this);
        var btn = $('#btn-save');
        var errorAlert = $('#record-error');
        
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Salvando...');
        errorAlert.addClass('d-none');
        
        $.ajax({
            url: '<?= site_url('patient_records/store') ?>',
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    window.location.reload();
                } else {
                    errorAlert.removeClass('d-none').text(response.message || 'Erro ao salvar.');
                    btn.prop('disabled', false).html('<i class="fas fa-save me-2"></i> Salvar Prontuário');
                }
            },
            error: function(xhr) {
                var msg = 'Ocorreu um erro no servidor.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                errorAlert.removeClass('d-none').text(msg);
                btn.prop('disabled', false).html('<i class="fas fa-save me-2"></i> Salvar Prontuário');
            }
        });
    });
</script>
<?php end_section('scripts'); ?>
