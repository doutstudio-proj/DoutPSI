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

$lang['email_must_be_array'] = 'SÃ¤hkÃ¶postin validointimetodi tulee antaa taulukkona.';
$lang['email_invalid_address'] = 'Virheellinen sÃ¤hkÃ¶postiosoite: %s';
$lang['email_attachment_missing'] = 'TÃ¤tÃ¤ sÃ¤hkÃ¶postiliitettÃ¤ ei paikannettu: %s';
$lang['email_attachment_unreadable'] = 'TÃ¤tÃ¤ sÃ¤hkÃ¶postiliitettÃ¤ ei voitu avata: %s';
$lang['email_no_from'] = 'Ei voi lÃ¤hettÃ¤Ã¤ sÃ¤hkÃ¶postia ilman "From" tunnistetta.';
$lang['email_no_recipients'] = 'Sinun on lisÃ¤ttÃ¤vÃ¤ vastaanottajat: To, Cc, tai Bcc';
$lang['email_send_failure_phpmail'] = 'Ei voitu lÃ¤hettÃ¤Ã¤ sÃ¤hkÃ¶postia kÃ¤yttÃ¤en PHP mail() -komentoa. Palvelinta ei ehkÃ¤ ole mÃ¤Ã¤ritelty kÃ¤yttÃ¤mÃ¤Ã¤n sitÃ¤.';
$lang['email_send_failure_sendmail'] = 'Ei voitu lÃ¤hettÃ¤Ã¤ sÃ¤hkÃ¶postia kÃ¤yttÃ¤en PHP Sendmail -komentoa. Palvelinta ei ehkÃ¤ ole mÃ¤Ã¤ritelty kÃ¤yttÃ¤mÃ¤Ã¤n sitÃ¤.';
$lang['email_send_failure_smtp'] = 'Ei voitu lÃ¤hettÃ¤Ã¤ sÃ¤hkÃ¶postia kÃ¤yttÃ¤en PHP SMTP -ominaisuutta. Palvelinta ei ehkÃ¤ ole mÃ¤Ã¤ritelty kÃ¤yttÃ¤mÃ¤Ã¤n sitÃ¤.';
$lang['email_sent'] = 'Viestisi on lÃ¤hetetty kÃ¤yttÃ¤en protokollaa %s';
$lang['email_no_socket'] = 'Ei voitu avata socketia Sendmailille. Tarkista asetukset.';
$lang['email_no_hostname'] = 'Et ole mÃ¤Ã¤rittÃ¤nyt SMTP -palvelinta.';
$lang['email_smtp_error'] = 'SMTP virhe tapahtui: %s';
$lang['email_no_smtp_unpw'] = 'Virhe: SMTP kÃ¤yttÃ¤jÃ¤nimi ja sanasana on mÃ¤Ã¤ritettÃ¤vÃ¤.';
$lang['email_failed_smtp_login'] = 'Ei voitu lÃ¤hettÃ¤Ã¤ AUTH LOGIN komentoa. Virhe: %s';
$lang['email_smtp_auth_un'] = 'Ei voitu autentikoida kÃ¤yttÃ¤jÃ¤nimeÃ¤. Virhe: %s';
$lang['email_smtp_auth_pw'] = 'Ei voitu autentikoida salasanaa. Virhe: %s';
$lang['email_smtp_data_failure'] = 'Ei voitu lÃ¤hettÃ¤Ã¤ dataa: %s';
$lang['email_exit_status'] = 'Paluukoodi: %s';
