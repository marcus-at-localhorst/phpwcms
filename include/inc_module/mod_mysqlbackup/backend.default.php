<?php
/*************************************************************************************
   Copyright notice
   
   (c) 2002-2010 Oliver Georgi (oliver@phpwcms.de) // All rights reserved.
 
   This script is part of PHPWCMS. The PHPWCMS web content management system is
   free software; you can redistribute it and/or modify it under the terms of
   the GNU General Public License as published by the Free Software Foundation;
   either version 2 of the License, or (at your option) any later version.
  
   The GNU General Public License can be found at http://www.gnu.org/copyleft/gpl.html
   A copy is found in the textfile GPL.txt and important notices to the license 
   from the author is found in LICENSE.txt distributed with these scripts.
  
   This script is distributed in the hope that it will be useful, but WITHOUT ANY 
   WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
   PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 
   This copyright notice MUST APPEAR in all copies of the script!
*************************************************************************************/

// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------


/*
 * module glossary
 * ===============
 *
 * some defaults for modules: $phpwcms['modules'][$module]
 * store all related in here and holds some default values
 * ['path'], ['type'], ['name']
 * language values are store in $BL['modules'][$module] 
 * as defined in lang/en.lang.php
 * but maybe to keep default language file more lightweight
 * you can use own language definitions starting within this file
 *
 */
 ######## einstellungen #############################################

// first check if neccessary db exists
if(isset($phpwcms['modules'][$module]['path'])) {

	// module default stuff
	$plugin = array( 'data' => array(),
					 'info' => array(),
					 'config'=> array()
							);
	$BE['HEADER']['mootools.js'] = getJavaScriptSourceLink("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js");
	$BE['HEADER']['backend.js'] = getJavaScriptSourceLink($phpwcms['modules'][$module]['dir'].'backend.js');
	// put translation back to have easier access to it - use it as relation
	$BLM = & $BL['modules'][$module];
	define('MODULE_HREF', 'phpwcms.php?do=modules&amp;module='.$module);

	$controller	= empty($_GET['controller']) ? 'backup' : strtolower($_GET['controller']);
	switch($controller) {
	
		case 'backup':	$controller	= 'backup';
						break;		
		case 'pref':	$controller	= 'preferences';
						break;
		default:		$controller	= 'backup';	

	}
	// backup functions
	include_once($phpwcms['modules'][$module]['path'].'inc/backup.func.php');

#print_r($_POST);
	if(isset($_POST['config'])){
		$plugin['config']['backup_dir'] = PHPWCMS_CONTENT.'backup/';
		_setConfig('backup_email_name',clean_slweg($_POST['bname']),'module_mysqlbackup');		
		_setConfig('backup_email',clean_slweg($_POST['email']),'module_mysqlbackup');
		_setConfig('backup_exec',empty($_POST['backup_exec'])?0:1,'module_mysqlbackup');
		#_setConfig('backup_dir',$plugin['config']['backup_dir'],'module_mysqlbackup');
		
		// install dir
		_mkdir($plugin['config']['backup_dir']);
		if(!file_exists($plugin['config']['backup_dir'].'.htaccess')){
			$htaccess = '<Files ~ ".*\..*">
order allow,deny
deny from all
</Files>';
			write_textfile($plugin['config']['backup_dir'].'.htaccess', $htaccess);

		}
		set_status_message("Configuration changed", 'success');
		unset($_POST);		
	}
	
	// basic plugin config
	$plugin['config']['enabled'] = true; // set plugin active
	$plugin['config']['backup_exec_enable'] = exec_enabled();
	$plugin['config']['backup_email_name'] = (_getConfig('backup_email_name'))?_getConfig('backup_email_name'):$GLOBALS['phpwcms']['admin_name'];
	$plugin['config']['backup_email'] = (_getConfig('backup_email'))?_getConfig('backup_email'):$GLOBALS['phpwcms']['admin_email'];
	$plugin['config']['backup_exec'] =  _getConfig('backup_exec');
	$plugin['config']['backup_dir'] =  PHPWCMS_CONTENT.'backup/';
	$mysql = detect_mysql();
	$plugin['config']['mysqldump'] =  ($mysql['mysqldump'])?$mysql['mysqldump']:'mysqldump';
	$plugin['config']['mysql'] =  ($mysql['mysql'])?$mysql['mysql']:'mysql';
	// setup
	if(!is_dir($plugin['config']['backup_dir'])){
		$plugin['config']['enabled'] = false; // firstrun
		$controller	= 'preferences';
		set_status_message("First run! Please set pref!", 'info');
	}

		if(isset($_POST['action'])){
			
			
			
			if($_POST['opt'] == "backup")
			{	
				$sqlfile = $plugin['config']['backup_dir'].$phpwcms['db_table'] . '_' . date('YmdHis') . '.sql';
				
				$plugin['action'] = execute_mysqldump($sqlfile,$plugin['config'],xss_clean(clean_slweg($_POST['notice'])));

				if($plugin['action']['success']){
					set_status_message(implode("\n",$plugin['action']['msg']), 'success');
				}else{
					set_status_message(implode("\n",$plugin['action']['msg']), 'warning');
				}

				
			}
			
			if($_POST['opt'] == "revert")
			{
				if($_POST['importdump']){
 				// TODO some filename check
				$importfile = $_POST['importdump'];
				$date = explode('_',$_POST['importdump']);
				$sqlfile = $plugin['config']['backup_dir'].$phpwcms['db_table'] . '_' . date('YmdHis') . '_revert_from_'.$date[1];
				//make backup first			
				execute_mysqldump($sqlfile,$plugin['config']);
				
				$sqlfile = $plugin['config']['backup_dir'].$importfile;
				$res = import_mysqldump($sqlfile,$plugin['config']);
				if($res['error'])
					$txt = implode("\n",$res['error']);
									
				}else{
					set_status_message('select sql to revert', 'info');
				}				
			}
			
			if($_POST['opt'] == "import")
			{
				if(!empty($_FILES['importfile']['name'])) {
	
					// image upload
					$upload = saveUploadedFile('importfile', $plugin['config']['backup_dir'],'gz,sql','','1,3');
					if($upload['status']) {
						#print_r($upload);
						$upload['file'] = $upload['rename'];
						unset($_POST['action']);
					} else {
						$plugin['error']['import'] = $upload['error'];
					}
					
				}
				
				if(!preg_match('#\.gz$#', $upload['file'])){
					import_mysqldump($upload['path'].$upload['file'],$plugin['config']);
					print_r("imported:".$upload['path'].$upload['file']);
				}else{
					$revertsql = gzfile_get_contents($upload['path'].$upload['file']);
					$filename = preg_replace('"\.(gz)$"', '.sql',$upload['file']);
					write_textfile($upload['path'].$filename, $revertsql);
					import_mysqldump($upload['path'].$filename,$plugin['config']);
				}
				
				
				if(count($plugin['error'])>0)
				{
					set_status_message(implode('<br/>',$plugin['error']), 'warning');
				}else{
					set_status_message("upload successful", 'success');
				}
				

			}
			
			if(!empty($_POST['deletedump']) && count($_POST['deletedump'])){
				foreach($_POST['deletedump'] as $val){
					if(which_ext($val) == "gz" || which_ext($val) == "sql"){
						if(is_file($plugin['config']['backup_dir'].$val)) {
						if(@unlink($plugin['config']['backup_dir'].$val)){
							$plugin['success'][] = $val;	
						}
						}
					}
				}
				if(empty($plugin['error'])){
					set_status_message("Successfully deleted following files: ".implode(", ",$plugin['success']),'success');
				}else{
					set_status_message("Error deleting following files: ".implode(", ",$plugin['error']),'warning');
				}
				
				
			}
			
			
		}


		// header
		include_once($phpwcms['modules'][$module]['path'].'inc/tabs.inc.php');
		
		// listing
		include_once($phpwcms['modules'][$module]['path'].'inc/listing.' . $controller . '.inc.php');
		
}

?>