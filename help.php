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
?>
<div class="full" style="height:auto;">
	<h3><?php echo $help['installhead'] ?></h3>
	<?php echo $help['installbody'] ?>
	<br/><pre>include (LEPTON_PATH.'/modules/vstats/count.php');</pre><br/>
	<br/>
	<h3>CMS-LAB</h3>
	<div style="float: right"><a href="http://cms-lab.com" target="_blank"><img src="<?php echo LEPTON_URL ?>/modules/vstats/logo.png" alt="" /></a></div>
	<?php echo $help['donate'] ?><br/>
	<br/>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input name="cmd" type="hidden" value="_s-xclick" /> 
		<input name="hosted_button_id" type="hidden" value="DF6TFNAE7F7DJ" /> 
		<input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" type="image" /> 
		<img src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" alt="" width="1" height="1" border="0" />
	</form>	
	<div style="clear:both"></div>
</div>

