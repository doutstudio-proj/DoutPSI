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

$lang['db_invalid_connection_str'] = '×œ× × ×™×ª×Ÿ ×œ×§×‘×•×¢ ××ª ×”×’×“×¨×•×ª ×ž×¡×“ ×”× ×ª×•× ×™× ×‘×”×ª×‘×¡×¡ ×¢×œ ×ž×—×¨×•×–×ª ×”×—×™×‘×•×¨ ×©×”×’×©×ª.';
$lang['db_unable_to_connect'] = '×œ× × ×™×ª×Ÿ ×œ×”×ª×—×‘×¨ ×œ×©×¨×ª ×ž×¡×“ ×”× ×ª×•× ×™× ×©×œ×š ×‘××ž×¦×¢×•×ª ×”×”×’×“×¨×•×ª ×©×¡×•×¤×§×•.';
$lang['db_unable_to_select'] = '×œ× × ×™×ª×Ÿ ×œ×‘×—×•×¨ ××ª ×ž×¡×“ ×”× ×ª×•× ×™× ×©×¦×•×™×Ÿ: %s';
$lang['db_unable_to_create'] = '×œ× × ×™×ª×Ÿ ×œ×™×¦×•×¨ ××ª ×ž×¡×“ ×”× ×ª×•× ×™× ×©×¦×•×™×Ÿ: %s';
$lang['db_invalid_query'] = '×”×©××™×œ×ª×” ×©×©×œ×—×ª ××™× ×” ×—×•×§×™×ª.';
$lang['db_must_set_table'] = '×¢×œ×™×š ×œ×”×’×“×™×¨ ××ª ×˜×‘×œ×ª ×ž×¡×“ ×”× ×ª×•× ×™× ×©×ª×©×ª×ž×© ×‘×” ×¢× ×”×©××™×œ×ª×” ×©×œ×š.';
$lang['db_must_use_set'] = '×¢×œ×™×š ×œ×”×©×ª×ž×© ×‘ "set" ×›×“×™ ×œ×¢×“×›×Ÿ ×¢×¨×š.';
$lang['db_must_use_index'] = '×¢×œ×™×š ×œ×¦×™×™×Ÿ ××™× ×“×§×¡ ×œ×”×ª××ž×” ×œ×¢×“×›×•× ×™× ×›×•×œ×œ×™×.';
$lang['db_batch_missing_index'] = '×‘×©×•×¨×” ××—×ª ××• ×™×•×ª×¨ ×©× ×©×œ×—×• ×œ×¢×“×›×•× ×™× ×›×•×œ×œ×™× ×—×¡×¨ ×”××™× ×“×§×¡ ×©×¦×•×™×Ÿ.';
$lang['db_must_use_where'] = '×”×¢×“×›×•× ×™× ××™× × ×ž×•×¨×©×™× ××œ× ×× ×›×Ÿ ×”× ×ž×›×™×œ×™× ×¡×¢×™×£ "where".';
$lang['db_del_must_use_where'] = '×ž×—×™×§×•×ª ××™× ×Ÿ ×ž×•×¨×©×•×ª ××œ× ×× ×›×Ÿ ×”×Ÿ ×ž×›×™×œ×•×ª ×¡×¢×™×£ "where" ××• "like".';
$lang['db_field_param_missing'] = '×›×“×™ ×œ×©×œ×•×£ ×©×“×•×ª × ×“×¨×©×™× ×™×© ×œ×ª×ª ×©× ×œ×˜×‘×œ×” ×›×¤×¨×ž×˜×¨.';
$lang['db_unsupported_function'] = '×ª×›×•× ×” ×–×• ××™× ×” ×–×ž×™× ×” ×¢×‘×•×¨ ×ž×¡×“ ×”× ×ª×•× ×™× ×©×‘×• ××ª×” ×ž×©×ª×ž×©.';
$lang['db_transaction_failure'] = '×”×¤×¢×•×œ×” ×›×©×œ×”: ×‘×•×¦×¢ ×©×—×–×•×¨.';
$lang['db_unable_to_drop'] = '×œ× × ×™×ª×Ÿ ×œ×”×¡×™×¨ ××ª ×ž×¡×“ ×”× ×ª×•× ×™× ×©×¦×•×™×Ÿ.';
$lang['db_unsupported_feature'] = '×ª×›×•× ×” ×œ× × ×ª×ž×›×ª ×‘×¤×œ×˜×¤×•×¨×ž×ª ×ž×¡×“ ×”× ×ª×•× ×™× ×‘×” ××ª×” ×ž×©×ª×ž×©.';
$lang['db_unsupported_compression'] = '×¤×•×¨×ž×˜ ×“×—×™×¡×ª ×”×§×‘×¦×™× ×©×‘×—×¨×ª ××™× ×• × ×ª×ž×š ×¢×œ ×™×“×™ ×”×©×¨×ª ×©×œ×š.';
$lang['db_filepath_error'] = '×œ× × ×™×ª×Ÿ ×œ×›×ª×•×‘ × ×ª×•× ×™× ×œ× ×ª×™×‘ ×”×ž×‘×•×§×©.';
$lang['db_invalid_cache_path'] = '× ×ª×™×‘ ×–×™×›×¨×•×Ÿ ×”×ž×˜×ž×•×Ÿ ×©×©×œ×—×ª ××™× ×• ×ª×§×™×Ÿ ××• ×©××™× ×• × ×™×ª×Ÿ ×œ×›×ª×™×‘×”.';
$lang['db_table_name_required'] = '× ×“×¨×© ×©× ×œ×˜×‘×œ×” ×‘×›×“×™ ×œ×‘×¦×¢ ×¤×¢×•×œ×” ×–×•.';
$lang['db_column_name_required'] = '× ×“×¨×© ×œ×ª×ª ×©× ×œ×¢×ž×•×“×” ×‘×›×“×™ ×œ×‘×¦×¢ ×¤×¢×•×œ×” ×–×•.';
$lang['db_column_definition_required'] = '×™×© ×¦×•×¨×š ×œ×”×’×“×™×¨ ××ª ×”×¢×ž×•×“×” ×‘×›×“×™ ×œ×‘×¦×¢ ×¤×¢×•×œ×” ×–×•.';
$lang['db_unable_to_set_charset'] = '×œ× × ×™×ª×Ÿ ×œ×‘×¦×¢ ×—×™×‘×•×¨ ×œ×§×•×— ×¢×‘×•×¨ ×¡×˜ ×ª×•×•×™× ×–×”: %s';
$lang['db_error_heading'] = '×©×’×™××ª ×ž×¡×“ × ×ª×•× ×™×';
