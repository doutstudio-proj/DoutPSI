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

$lang['form_validation_required'] = 'Laukas â€ž{field}â€œ yra privalomas.';
$lang['form_validation_isset'] = 'Laukas â€ž{field}â€œ privalo turÄ—ti reikÅ¡mÄ™.';
$lang['form_validation_valid_email'] = 'Lauke â€ž{field}â€œ turi bÅ«ti Ä¯vestas tinkamas el. paÅ¡to adresas.';
$lang['form_validation_valid_emails'] = 'Lauke â€ž{field}â€œ turi bÅ«ti Ä¯vesti tik tinkami el. paÅ¡to adresai.';
$lang['form_validation_valid_url'] = 'Lauke â€ž{field}â€œ turi bÅ«ti Ä¯vestas tinkamas URL adresas.';
$lang['form_validation_valid_ip'] = 'Lauke â€ž{field}â€œ turi bÅ«ti Ä¯vestas tinkamas IP adresas.';
$lang['form_validation_valid_base64'] = 'Lauke â€ž{field}â€œ turi bÅ«ti Ä¯vesta tinkama â€žBase64â€œ eilutÄ—.';
$lang['form_validation_min_length'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti bent {param} simb. ilgio.';
$lang['form_validation_max_length'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti ne daugiau kaip {param} simb. ilgio.';
$lang['form_validation_exact_length'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti lygiai {param} simb. ilgio.';
$lang['form_validation_alpha'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik raidÄ—s.';
$lang['form_validation_alpha_numeric'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik raidÄ—s ir skaitmenys.';
$lang['form_validation_alpha_numeric_spaces'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik raidÄ—s, skaitmenys ir tarpai.';
$lang['form_validation_alpha_dash'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik raidÄ—s, skaitmenys, brÅ«kÅ¡neliai ir pabraukimo brÅ«kÅ¡niai.';
$lang['form_validation_numeric'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius.';
$lang['form_validation_is_numeric'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius.';
$lang['form_validation_integer'] = 'Lauko â€ž{field}â€œ reiÅ¡kmÄ— turi bÅ«ti sveikasis skaiÄius.';
$lang['form_validation_regex_match'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— netinkama.';
$lang['form_validation_matches'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— nesutampa su lauko â€ž{param}â€œ reikÅ¡me.';
$lang['form_validation_differs'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi skirtis nuo lauko â€ž{param}â€œ reikÅ¡mÄ—s.';
$lang['form_validation_is_unique'] = 'Lauko â€ž{field}â€œ reiÅ¡kmÄ— turi bÅ«ti unikali.';
$lang['form_validation_is_natural'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik skaitmenys.';
$lang['form_validation_is_natural_no_zero'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ™ turi sudaryti tik skaitmenys, ji turi bÅ«ti didesnÄ— nei 0.';
$lang['form_validation_decimal'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti sveikasis skaiÄius arba deÅ¡imtainÄ— trupmena.';
$lang['form_validation_less_than'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius, maÅ¾esnis nei {param}.';
$lang['form_validation_less_than_equal_to'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius, maÅ¾esnis nei arba lygus {param}.';
$lang['form_validation_greater_than'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius, didesnis nei {param}.';
$lang['form_validation_greater_than_equal_to'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti skaiÄius, didesnis nei arba lygus {param}';
$lang['form_validation_error_message_not_set'] = 'Klaidos praneÅ¡imas dÄ—l lauko â€ž{field}â€œ nerastas.';
$lang['form_validation_in_list'] = 'Lauko â€ž{field}â€œ reikÅ¡mÄ— turi bÅ«ti viena iÅ¡: {param}.';
