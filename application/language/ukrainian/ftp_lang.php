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

$lang['ftp_no_connection'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð½Ð°Ð¹Ñ‚Ð¸ Ð´Ñ–Ð¹ÑÐ½Ð¸Ð¹ Ñ–Ð´ÐµÐ½Ñ‚Ð¸Ñ„Ñ–ÐºÐ°Ñ‚Ð¾Ñ€ Ð·â€™Ñ”Ð´Ð½Ð°Ð½Ð½Ñ. ÐŸÐµÑ€ÐµÐºÐ¾Ð½Ð°Ð¹Ñ‚ÐµÑÑ, Ñ‰Ð¾ Ð²Ð¸ Ð¿Ñ–Ð´ÐºÐ»ÑŽÑ‡ÐµÐ½Ñ–, Ð¿ÐµÑ€Ñˆ Ð½Ñ–Ð¶ Ð²Ð¸ÐºÐ¾Ð½ÑƒÐ²Ð°Ñ‚Ð¸ Ð±ÑƒÐ´ÑŒ-ÑÐºÑ– Ð¾Ð¿ÐµÑ€Ð°Ñ†Ñ–Ñ— Ð· Ñ„Ð°Ð¹Ð»Ð°Ð¼Ð¸.';
$lang['ftp_unable_to_connect'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð¿Ñ–Ð´ÐºÐ»ÑŽÑ‡Ð¸Ñ‚Ð¸ÑÑ Ð´Ð¾ FTP-ÑÐµÑ€Ð²ÐµÑ€Ð° Ð·Ð° Ð²ÐºÐ°Ð·Ð°Ð½Ð¸Ð¼ Ñ…Ð¾ÑÑ‚Ð¾Ð¼.';
$lang['ftp_unable_to_login'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ ÑƒÐ²Ñ–Ð¹Ñ‚Ð¸ Ð½Ð° FTP-ÑÐµÑ€Ð²ÐµÑ€. ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ñ–Ð¼â€™Ñ ÐºÐ¾Ñ€Ð¸ÑÑ‚ÑƒÐ²Ð°Ñ‡Ð° Ñ‚Ð° Ð¿Ð°Ñ€Ð¾Ð»ÑŒ.';
$lang['ftp_unable_to_mkdir'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ ÑÑ‚Ð²Ð¾Ñ€Ð¸Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ñƒ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ñ–ÑŽ.';
$lang['ftp_unable_to_changedir'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð¼Ñ–Ð½Ð¸Ñ‚Ð¸ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ñ–ÑŽ.';
$lang['ftp_unable_to_chmod'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²ÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚Ð¸ Ð¿Ñ€Ð°Ð²Ð° Ð´Ð¾ÑÑ‚ÑƒÐ¿Ñƒ Ð´Ð¾ Ñ„Ð°Ð¹Ð»Ñƒ. ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ–ÑÑ‚ÑŒ ÑˆÐ»ÑÑ…Ñƒ.';
$lang['ftp_unable_to_upload'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð°Ð²Ð°Ð½Ñ‚Ð°Ð¶Ð¸Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ð¸Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ–ÑÑ‚ÑŒ ÑˆÐ»ÑÑ…Ñƒ.';
$lang['ftp_unable_to_download'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð°Ð²Ð°Ð½Ñ‚Ð°Ð¶Ð¸Ñ‚Ð¸ Ð²ÐºÐ°Ð·Ð°Ð½Ð¸Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ–ÑÑ‚ÑŒ ÑˆÐ»ÑÑ…Ñƒ.';
$lang['ftp_no_source_file'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð½Ð°Ð¹Ñ‚Ð¸ Ð²Ð¸Ñ…Ñ–Ð´Ð½Ð¸Ð¹ Ñ„Ð°Ð¹Ð». ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ–ÑÑ‚ÑŒ ÑˆÐ»ÑÑ…Ñƒ.';
$lang['ftp_unable_to_rename'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð¿ÐµÑ€ÐµÐ¹Ð¼ÐµÐ½ÑƒÐ²Ð°Ñ‚Ð¸ Ñ„Ð°Ð¹Ð».';
$lang['ftp_unable_to_delete'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð²Ð¸Ð´Ð°Ð»Ð¸Ñ‚Ð¸ Ñ„Ð°Ð¹Ð».';
$lang['ftp_unable_to_move'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð¿ÐµÑ€ÐµÐ¼Ñ–ÑÑ‚Ð¸Ñ‚Ð¸ Ñ„Ð°Ð¹Ð». ÐŸÐµÑ€ÐµÐºÐ¾Ð½Ð°Ð¹Ñ‚ÐµÑÑ, Ñ‰Ð¾ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ñ–Ñ Ð¿Ñ€Ð¸Ð·Ð½Ð°Ñ‡ÐµÐ½Ð½Ñ Ñ–ÑÐ½ÑƒÑ”.';
