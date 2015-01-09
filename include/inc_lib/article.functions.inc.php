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

//Baut das Level Struktur Auswahlmen�
function struct_select_menu($counter=0, $struct_id=0, $selected_id=0, $return='option') {

	$struct_id		= intval($struct_id);
	$selected_id	= intval($selected_id);
	$counter		= intval($counter) + 1;

	if($return=='array') {
		$structure = array();
	}

	$sql = "SELECT acat_id, acat_name, acat_aktiv, acat_regonly, acat_opengraph FROM ".DB_PREPEND."phpwcms_articlecat WHERE acat_trash=0 AND acat_struct=".$struct_id." ORDER BY acat_sort";
	if($result = mysql_query($sql, $GLOBALS['db']) or die ("error while building struct select menu (ID:".$struct_id)) {
		$sx=0;
		while($row = mysql_fetch_assoc($result)) {
			$row['acat_name'] = str_repeat('-', $counter) . ' ' . $row['acat_name'];
			$struct[$sx] = $row;
			$sx++;
		}
		mysql_free_result($result);
	}

	if(isset($struct[0])) {
		foreach($struct as $value) {
			if($return=='array') {

				$structure[$value["acat_id"]] = $value["acat_name"];

				$substruct = struct_select_menu($counter, $value["acat_id"], 0, 'array');

				if(count($substruct)) {
					$structure += $substruct;
				}

			} else {

				$value["acat_name"] = html($value["acat_name"]);
				if(!$value["acat_aktiv"] || $value["acat_regonly"]) {
					$value['status'] = array();
					if(!$value["acat_aktiv"]) {
						$value['status'][] = $GLOBALS['BL']['be_inactive'];
					}
					if($value["acat_regonly"]) {
						$value['status'][] = $GLOBALS['BL']['be_locked'];
					}
					if(count($value['status'])) {
						$value["acat_name"] .= ' ('.implode(', ', $value['status']).')';
					}
				}

				echo '<option value="', $value["acat_id"], '"';
				if($selected_id==$value["acat_id"]) {
					define('ACAT_OPENGRAPH_STATUS', empty($value["acat_opengraph"]) ? false : true);
					echo ' selected="selected"';
				}
				echo '>', $value["acat_name"], '</option>', LF;
				struct_select_menu($counter, $value["acat_id"], $selected_id, 'option');

			}
		}
	}

	if($return=='array') {
		return $structure;
	}
}

function change_articledate($article_id=0) {
	// update article date when content part was changed
	$article_id = intval($article_id);
	if($article_id) {
		$sql  = "UPDATE ".DB_PREPEND."phpwcms_article SET ";
		$sql .= "article_tstamp = NOW() WHERE article_id = '".$article_id."' LIMIT 1 ;";
		mysql_query($sql, $GLOBALS['db']);
	}
}

function struct_select_list($counter=0, $struct_id=0, & $selected_id, $add_alias=false) {

	global $db;

	$struct_id	= intval($struct_id);
	$counter	= intval($counter) + 1;

	$sql = "SELECT acat_id,acat_name,acat_alias FROM ".DB_PREPEND."phpwcms_articlecat WHERE acat_trash=0 AND acat_struct=".$struct_id." ORDER BY acat_sort;";
	if($result = mysql_query($sql, $db) or die ("error while building struct select menu (ID:".$struct_id)) {
		$sx=0;
		while($row = mysql_fetch_assoc($result)) {
			$struct[$sx] = $row;
			$sx++;
		}
		mysql_free_result($result);
	}
	if(isset($struct[0])) {
		foreach($struct as $key => $value) {

			$value['acat_name'] = html($struct[$key]["acat_name"]);
			if($add_alias && $struct[$key]["acat_alias"]) {
				$value['acat_name'] .= ' ('.$struct[$key]["acat_alias"].')';
			}

			echo '<option value="', $struct[$key]["acat_id"], '"';
			if(in_array($struct[$key]["acat_id"], $selected_id)) {
				echo ' selected="selected"';
			}
			echo ' title="', $value['acat_name'], '">';
			echo str_repeat("&#8212;", $counter), ' ', $value['acat_name'];
			echo '</option>'.LF;
			struct_select_list($counter, $struct[$key]["acat_id"], $selected_id, $add_alias);
		}
	}
}

?>