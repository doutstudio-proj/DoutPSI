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

$lang['email_must_be_array'] = '×©×™×˜×ª ××™×ž×•×ª ×”×“×•×"×œ ×—×—×™×‘×ª ×œ×”×™×•×ª ×‘×ž×¢×¨×š.';
$lang['email_invalid_address'] = '×›×ª×•×‘×ª ×“×•×"×œ ×œ× ×ª×§× ×™×ª: %s';
$lang['email_attachment_missing'] = ' ×”×§×•×‘×¥ ×”×ž×¦×•×¨×£ ×œ×“×•×"×œ ×œ× × ×™×ª×Ÿ ×œ××™×ª×•×¨: %s';
$lang['email_attachment_unreadable'] = '×”×§×•×‘×¥ ×”×ž×¦×•×¨×£ ×”×‘× ×œ× × ×™×ª×Ÿ ×œ×¤×ª×™×—×”: %s';
$lang['email_no_from'] = '×œ× × ×™×ª×Ÿ ×œ×©×œ×•×— ×“×•××¨ ×œ×œ× ×”×¢×¨×š "×ž××ª".';
$lang['email_no_recipients'] = '×—×•×‘×” ×œ×›×œ×•×œ × ×ž×¢×Ÿ:: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = '×œ× × ×™×ª×Ÿ ×œ×©×œ×•×— ×“×•×"×œ ×‘××ž×¦×¢×•×ª PHP mail(). ×™×™×ª×›×Ÿ ×©×”×©×¨×ª ×©×œ×š ×œ× ×ž×•×’×“×¨ ×œ×ž×©×œ×•×— ×“×•××¨ ×‘×©×™×˜×” ×–×•.';
$lang['email_send_failure_sendmail'] = '×œ× × ×™×ª×Ÿ ×œ×©×œ×•×— ×“×•×"×œ ×‘××ž×¦×¢×•×ª PHP Sendmail. ×™×™×ª×›×Ÿ ×©×”×©×¨×ª ×©×œ×š ×œ× ×ž×•×’×“×¨ ×œ×ž×©×œ×•×— ×“×•××¨ ×‘×©×™×˜×” ×–×•.';
$lang['email_send_failure_smtp'] = '×œ× × ×™×ª×Ÿ ×œ×©×œ×•×— ×“×•×"×œ ×‘××ž×¦×¢×•×ª PHP SMTP. ×™×™×ª×›×Ÿ ×©×”×©×¨×ª ×©×œ×š ×œ× ×ž×•×’×“×¨ ×œ×ž×©×œ×•×— ×“×•××¨ ×‘×©×™×˜×” ×–×•.';
$lang['email_sent'] = '×”×”×•×“×¢×” ×©×œ×š × ×©×œ×—×” ×‘×”×¦×œ×—×” ×‘××ž×¦×¢×•×ª ×”×¤×¨×•×˜×•×§×•×œ ×”×‘×: %s';
$lang['email_no_socket'] = '×œ× × ×™×ª×Ÿ ×œ×¤×ª×•×— socket ×œ- Sendmail. ×× × ×‘×“×•×§ ×”×’×“×¨×•×ª.';
$lang['email_no_hostname'] = '×œ× ×¦×™×™× ×ª ×©×  SMTP hostname.';
$lang['email_smtp_error'] = '××™×¨×¢×” ×©×’×™××ª ×”- SMTP ×”×‘××”: %s';
$lang['email_no_smtp_unpw'] = '×©×’×™××”: ×¢×œ×™×š ×œ×”×§×¦×•×ª ×©× ×ž×©×ª×ž×© ×•×¡×™×¡×ž×” ×œ SMTP..';
$lang['email_failed_smtp_login'] = '×©×œ×™×—×ª ×”×¤×§×•×“×” AUTH LOGIN × ×›×©×œ×”. ×©×’×™××”: %s';
$lang['email_smtp_auth_un'] = '××™×ž×•×ª ×©× ×”×ž×©×ª×ž×© × ×›×©×œ. ×©×’×™××”: %s';
$lang['email_smtp_auth_pw'] = '××™×ž×•×ª ×”×¡×™×¡×ž×” × ×›×©×œ. ×©×’×™××”: %s';
$lang['email_smtp_data_failure'] = '×œ× × ×™×ª×Ÿ ×œ×©×œ×•×— ××ª ×”× ×ª×•× ×™×: %s';
$lang['email_exit_status'] = '×§×•×“ ×¡×˜×˜×•×¡ ×œ×™×¦×™××”: %s';
