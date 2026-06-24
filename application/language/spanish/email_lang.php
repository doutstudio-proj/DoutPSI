<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author    CodeIgniter community
 * @author    Iban Eguia
 * @copyright    Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Debes pasar un array al mÃ©todo de validaciÃ³n de email.';
$lang['email_invalid_address'] = 'Correo electrÃ³nico no vÃ¡lido: %s';
$lang['email_attachment_missing'] = 'No ha sido posible encontrar este adjunto: %s';
$lang['email_attachment_unreadable'] = 'No ha sido posible abrir este adjunto: %s';
$lang['email_no_from'] = 'No se puede enviar un email sin la cabecera "From".';
$lang['email_no_recipients'] = 'Debes incluir destinatarios: Para, Cc, o Cco';
$lang['email_send_failure_phpmail'] = 'No ha sido posible enviar el correo usando PHP mail(). Tu servidor podrÃ­a no estar configurado para enviar emails con este mÃ©todo.';
$lang['email_send_failure_sendmail'] = 'No ha sido posible enviar el correo usando PHP Sendmail. Tu servidor podrÃ­a no estar configurado para enviar emails con este mÃ©todo.';
$lang['email_send_failure_smtp'] = 'No ha sido posible enviar el correo usando PHP SMTP. Tu servidor podrÃ­a no estar configurado para enviar emails con este mÃ©todo.';
$lang['email_sent'] = 'Tu mensaje ha sido enviado con Ã©xito usando este protocolo: %s';
$lang['email_no_socket'] = 'No ha sido posible abrir un socket a Sendmail. Por favor, comprueba la configuraciÃ³n.';
$lang['email_no_hostname'] = 'No has especificado un servidor SMTP.';
$lang['email_smtp_error'] = 'Se ha encontrado este error SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Error: Debes asignar un usuario y una contraseÃ±a SMTP.';
$lang['email_failed_smtp_login'] = 'Fallo al enviar el comando AUTH LOGIN. Error: %s';
$lang['email_smtp_auth_un'] = 'Fallo al autenticar el usuario. Error: %s';
$lang['email_smtp_auth_pw'] = 'Fallo al autenticar la contraseÃ±a. Error: %s';
$lang['email_smtp_data_failure'] = 'No ha sido posible enviar los datos: %s';
$lang['email_exit_status'] = 'CÃ³digo estado al salir: %s';
