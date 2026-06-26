<?php extend('layouts/backend_layout'); ?>

<?php section('content'); ?>

<div class="container backend-page pt-3 pb-5">
    <div class="row">
        <div class="col-12 mb-4">
            <h4 class="mb-3 fw-light">
                <i class="fab fa-whatsapp text-success me-2"></i>
                Evolution GO / WhatsApp Settings
            </h4>

            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 text-primary">Configurações Globais</h5>
                </div>
                <div class="card-body">
                    <form id="evolution-settings-form">
                        <div class="alert d-none py-2" id="evolution-alert"></div>
                        
                        <div class="mb-3">
                            <label for="evolution_api_url" class="form-label fw-medium">URL do Servidor (Evolution GO)</label>
                            <input type="url" id="evolution_api_url" name="evolution_api_url" class="form-control" 
                                   value="<?= htmlspecialchars($evolution_api_url) ?>" 
                                   placeholder="Ex: http://localhost:8080">
                            <div class="form-text">A URL raiz onde a Evolution API está rodando.</div>
                        </div>

                        <div class="mb-4">
                            <label for="evolution_api_global_key" class="form-label fw-medium">API Key Global</label>
                            <input type="password" id="evolution_api_global_key" name="evolution_api_global_key" class="form-control" 
                                   value="<?= htmlspecialchars($evolution_api_global_key) ?>"
                                   placeholder="A chave de API configurada na variável AUTH_API_KEY">
                            <div class="form-text">Necessária para criar instâncias para os psicólogos via painel.</div>
                        </div>

                        <button type="submit" id="btn-save-settings" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Salvar Configurações
                        </button>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-primary">Instâncias de Psicólogos</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-3">Psicólogo</th>
                                    <th>E-mail</th>
                                    <th>Instância</th>
                                    <th>Status</th>
                                    <th class="text-end pe-3">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($providers)): ?>
                                    <tr><td colspan="5" class="text-center text-muted py-4">Nenhum psicólogo cadastrado.</td></tr>
                                <?php else: ?>
                                    <?php foreach ($providers as $provider): ?>
                                        <tr>
                                            <td class="ps-3 fw-medium">
                                                <?= htmlspecialchars($provider['first_name'] . ' ' . $provider['last_name']) ?>
                                            </td>
                                            <td><?= htmlspecialchars($provider['email']) ?></td>
                                            <td>
                                                <?php if (!empty($provider['evolution_instance'])): ?>
                                                    <span class="badge bg-light text-dark border font-monospace">
                                                        <?= htmlspecialchars($provider['evolution_instance']) ?>
                                                    </span>
                                                <?php else: ?>
                                                    <span class="text-muted small">Sem instância</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $status = $provider['evolution_status'] ?? 'unknown';
                                                    if ($status === 'open') {
                                                        echo '<span class="badge bg-success rounded-pill"><i class="fas fa-check-circle me-1"></i> Conectado</span>';
                                                    } elseif ($status === 'close') {
                                                        echo '<span class="badge bg-danger rounded-pill"><i class="fas fa-times-circle me-1"></i> Desconectado</span>';
                                                    } elseif ($status === 'connecting') {
                                                        echo '<span class="badge bg-warning rounded-pill text-dark"><i class="fas fa-sync fa-spin me-1"></i> Conectando</span>';
                                                    } elseif ($status === 'unconfigured') {
                                                        echo '<span class="badge bg-secondary rounded-pill">API não configurada</span>';
                                                    } else {
                                                        echo '<span class="badge bg-secondary rounded-pill">Desconhecido</span>';
                                                    }
                                                ?>
                                            </td>
                                            <td class="text-end pe-3">
                                                <?php if (!empty($provider['evolution_instance'])): ?>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete-instance" data-id="<?= $provider['id'] ?>">
                                                        <i class="fas fa-trash-alt"></i> Remover
                                                    </button>
                                                <?php else: ?>
                                                    <button class="btn btn-sm btn-outline-primary btn-create-instance" data-id="<?= $provider['id'] ?>" <?= empty($evolution_api_url) ? 'disabled' : '' ?>>
                                                        <i class="fas fa-plus"></i> Criar
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php end_section('content'); ?>

<?php section('scripts'); ?>
<script>
    $('#evolution-settings-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var btn = $('#btn-save-settings');
        var alertBox = $('#evolution-alert');
        
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Salvando...');
        alertBox.addClass('d-none');
        
        $.ajax({
            url: '<?= site_url('evolution_settings/save') ?>',
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    alertBox.removeClass('d-none alert-danger').addClass('alert-success').html(response.message);
                    setTimeout(function() { window.location.reload(); }, 1500);
                } else {
                    alertBox.removeClass('d-none alert-success').addClass('alert-danger').html(response.message);
                }
            },
            error: function(xhr) {
                var msg = 'Ocorreu um erro no servidor.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                alertBox.removeClass('d-none alert-success').addClass('alert-danger').html(msg);
            },
            complete: function() {
                btn.prop('disabled', false).html('<i class="fas fa-save me-2"></i> Salvar Configurações');
            }
        });
    });

    $('.btn-create-instance').on('click', function() {
        var providerId = $(this).data('id');
        var btn = $(this);
        
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
        
        $.ajax({
            url: '<?= site_url('evolution_settings/create_instance/') ?>' + providerId,
            type: 'POST',
            success: function(response) {
                if (response.success) {
                    window.location.reload();
                } else {
                    alert(response.message);
                    btn.prop('disabled', false).html('<i class="fas fa-plus"></i> Criar');
                }
            },
            error: function(xhr) {
                var msg = 'Ocorreu um erro no servidor.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                alert(msg);
                btn.prop('disabled', false).html('<i class="fas fa-plus"></i> Criar');
            }
        });
    });

    $('.btn-delete-instance').on('click', function() {
        if (!confirm('Tem certeza que deseja remover esta instância do WhatsApp? O psicólogo precisará parear novamente.')) {
            return;
        }
        
        var providerId = $(this).data('id');
        var btn = $(this);
        
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i>');
        
        $.ajax({
            url: '<?= site_url('evolution_settings/delete_instance/') ?>' + providerId,
            type: 'POST',
            success: function(response) {
                if (response.success) {
                    window.location.reload();
                } else {
                    alert(response.message);
                    btn.prop('disabled', false).html('<i class="fas fa-trash-alt"></i> Remover');
                }
            },
            error: function(xhr) {
                var msg = 'Ocorreu um erro no servidor.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                alert(msg);
                btn.prop('disabled', false).html('<i class="fas fa-trash-alt"></i> Remover');
            }
        });
    });
</script>
<?php end_section('scripts'); ?>
