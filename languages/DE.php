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
 
$module_description = 'Statistiken der Website';

$WS = array (
        "PLEASEWAIT"	=> "Bitte warten..",
        "MENU1"			=> "&Uuml;bersicht",
        "MENU2"			=> "Besucher",
        "MENU3"			=> "History",
        "MENU4"			=> "Hilfe",
        "GENERAL"		=> "Z&auml;hler",
        "LAST24"		=> "Letzte 24 Stunden",
        "LAST30"		=> "Letzte 30 Tage",
        "TOTALS"		=> "Gesamt",
        "TODAY"			=> "Heute",
        "LIVE"			=> "Live",
        "YESTERDAY"		=> "Gestern",
        "MISC"			=> "Verschiedenes",
        "AVERAGES"		=> "Durchschnitt",
        "TOTALVISITORS"	=> "Besucher",
        "TOTALPAGES"	=> "Seiten",
        "TODAYVISITORS"	=> "Besucher",
        "TODAYPAGES"	=> "Seiten",
        "TODAYBOTS"		=> "Suchmaschinen Robots",
        "YESTERVISITORS"	=> "Besucher",
        "YESTERPAGES"	=> "Seiten",
        "YESTERDAYBOTS"	=> "Suchmaschinen Robots",
        "CURRENTONLINE"	=> "Zur Zeit online",
        "BOUNCES"		=> "Besuche in den letzten 48 Stunden",
        "AVGPAGESVISIT"	=> "Seiten pro Besuch",
        "AVG7VISITS"	=> "Besucher pro Tag - 7 Tage",
        "AVG30VISITS"	=> "Besucher pro Tag - 30 Tage",
        "REFTOP10"		=> "Top 10 - Referers",
        "PAGETOP10"		=> "Top 10 - Seiten",
        "KEYSTOP10"		=> "Top 10 - Kennw&ouml;rter",
        "LANGTOP10"		=> "Top 10 - Sprache",
        "NUMBER"		=> "Nr.",
        "PERCENT"		=> "Prozent",
        "REFERER"		=> "Referer",
        "PAGES"			=> "Seite",
        "KEYWORDS"		=> "Kennw&ouml;rter",
        "LANGUAGES"		=> "Sprache",
        "HISTORY"		=> "History",
        "TOTALSINCE"	=> "Total seit",
        "SELECTED"		=> "Gew&auml;hltes Datum",
        "VISITORS"		=> "Besucher",
        "PAGES"			=> "Seiten",
        "REQUESTS"		=> "Zugriffe",
        "AVGDAY"		=> "Tagesdurchschnitt",
        "YEAR"			=> "Jahr"
);

$code2lang = array(
        'ar'=>'Arabisch',
        'bn'=>'Bengalisch',
        'bg'=>'Bulgarisch',
        'zh'=>'Chinesisch',
        'cs'=>'Tchechisch',
        'da'=>'D&auml;nisch',
        'en'=>'Englisch',
        'et'=>'Estonisch',
        'fi'=>'Finnisch',
        'fr'=>'Franz%ouml;sisch',
        'de'=>'Deutsch',
        'el'=>'Griechisch',
        'hi'=>'Hindi',
        'id'=>'Indonesisch',
        'it'=>'Italienisch',
        'ja'=>'Japanisch',
        'kg'=>'Koreanisch',
        'nb'=>'Norwegisch',
        'nl'=>'Niederl&auml;ndisch',
        'pl'=>'Polnisch',
        'pt'=>'Portugisisch',
        'ro'=>'Rom&auml;nisch',
        'ru'=>'Russisch',
        'sr'=>'Serbisch',
        'sk'=>'Slovakisch',
        'es'=>'Spanisch',
        'sv'=>'Schwedisch',
        'th'=>'Thai',
        'tr'=>'T&uuml;rkisch',
        ''=>'');
		
$help = array(
		'installhead' 	=> 'Installation und Einrichtung',
		'installbody' 	=> 'Um den Z&auml;hler in deine Webseite einzubinden, f&uuml;ge nachfolgene Codezeile in dein(e) Template(s) irgendwo in den ersten PHP-abschnitt zwischen <?php ... ?> ein',
		'donate'		=> 'Dieses Modul wurde von CMS-LAB überarbeitet und für LEPTON frei zur Verf&uuml;gung gestellt.<br/>Wenn Ihnen dieses Modul gef&auml;llt, w&uuml;rden wir uns &uuml;ber eine kleine Spende via PayPal freuen..'
);

?>

