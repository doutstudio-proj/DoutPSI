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

$lang['form_validation_required'] = 'ÐŸÐ¾Ð»Ðµ {field} ÑÐ²Ð»ÑÐµÑ‚ÑÑ Ð¾Ð±ÑÐ·Ð°Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¼.';
$lang['form_validation_isset'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð¸Ð¼ÐµÑ‚ÑŒ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ.';
$lang['form_validation_valid_email'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ Ð°Ð´Ñ€ÐµÑ ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ð¾Ð¹ Ð¿Ð¾Ñ‡Ñ‚Ñ‹.';
$lang['form_validation_valid_emails'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð²ÑÐµ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ðµ Ð°Ð´Ñ€ÐµÑÐ° ÑÐ»ÐµÐºÑ‚Ñ€Ð¾Ð½Ð½Ð¾Ð¹ Ð¿Ð¾Ñ‡Ñ‚Ñ‹.';
$lang['form_validation_valid_url'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ URL.';
$lang['form_validation_valid_ip'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð´ÐµÐ¹ÑÑ‚Ð²Ð¸Ñ‚ÐµÐ»ÑŒÐ½Ñ‹Ð¹ IP.';
$lang['form_validation_valid_base64'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð´Ð¾Ð¿ÑƒÑÑ‚Ð¸Ð¼ÑƒÑŽ ÑÑ‚Ñ€Ð¾ÐºÑƒ Base64.';
$lang['form_validation_min_length'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð±Ñ‹Ñ‚ÑŒ Ð´Ð»Ð¸Ð½Ð¾Ð¹ Ð½Ðµ Ð¼ÐµÐ½ÐµÐµ {param} ÑÐ¸Ð¼Ð²Ð¾Ð»Ð¾Ð².';
$lang['form_validation_max_length'] = 'Ð”Ð»Ð¸Ð½Ð° Ð¿Ð¾Ð»Ñ {field} Ð½Ðµ Ð¼Ð¾Ð¶ÐµÑ‚ Ð¿Ñ€ÐµÐ²Ñ‹ÑˆÐ°Ñ‚ÑŒ {param} ÑÐ¸Ð¼Ð²Ð¾Ð»Ð¾Ð².';
$lang['form_validation_exact_length'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð±Ñ‹Ñ‚ÑŒ Ð´Ð»Ð¸Ð½Ð¾Ð¹ Ñ€Ð¾Ð²Ð½Ð¾ {param} ÑÐ¸Ð¼Ð²Ð¾Ð»Ð¾Ð².';
$lang['form_validation_alpha'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð¼Ð¾Ð¶ÐµÑ‚ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð°Ð»Ñ„Ð°Ð²Ð¸Ñ‚Ð½Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹.';
$lang['form_validation_alpha_numeric'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð¼Ð¾Ð¶ÐµÑ‚ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð±ÑƒÐºÐ²ÐµÐ½Ð½Ð¾-Ñ†Ð¸Ñ„Ñ€Ð¾Ð²Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹.';
$lang['form_validation_alpha_numeric_spaces'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð¼Ð¾Ð¶ÐµÑ‚ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð±ÑƒÐºÐ²ÐµÐ½Ð½Ð¾-Ñ†Ð¸Ñ„Ñ€Ð¾Ð²Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹ Ð¸ Ð¿Ñ€Ð¾Ð±ÐµÐ»Ñ‹.';
$lang['form_validation_alpha_dash'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð¼Ð¾Ð¶ÐµÑ‚ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ð±ÑƒÐºÐ²ÐµÐ½Ð½Ð¾-Ñ†Ð¸Ñ„Ñ€Ð¾Ð²Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹, Ð¿Ð¾Ð´Ñ‡ÐµÑ€ÐºÐ¸Ð²Ð°Ð½Ð¸Ñ Ð¸ Ñ‚Ð¸Ñ€Ðµ.';
$lang['form_validation_numeric'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ‡Ð¸ÑÐ»Ð°.';
$lang['form_validation_is_numeric'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ‡Ð¸ÑÐ»Ð¾Ð²Ñ‹Ðµ ÑÐ¸Ð¼Ð²Ð¾Ð»Ñ‹.';
$lang['form_validation_integer'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ†ÐµÐ»Ð¾Ðµ Ñ‡Ð¸ÑÐ»Ð¾.';
$lang['form_validation_regex_match'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð¸Ð¼ÐµÐµÑ‚ Ð½ÐµÐ¿Ñ€Ð°Ð²Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ Ñ„Ð¾Ñ€Ð¼Ð°Ñ‚.';
$lang['form_validation_matches'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð½Ðµ ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÑƒÐµÑ‚ Ð¿Ð¾Ð»ÑŽ {param}.';
$lang['form_validation_differs'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð°Ñ‚ÑŒÑÑ Ð¾Ñ‚ Ð¿Ð¾Ð»Ñ {param}.';
$lang['form_validation_is_unique'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ ÑƒÐ½Ð¸ÐºÐ°Ð»ÑŒÐ½Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ.';
$lang['form_validation_is_natural'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ†Ð¸Ñ„Ñ€Ñ‹.';
$lang['form_validation_is_natural_no_zero'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‚Ð¾Ð»ÑŒÐºÐ¾ Ñ†Ð¸Ñ„Ñ€Ñ‹ Ð¸ Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð±Ñ‹Ñ‚ÑŒ Ð±Ð¾Ð»ÑŒÑˆÐµ Ð½ÑƒÐ»Ñ.';
$lang['form_validation_decimal'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ð´ÐµÑÑÑ‚Ð¸Ñ‡Ð½Ð¾Ðµ Ñ‡Ð¸ÑÐ»Ð¾.';
$lang['form_validation_less_than'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‡Ð¸ÑÐ»Ð¾, Ð¼ÐµÐ½ÑŒÑˆÐµÐµ, Ñ‡ÐµÐ¼ {param}.';
$lang['form_validation_less_than_equal_to'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‡Ð¸ÑÐ»Ð¾, Ð¼ÐµÐ½ÑŒÑˆÐµÐµ Ð¸Ð»Ð¸ Ñ€Ð°Ð²Ð½Ð¾Ðµ {param}.';
$lang['form_validation_greater_than'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‡Ð¸ÑÐ»Ð¾, Ð±Ð¾Ð»ÑŒÑˆÐµÐµ, Ñ‡ÐµÐ¼ {param}.';
$lang['form_validation_greater_than_equal_to'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ ÑÐ¾Ð´ÐµÑ€Ð¶Ð°Ñ‚ÑŒ Ñ‡Ð¸ÑÐ»Ð¾, Ð±Ð¾Ð»ÑŒÑˆÐµÐµ Ð¸Ð»Ð¸ Ñ€Ð°Ð²Ð½Ð¾Ðµ {param}.';
$lang['form_validation_error_message_not_set'] = 'ÐÐµÐ²Ð¾Ð·Ð¼Ð¾Ð¶Ð½Ð¾ Ð¿Ð¾Ð»ÑƒÑ‡Ð¸Ñ‚ÑŒ Ð´Ð¾ÑÑ‚ÑƒÐ¿ Ðº ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸ÑŽ Ð¾Ð± Ð¾ÑˆÐ¸Ð±ÐºÐµ, ÑÐ¾Ð¾Ñ‚Ð²ÐµÑ‚ÑÑ‚Ð²ÑƒÑŽÑ‰ÐµÐ¼Ñƒ Ð¸Ð¼ÐµÐ½Ð¸ Ð²Ð°ÑˆÐµÐ³Ð¾ Ð¿Ð¾Ð»Ñ {field}.';
$lang['form_validation_in_list'] = 'ÐŸÐ¾Ð»Ðµ {field} Ð´Ð¾Ð»Ð¶Ð½Ð¾ Ð±Ñ‹Ñ‚ÑŒ Ð¾Ð´Ð½Ð¸Ð¼ Ð¸Ð·: {param}.';
