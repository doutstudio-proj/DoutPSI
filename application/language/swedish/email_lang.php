<?php
/**
 * System messages translation for CodeIgniter(tm)
 *
 * @author    CodeIgniter community
 * @copyright    Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 */
defined('BASEPATH') or exit('Direktaccess till skriptet Ã¤r inte tillÃ¥tet');

$lang['email_must_be_array'] = 'Epost-valideringsmetoden krÃ¤ver en array.';
$lang['email_invalid_address'] = 'Ogiltig epostadress: %s';
$lang['email_attachment_missing'] = 'Hittar inte fÃ¶ljande bifogade fil: %s';
$lang['email_attachment_unreadable'] = 'Kan inte Ã¶ppna denna bifogade fil: %s';
$lang['email_no_from'] = 'Kan inte skicka epost utan "From"-header.';
$lang['email_no_recipients'] = 'Du mÃ¥ste ange mottagare: To, Cc, eller Bcc';
$lang['email_send_failure_phpmail'] = 'Kan inte skicka epost med PHP mail(). Din server Ã¤r kanske inte konfigurerad fÃ¶r att skicka epost pÃ¥ detta sÃ¤tt.';
$lang['email_send_failure_sendmail'] = 'Kan inte skicka epost med PHP Sendmail. Din server Ã¤r kanske inte konfigurerad fÃ¶r att skicka epost pÃ¥ detta sÃ¤tt.';
$lang['email_send_failure_smtp'] = 'Kan inte skicka epost med PHP SMTP. Din server Ã¤r kanske inte konfigurerad fÃ¶r att skicka epost pÃ¥ detta sÃ¤tt.';
$lang['email_sent'] = 'Ditt meddelande blev skickat med fÃ¶ljande protokoll: %s';
$lang['email_no_socket'] = 'Kan inte ansluta till Sendmail. Kontrollera instÃ¤llningarna.';
$lang['email_no_hostname'] = 'Du har inte angivit vÃ¤rdnamn fÃ¶r SMTP.';
$lang['email_smtp_error'] = 'FÃ¶ljande SMTP-fel uppstod: %s';
$lang['email_no_smtp_unpw'] = 'Fel: Du ska ange ett SMTP-anvÃ¤ndarnamn och -lÃ¶senord.';
$lang['email_failed_smtp_login'] = 'Lyckades inte skicka AUTH LOGIN kommando. Fel: %s';
$lang['email_smtp_auth_un'] = 'Fel vid auteticiering av anvÃ¤ndarnamn. Fel: %s';
$lang['email_smtp_auth_pw'] = 'Fel vid auteticiering av lÃ¶senord. Fel: %s';
$lang['email_smtp_data_failure'] = 'Kunde inte skicka data: %s';
$lang['email_exit_status'] = 'Statuskod vid avslut: %s';
