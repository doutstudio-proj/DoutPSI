<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author    CodeIgniter community
 * @copyright    Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Ã‰ necessÃ¡rio passar um array ao mÃ©todo de validaÃ§Ã£o de email.';
$lang['email_invalid_address'] = 'EndereÃ§o de email invÃ¡lido: %s';
$lang['email_attachment_missing'] = 'Incapaz de encontrar o seguinte anexo de email: %s';
$lang['email_attachment_unreadable'] = 'Incapaz de abrir este anexo: %s';
$lang['email_no_from'] = 'NÃ£o Ã© possÃ­vel enviar o email sem definir o cabeÃ§alho "From".';
$lang['email_no_recipients'] = 'Tem que definir os destinatÃ¡rios: To, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] = 'Incapaz de enviar o email atravÃ©s do PHP mail(). O seu servidor pode nÃ£o estar configurado para enviar mails usando este mÃ©todo.';
$lang['email_send_failure_sendmail'] = 'Incapaz de enviar o email atravÃ©s do PHP Sendmail. O seu servidor pode nÃ£o estar configurado para enviar mails usando este mÃ©todo.';
$lang['email_send_failure_smtp'] = 'Incapaz de enviar o email atravÃ©s do PHP SMTP. O seu servidor pode nÃ£o estar configurado para enviar mails usando este mÃ©todo.';
$lang['email_sent'] = 'A sua mensagem foi enviado com sucesso atravÃ©s do seguinte protocolo: %s';
$lang['email_no_socket'] = 'Incapaz de abrir um socket para o Sendmail. Por favor, confira as definiÃ§Ãµes.';
$lang['email_no_hostname'] = 'NÃ£o especificou o hostname do SMTP.';
$lang['email_smtp_error'] = 'Foi encontrado o seguinte erro SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Erro: Tem que definir um username e passowrd para o SMTP.';
$lang['email_failed_smtp_login'] = 'Falha no envio do comando AUTH LOGIN. Erro: %s';
$lang['email_smtp_auth_un'] = 'Falha na autenticaÃ§Ã£o de username. Erro: %s';
$lang['email_smtp_auth_pw'] = 'Falha na autenticaÃ§Ã£o da password. Erro: %s';
$lang['email_smtp_data_failure'] = 'Incapaz de enviar dados: %s';
$lang['email_exit_status'] = 'CÃ³digo do estado de saÃ­da: %s';
