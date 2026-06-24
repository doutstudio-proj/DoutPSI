<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
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
 * @copyright    Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link    https://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

$lang['form_validation_required'] = '{field} æ¬„ä½ç‚ºå¿…å¡«';
$lang['form_validation_isset'] = '{field} æ¬„ä½å¿…é ˆæœ‰å€¼';
$lang['form_validation_valid_email'] = '{field} æ¬„ä½å¿…é ˆæ˜¯æœ‰æ•ˆçš„é›»å­éƒµä»¶åœ°å€';
$lang['form_validation_valid_emails'] = '{field} æ¬„ä½å¿…é ˆåŒ…å«æ‰€æœ‰æœ‰æ•ˆçš„é›»å­éƒµä»¶åœ°å€';
$lang['form_validation_valid_url'] = '{field} æ¬„ä½å¿…é ˆæ˜¯æœ‰æ•ˆçš„ç¶²å€';
$lang['form_validation_valid_ip'] = '{field} æ¬„ä½å¿…é ˆæ˜¯æœ‰æ•ˆçš„ IP ä½å€';
$lang['form_validation_valid_base64'] = '{field} æ¬„ä½å¿…é ˆæ˜¯æœ‰æ•ˆçš„ Base64 å­—ä¸²';
$lang['form_validation_min_length'] = '{field} æ¬„ä½é•·åº¦è‡³å°‘éœ€è¦ {param} å€‹å­—å…ƒ';
$lang['form_validation_max_length'] = '{field} æ¬„ä½é•·åº¦ä¸èƒ½è¶…éŽ {param} å€‹å­—å…ƒ';
$lang['form_validation_exact_length'] = '{field} æ¬„ä½é•·åº¦å¿…é ˆå‰›å¥½æ˜¯ {param} å€‹å­—å…ƒ';
$lang['form_validation_alpha'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«è‹±æ–‡å­—æ¯';
$lang['form_validation_alpha_numeric'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«è‹±æ–‡å­—æ¯èˆ‡æ•¸å­—';
$lang['form_validation_alpha_numeric_spaces'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«è‹±æ–‡å­—æ¯ã€æ•¸å­—å’Œç©ºæ ¼';
$lang['form_validation_alpha_dash'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«è‹±æ–‡å­—æ¯ã€æ•¸å­—ã€åº•ç·šå’Œç ´æŠ˜è™Ÿ';
$lang['form_validation_numeric'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«æ•¸å­—';
$lang['form_validation_is_numeric'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«æ•¸å­—å­—å…ƒ';
$lang['form_validation_integer'] = '{field} æ¬„ä½å¿…é ˆæ˜¯æ•´æ•¸';
$lang['form_validation_regex_match'] = '{field} æ¬„ä½æ ¼å¼ä¸æ­£ç¢º';
$lang['form_validation_matches'] = '{field} æ¬„ä½èˆ‡ {param} æ¬„ä½ä¸ç›¸ç¬¦';
$lang['form_validation_differs'] = '{field} æ¬„ä½å¿…é ˆèˆ‡ {param} æ¬„ä½ä¸åŒ';
$lang['form_validation_is_unique'] = '{field} æ¬„ä½å¿…é ˆæ˜¯å”¯ä¸€å€¼';
$lang['form_validation_is_natural'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«æ•¸å­—';
$lang['form_validation_is_natural_no_zero'] = '{field} æ¬„ä½åƒ…èƒ½åŒ…å«æ•¸å­—ä¸”å¿…é ˆå¤§æ–¼é›¶';
$lang['form_validation_decimal'] = '{field} æ¬„ä½å¿…é ˆæ˜¯åé€²ä½æ•¸å­—';
$lang['form_validation_less_than'] = '{field} æ¬„ä½å¿…é ˆå°æ–¼ {param}';
$lang['form_validation_less_than_equal_to'] = '{field} æ¬„ä½å¿…é ˆå°æ–¼æˆ–ç­‰æ–¼ {param}';
$lang['form_validation_greater_than'] = '{field} æ¬„ä½å¿…é ˆå¤§æ–¼ {param}';
$lang['form_validation_greater_than_equal_to'] = '{field} æ¬„ä½å¿…é ˆå¤§æ–¼æˆ–ç­‰æ–¼ {param}';
$lang['form_validation_error_message_not_set'] = 'ç„¡æ³•å­˜å–èˆ‡æ‚¨çš„æ¬„ä½åç¨± {field} ç›¸å°æ‡‰çš„éŒ¯èª¤è¨Šæ¯';
$lang['form_validation_in_list'] = '{field} æ¬„ä½å¿…é ˆæ˜¯ä¸‹åˆ—å…¶ä¸­ä¹‹ä¸€ï¼š{param}';
