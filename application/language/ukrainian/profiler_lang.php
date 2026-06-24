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

$lang['profiler_database'] = 'Ð‘ÐÐ—Ð Ð”ÐÐÐ˜Ð¥';
$lang['profiler_controller_info'] = 'ÐšÐ›ÐÐ¡/ÐœÐ•Ð¢ÐžÐ”';
$lang['profiler_benchmarks'] = 'Ð‘Ð•ÐÐ§ÐœÐÐ ÐšÐ˜';
$lang['profiler_queries'] = 'Ð—ÐÐŸÐ˜Ð¢Ð˜';
$lang['profiler_get_data'] = 'GET Ð”ÐÐÐ†';
$lang['profiler_post_data'] = 'POST Ð”ÐÐÐ†';
$lang['profiler_uri_string'] = 'URI Ð Ð¯Ð”ÐžÐš';
$lang['profiler_memory_usage'] = 'Ð’Ð˜ÐšÐžÐ Ð˜Ð¡Ð¢ÐÐÐÐ¯ ÐŸÐÐœ\'Ð¯Ð¢Ð†';
$lang['profiler_config'] = 'ÐšÐžÐÐ¤Ð†Ð“Ð£Ð ÐÐ¦Ð†Ð™ÐÐ† Ð—ÐœÐ†ÐÐÐ†';
$lang['profiler_session_data'] = 'Ð”ÐÐÐ† Ð¡Ð•Ð¡Ð†Ð‡';
$lang['profiler_headers'] = 'HTTP Ð—ÐÐ“ÐžÐ›ÐžÐ’ÐšÐ˜';
$lang['profiler_no_db'] = 'Ð”Ñ€Ð°Ð¹Ð²ÐµÑ€ Ð±Ð°Ð·Ð¸ Ð´Ð°Ð½Ð¸Ñ… Ð½Ð°Ñ€Ð°Ð·Ñ– Ð½Ðµ Ð·Ð°Ð²Ð°Ð½Ñ‚Ð°Ð¶ÐµÐ½Ð¾';
$lang['profiler_no_queries'] = 'Ð—Ð°Ð¿Ð¸Ñ‚Ð¸ Ð½Ðµ Ð±ÑƒÐ»Ð¸ Ð²Ð¸ÐºÐ¾Ð½Ð°Ð½Ñ–';
$lang['profiler_no_post'] = 'POST Ð´Ð°Ð½Ñ– Ð²Ñ–Ð´ÑÑƒÑ‚Ð½Ñ–';
$lang['profiler_no_get'] = 'GET Ð´Ð°Ð½Ñ– Ð²Ñ–Ð´ÑÑƒÑ‚Ð½Ñ–';
$lang['profiler_no_uri'] = 'URI Ð´Ð°Ð½Ñ– Ð²Ñ–Ð´ÑÑƒÑ‚Ð½Ñ–';
$lang['profiler_no_memory'] = 'Ð†Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ñ–Ñ Ð¿Ñ€Ð¾ Ð²Ð¸ÐºÐ¾Ñ€Ð¸ÑÑ‚Ð°Ð½Ñƒ Ð¿Ð°Ð¼\'ÑÑ‚ÑŒ Ð½ÐµÐ´Ð¾ÑÑ‚ÑƒÐ¿Ð½Ð°';
$lang['profiler_no_profiles'] = 'Ð”Ð°Ð½Ñ– Ð¿Ñ€Ð¾Ñ„Ñ–Ð»ÑŽ Ð²Ñ–Ð´ÑÑƒÑ‚Ð½Ñ– â€” ÑƒÑÑ– Ñ€Ð¾Ð·Ð´Ñ–Ð»Ð¸ Ð¿Ñ€Ð¾Ñ„Ð°Ð¹Ð»ÐµÑ€Ð° Ð²Ð¸Ð¼ÐºÐ½ÐµÐ½Ñ–';
$lang['profiler_section_hide'] = 'Ð¡Ñ…Ð¾Ð²Ð°Ñ‚Ð¸';
$lang['profiler_section_show'] = 'ÐŸÐ¾ÐºÐ°Ð·Ð°Ñ‚Ð¸';
$lang['profiler_seconds'] = 'ÑÐµÐºÑƒÐ½Ð´Ð¸';
