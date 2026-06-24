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

$lang['ftp_no_connection'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð¹Ñ‚Ð¸ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð¸Ð´ÐµÐ½Ñ‚Ð¸Ñ„Ð¸ÐºÐ°Ñ‚Ð¾Ñ€ ÑÐ¾ÐµÐ´Ð¸Ð½ÐµÐ½Ð¸Ñ. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, ÑƒÐ±ÐµÐ´Ð¸Ñ‚ÐµÑÑŒ, Ñ‡Ñ‚Ð¾ Ð²Ñ‹ Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡ÐµÐ½Ñ‹, Ð¿Ñ€ÐµÐ¶Ð´Ðµ Ñ‡ÐµÐ¼ Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÑÑ‚ÑŒ Ð»ÑŽÐ±Ñ‹Ðµ Ð¾Ð¿ÐµÑ€Ð°Ñ†Ð¸Ð¸ Ñ Ñ„Ð°Ð¹Ð»Ð°Ð¼Ð¸.';
$lang['ftp_unable_to_connect'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾Ð´ÐºÐ»ÑŽÑ‡Ð¸Ñ‚ÑŒÑÑ Ðº FTP-ÑÐµÑ€Ð²ÐµÑ€Ñƒ, Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·ÑƒÑ ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ð¾Ðµ Ð¸Ð¼Ñ Ñ…Ð¾ÑÑ‚Ð°.';
$lang['ftp_unable_to_login'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð²Ð¾Ð¹Ñ‚Ð¸ Ð½Ð° Ð²Ð°Ñˆ FTP-ÑÐµÑ€Ð²ÐµÑ€. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð¸Ð¼Ñ Ð¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÐµÐ»Ñ Ð¸ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ.';
$lang['ftp_unable_to_mkdir'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐ¾Ð·Ð´Ð°Ñ‚ÑŒ ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ñ‹Ð¹ Ð²Ð°Ð¼Ð¸ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³.';
$lang['ftp_unable_to_changedir'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐ¼ÐµÐ½Ð¸Ñ‚ÑŒ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³Ð¸.';
$lang['ftp_unable_to_chmod'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚ÑŒ Ñ€Ð°Ð·Ñ€ÐµÑˆÐµÐ½Ð¸Ñ Ð½Ð° Ñ„Ð°Ð¹Ð». ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð¿ÑƒÑ‚ÑŒ.';
$lang['ftp_unable_to_upload'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð·Ð°Ð³Ñ€ÑƒÐ·Ð¸Ñ‚ÑŒ ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð¿ÑƒÑ‚ÑŒ.';
$lang['ftp_unable_to_download'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐºÐ°Ñ‡Ð°Ñ‚ÑŒ ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð¿ÑƒÑ‚ÑŒ.';
$lang['ftp_no_source_file'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð¹Ñ‚Ð¸ Ð¸ÑÑ…Ð¾Ð´Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, Ð¿Ñ€Ð¾Ð²ÐµÑ€ÑŒÑ‚Ðµ Ð¿ÑƒÑ‚ÑŒ.';
$lang['ftp_unable_to_rename'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿ÐµÑ€ÐµÐ¸Ð¼ÐµÐ½Ð¾Ð²Ð°Ñ‚ÑŒ Ñ„Ð°Ð¹Ð».';
$lang['ftp_unable_to_delete'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑƒÐ´Ð°Ð»Ð¸Ñ‚ÑŒ Ñ„Ð°Ð¹Ð».';
$lang['ftp_unable_to_move'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿ÐµÑ€ÐµÐ¼ÐµÑÑ‚Ð¸Ñ‚ÑŒ Ñ„Ð°Ð¹Ð». Ð£Ð±ÐµÐ´Ð¸Ñ‚ÐµÑÑŒ, Ñ‡Ñ‚Ð¾ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³ Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚.';
