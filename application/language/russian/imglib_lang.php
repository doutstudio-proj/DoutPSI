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

$lang['imglib_source_image_required'] = 'Ð’Ñ‹ Ð´Ð¾Ð»Ð¶Ð½Ñ‹ ÑƒÐºÐ°Ð·Ð°Ñ‚ÑŒ Ð¸ÑÑ…Ð¾Ð´Ð½Ð¾Ðµ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ Ð² Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ñ….';
$lang['imglib_gd_required'] = 'Ð”Ð»Ñ ÑÑ‚Ð¾Ð¹ Ñ„ÑƒÐ½ÐºÑ†Ð¸Ð¸ Ñ‚Ñ€ÐµÐ±ÑƒÐµÑ‚ÑÑ Ð±Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÐ° Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹ GD.';
$lang['imglib_gd_required_for_props'] = 'Ð’Ð°Ñˆ ÑÐµÑ€Ð²ÐµÑ€ Ð´Ð¾Ð»Ð¶ÐµÐ½ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°Ñ‚ÑŒ Ð±Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÑƒ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹ GD, Ñ‡Ñ‚Ð¾Ð±Ñ‹ Ð¾Ð¿Ñ€ÐµÐ´ÐµÐ»Ð¸Ñ‚ÑŒ ÑÐ²Ð¾Ð¹ÑÑ‚Ð²Ð° Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ.';
$lang['imglib_unsupported_imagecreate'] = 'Ð’Ð°Ñˆ ÑÐµÑ€Ð²ÐµÑ€ Ð½Ðµ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÐµÑ‚ Ñ„ÑƒÐ½ÐºÑ†Ð¸ÑŽ GD, Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼ÑƒÑŽ Ð´Ð»Ñ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ¸ ÑÑ‚Ð¾Ð³Ð¾ Ñ‚Ð¸Ð¿Ð° Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹.';
$lang['imglib_gif_not_supported'] = 'Ð˜Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ GIF Ñ‡Ð°ÑÑ‚Ð¾ Ð½Ðµ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÑŽÑ‚ÑÑ Ð¸Ð·-Ð·Ð° Ð»Ð¸Ñ†ÐµÐ½Ð·Ð¸Ð¾Ð½Ð½Ñ‹Ñ… Ð¾Ð³Ñ€Ð°Ð½Ð¸Ñ‡ÐµÐ½Ð¸Ð¹. Ð’Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾, Ð²Ð¼ÐµÑÑ‚Ð¾ Ð½Ð¸Ñ… Ð¿Ñ€Ð¸Ð´ÐµÑ‚ÑÑ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ñ‚ÑŒ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ JPG Ð¸Ð»Ð¸ PNG.';
$lang['imglib_jpg_not_supported'] = 'Ð˜Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ JPG Ð½Ðµ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÑŽÑ‚ÑÑ.';
$lang['imglib_png_not_supported'] = 'Ð˜Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ PNG Ð½Ðµ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÑŽÑ‚ÑÑ.';
$lang['imglib_jpg_or_png_required'] = 'ÐŸÑ€Ð¾Ñ‚Ð¾ÐºÐ¾Ð» Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½Ð¸Ñ Ñ€Ð°Ð·Ð¼ÐµÑ€Ð° Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ, ÑƒÐºÐ°Ð·Ð°Ð½Ð½Ñ‹Ð¹ Ð² Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ñ…, Ñ€Ð°Ð±Ð¾Ñ‚Ð°ÐµÑ‚ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑÐ¼Ð¸ Ñ‚Ð¸Ð¿Ð° JPEG Ð¸Ð»Ð¸ PNG.';
$lang['imglib_copy_error'] = 'ÐŸÑ€Ð¸ Ð¿Ð¾Ð¿Ñ‹Ñ‚ÐºÐµ Ð·Ð°Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ Ñ„Ð°Ð¹Ð» Ð²Ð¾Ð·Ð½Ð¸ÐºÐ»Ð° Ð¾ÑˆÐ¸Ð±ÐºÐ°. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, ÑƒÐ±ÐµÐ´Ð¸Ñ‚ÐµÑÑŒ, Ñ‡Ñ‚Ð¾ Ð²Ð°Ñˆ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³ Ñ„Ð°Ð¹Ð»Ð¾Ð² Ð´Ð¾ÑÑ‚ÑƒÐ¿ÐµÐ½ Ð´Ð»Ñ Ð·Ð°Ð¿Ð¸ÑÐ¸.';
$lang['imglib_rotate_unsupported'] = 'ÐŸÐ¾Ñ…Ð¾Ð¶Ðµ, Ñ‡Ñ‚Ð¾ Ð¿Ð¾Ð²Ð¾Ñ€Ð¾Ñ‚ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ Ð½Ðµ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÐµÑ‚ÑÑ Ð²Ð°ÑˆÐ¸Ð¼ ÑÐµÑ€Ð²ÐµÑ€Ð¾Ð¼.';
$lang['imglib_libpath_invalid'] = 'ÐÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾ ÑƒÐºÐ°Ð·Ð°Ð½ Ð¿ÑƒÑ‚ÑŒ Ðº Ð±Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÐµ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹. ÐŸÐ¾Ð¶Ð°Ð»ÑƒÐ¹ÑÑ‚Ð°, ÑƒÑÑ‚Ð°Ð½Ð¾Ð²Ð¸Ñ‚Ðµ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ Ð¿ÑƒÑ‚ÑŒ Ð² Ð½Ð°ÑÑ‚Ñ€Ð¾Ð¹ÐºÐ°Ñ… Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ.';
$lang['imglib_image_process_failed'] = 'Ð¡Ð±Ð¾Ð¹ Ð¾Ð±Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ¸ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ. Ð£Ð±ÐµÐ´Ð¸Ñ‚ÐµÑÑŒ, Ñ‡Ñ‚Ð¾ Ð²Ð°Ñˆ ÑÐµÑ€Ð²ÐµÑ€ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶Ð¸Ð²Ð°ÐµÑ‚ Ð²Ñ‹Ð±Ñ€Ð°Ð½Ð½Ñ‹Ð¹ Ð¿Ñ€Ð¾Ñ‚Ð¾ÐºÐ¾Ð» Ð¸ Ñ‡Ñ‚Ð¾ Ð¿ÑƒÑ‚ÑŒ Ðº Ð±Ð¸Ð±Ð»Ð¸Ð¾Ñ‚ÐµÐºÐµ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ð¹ ÑƒÐºÐ°Ð·Ð°Ð½ Ð¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ð¾.';
$lang['imglib_rotation_angle_required'] = 'Ð”Ð»Ñ Ð¿Ð¾Ð²Ð¾Ñ€Ð¾Ñ‚Ð° Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ Ð½ÐµÐ¾Ð±Ñ…Ð¾Ð´Ð¸Ð¼ ÑƒÐ³Ð¾Ð» Ð¿Ð¾Ð²Ð¾Ñ€Ð¾Ñ‚Ð°.';
$lang['imglib_invalid_path'] = 'ÐŸÑƒÑ‚ÑŒ Ðº Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸ÑŽ ÑƒÐºÐ°Ð·Ð°Ð½ Ð½ÐµÐ²ÐµÑ€Ð½Ð¾.';
$lang['imglib_invalid_image'] = 'ÐŸÑ€ÐµÐ´Ð¾ÑÑ‚Ð°Ð²Ð»ÐµÐ½Ð½Ð¾Ðµ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ Ð½ÐµÐ´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ð¾.';
$lang['imglib_copy_failed'] = 'ÐÐµ ÑƒÐ´Ð°Ð»Ð¾ÑÑŒ Ð²Ñ‹Ð¿Ð¾Ð»Ð½Ð¸Ñ‚ÑŒ ÐºÐ¾Ð¿Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ñ.';
$lang['imglib_missing_font'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð½Ð°Ð¹Ñ‚Ð¸ ÑˆÑ€Ð¸Ñ„Ñ‚ Ð´Ð»Ñ Ð¸ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ñ.';
$lang['imglib_save_failed'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ ÑÐ¾Ñ…Ñ€Ð°Ð½Ð¸Ñ‚ÑŒ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ. Ð£Ð±ÐµÐ´Ð¸Ñ‚ÐµÑÑŒ, Ñ‡Ñ‚Ð¾ Ð¸Ð·Ð¾Ð±Ñ€Ð°Ð¶ÐµÐ½Ð¸Ðµ Ð¸ ÐºÐ°Ñ‚Ð°Ð»Ð¾Ð³ Ñ„Ð°Ð¹Ð»Ð° Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ñ‹ Ð´Ð»Ñ Ð·Ð°Ð¿Ð¸ÑÐ¸.';
