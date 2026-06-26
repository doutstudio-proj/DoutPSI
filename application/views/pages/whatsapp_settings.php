<?php extend('layouts/backend_layout'); ?>

<?php section('content'); ?>

<div class="container backend-page pt-3 pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 mb-4">
            <h4 class="mb-3 fw-light">
                <i class="fab fa-whatsapp text-success me-2"></i>
                WhatsApp
            </h4>

            <div class="card shadow-sm border-0">
                <div class="card-body text-center p-5">
                    
                    <?php if (!$is_configured): ?>
                        <div class="text-danger mb-3">
                            <i class="fas fa-exclamation-triangle fa-3x"></i>
                        </div>
                        <h5 class="mb-3">WhatsApp Indisponível</h5>
                        <p class="text-muted">
                            O serviço de WhatsApp não está configurado no sistema. 
                            Por favor, contate o administrador para configurar a Evolution API.
                        </p>
                    <?php else: ?>

                        <?php if ($connection_state === 'no_instance'): ?>
                            <div class="mb-4 text-success">
                                <i class="fab fa-whatsapp fa-4x opacity-50"></i>
                            </div>
                            <h5 class="mb-3">Configurações do WhatsApp</h5>
                            <p class="text-muted mb-4">
                                Conecte seu WhatsApp ao DoutPSI para notificar seus pacientes sobre sessões automaticamente.
                            </p>
                            <button id="btn-provision" class="btn btn-primary btn-lg rounded-pill px-4">
                                <i class="fas fa-mobile-alt me-2"></i> Criar minha instância WhatsApp
                            </button>
                            
                        <?php else: ?>
                            
                            <div id="qr-container" class="<?= $connection_state === 'open' ? 'd-none' : '' ?>">
                                <h5 class="mb-3">Conectar WhatsApp</h5>
                                <p class="text-muted small">Escaneie o QR Code abaixo usando o aplicativo do WhatsApp no seu celular.</p>
                                
                                <div class="bg-light p-3 rounded mx-auto mb-3" style="width: 250px; height: 250px; display: flex; align-items: center; justify-content: center;">
                                    <img id="qr-image" src="" alt="QR Code" class="img-fluid d-none">
                                    <div id="qr-loading" class="text-muted">
                                        <i class="fas fa-spinner fa-spin fa-2x mb-2"></i><br>
                                        Gerando QR Code...
                                    </div>
                                </div>
                                <p class="text-muted small mb-0"><i class="fas fa-sync fa-spin me-1"></i> Aguardando conexão...</p>
                            </div>

                            <div id="connected-container" class="<?= $connection_state === 'open' ? '' : 'd-none' ?>">
                                <div class="text-success mb-3">
                                    <i class="fas fa-check-circle fa-4x"></i>
                                </div>
                                <h5 class="mb-2">WhatsApp Conectado!</h5>
                                <p class="text-muted mb-4">Seu número está vinculado ao DoutPSI.</p>
                                
                                <div class="d-flex align-items-center justify-content-between p-3 bg-light rounded mb-4 text-start">
                                    <div>
                                        <strong>Notificações Automáticas</strong>
                                        <div class="text-muted small">Avisar pacientes sobre agendamentos e cancelamentos.</div>
                                    </div>
                                    <div class="form-check form-switch ms-3 fs-5">
                                        <input class="form-check-input" type="checkbox" id="toggle-notifications" <?= $notifications_enabled ? 'checked' : '' ?>>
                                    </div>
                                </div>

                                <button id="btn-disconnect" class="btn btn-outline-danger">
                                    <i class="fas fa-sign-out-alt me-2"></i> Desconectar Número
                                </button>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>
            </div>
            
        </div>
    </div>
</div>

<?php end_section('content'); ?>

<?php section('scripts'); ?>
<script>
    var connectionState = '<?= $connection_state ?>';
    var isConfigured = <?= $is_configured ? 'true' : 'false' ?>;
    var checkInterval = null;

    function loadQrCode() {
        $('#qr-loading').removeClass('d-none');
        $('#qr-image').addClass('d-none');
        
        $.ajax({
            url: '<?= site_url('whatsapp_settings/qr_code') ?>',
            type: 'GET',
            success: function(response) {
                if (response.success && response.qr) {
                    $('#qr-image').attr('src', response.qr.base64 || response.qr).removeClass('d-none');
                    $('#qr-loading').addClass('d-none');
                }
            }
        });
    }

    function checkStatus() {
        $.ajax({
            url: '<?= site_url('whatsapp_settings/status') ?>',
            type: 'GET',
            success: function(response) {
                if (response.success) {
                    if (response.status === 'open' && connectionState !== 'open') {
                        // Just connected!
                        connectionState = 'open';
                        $('#qr-container').addClass('d-none');
                        $('#connected-container').removeClass('d-none');
                        if (checkInterval) clearInterval(checkInterval);
                    } else if (response.status === 'close' || response.status === 'connecting') {
                        if (connectionState === 'open') {
                            // Disconnected
                            window.location.reload();
                        }
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        if (isConfigured && connectionState !== 'no_instance' && connectionState !== 'open') {
            loadQrCode();
            checkInterval = setInterval(checkStatus, 3000);
        }

        $('#btn-provision').click(function() {
            var btn = $(this);
            btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Criando instância...');
            
            $.ajax({
                url: '<?= site_url('whatsapp_settings/provision') ?>',
                type: 'POST',
                success: function(response) {
                    if (response.success) {
                        window.location.reload();
                    } else {
                        alert(response.message || 'Erro ao criar instância.');
                        btn.prop('disabled', false).html('<i class="fas fa-mobile-alt me-2"></i> Criar minha instância WhatsApp');
                    }
                },
                error: function() {
                    alert('Erro no servidor.');
                    btn.prop('disabled', false).html('<i class="fas fa-mobile-alt me-2"></i> Criar minha instância WhatsApp');
                }
            });
        });

        $('#btn-disconnect').click(function() {
            if (!confirm('Tem certeza que deseja desconectar seu WhatsApp?')) return;
            
            var btn = $(this);
            btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Desconectando...');
            
            $.ajax({
                url: '<?= site_url('whatsapp_settings/disconnect') ?>',
                type: 'POST',
                success: function(response) {
                    window.location.reload();
                },
                error: function() {
                    alert('Erro no servidor.');
                    btn.prop('disabled', false).html('<i class="fas fa-sign-out-alt me-2"></i> Desconectar Número');
                }
            });
        });

        $('#toggle-notifications').change(function() {
            var isEnabled = $(this).is(':checked');
            $.ajax({
                url: '<?= site_url('whatsapp_settings/toggle_notifications') ?>',
                type: 'POST',
                data: { enabled: isEnabled },
                error: function() {
                    alert('Erro ao salvar configuração de notificações.');
                }
            });
        });
    });
</script>
<?php end_section('scripts'); ?>
