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

$lang = (dirname(__FILE__)) . '/languages/' . LANGUAGE . '.php';
require_once(!file_exists($lang) ? (dirname(__FILE__)) . '/languages/EN.php' : $lang );
require_once('class.stats.php');

$admintool_url = ADMIN_URL .'/admintools/index.php';
$module_link = ADMIN_URL .'/admintools/tool.php?tool=wbstats';
$module_overview_link = ADMIN_URL .'/admintools/tool.php?tool=wbstats&overview';
$module_visitors_link = ADMIN_URL .'/admintools/tool.php?tool=wbstats&visitors';
$module_history_link = ADMIN_URL .'/admintools/tool.php?tool=wbstats&history';
$module_help_link = ADMIN_URL .'/admintools/tool.php?tool=wbstats&help';



require_once ("head.php");
if (isset($_GET['overview'])) {
	require ("overview.php");
	return;
}
if (isset($_GET['visitors'])) {
	require ("visitors.php");
	return;
}
if (isset($_GET['history'])) {
	require ("history.php");
	return;
}
if (isset($_GET['help'])) {
	require ("help.php");
	return;
}
if (!$check = $database->get_one("SELECT sum(user) visitors FROM ".$table_day)) {
	require ("help.php");
	return;
}
require_once ("overview.php");
