<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright    Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Metoda e validimit tÃ« email-it duhet tÃ« pranojÃ« njÃ« array.';
$lang['email_invalid_address'] = 'Adresa e email-it Ã«shtÃ« e pavlefshme: %s';
$lang['email_attachment_missing'] = 'Nuk mund tÃ« gjendet bashkÃ«ngjitja e mÃ«poshtme e email-it: %s';
$lang['email_attachment_unreadable'] = 'Nuk mund tÃ« hapet kjo bashkÃ«ngjitje: %s';
$lang['email_no_from'] = 'Nuk mund tÃ« dÃ«rgohet email-i pa njÃ« header "From".';
$lang['email_no_recipients'] = 'Duhet tÃ« pÃ«rfshini marrÃ«sit: To, Cc, ose Bcc';
$lang['email_send_failure_phpmail'] = 'Nuk mund tÃ« dÃ«rgohet email duke pÃ«rdorur PHP mail(). Serveri juaj mund tÃ« mos jetÃ« konfiguruar pÃ«r tÃ« dÃ«rguar email me kÃ«tÃ« metodÃ«.';
$lang['email_send_failure_sendmail'] = 'Nuk mund tÃ« dÃ«rgohet email duke pÃ«rdorur PHP Sendmail. Serveri juaj mund tÃ« mos jetÃ« konfiguruar pÃ«r tÃ« dÃ«rguar email me kÃ«tÃ« metodÃ«.';
$lang['email_send_failure_smtp'] = 'Nuk mund tÃ« dÃ«rgohet email duke pÃ«rdorur PHP SMTP. Serveri juaj mund tÃ« mos jetÃ« konfiguruar pÃ«r tÃ« dÃ«rguar email me kÃ«tÃ« metodÃ«.';
$lang['email_sent'] = 'Mesazhi juaj u dÃ«rgua me sukses duke pÃ«rdorur protokollin e mÃ«poshtÃ«m: %s';
$lang['email_no_socket'] = 'Nuk mund tÃ« hapet njÃ« socket pÃ«r Sendmail. Ju lutemi kontrolloni cilÃ«simet.';
$lang['email_no_hostname'] = 'Nuk keni specifikuar njÃ« hostname pÃ«r SMTP.';
$lang['email_smtp_error'] = 'U has gabimi i mÃ«poshtÃ«m i SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Gabim: Duhet tÃ« caktoni njÃ« emÃ«r pÃ«rdoruesi dhe fjalÃ«kalim pÃ«r SMTP.';
$lang['email_failed_smtp_login'] = 'DÃ«shtoi dÃ«rgimi i komandÃ«s AUTH LOGIN. Gabim: %s';
$lang['email_smtp_auth_un'] = 'DÃ«shtoi autentifikimi i emrit tÃ« pÃ«rdoruesit. Gabim: %s';
$lang['email_smtp_auth_pw'] = 'DÃ«shtoi autentifikimi i fjalÃ«kalimit. Gabim: %s';
$lang['email_smtp_data_failure'] = 'Nuk mund tÃ« dÃ«rgohen tÃ« dhÃ«nat: %s';
$lang['email_exit_status'] = 'Kodi i statusit tÃ« daljes: %s';
