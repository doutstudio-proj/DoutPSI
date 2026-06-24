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

$lang['profiler_database'] = 'Ð‘Ð”';
$lang['profiler_controller_info'] = 'ÐšÐ›ÐÐ¡/ÐœÐ•Ð¢ÐžÐ”';
$lang['profiler_benchmarks'] = 'BENCHMARKS';
$lang['profiler_queries'] = 'Ð—ÐÐŸÐ ÐžÐ¡Ð«';
$lang['profiler_get_data'] = 'Ð”ÐÐÐÐ«Ð• GET';
$lang['profiler_post_data'] = 'Ð”ÐÐÐÐ«Ð• POST';
$lang['profiler_uri_string'] = 'Ð¡Ð¢Ð ÐžÐšÐ URI';
$lang['profiler_memory_usage'] = 'Ð˜Ð¡ÐŸÐžÐ›Ð¬Ð—ÐžÐ’ÐÐÐ˜Ð• ÐŸÐÐœÐ¯Ð¢Ð˜';
$lang['profiler_config'] = 'ÐŸÐ•Ð Ð•ÐœÐ•ÐÐÐ«Ð• ÐšÐžÐÐ¤Ð˜Ð“Ð£Ð ÐÐ¦Ð˜Ð˜';
$lang['profiler_session_data'] = 'Ð”ÐÐÐÐ«Ð• Ð¡Ð•ÐÐÐ¡Ð';
$lang['profiler_headers'] = 'Ð—ÐÐ“ÐžÐ›ÐžÐ’ÐšÐ˜ HTTP';
$lang['profiler_no_db'] = 'Ð”Ñ€Ð°Ð¹Ð²ÐµÑ€ Ð±Ð°Ð·Ñ‹ Ð´Ð°Ð½Ð½Ñ‹Ñ… Ð² Ð½Ð°ÑÑ‚Ð¾ÑÑ‰ÐµÐµ Ð²Ñ€ÐµÐ¼Ñ Ð½Ðµ Ð·Ð°Ð³Ñ€ÑƒÐ¶ÐµÐ½';
$lang['profiler_no_queries'] = 'ÐÐ¸ÐºÐ°ÐºÐ¸Ñ… Ð·Ð°Ð¿Ñ€Ð¾ÑÐ¾Ð² Ð½Ðµ Ð²Ñ‹Ð¿Ð¾Ð»Ð½ÑÐ»Ð¾ÑÑŒ';
$lang['profiler_no_post'] = 'Ð”Ð°Ð½Ð½Ñ‹Ðµ POST Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‚';
$lang['profiler_no_get'] = 'Ð”Ð°Ð½Ð½Ñ‹Ðµ GET Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‚';
$lang['profiler_no_uri'] = 'Ð”Ð°Ð½Ð½Ñ‹Ðµ URI Ð¾Ñ‚ÑÑƒÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‚';
$lang['profiler_no_memory'] = 'Ð˜ÑÐ¿Ð¾Ð»ÑŒÐ·Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð¿Ð°Ð¼ÑÑ‚Ð¸ Ð½ÐµÐ´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð¾';
$lang['profiler_no_profiles'] = 'ÐÐµÑ‚ Ð´Ð°Ð½Ð½Ñ‹Ñ… Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ñ - Ð²ÑÐµ ÑÐµÐºÑ†Ð¸Ð¸ Ð¿Ñ€Ð¾Ñ„Ð¸Ð»Ð¸Ñ€Ð¾Ð²Ñ‰Ð¸ÐºÐ° Ð¾Ñ‚ÐºÐ»ÑŽÑ‡ÐµÐ½Ñ‹.';
$lang['profiler_section_hide'] = 'Ð¡ÐºÑ€Ñ‹Ñ‚ÑŒ';
$lang['profiler_section_show'] = 'ÐŸÐ¾ÐºÐ°Ð·Ð°Ñ‚ÑŒ';
$lang['profiler_seconds'] = 'ÑÐµÐºÑƒÐ½Ð´Ñ‹';
