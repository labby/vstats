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

$module_directory	= 'vstats';
$module_name 		= 'Visitor statistics';
$module_function 	= 'tool';
$module_version 	= '0.2.1';
$module_platform	= '2.x';
$module_author		= 'Ruud Eisinga, cms-lab';
$module_home		= 'http://www.cms-lab.com';
$module_guid		= '4f0e65ed-d9c7-457f-b822-9d57dff10dee';
$module_license		= '<a href="http://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank">GNU GPL</a>';
$module_license_terms	= 'none';
$module_description		= 'Displays website statistics as an admintool';

?>

