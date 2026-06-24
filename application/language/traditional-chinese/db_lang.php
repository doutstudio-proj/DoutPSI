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

$lang['db_invalid_connection_str'] = 'ç„¡æ³•æ ¹æ“šæ‚¨æäº¤çš„é€£ç·šå­—ä¸²åˆ¤æ–·è³‡æ–™åº«è¨­å®šã€‚';
$lang['db_unable_to_connect'] = 'ç„¡æ³•ä½¿ç”¨æä¾›çš„è¨­å®šé€£ç·šè‡³æ‚¨çš„è³‡æ–™åº«ä¼ºæœå™¨ã€‚';
$lang['db_unable_to_select'] = 'ç„¡æ³•é¸æ“‡æŒ‡å®šçš„è³‡æ–™åº«ï¼š%s';
$lang['db_unable_to_create'] = 'ç„¡æ³•å»ºç«‹æŒ‡å®šçš„è³‡æ–™åº«ï¼š%s';
$lang['db_invalid_query'] = 'æ‚¨æäº¤çš„æŸ¥è©¢ç„¡æ•ˆã€‚';
$lang['db_must_set_table'] = 'æ‚¨å¿…é ˆè¨­å®šè¦åœ¨æŸ¥è©¢ä¸­ä½¿ç”¨çš„è³‡æ–™è¡¨ã€‚';
$lang['db_must_use_set'] = 'æ‚¨å¿…é ˆä½¿ç”¨ "set" æ–¹æ³•ä¾†æ›´æ–°é …ç›®ã€‚';
$lang['db_must_use_index'] = 'æ‚¨å¿…é ˆæŒ‡å®šä¸€å€‹ç´¢å¼•ä¾†é€²è¡Œæ‰¹æ¬¡æ›´æ–°ã€‚';
$lang['db_batch_missing_index'] = 'æ‰¹æ¬¡æ›´æ–°ä¸­çš„ä¸€å€‹æˆ–å¤šå€‹åˆ—ç¼ºå°‘æŒ‡å®šçš„ç´¢å¼•ã€‚';
$lang['db_must_use_where'] = 'é™¤éžåŒ…å« "where" å­å¥ï¼Œå¦å‰‡ä¸å…è¨±é€²è¡Œæ›´æ–°ã€‚';
$lang['db_del_must_use_where'] = 'é™¤éžåŒ…å« "where" æˆ– "like" å­å¥ï¼Œå¦å‰‡ä¸å…è¨±é€²è¡Œåˆªé™¤ã€‚';
$lang['db_field_param_missing'] = 'å–å¾—æ¬„ä½éœ€è¦è¡¨æ ¼åç¨±ä½œç‚ºåƒæ•¸ã€‚';
$lang['db_unsupported_function'] = 'æ‚¨ä½¿ç”¨çš„è³‡æ–™åº«ä¸æ”¯æ´æ­¤åŠŸèƒ½ã€‚';
$lang['db_transaction_failure'] = 'äº¤æ˜“å¤±æ•—ï¼šå·²åŸ·è¡Œå›žå¾©ã€‚';
$lang['db_unable_to_drop'] = 'ç„¡æ³•åˆªé™¤æŒ‡å®šçš„è³‡æ–™åº«ã€‚';
$lang['db_unsupported_feature'] = 'æ‚¨ä½¿ç”¨çš„è³‡æ–™åº«å¹³å°ä¸æ”¯æ´æ­¤åŠŸèƒ½ã€‚';
$lang['db_unsupported_compression'] = 'æ‚¨çš„ä¼ºæœå™¨ä¸æ”¯æ´æ‚¨é¸æ“‡çš„æª”æ¡ˆå£“ç¸®æ ¼å¼ã€‚';
$lang['db_filepath_error'] = 'ç„¡æ³•å°‡è³‡æ–™å¯«å…¥æ‚¨æäº¤çš„æª”æ¡ˆè·¯å¾‘ã€‚';
$lang['db_invalid_cache_path'] = 'æ‚¨æäº¤çš„å¿«å–è·¯å¾‘ç„¡æ•ˆæˆ–ç„¡æ³•å¯«å…¥ã€‚';
$lang['db_table_name_required'] = 'æ­¤æ“ä½œéœ€è¦è¡¨æ ¼åç¨±ã€‚';
$lang['db_column_name_required'] = 'æ­¤æ“ä½œéœ€è¦æ¬„ä½åç¨±ã€‚';
$lang['db_column_definition_required'] = 'æ­¤æ“ä½œéœ€è¦æ¬„ä½å®šç¾©ã€‚';
$lang['db_unable_to_set_charset'] = 'ç„¡æ³•è¨­å®šç”¨æˆ¶ç«¯é€£ç·šå­—å…ƒé›†ï¼š%s';
$lang['db_error_heading'] = 'ç™¼ç”Ÿè³‡æ–™åº«éŒ¯èª¤';
