<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author    CodeIgniter community
 * @author  Cristian Robert Chiribuc
 * @copyright    Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Metoda de validare email trebuie sÄƒ fie de tip array.';
$lang['email_invalid_address'] = 'Adresa de email nu este validÄƒ: %s';
$lang['email_attachment_missing'] = 'Nu s-a putut localiza urmÄƒtorul ataÈ™ament de email: %s';
$lang['email_attachment_unreadable'] = 'AtaÈ™amentul urmÄƒtor nu a putut fi deschis: %s';
$lang['email_no_from'] = 'Nu se poate trimite email fÄƒrÄƒ header-ul "De la".';
$lang['email_no_recipients'] = 'Trebuie sÄƒ includeÈ›i destinatarii: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'Nu s-a putut trimite email folosind PHP mail(). Este posibil ca server-ul dvs. sÄƒ nu fie configurat pentru a trimite email-uri folosind aceastÄƒ metodÄƒ.';
$lang['email_send_failure_sendmail'] = 'Nu s-a putut trimite email folosind PHP Sendmail. Este posibil ca server-ul dvs. sÄƒ nu fie configurat pentru a trimite email-uri folosind aceastÄƒ metodÄƒ.';
$lang['email_send_failure_smtp'] = 'Nu s-a putut trimite email folosind PHP SMTP. Este posibil ca server-ul dvs. sÄƒ nu fie configurat pentru a trimite email-uri folosind aceastÄƒ metodÄƒ.';
$lang['email_sent'] = 'Mesajul dvs. a fost trimis cu succes folosind urmÄƒtorul protocol: %s';
$lang['email_no_socket'] = 'Nu s-a putut deschide un socket pentru Sendmail. VerificaÈ›i setÄƒrile.';
$lang['email_no_hostname'] = 'Nu aÈ›i specificat un hostname SMTP.';
$lang['email_smtp_error'] = 'UrmÄƒtoarea eroare SMTP a fost Ã®ntÃ¢lnitÄƒ: %s';
$lang['email_no_smtp_unpw'] = 'Eroare: Trebuie sÄƒ atribuiÈ›i un nume de utilizator È™i parolÄƒ SMTP.';
$lang['email_failed_smtp_login'] = 'Eroare la trimiterea comenzii AUTH LOGIN. Eroare: %s';
$lang['email_smtp_auth_un'] = 'Autentificarea numelui de utilizator nu a putut fi efectuatÄƒ. Eroare: %s';
$lang['email_smtp_auth_pw'] = 'Autentificarea parolei nu a putut fi efectuatÄƒ. Error: %s';
$lang['email_smtp_data_failure'] = 'Datele nu pot fi trimise: %s';
$lang['email_exit_status'] = 'Codul stÄƒrii de ieÈ™ire: %s';
