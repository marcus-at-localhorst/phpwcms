<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <oliver@phpwcms.de>
 * @copyright Copyright (c) 2002-2014, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/

// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------


//map

$CNT_TMP .= headline($crow["acontent_title"], $crow["acontent_subtitle"], $template_default["article"]);
$map = unserialize($crow["acontent_form"]);

$map['sql']  = "SELECT * FROM ".DB_PREPEND."phpwcms_map WHERE map_deleted=0 ";
$map['sql'] .= "AND map_cid=".intval($crow["acontent_id"])." ORDER BY map_zip ASC, map_city ASC";

$map['map']	 = '';
$map['p']	 = array();
$map['show'] = (isset($_GET['loc'])) ? intval($_GET['loc']) : 0;
$map['loc']	 = array();

if($map['result'] = mysql_query($map['sql'], $db)) {
	while($map['row'] = mysql_fetch_assoc($map['result'])) {

		$map['map'] .= '<area shape="rect" coords="'.($map['row']['map_x']-4).','.($map['row']['map_y']-4);
		$map['map'] .= ','.($map['row']['map_x']+4).','.($map['row']['map_y']+4).'" href="index.php?id=';
		$map['map'] .= implode(',', $aktion).'&amp;loc='.$map['row']['map_id'].'" title="';
		$map['map'] .= html_specialchars($map['row']['map_title']).'" alt="';
		$map['map'] .= html_specialchars($map['row']['map_title']).'" />';
		$map['p'][]  = $map['row']['map_x'].'x'.$map['row']['map_y'];

		if($map['show'] == $map['row']['map_id']) {
			$map['loc'] = $map['row'];
		}

	}
	mysql_free_result($map['result']);
}

$map['template']		= render_device( @file_get_contents(PHPWCMS_TEMPLATE.'inc_cntpart/map/'.$map['template']) );
$map['tmpl_var']		= get_tmpl_section('VAR', $map['template']);
$map['tmpl_content']	= get_tmpl_section('CONTENT', $map['template']);
$map['tmpl_location']	= get_tmpl_section('LOCATION', $map['template']);

$map['map_img'] = '';
if(file_exists(PHPWCMS_TEMPLATE.'inc_cntpart/map/map_img/'.$map['image'])) {
	$map['map_img'] .= '<img src="img/mapimage.php?';
	$map['map_img'] .= 'i='.rawurlencode($map['image']).'&amp;xy='.rawurlencode(implode(',', $map['p']));
	$map['map_img'] .= '&amp;v='.rawurlencode(($map['tmpl_var']) ? $map['tmpl_var'] : '1,7,7,FFFFFF,FF4000');
	$map['map_img'] .= '" hspace="0" vspace="0" alt="" usemap="#locations" />';
	if($map['map']) $map['map_img'] .= '<map name="locations">'.$map['map'].'</map>';
}

if(!$map['tmpl_content']) {

	$CNT_TMP .= '<div style="float:right;">'.$map['map_img'].'</div>';

	if(!empty($map['text'])) $CNT_TMP .= nl2br(div_class($map['text'], $template_default["article"]["text_class"]));
	if($map['loc']) {
		$CNT_TMP .= '<h5>'.html_specialchars($map['loc']['map_title']).'</h5>';
		$map["location"] = '';
		$map['loc']['map_zip'] = trim($map['loc']['map_zip'].' '.$map['loc']['map_city']);
		if($map['loc']['map_zip']) {
			$map["location"] .= '<strong>'.html_specialchars($map['loc']['map_zip'])."</strong>\n";
		}
		if($map['loc']['map_entry']) {
			$map["location"] .= $map['loc']['map_entry']; //html_specialchars($map['loc']['map_entry'])
		}
		$map["location"] = trim($map["location"]);
		if($map["location"]) {
			$CNT_TMP .= nl2br(div_class($map["location"], $template_default["article"]["text_class"]));
		}
	}

} else {

	if($map['loc']) {
		// build location entry
		$map['tmpl_location'] = render_cnt_template($map['tmpl_location'], 'TITLE', html_specialchars($map['loc']['map_title']));
		$map['tmpl_location'] = render_cnt_template($map['tmpl_location'], 'ZIP', html_specialchars($map['loc']['map_zip']));
		$map['tmpl_location'] = render_cnt_template($map['tmpl_location'], 'CITY', html_specialchars($map['loc']['map_city']));
		$map['tmpl_location'] = render_cnt_template($map['tmpl_location'], 'ENTRY', $map['loc']['map_entry']);
	} else {
		$map['tmpl_location'] = '';
	}

	$map['tmpl_content'] = render_cnt_template($map['tmpl_content'], 'MAP', $map['map_img']);
	$map['tmpl_content'] = render_cnt_template($map['tmpl_content'], 'TEXT', nl2br(html_specialchars($map['text'])));
	$map['tmpl_content'] = render_cnt_template($map['tmpl_content'], 'LOCATION', $map['tmpl_location']);

	$CNT_TMP .= $map['tmpl_content'];

}

// delete map array
unset($map);

?>