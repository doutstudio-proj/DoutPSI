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

$lang['db_invalid_connection_str'] = 'ÐÐµÐ¼Ð¾Ð¶Ð»Ð¸Ð²Ð¾ Ð²Ð¸Ð·Ð½Ð°Ñ‡Ð¸Ñ‚Ð¸ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½Ñ Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ… Ð½Ð° Ð¾ÑÐ½Ð¾Ð²Ñ– Ð½Ð°Ð´Ð°Ð½Ð¾Ð³Ð¾ Ñ€ÑÐ´ÐºÐ° Ð¿Ñ–Ð´ÐºÐ»ÑŽÑ‡ÐµÐ½Ð½Ñ.';
$lang['db_unable_to_connect'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð¿Ñ–Ð´ÐºÐ»ÑŽÑ‡Ð¸Ñ‚Ð¸ÑÑ Ð´Ð¾ ÑÐµÑ€Ð²ÐµÑ€Ð° Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ… Ð·Ð° Ð½Ð°Ð´Ð°Ð½Ð¸Ð¼Ð¸ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½ÑÐ¼Ð¸.';
$lang['db_unable_to_select'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²Ð¸Ð±Ñ€Ð°Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ñƒ Ð±Ð°Ð·Ñƒ Ð´Ð°Ð½Ð¸Ñ…: %s';
$lang['db_unable_to_create'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ ÑÑ‚Ð²Ð¾Ñ€Ð¸Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ñƒ Ð±Ð°Ð·Ñƒ Ð´Ð°Ð½Ð¸Ñ…: %s';
$lang['db_invalid_query'] = 'Ð—Ð°Ð¿Ð¸Ñ‚, ÑÐºÐ¸Ð¹ Ð²Ð¸ Ð½Ð°Ð´Ñ–ÑÐ»Ð°Ð»Ð¸, Ñ” Ð½ÐµÐ´Ñ–Ð¹ÑÐ½Ð¸Ð¼.';
$lang['db_must_set_table'] = 'Ð’Ð¸ Ð¿Ð¾Ð²Ð¸Ð½Ð½Ñ– Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ñ‚Ð°Ð±Ð»Ð¸Ñ†ÑŽ Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ… Ð´Ð»Ñ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½Ñ Ð² Ð·Ð°Ð¿Ð¸Ñ‚Ñ–.';
$lang['db_must_use_set'] = 'Ð’Ð¸ Ð¿Ð¾Ð²Ð¸Ð½Ð½Ñ– Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð¾Ð²ÑƒÐ²Ð°Ñ‚Ð¸ Ð¼ÐµÑ‚Ð¾Ð´ "set" Ð´Ð»Ñ Ð¾Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ Ð·Ð°Ð¿Ð¸ÑÑƒ.';
$lang['db_must_use_index'] = 'ÐŸÐ¾Ñ‚Ñ€Ñ–Ð±Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ñ–Ð½Ð´ÐµÐºÑ Ð´Ð»Ñ Ð¿Ð¾Ñ€Ñ–Ð²Ð½ÑÐ½Ð½Ñ Ð¿Ñ–Ð´ Ñ‡Ð°Ñ Ð¿Ð°ÐºÐµÑ‚Ð½Ð¾Ð³Ð¾ Ð¾Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ.';
$lang['db_batch_missing_index'] = 'ÐžÐ´Ð¸Ð½ Ð°Ð±Ð¾ ÐºÑ–Ð»ÑŒÐºÐ° Ñ€ÑÐ´ÐºÑ–Ð² Ð´Ð»Ñ Ð¿Ð°ÐºÐµÑ‚Ð½Ð¾Ð³Ð¾ Ð¾Ð½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ Ð½Ðµ Ð¼Ñ–ÑÑ‚ÑÑ‚ÑŒ Ð²ÐºÐ°Ð·Ð°Ð½Ð¾Ð³Ð¾ Ñ–Ð½Ð´ÐµÐºÑÑƒ.';
$lang['db_must_use_where'] = 'ÐžÐ½Ð¾Ð²Ð»ÐµÐ½Ð½Ñ Ð´Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ñ– Ð»Ð¸ÑˆÐµ Ð·Ð° Ð½Ð°ÑÐ²Ð½Ð¾ÑÑ‚Ñ– ÑƒÐ¼Ð¾Ð²Ð¸ "where".';
$lang['db_del_must_use_where'] = 'Ð’Ð¸Ð´Ð°Ð»ÐµÐ½Ð½Ñ Ð´Ð¾Ð·Ð²Ð¾Ð»ÐµÐ½Ðµ Ð»Ð¸ÑˆÐµ Ð·Ð° Ð½Ð°ÑÐ²Ð½Ð¾ÑÑ‚Ñ– ÑƒÐ¼Ð¾Ð²Ð¸ "where" Ð°Ð±Ð¾ "like".';
$lang['db_field_param_missing'] = 'Ð”Ð»Ñ Ð¾Ñ‚Ñ€Ð¸Ð¼Ð°Ð½Ð½Ñ Ð¿Ð¾Ð»Ñ–Ð² Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ð½Ð°Ð·Ð²Ñƒ Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ñ– ÑÐº Ð¿Ð°Ñ€Ð°Ð¼ÐµÑ‚Ñ€.';
$lang['db_unsupported_function'] = 'Ð¦Ñ Ñ„ÑƒÐ½ÐºÑ†Ñ–Ñ Ð½ÐµÐ´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð° Ð´Ð»Ñ Ð¾Ð±Ñ€Ð°Ð½Ð¾Ñ— Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ….';
$lang['db_transaction_failure'] = 'ÐŸÐ¾Ð¼Ð¸Ð»ÐºÐ° Ñ‚Ñ€Ð°Ð½Ð·Ð°ÐºÑ†Ñ–Ñ—: Ð²Ð¸ÐºÐ¾Ð½Ð°Ð½Ð¾ Ð²Ñ–Ð´ÐºÐ°Ñ‚.';
$lang['db_unable_to_drop'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²Ð¸Ð´Ð°Ð»Ð¸Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ñƒ Ð±Ð°Ð·Ñƒ Ð´Ð°Ð½Ð¸Ñ….';
$lang['db_unsupported_feature'] = 'ÐÐµÐ¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÐ²Ð°Ð½Ð° Ñ„ÑƒÐ½ÐºÑ†Ñ–Ñ Ð¿Ð»Ð°Ñ‚Ñ„Ð¾Ñ€Ð¼Ð¸ Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ….';
$lang['db_unsupported_compression'] = 'Ð¤Ð¾Ñ€Ð¼Ð°Ñ‚ ÑÑ‚Ð¸ÑÐ½ÐµÐ½Ð½Ñ Ñ„Ð°Ð¹Ð»Ñ–Ð², ÑÐºÐ¸Ð¹ Ð²Ð¸ Ð¾Ð±Ñ€Ð°Ð»Ð¸, Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑ”Ñ‚ÑŒÑÑ ÑÐµÑ€Ð²ÐµÑ€Ð¾Ð¼.';
$lang['db_filepath_error'] = 'ÐÐµÐ¼Ð¾Ð¶Ð»Ð¸Ð²Ð¾ Ð·Ð°Ð¿Ð¸ÑÐ°Ñ‚Ð¸ Ð´Ð°Ð½Ñ– Ð·Ð° Ð²ÐºÐ°Ð·Ð°Ð½Ð¸Ð¼ ÑˆÐ»ÑÑ…Ð¾Ð¼ Ð´Ð¾ Ñ„Ð°Ð¹Ð»Ñƒ.';
$lang['db_invalid_cache_path'] = 'ÐÐ°Ð´Ð°Ð½Ð¾ Ð½ÐµÐ´Ñ–Ð¹ÑÐ½Ð¸Ð¹ Ð°Ð±Ð¾ Ð½ÐµÐ´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð¸Ð¹ ÑˆÐ»ÑÑ… Ð´Ð¾ ÐºÐµÑˆÑƒ.';
$lang['db_table_name_required'] = 'ÐŸÐ¾Ñ‚Ñ€Ñ–Ð±Ð½Ð° Ð½Ð°Ð·Ð²Ð° Ñ‚Ð°Ð±Ð»Ð¸Ñ†Ñ– Ð´Ð»Ñ Ñ†Ñ–Ñ”Ñ— Ð¾Ð¿ÐµÑ€Ð°Ñ†Ñ–Ñ—.';
$lang['db_column_name_required'] = 'ÐŸÐ¾Ñ‚Ñ€Ñ–Ð±Ð½Ð° Ð½Ð°Ð·Ð²Ð° ÑÑ‚Ð¾Ð²Ð¿Ñ†Ñ Ð´Ð»Ñ Ñ†Ñ–Ñ”Ñ— Ð¾Ð¿ÐµÑ€Ð°Ñ†Ñ–Ñ—.';
$lang['db_column_definition_required'] = 'ÐŸÐ¾Ñ‚Ñ€Ñ–Ð±Ð½Ðµ Ð²Ð¸Ð·Ð½Ð°Ñ‡ÐµÐ½Ð½Ñ ÑÑ‚Ð¾Ð²Ð¿Ñ†Ñ Ð´Ð»Ñ Ñ†Ñ–Ñ”Ñ— Ð¾Ð¿ÐµÑ€Ð°Ñ†Ñ–Ñ—.';
$lang['db_unable_to_set_charset'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²ÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚Ð¸ ÐºÐ¾Ð´ÑƒÐ²Ð°Ð½Ð½Ñ ÐºÐ»Ñ–Ñ”Ð½Ñ‚ÑÑŒÐºÐ¾Ð³Ð¾ Ð·â€™Ñ”Ð´Ð½Ð°Ð½Ð½Ñ: %s';
$lang['db_error_heading'] = 'Ð¡Ñ‚Ð°Ð»Ð°ÑÑ Ð¿Ð¾Ð¼Ð¸Ð»ÐºÐ° Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ…';
