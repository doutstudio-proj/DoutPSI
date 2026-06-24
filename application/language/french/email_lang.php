<?php
/**
 * System messages translation for CodeIgniter(tm)
 * @author    CodeIgniter community
 * @copyright    Copyright (c) 2014-2018, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['email_must_be_array'] = 'La mÃ©thode de validation dâ€™email nâ€™accepte que les tableaux associatifs (array).';
$lang['email_invalid_address'] = 'Adresse email invalide : %s';
$lang['email_attachment_missing'] = 'Impossible de localiser le fichier joint suivant : %s';
$lang['email_attachment_unreadable'] = 'Impossible dâ€™ouvrir ce fichier joint : %s';
$lang['email_no_from'] = 'Impossible dâ€™envoyer un email sans en-tÃªte "From".';
$lang['email_no_recipients'] = 'Vous devez spÃ©cifier des destinataires: To, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] = 'Impossible dâ€™envoyer des emails avec la fonction mail() de PHP. Votre serveur ne doit pas Ãªtre configurÃ© pour pouvoir utiliser cette mÃ©thode.';
$lang['email_send_failure_sendmail'] = 'Impossible dâ€™envoyer des emails avec la mÃ©thode Sendmail de PHP. Votre serveur ne doit pas Ãªtre configurÃ© pour pouvoir utiliser cette mÃ©thode.';
$lang['email_send_failure_smtp'] = 'Impossible dâ€™envoyer des emails avec la mÃ©thode SMTP de PHP. Votre serveur ne doit pas Ãªtre configurÃ© pour pouvoir utiliser cette mÃ©thode.';
$lang['email_sent'] = 'Votre message a bien Ã©tÃ© expÃ©diÃ© par le protocole suivant : %s';
$lang['email_no_socket'] = 'Impossible dâ€™ouvrir un socket avec Sendmail. Veuillez vÃ©rifier la configuration de votre environnement.';
$lang['email_no_hostname'] = 'Vous nâ€™avez pas spÃ©cificÃ© dâ€™hÃ´te SMTP.';
$lang['email_smtp_error'] = 'Lâ€™erreur SMTP suivante sâ€™est produite : %s';
$lang['email_no_smtp_unpw'] = 'Erreur : Vous devez spÃ©cifier un nom dâ€™utilisateur et un mot de passe SMTP.';
$lang['email_failed_smtp_login'] = 'Ã‰chec lors de lâ€™envoi de la commande AUTH LOGIN. Erreur : %s';
$lang['email_smtp_auth_un'] = 'Impossible dâ€™identifier le nom dâ€™utilisateur. Erreur : %s';
$lang['email_smtp_auth_pw'] = 'Impossible dâ€™identifier le mot de passe. Erreur : %s';
$lang['email_smtp_data_failure'] = 'Impossible dâ€™envoyer les donnÃ©es : %s';
$lang['email_exit_status'] = 'Code de retour : %s';
