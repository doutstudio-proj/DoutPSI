<?php extend('layouts/account_layout'); ?>

<?php section('content'); ?>

<div class="text-center mb-4">
    <img src="<?= asset_url('assets/img/logo.png') ?>" 
         alt="<?= $company_name ?>" class="shadow mb-3" width="72" height="72">
    <h4 class="text-primary fw-semibold mb-1">Cadastro de Psicólogo</h4>
    <p class="small mb-0">
        <?php if (isset($google_info)): ?>
            Complete seus dados profissionais para finalizar a conta.
        <?php else: ?>
            Crie sua conta para gerenciar seus agendamentos.
        <?php endif; ?>
    </p>
</div>

<div class="alert d-none"></div>

<?php if (!isset($google_info)): ?>
    <div class="d-grid gap-2 mb-4">
        <a href="<?= site_url('google_login/redirect?action=register') ?>" class="btn btn-outline-dark">
            <img src="<?= asset_url('assets/img/google.png') ?>" alt="Google" width="20" class="me-2">
            Continuar com o Google
        </a>
    </div>
    
    <div class="position-relative mb-4 text-center">
        <hr>
        <span class="position-absolute top-50 translate-middle bg-white px-2 small text-muted">ou cadastre com e-mail</span>
    </div>
<?php else: ?>
    <div class="alert alert-info py-2 small">
        <i class="fas fa-info-circle me-2"></i> Você está se cadastrando com a conta Google: <strong><?= htmlspecialchars($google_info['email']) ?></strong>
    </div>
<?php endif; ?>

<form id="register-form">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label fw-medium">Nome</label>
            <input type="text" id="first_name" name="first_name" class="form-control" required 
                   value="<?= isset($google_info) ? htmlspecialchars($google_info['given_name'] ?? $google_info['name'] ?? '') : '' ?>"
                   <?= isset($google_info) ? 'readonly' : '' ?>>
        </div>
        <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label fw-medium">Sobrenome</label>
            <input type="text" id="last_name" name="last_name" class="form-control" required
                   value="<?= isset($google_info) ? htmlspecialchars($google_info['family_name'] ?? '') : '' ?>"
                   <?= isset($google_info) ? 'readonly' : '' ?>>
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label fw-medium">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" required
               value="<?= isset($google_info) ? htmlspecialchars($google_info['email']) : '' ?>"
               <?= isset($google_info) ? 'readonly' : '' ?>>
    </div>

    <?php if (!isset($google_info)): ?>
        <div class="mb-3">
            <label for="password" class="form-label fw-medium">Senha</label>
            <input type="password" id="password" name="password" class="form-control" required minlength="6">
            <div class="form-text">No mínimo 6 caracteres.</div>
        </div>
    <?php endif; ?>

    <hr class="my-4">
    <h6 class="text-muted mb-3">Dados Profissionais</h6>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="crp" class="form-label fw-medium">CRP</label>
            <input type="text" id="crp" name="crp" class="form-control" placeholder="Ex: 06/12345" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="specialty" class="form-label fw-medium">Especialidade</label>
            <select id="specialty" name="specialty" class="form-select" required>
                <option value="">Selecione...</option>
                <option value="Psicologia Clínica">Psicologia Clínica</option>
                <option value="Psicanálise">Psicanálise</option>
                <option value="Terapia Cognitivo-Comportamental (TCC)">Terapia Cognitivo-Comportamental (TCC)</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
    </div>

    <div class="mb-4">
        <label for="phone_number" class="form-label fw-medium">WhatsApp / Telefone</label>
        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="(00) 00000-0000" required>
    </div>

    <?php if (vars('require_captcha') && !isset($google_info)): ?>
        <?php if (vars('altcha_enabled') === '1'): ?>
            <div class="mb-4">
                <div id="altcha-widget" class="altcha-widget"></div>
                <input type="hidden" id="altcha-payload" value="">
                <span id="altcha-hint" class="help-block text-danger small" style="opacity:0">&nbsp;</span>
            </div>
        <?php else: ?>
            <div class="mb-4">
                <label class="captcha-title form-label fw-medium" for="captcha-text">
                    CAPTCHA
                    <button type="button" class="btn btn-link text-dark text-decoration-none py-0 px-1" onclick="$('.captcha-image').attr('src', '<?= site_url('captcha') ?>?' + new Date().getTime())">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </label>
                <img class="captcha-image d-block mb-2 rounded" src="<?= site_url('captcha') ?>" alt="CAPTCHA">
                <input id="captcha-text" name="captcha" class="captcha-text form-control" type="text" placeholder="<?= lang('enter_captcha_here') ?>" required/>
                <span id="captcha-hint" class="help-block text-danger small" style="opacity:0">&nbsp;</span>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="d-grid gap-2 mb-3">
        <button type="submit" id="btn-register" class="btn btn-primary">
            <i class="fas fa-user-plus me-2"></i> Criar Conta
        </button>
    </div>

    <div class="text-center">
        <a href="<?= site_url('login') ?>" class="text-decoration-none small">
            Já tem uma conta? Faça login
        </a>
    </div>
</form>

<?php end_section('content'); ?>

<?php section('scripts'); ?>
<script>
    $('#register-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var btn = $('#btn-register');
        
        btn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i> Criando conta...');
        
        $.ajax({
            url: '<?= site_url('register/perform') ?>',
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    window.location.href = response.redirect;
                } else {
                    $('.alert').removeClass('d-none alert-success').addClass('alert-danger').html(response.message);
                    btn.prop('disabled', false).html('<i class="fas fa-user-plus me-2"></i> Criar Conta');
                }
            },
            error: function(xhr) {
                var msg = 'Ocorreu um erro no servidor.';
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                $('.alert').removeClass('d-none alert-success').addClass('alert-danger').html(msg);
                btn.prop('disabled', false).html('<i class="fas fa-user-plus me-2"></i> Criar Conta');
            }
        });
    });
</script>
<?php end_section('scripts'); ?>
