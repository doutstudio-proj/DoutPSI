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

$lang['db_invalid_connection_str'] = 'Nuk mund tÃ« pÃ«rcaktohen cilÃ«simet e bazÃ«s sÃ« tÃ« dhÃ«nave bazuar nÃ« vargun e lidhjes qÃ« keni dorÃ«zuar.';
$lang['db_unable_to_connect'] = 'Nuk mund tÃ« lidhet me serverin e bazÃ«s sÃ« tÃ« dhÃ«nave duke pÃ«rdorur cilÃ«simet e dhÃ«na.';
$lang['db_unable_to_select'] = 'Nuk mund tÃ« zgjidhet baza e tÃ« dhÃ«nave e specifikuar: %s';
$lang['db_unable_to_create'] = 'Nuk mund tÃ« krijohet baza e tÃ« dhÃ«nave e specifikuar: %s';
$lang['db_invalid_query'] = 'Query qÃ« keni dorÃ«zuar nuk Ã«shtÃ« e vlefshme.';
$lang['db_must_set_table'] = 'Duhet tÃ« caktoni tabelÃ«n e bazÃ«s sÃ« tÃ« dhÃ«nave qÃ« do tÃ« pÃ«rdoret me pyetjen tuaj.';
$lang['db_must_use_set'] = 'Duhet tÃ« pÃ«rdorni metodÃ«n "set" pÃ«r tÃ« pÃ«rditÃ«suar njÃ« hyrje.';
$lang['db_must_use_index'] = 'Duhet tÃ« specifikoni njÃ« indeks pÃ«r tÃ« pÃ«rputhur pÃ«r pÃ«rditÃ«sime grupore.';
$lang['db_batch_missing_index'] = 'NjÃ« ose mÃ« shumÃ« rreshta tÃ« dorÃ«zuar pÃ«r pÃ«rditÃ«sime grupore mungojnÃ« nÃ« indeksin e specifikuar.';
$lang['db_must_use_where'] = 'PÃ«rditÃ«simet nuk lejohen nÃ«se nuk pÃ«rmbajnÃ« njÃ« klauzolÃ« "where".';
$lang['db_del_must_use_where'] = 'Fshirjet nuk lejohen nÃ«se nuk pÃ«rmbajnÃ« njÃ« klauzolÃ« "where" ose "like".';
$lang['db_field_param_missing'] = 'PÃ«r tÃ« marrÃ« fushat kÃ«rkohet emri i tabelÃ«s si parametÃ«r.';
$lang['db_unsupported_function'] = 'Kjo veÃ§ori nuk Ã«shtÃ« e disponueshme pÃ«r bazÃ«n e tÃ« dhÃ«nave qÃ« po pÃ«rdorni.';
$lang['db_transaction_failure'] = 'DÃ«shtim transaksioni: U krye rikthim.';
$lang['db_unable_to_drop'] = 'Nuk mund tÃ« fshihet baza e tÃ« dhÃ«nave e specifikuar.';
$lang['db_unsupported_feature'] = 'VeÃ§ori e papÃ«rkrahur e platformÃ«s sÃ« bazÃ«s sÃ« tÃ« dhÃ«nave qÃ« po pÃ«rdorni.';
$lang['db_unsupported_compression'] = 'Formati i kompresimit tÃ« skedarÃ«ve qÃ« keni zgjedhur nuk mbÃ«shtetet nga serveri juaj.';
$lang['db_filepath_error'] = 'Nuk mund tÃ« shkruhet e dhÃ«na nÃ« shtegun e skedarit qÃ« keni dorÃ«zuar.';
$lang['db_invalid_cache_path'] = 'Shtegu i cache qÃ« keni dorÃ«zuar nuk Ã«shtÃ« i vlefshÃ«m ose i shkrueshÃ«m.';
$lang['db_table_name_required'] = 'Ã‹shtÃ« i nevojshÃ«m emri i tabelÃ«s pÃ«r atÃ« operacion.';
$lang['db_column_name_required'] = 'Ã‹shtÃ« i nevojshÃ«m emri i kolonÃ«s pÃ«r atÃ« operacion.';
$lang['db_column_definition_required'] = 'Ã‹shtÃ« i nevojshÃ«m njÃ« pÃ«rkufizim kolone pÃ«r atÃ« operacion.';
$lang['db_unable_to_set_charset'] = 'Nuk mund tÃ« caktohet grupi i karaktereve tÃ« lidhjes sÃ« klientit: %s';
$lang['db_error_heading'] = 'Ndodhi njÃ« Gabim nÃ« BazÃ«n e tÃ« DhÃ«nave';
