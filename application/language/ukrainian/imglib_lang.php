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

$lang['imglib_source_image_required'] = 'Ð£ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½ÑÑ… Ð¿Ð¾Ñ‚Ñ€Ñ–Ð±Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ Ð²Ð¸Ñ…Ñ–Ð´Ð½Ðµ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ.';
$lang['imglib_gd_required'] = 'Ð”Ð»Ñ Ñ†Ñ–Ñ”Ñ— Ñ„ÑƒÐ½ÐºÑ†Ñ–Ñ— Ð¿Ð¾Ñ‚Ñ€Ñ–Ð±Ð½Ð° Ð±Ñ–Ð±Ð»Ñ–Ð¾Ñ‚ÐµÐºÐ° Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ GD.';
$lang['imglib_gd_required_for_props'] = 'Ð’Ð°Ñˆ ÑÐµÑ€Ð²ÐµÑ€ Ð¿Ð¾Ð²Ð¸Ð½ÐµÐ½ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÐ²Ð°Ñ‚Ð¸ Ð±Ñ–Ð±Ð»Ñ–Ð¾Ñ‚ÐµÐºÑƒ GD Ð´Ð»Ñ Ð²Ð¸Ð·Ð½Ð°Ñ‡ÐµÐ½Ð½Ñ Ð²Ð»Ð°ÑÑ‚Ð¸Ð²Ð¾ÑÑ‚ÐµÐ¹ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ.';
$lang['imglib_unsupported_imagecreate'] = 'Ð’Ð°Ñˆ ÑÐµÑ€Ð²ÐµÑ€ Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑ” Ñ„ÑƒÐ½ÐºÑ†Ñ–ÑŽ GD, Ð½ÐµÐ¾Ð±Ñ…Ñ–Ð´Ð½Ñƒ Ð´Ð»Ñ Ð¾Ð±Ñ€Ð¾Ð±ÐºÐ¸ Ñ†ÑŒÐ¾Ð³Ð¾ Ñ‚Ð¸Ð¿Ñƒ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ.';
$lang['imglib_gif_not_supported'] = 'Ð—Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ GIF Ñ‡Ð°ÑÑ‚Ð¾ Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑŽÑ‚ÑŒÑÑ Ñ‡ÐµÑ€ÐµÐ· Ð¾Ð±Ð¼ÐµÐ¶ÐµÐ½Ð½Ñ Ð»Ñ–Ñ†ÐµÐ½Ð·Ñ–Ñ—. Ð¡Ð¿Ñ€Ð¾Ð±ÑƒÐ¹Ñ‚Ðµ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ñ‚Ð¸ JPG Ð°Ð±Ð¾ PNG.';
$lang['imglib_jpg_not_supported'] = 'Ð—Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ JPG Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑŽÑ‚ÑŒÑÑ.';
$lang['imglib_png_not_supported'] = 'Ð—Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ PNG Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑŽÑ‚ÑŒÑÑ.';
$lang['imglib_jpg_or_png_required'] = 'ÐŸÑ€Ð¾Ñ‚Ð¾ÐºÐ¾Ð» Ð·Ð¼Ñ–Ð½Ð¸ Ñ€Ð¾Ð·Ð¼Ñ–Ñ€Ñƒ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ, Ð²ÐºÐ°Ð·Ð°Ð½Ð¸Ð¹ Ñƒ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½ÑÑ…, Ð¿Ñ€Ð°Ñ†ÑŽÑ” Ð»Ð¸ÑˆÐµ Ð· Ñ‚Ð¸Ð¿Ð°Ð¼Ð¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ JPEG Ð°Ð±Ð¾ PNG.';
$lang['imglib_copy_error'] = 'Ð’Ð¸Ð½Ð¸ÐºÐ»Ð° Ð¿Ð¾Ð¼Ð¸Ð»ÐºÐ° Ð¿Ñ–Ð´ Ñ‡Ð°Ñ ÑÐ¿Ñ€Ð¾Ð±Ð¸ Ð·Ð°Ð¼Ñ–Ð½Ð¸Ñ‚Ð¸ Ñ„Ð°Ð¹Ð». ÐŸÐµÑ€ÐµÐºÐ¾Ð½Ð°Ð¹Ñ‚ÐµÑÑ, Ñ‰Ð¾ Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ñ–Ñ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð° Ð´Ð»Ñ Ð·Ð°Ð¿Ð¸ÑÑƒ.';
$lang['imglib_rotate_unsupported'] = 'ÐžÐ±ÐµÑ€Ñ‚Ð°Ð½Ð½Ñ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ, Ð¹Ð¼Ð¾Ð²Ñ–Ñ€Ð½Ð¾, Ð½Ðµ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑ”Ñ‚ÑŒÑÑ Ð²Ð°ÑˆÐ¸Ð¼ ÑÐµÑ€Ð²ÐµÑ€Ð¾Ð¼.';
$lang['imglib_libpath_invalid'] = 'Ð¨Ð»ÑÑ… Ð´Ð¾ Ð²Ð°ÑˆÐ¾Ñ— Ð±Ñ–Ð±Ð»Ñ–Ð¾Ñ‚ÐµÐºÐ¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ Ð½ÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¸Ð¹. Ð£ÐºÐ°Ð¶Ñ–Ñ‚ÑŒ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¸Ð¹ ÑˆÐ»ÑÑ… Ñƒ Ð½Ð°Ð»Ð°ÑˆÑ‚ÑƒÐ²Ð°Ð½Ð½ÑÑ….';
$lang['imglib_image_process_failed'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð¾Ð±Ñ€Ð¾Ð±Ð¸Ñ‚Ð¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ. ÐŸÐµÑ€ÐµÐ²Ñ–Ñ€Ñ‚Ðµ, Ñ‡Ð¸ Ð¿Ñ–Ð´Ñ‚Ñ€Ð¸Ð¼ÑƒÑ” ÑÐµÑ€Ð²ÐµÑ€ Ð¾Ð±Ñ€Ð°Ð½Ð¸Ð¹ Ð¿Ñ€Ð¾Ñ‚Ð¾ÐºÐ¾Ð» Ñ– Ñ‡Ð¸ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾ Ð²ÐºÐ°Ð·Ð°Ð½Ð¾ ÑˆÐ»ÑÑ… Ð´Ð¾ Ð±Ñ–Ð±Ð»Ñ–Ð¾Ñ‚ÐµÐºÐ¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½ÑŒ.';
$lang['imglib_rotation_angle_required'] = 'Ð”Ð»Ñ Ð¾Ð±ÐµÑ€Ñ‚Ð°Ð½Ð½Ñ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ Ð¿Ð¾Ñ‚Ñ€Ñ–Ð±Ð½Ð¾ Ð²ÐºÐ°Ð·Ð°Ñ‚Ð¸ ÐºÑƒÑ‚.';
$lang['imglib_invalid_path'] = 'Ð¨Ð»ÑÑ… Ð´Ð¾ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ Ð²ÐºÐ°Ð·Ð°Ð½Ð¾ Ð½ÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾.';
$lang['imglib_invalid_image'] = 'ÐÐ°Ð´Ð°Ð½Ðµ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ Ñ” Ð½ÐµÐ´Ñ–Ð¹ÑÐ½Ð¸Ð¼.';
$lang['imglib_copy_failed'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ ÑÐºÐ¾Ð¿Ñ–ÑŽÐ²Ð°Ñ‚Ð¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ.';
$lang['imglib_missing_font'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð½Ð°Ð¹Ñ‚Ð¸ ÑˆÑ€Ð¸Ñ„Ñ‚ Ð´Ð»Ñ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ð½Ñ.';
$lang['imglib_save_failed'] = 'ÐÐµ Ð²Ð´Ð°Ð»Ð¾ÑÑ Ð·Ð±ÐµÑ€ÐµÐ³Ñ‚Ð¸ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ. ÐŸÐµÑ€ÐµÐºÐ¾Ð½Ð°Ð¹Ñ‚ÐµÑÑ, Ñ‰Ð¾ Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð½Ñ Ñ‚Ð° Ð´Ð¸Ñ€ÐµÐºÑ‚Ð¾Ñ€Ñ–Ñ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ñ– Ð´Ð»Ñ Ð·Ð°Ð¿Ð¸ÑÑƒ.';
