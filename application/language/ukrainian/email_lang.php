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

$lang['email_must_be_array'] = 'ÐœÐµÑ‚Ð¾Ð´Ñƒ Ð²Ð°Ð»Ñ–Ð´Ð°Ñ†Ñ–Ñ— email Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ Ð¿ÐµÑ€ÐµÐ´Ð°Ñ‚Ð¸ Ð¼Ð°ÑÐ¸Ð².';
$lang['email_invalid_address'] = 'ÐÐµÐ²Ñ–Ñ€Ð½Ð° email-Ð°Ð´Ñ€ÐµÑÐ°: %s';
$lang['email_attachment_missing'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð½Ð°Ð¹Ñ‚Ð¸ Ð²ÐºÐ»Ð°Ð´ÐµÐ½Ð½Ñ Ð´Ð¾ Ð»Ð¸ÑÑ‚Ð°: %s';
$lang['email_attachment_unreadable'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²Ñ–Ð´ÐºÑ€Ð¸Ñ‚Ð¸ Ð²ÐºÐ»Ð°Ð´ÐµÐ½Ð½Ñ: %s';
$lang['email_no_from'] = 'ÐÐµÐ¼Ð¾Ð¶Ð»Ð¸Ð²Ð¾ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ Ð»Ð¸ÑÑ‚ Ð±ÐµÐ· Ð·Ð°Ð³Ð¾Ð»Ð¾Ð²ÐºÐ° "From".';
$lang['email_no_recipients'] = 'ÐÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ð¾Ð´ÐµÑ€Ð¶ÑƒÐ²Ð°Ñ‡Ñ–Ð²: To, Cc Ð°Ð±Ð¾ Bcc';
$lang['email_send_failure_phpmail'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ Ð»Ð¸ÑÑ‚ Ð·Ð° Ð´Ð¾Ð¿Ð¾Ð¼Ð¾Ð³Ð¾ÑŽ PHP mail(). ÐœÐ¾Ð¶Ð»Ð¸Ð²Ð¾, ÑÐµÑ€Ð²ÐµÑ€ Ð½Ðµ Ð½Ð°Ð»Ð°ÑˆÑ‚Ð¾Ð²Ð°Ð½Ð¸Ð¹ Ð´Ð»Ñ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½Ñ Ñ†ÑŒÐ¾Ð³Ð¾ Ð¼ÐµÑ‚Ð¾Ð´Ñƒ.';
$lang['email_send_failure_sendmail'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ Ð»Ð¸ÑÑ‚ Ð·Ð° Ð´Ð¾Ð¿Ð¾Ð¼Ð¾Ð³Ð¾ÑŽ PHP Sendmail. ÐœÐ¾Ð¶Ð»Ð¸Ð²Ð¾, ÑÐµÑ€Ð²ÐµÑ€ Ð½Ðµ Ð½Ð°Ð»Ð°ÑˆÑ‚Ð¾Ð²Ð°Ð½Ð¸Ð¹ Ð´Ð»Ñ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½Ñ Ñ†ÑŒÐ¾Ð³Ð¾ Ð¼ÐµÑ‚Ð¾Ð´Ñƒ.';
$lang['email_send_failure_smtp'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ Ð»Ð¸ÑÑ‚ Ð·Ð° Ð´Ð¾Ð¿Ð¾Ð¼Ð¾Ð³Ð¾ÑŽ PHP SMTP. ÐœÐ¾Ð¶Ð»Ð¸Ð²Ð¾, ÑÐµÑ€Ð²ÐµÑ€ Ð½Ðµ Ð½Ð°Ð»Ð°ÑˆÑ‚Ð¾Ð²Ð°Ð½Ð¸Ð¹ Ð´Ð»Ñ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½Ñ Ñ†ÑŒÐ¾Ð³Ð¾ Ð¼ÐµÑ‚Ð¾Ð´Ñƒ.';
$lang['email_sent'] = 'Ð’Ð°ÑˆÐµ Ð¿Ð¾Ð²Ñ–Ð´Ð¾Ð¼Ð»ÐµÐ½Ð½Ñ Ð±ÑƒÐ»Ð¾ ÑƒÑÐ¿Ñ–ÑˆÐ½Ð¾ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ð½Ð¾ Ð· Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½ÑÐ¼ Ð½Ð°ÑÑ‚ÑƒÐ¿Ð½Ð¾Ð³Ð¾ Ð¿Ñ€Ð¾Ñ‚Ð¾ÐºÐ¾Ð»Ñƒ: %s';
$lang['email_no_socket'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²Ñ–Ð´ÐºÑ€Ð¸Ñ‚Ð¸ ÑÐ¾ÐºÐµÑ‚ Ð´Ð¾ Sendmail. ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½Ñ.';
$lang['email_no_hostname'] = 'ÐÐµ Ð²ÐºÐ°Ð·Ð°Ð½Ð¾ Ñ–Ð¼â€™Ñ Ñ…Ð¾ÑÑ‚Ð° SMTP.';
$lang['email_smtp_error'] = 'Ð’Ð¸Ð½Ð¸ÐºÐ»Ð° Ð½Ð°ÑÑ‚ÑƒÐ¿Ð½Ð° Ð¿Ð¾Ð¼Ð¸Ð»ÐºÐ° SMTP: %s';
$lang['email_no_smtp_unpw'] = 'ÐŸÐ¾Ð¼Ð¸Ð»ÐºÐ°: Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ñ–Ð¼â€™Ñ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÑƒÐ²Ð°Ñ‡Ð° Ñ‚Ð° Ð¿Ð°Ñ€Ð¾Ð»ÑŒ SMTP.';
$lang['email_failed_smtp_login'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ ÐºÐ¾Ð¼Ð°Ð½Ð´Ñƒ AUTH LOGIN. ÐŸÐ¾Ð¼Ð¸Ð»ÐºÐ°: %s';
$lang['email_smtp_auth_un'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð°Ð²Ñ‚Ð¾Ñ€Ð¸Ð·ÑƒÐ²Ð°Ñ‚Ð¸ Ñ–Ð¼â€™Ñ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÑƒÐ²Ð°Ñ‡Ð°. ÐŸÐ¾Ð¼Ð¸Ð»ÐºÐ°: %s';
$lang['email_smtp_auth_pw'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð°Ð²Ñ‚Ð¾Ñ€Ð¸Ð·ÑƒÐ²Ð°Ñ‚Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ. ÐŸÐ¾Ð¼Ð¸Ð»ÐºÐ°: %s';
$lang['email_smtp_data_failure'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ñ‚Ð¸ Ð´Ð°Ð½Ñ–: %s';
$lang['email_exit_status'] = 'ÐšÐ¾Ð´ Ð·Ð°Ð²ÐµÑ€ÑˆÐµÐ½Ð½Ñ: %s';
