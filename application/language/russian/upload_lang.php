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

$lang['upload_userfile_not_set'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð¹Ñ‚Ð¸ Ð·Ð°Ð¿Ñ€Ð¾ÑˆÐµÐ½Ð½ÑƒÑŽ Ð¿ÐµÑ€ÐµÐ¼ÐµÐ½Ð½ÑƒÑŽ Ñ Ð¸Ð¼ÐµÐ½ÐµÐ¼ userfile.';
$lang['upload_file_exceeds_limit'] = 'Ð—Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð» Ð¿Ñ€ÐµÐ²Ñ‹ÑˆÐ°ÐµÑ‚ Ð¼Ð°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ð¾ Ð´Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð¼Ñ‹Ð¹ Ñ€Ð°Ð·Ð¼ÐµÑ€ Ð² Ð²Ð°ÑˆÐµÐ¼ ÐºÐ¾Ð½Ñ„Ð¸Ð³ÑƒÑ€Ð°Ñ†Ð¸Ð¾Ð½Ð½Ð¾Ð¼ Ñ„Ð°Ð¹Ð»Ðµ PHP.';
$lang['upload_file_exceeds_form_limit'] = 'Ð—Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð» Ð¿Ñ€ÐµÐ²Ñ‹ÑˆÐ°ÐµÑ‚ Ð¼Ð°ÐºÑÐ¸Ð¼Ð°Ð»ÑŒÐ½Ñ‹Ð¹ Ñ€Ð°Ð·Ð¼ÐµÑ€, Ñ€Ð°Ð·Ñ€ÐµÑˆÐµÐ½Ð½Ñ‹Ð¹ Ñ„Ð¾Ñ€Ð¼Ð¾Ð¹ Ð¾Ñ‚Ð¿Ñ€Ð°Ð²ÐºÐ¸.';
$lang['upload_file_partial'] = 'Ð¤Ð°Ð¹Ð» Ð±Ñ‹Ð» Ð·Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ‡Ð°ÑÑ‚Ð¸Ñ‡Ð½Ð¾.';
$lang['upload_no_temp_directory'] = 'Ð’Ñ€ÐµÐ¼ÐµÐ½Ð½Ð°Ñ Ð¿Ð°Ð¿ÐºÐ° Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÐµÑ‚.';
$lang['upload_unable_to_write_file'] = 'Ð¤Ð°Ð¹Ð» Ð½Ðµ Ð¼Ð¾Ð¶ÐµÑ‚ Ð±Ñ‹Ñ‚ÑŒ Ð·Ð°Ð¿Ð¸ÑÐ°Ð½ Ð½Ð° Ð´Ð¸ÑÐº.';
$lang['upload_stopped_by_extension'] = 'Ð—Ð°Ð³Ñ€ÑƒÐ·ÐºÐ° Ñ„Ð°Ð¹Ð»Ð° Ð±Ñ‹Ð»Ð° Ð¾ÑÑ‚Ð°Ð½Ð¾Ð²Ð»ÐµÐ½Ð° Ñ€Ð°ÑÑˆÐ¸Ñ€ÐµÐ½Ð¸ÐµÐ¼.';
$lang['upload_no_file_selected'] = 'Ð’Ñ‹ Ð½Ðµ Ð²Ñ‹Ð±Ñ€Ð°Ð»Ð¸ Ñ„Ð°Ð¹Ð» Ð´Ð»Ñ Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐ¸.';
$lang['upload_invalid_filetype'] = 'Ð¢Ð¸Ð¿ Ñ„Ð°Ð¹Ð»Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð²Ñ‹ Ð¿Ñ‹Ñ‚Ð°ÐµÑ‚ÐµÑÑŒ Ð·Ð°Ð³Ñ€ÑƒÐ·Ð¸Ñ‚ÑŒ, Ð½Ðµ Ñ€Ð°Ð·Ñ€ÐµÑˆÐµÐ½.';
$lang['upload_invalid_filesize'] = 'Ð Ð°Ð·Ð¼ÐµÑ€ Ñ„Ð°Ð¹Ð»Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð²Ñ‹ Ð¿Ñ‹Ñ‚Ð°ÐµÑ‚ÐµÑÑŒ Ð·Ð°Ð³Ñ€ÑƒÐ·Ð¸Ñ‚ÑŒ, Ð¿Ñ€ÐµÐ²Ñ‹ÑˆÐ°ÐµÑ‚ Ð´Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð¼Ñ‹Ð¹.';
$lang['upload_invalid_dimensions'] = 'Ð˜Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ, ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ðµ Ð²Ñ‹ Ð¿Ñ‹Ñ‚Ð°ÐµÑ‚ÐµÑÑŒ Ð·Ð°Ð³Ñ€ÑƒÐ·Ð¸Ñ‚ÑŒ, Ð½Ðµ ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÑƒÐµÑ‚ Ð´Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð¼Ñ‹Ð¼ Ñ€Ð°Ð·Ð¼ÐµÑ€Ð°Ð¼.';
$lang['upload_destination_error'] = 'ÐŸÑ€Ð¸ Ð¿Ð¾Ð¿Ñ‹Ñ‚ÐºÐµ Ð¿ÐµÑ€ÐµÐ¼ÐµÑÑ‚Ð¸Ñ‚ÑŒ Ð·Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½Ð½Ñ‹Ð¹ Ñ„Ð°Ð¹Ð» Ð² ÐºÐ¾Ð½ÐµÑ‡Ð½Ñ‹Ð¹ Ð¿ÑƒÐ½ÐºÑ‚ Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ Ð²Ð¾Ð·Ð½Ð¸ÐºÐ»Ð° Ð¿Ñ€Ð¾Ð±Ð»ÐµÐ¼Ð°.';
$lang['upload_no_filepath'] = 'ÐŸÑƒÑ‚ÑŒ Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐ¸ Ð½Ðµ ÑÐ²Ð»ÑÐµÑ‚ÑÑ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¼.';
$lang['upload_no_file_types'] = 'Ð’Ñ‹ Ð½Ðµ ÑƒÐºÐ°Ð·Ð°Ð»Ð¸ Ð½Ð¸ Ð¾Ð´Ð½Ð¾Ð³Ð¾ Ñ€Ð°Ð·Ñ€ÐµÑˆÐµÐ½Ð½Ð¾Ð³Ð¾ Ñ‚Ð¸Ð¿Ð° Ñ„Ð°Ð¹Ð»Ð¾Ð².';
$lang['upload_bad_filename'] = 'Ð˜Ð¼Ñ Ñ„Ð°Ð¹Ð»Ð°, ÐºÐ¾Ñ‚Ð¾Ñ€Ð¾Ðµ Ð²Ñ‹ Ð¿Ñ€ÐµÐ´Ð¾ÑÑ‚Ð°Ð²Ð¸Ð»Ð¸, ÑƒÐ¶Ðµ ÑÑƒÑ‰ÐµÑÑ‚Ð²ÑƒÐµÑ‚ Ð½Ð° ÑÐµÑ€Ð²ÐµÑ€Ðµ.';
$lang['upload_not_writable'] = 'ÐŸÐ¾Ñ…Ð¾Ð¶Ðµ, Ñ‡Ñ‚Ð¾ Ð¿Ð°Ð¿ÐºÐ° Ð½Ð°Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ñ Ð·Ð°Ð³Ñ€ÑƒÐ·ÐºÐ¸ Ð½Ðµ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð° Ð´Ð»Ñ Ð·Ð°Ð¿Ð¸ÑÐ¸.';
