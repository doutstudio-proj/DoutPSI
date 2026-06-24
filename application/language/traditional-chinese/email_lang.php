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

$lang['email_must_be_array'] = 'é›»å­éƒµä»¶é©—è­‰æ–¹æ³•å¿…é ˆå‚³å…¥ä¸€å€‹é™£åˆ—ã€‚';
$lang['email_invalid_address'] = 'ç„¡æ•ˆçš„é›»å­éƒµä»¶åœ°å€ï¼š%s';
$lang['email_attachment_missing'] = 'ç„¡æ³•æ‰¾åˆ°ä»¥ä¸‹é›»å­éƒµä»¶é™„ä»¶ï¼š%s';
$lang['email_attachment_unreadable'] = 'ç„¡æ³•é–‹å•Ÿæ­¤é™„ä»¶ï¼š%s';
$lang['email_no_from'] = 'ç„¡æ³•å‚³é€æ²’æœ‰ã€Œå¯„ä»¶äººã€æ¨™é ­çš„éƒµä»¶ã€‚';
$lang['email_no_recipients'] = 'æ‚¨å¿…é ˆåŒ…å«æ”¶ä»¶äººï¼šæ”¶ä»¶äººã€å‰¯æœ¬æˆ–å¯†ä»¶å‰¯æœ¬';
$lang['email_send_failure_phpmail'] = 'ç„¡æ³•ä½¿ç”¨ PHP mail() å‚³é€é›»å­éƒµä»¶ã€‚æ‚¨çš„ä¼ºæœå™¨å¯èƒ½æœªè¨­å®šç‚ºä½¿ç”¨æ­¤æ–¹æ³•å‚³é€é›»å­éƒµä»¶ã€‚';
$lang['email_send_failure_sendmail'] = 'ç„¡æ³•ä½¿ç”¨ PHP Sendmail å‚³é€é›»å­éƒµä»¶ã€‚æ‚¨çš„ä¼ºæœå™¨å¯èƒ½æœªè¨­å®šç‚ºä½¿ç”¨æ­¤æ–¹æ³•å‚³é€é›»å­éƒµä»¶ã€‚';
$lang['email_send_failure_smtp'] = 'ç„¡æ³•ä½¿ç”¨ PHP SMTP å‚³é€é›»å­éƒµä»¶ã€‚æ‚¨çš„ä¼ºæœå™¨å¯èƒ½æœªè¨­å®šç‚ºä½¿ç”¨æ­¤æ–¹æ³•å‚³é€é›»å­éƒµä»¶ã€‚';
$lang['email_sent'] = 'æ‚¨çš„è¨Šæ¯å·²æˆåŠŸä½¿ç”¨ä»¥ä¸‹å”å®šå‚³é€ï¼š%s';
$lang['email_no_socket'] = 'ç„¡æ³•é–‹å•Ÿ Sendmail çš„é€šè¨Šç«¯ã€‚è«‹æª¢æŸ¥è¨­å®šã€‚';
$lang['email_no_hostname'] = 'æ‚¨æœªæŒ‡å®š SMTP ä¸»æ©Ÿåç¨±ã€‚';
$lang['email_smtp_error'] = 'é‡åˆ°ä»¥ä¸‹ SMTP éŒ¯èª¤ï¼š%s';
$lang['email_no_smtp_unpw'] = 'éŒ¯èª¤ï¼šæ‚¨å¿…é ˆæŒ‡å®š SMTP ä½¿ç”¨è€…åç¨±å’Œå¯†ç¢¼ã€‚';
$lang['email_failed_smtp_login'] = 'ç„¡æ³•å‚³é€ AUTH LOGIN æŒ‡ä»¤ã€‚éŒ¯èª¤ï¼š%s';
$lang['email_smtp_auth_un'] = 'ç„¡æ³•é©—è­‰ä½¿ç”¨è€…åç¨±ã€‚éŒ¯èª¤ï¼š%s';
$lang['email_smtp_auth_pw'] = 'ç„¡æ³•é©—è­‰å¯†ç¢¼ã€‚éŒ¯èª¤ï¼š%s';
$lang['email_smtp_data_failure'] = 'ç„¡æ³•å‚³é€è³‡æ–™ï¼š%s';
$lang['email_exit_status'] = 'çµæŸç‹€æ…‹ç¢¼ï¼š%s';
