<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <og@phpwcms.org>
 * @copyright Copyright (c) 2002-2015, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.de
 *
 **/


session_start();
$phpwcms = array();
$ref = $_SESSION['REFERER_URL'];


require_once ('../../config/phpwcms/conf.inc.php');
require_once ('../inc_lib/default.inc.php');
require_once (PHPWCMS_ROOT.'/include/inc_lib/dbcon.inc.php');

require_once (PHPWCMS_ROOT.'/include/inc_lib/general.inc.php');
checkLogin();
require_once (PHPWCMS_ROOT.'/include/inc_lib/backend.functions.inc.php');

if($_SESSION["wcs_user_admin"] == 1) { //Wenn Benutzer Admin-Rechte hat

	//diverse Aktionen	
	$do = explode(",", $_GET["do"]);
	
	switch(intval($do[0])) {
	
		case 1: //Aktiv/Inaktiv File Category
				$do[1] = intval($do[1]); //cat ID
				$do[2] = intval($do[2]); //active value
				if($do[1]) {
					$sql =  "UPDATE ".DB_PREPEND."phpwcms_filecat SET fcat_aktiv=".$do[2]." WHERE fcat_id=".$do[1].";";
					mysql_query($sql, $db) or die("error while changing file category status");			
				}
				break;
		
		case 2: //Aktiv/Inaktiv File Key
				$do[1] = intval($do[1]); //key ID
				$do[2] = intval($do[2]); //active value
				if($do[1]) {
					$sql =  "UPDATE ".DB_PREPEND."phpwcms_filekey SET fkey_aktiv=".$do[2]." WHERE fkey_id=".$do[1].";";
					mysql_query($sql, $db) or die("error while changing file key status");			
				}
				break;		

		case 8: //L�schen der File Category
				$do[1] = intval($do[1]); //delete ID
				if($do[1]) {
					$sql =  "UPDATE ".DB_PREPEND."phpwcms_filecat SET fcat_deleted=9 WHERE fcat_id=".$do[1].";";
					mysql_query($sql, $db) or die("error while deleting file category");			
				}
				break;
	
		case 9: //L�schen des File Keys
				$do[1] = intval($do[1]); //delete ID
				$do[2] = intval($do[2]); //cat ID
				if($do[1] && $do[2]) {
					$sql =  "UPDATE ".DB_PREPEND."phpwcms_filekey SET fkey_deleted=9 WHERE fkey_id=".$do[1]." AND fkey_cid=".$do[2].";";
					mysql_query($sql, $db) or die("error while deleting file key");			
				}
				break;
	
	}
	
} //Ende Abarbeiten Aktion

headerRedirect($ref);

?>