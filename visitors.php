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

$stats = new stats();
$r = $stats->getVisitors();
//print_r($r);
?>

<div class="middle h265">
	<h3><?php echo $WS['REFTOP10'] ?></h3>
	<table width="100%" border="0" cellpadding="3" cellspacing="0">
		<tr>
			<td width="30"><strong><?php echo $WS['NUMBER'] ?></strong></td>
			<td width="280"><strong><?php echo $WS['REFERER'] ?></strong></td>
			<td width="120"><strong><?php echo $WS['PERCENT'] ?></strong></td>
		</tr>
		<?php if(isset($r['referer'])) 
			foreach($r['referer'] as $key => $data) { ?>
		<tr>
			<td><?php echo $key ?></td>
			<td><span class="expand" title="<?php echo $data['name'] ?>"><?php echo $data['short'] ?></span></td>
			<td nowrap><div class="vbar" style="width:<?php echo $data['width'] ?>px;" title="<?php echo $data['views'] ?> <?php echo $WS['VISITORS'] ?>" >&nbsp;<?php echo $data['percent'] ?>%</div></td>
		</tr>
		<?php } ?>
    </table>
</div>
  
<div class="middle h265">
    <h3><?php echo $WS['PAGETOP10'] ?></h3>
	<table width="100%" cellpadding="3" cellspacing="0">
		<tr>
			<td width="30"><strong><?php echo $WS['NUMBER'] ?></strong></td>
			<td width="280"><strong><?php echo $WS['PAGES'] ?></strong></td>
			<td width="120"><strong><?php echo $WS['PERCENT'] ?></strong></td>
		</tr>
		<?php if(isset($r['pages'])) foreach($r['pages'] as $key => $data) { ?>
		<tr>
			<td><?php echo $key ?></td>
			<td><span class="expand" title="<?php echo $data['name'] ?>"><?php echo $data['short'] ?></span></td>
			<td nowrap><div class="vbar" style="width:<?php echo $data['width'] ?>px;" title="<?php echo $data['views'] ?> <?php echo $WS['REQUESTS'] ?>" >&nbsp;<?php echo $data['percent'] ?>%</div></td>
		</tr>
		<?php } ?>
    </table>
</div>

<div style="clear:both"></div>
<div class="middle h265">
    <h3><?php echo $WS['KEYSTOP10'] ?></h3>
	<table width="100%" border="0" cellpadding="3" cellspacing="0">
		<tr>
			<td width="30"><strong><?php echo $WS['NUMBER'] ?></strong></td>
			<td width="280"><strong><?php echo $WS['KEYWORDS'] ?></strong></td>
			<td width="120"><strong><?php echo $WS['PERCENT'] ?></strong></td>
		</tr>
		<?php if(isset($r['keyword'])) foreach($r['keyword'] as $key => $data) { ?>
		<tr>
			<td><?php echo $key ?></td>
			<td><span class="expand" title="<?php echo $data['name'] ?>"><?php echo $data['short'] ?></span></td>
			<td nowrap><div class="vbar" style="width:<?php echo $data['width'] ?>px;" title="<?php echo $data['views'] ?> <?php echo $WS['VISITORS'] ?>" >&nbsp;<?php echo $data['percent'] ?>%</div></td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="middle h265">
    <h3><?php echo $WS['LANGTOP10'] ?></h3>
	<table width="100%" border="0" cellpadding="3" cellspacing="0">
		<tr>
			<td width="30"><strong><?php echo $WS['NUMBER'] ?></strong></td>
			<td width="280"><strong><?php echo $WS['LANGUAGES'] ?></strong></td>
			<td width="120"><strong><?php echo $WS['PERCENT'] ?></strong></td>
		</tr>
		<?php if(isset($r['language'])) foreach($r['language'] as $key => $data) { ?>
		<tr>
			<td><?php echo $key ?></td>
			<td><span class="expand" title="<?php echo $data['name'] ?>"><?php echo $data['short'] ?></span></td>
			<td nowrap><div class="vbar" style="width:<?php echo $data['width'] ?>px;" title="<?php echo $data['views'] ?> <?php echo $WS['VISITORS'] ?>" >&nbsp;<?php echo $data['percent'] ?>%</div></td>
		</tr>
		<?php } ?>
	</table>
</div>
<div style="clear:both"></div>
</div>
