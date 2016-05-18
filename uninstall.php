<?php

/**
 * @module          Visitor statistics
 * @author          Ruud Eisinga, cms-lab
 * @copyright       2014-2016 Ruud Eisinga, cms-lab
 * @link            http://www.cms-lab.com
 * @license         see info.php
 * @license_terms   see info.php
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

$table_day   = TABLE_PREFIX .'mod_vstats_day';
$table_ips   = TABLE_PREFIX .'mod_vstats_ips';
$table_pages = TABLE_PREFIX .'mod_vstats_pages';
$table_ref   = TABLE_PREFIX .'mod_vstats_ref';
$table_key   = TABLE_PREFIX .'mod_vstats_keywords';
$table_lang  = TABLE_PREFIX .'mod_vstats_lang';

$database->query("DROP TABLE IF EXISTS `$table_day`");
$database->query("DROP TABLE IF EXISTS `$table_ips`");
$database->query("DROP TABLE IF EXISTS `$table_pages`");
$database->query("DROP TABLE IF EXISTS `$table_ref`");
$database->query("DROP TABLE IF EXISTS `$table_key`");
$database->query("DROP TABLE IF EXISTS `$table_lang`");


?>