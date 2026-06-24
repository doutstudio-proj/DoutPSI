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

$lang['db_invalid_connection_str'] = 'Nije moguÄ‡e odrediti postavke baze podataka na temelju dostavljenog niza za povezivanje.';
$lang['db_unable_to_connect'] = 'Nije moguÄ‡e povezati se s posluÅ¾iteljem baze podataka pomoÄ‡u navedenih postavki.';
$lang['db_unable_to_select'] = 'Nije moguÄ‡e odabrati navedenu bazu podataka: %s';
$lang['db_unable_to_create'] = 'Nije moguÄ‡e stvoriti navedenu bazu podataka: %s';
$lang['db_invalid_query'] = 'Upit koji ste poslali nije vaÅ¾eÄ‡i.';
$lang['db_must_set_table'] = 'Morate postaviti tablicu baze podataka koja Ä‡e se koristiti s vaÅ¡im upitom.';
$lang['db_must_use_set'] = 'Morate koristiti metodu "set" za aÅ¾uriranje unosa.';
$lang['db_must_use_index'] = 'Morate navesti indeks za usklaÄ‘ivanje za serije aÅ¾uriranja.';
$lang['db_batch_missing_index'] = 'Jedan ili viÅ¡e redaka poslanih za serije aÅ¾uriranja nedostaje navedeni indeks.';
$lang['db_must_use_where'] = 'AÅ¾uriranja nisu dopuÅ¡tena osim ako sadrÅ¾e klauzulu "where".';
$lang['db_del_must_use_where'] = 'Brisanja nisu dopuÅ¡tena osim ako sadrÅ¾e klauzulu "where" ili "like".';
$lang['db_field_param_missing'] = 'Za dohvaÄ‡anje polja potrebno je ime tablice kao parametar.';
$lang['db_unsupported_function'] = 'Ova znaÄajka nije dostupna za bazu podataka koju koristite.';
$lang['db_transaction_failure'] = 'PogreÅ¡ka u transakciji: IzvrÅ¡eno vraÄ‡anje.';
$lang['db_unable_to_drop'] = 'Nije moguÄ‡e odbaciti navedenu bazu podataka.';
$lang['db_unsupported_feature'] = 'NepodrÅ¾ana znaÄajka platforme baze podataka koju koristite.';
$lang['db_unsupported_compression'] = 'Format kompresije datoteka koji ste odabrali nije podrÅ¾an na vaÅ¡em posluÅ¾itelju.';
$lang['db_filepath_error'] = 'Nije moguÄ‡e pisati podatke na putanju datoteke koju ste poslali.';
$lang['db_invalid_cache_path'] = 'Putanja predmemorije koju ste poslali nije vaÅ¾eÄ‡a ili se ne moÅ¾e pisati na nju.';
$lang['db_table_name_required'] = 'Za tu operaciju potrebno je ime tablice.';
$lang['db_column_name_required'] = 'Za tu operaciju potrebno je ime stupca.';
$lang['db_column_definition_required'] = 'Za tu operaciju potrebna je definicija stupca.';
$lang['db_unable_to_set_charset'] = 'Nije moguÄ‡e postaviti skup znakova za klijentsku vezu: %s';
$lang['db_error_heading'] = 'DoÅ¡lo je do pogreÅ¡ke u bazi podataka';
