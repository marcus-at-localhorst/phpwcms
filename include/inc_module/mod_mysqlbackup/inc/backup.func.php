<?php

    function readfile_chunked ($filename,$type='array') {
      $chunk_array=array();
      $chunksize = 1*(1024*1024); // how many bytes per chunk
      $buffer = '';
      $handle = fopen($filename, 'rb');
      if ($handle === false) {
       return false;
      }
      while (!feof($handle)) {
          switch($type)
          {
              case'array':
              // Returns Lines Array like file()
              $lines[] = fgets($handle, $chunksize);
              break;
              case'string':
              // Returns Lines String like file_get_contents()
              $lines = fread($handle, $chunksize);
              break;
          }
      }
       fclose($handle);
       return $lines;
    }

function detect_mysql() {
	global $wpdb;
	$paths = array('mysq' => '', 'mysqldump' => '');
	if(substr(PHP_OS,0,3) == 'WIN') {
		$mysql_install = _dbQuery("SHOW VARIABLES LIKE 'basedir'");
		if($mysql_install) {
			$install_path = str_replace('\\', '/', $mysql_install[0]['Value']);
			$paths['mysql'] = $install_path.'bin/mysql.exe';
			$paths['mysqldump'] = $install_path.'bin/mysqldump.exe';
		} else {
			$paths['mysql'] = 'mysql.exe';
			$paths['mysqldump'] = 'mysqldump.exe';
		}
	} else {
		if(function_exists('exec')) {
			$paths['mysql'] = @exec('which mysql');
			$paths['mysqldump'] = @exec('which mysqldump');
		} else {
			$paths['mysql'] = 'mysql';
			$paths['mysqldump'] = 'mysqldump';
		}
	}
	return $paths;
}

function SplitSQL($file, $delimiter = ';') {
    $out['success'] = array();
    $out['error'] = array();
    $out['result'] = false;
    
    set_time_limit(0);
    
    if (is_file($file) === true) {
        $file = fopen($file, 'r');
        
        if (is_resource($file) === true) {
            $query = array();
            
            while (feof($file) === false) {
                $query[] = fgets($file);
                
                if (preg_match('~'.preg_quote($delimiter, '~').'\s*$~iS', end($query)) === 1) {
                    $query = trim(implode('', $query));
                    
                    if (mysql_query($query) === false) {
                        $out['error'][] = htmlspecialchars($query);
                    }
                    else {
                        $out['success'][] = htmlspecialchars($query);
                    }
                }
                
                if (is_string($query) === true) {
                    $query = array();
                }
            }
            
            fclose($file);
            return $out;
        }
    }
    
    return false;
}





function import_mysqldump($sqlfile,&$config){
	if(!$config['backup_exec']){
		$res = SplitSQL($sqlfile);
		if(count($res['error'] == 0)){
			set_status_message('imported', 'success');
			return true;
		}else{
			set_status_message('not imported', 'error');
			return $res;
		}	
	}else{
		$hs = explode(":",$GLOBALS['phpwcms']['db_host']);
		if(count($hs)>1){
			$host = "--host=".$hs[0];
			$sock = "--socket=".$hs[1];
		}else{
			$host = "--host=".$hs[0];
			$sock ="";
		}
		
		// silly test if I am on my local machine.
		$mysqlexec = $config['mysql'];
		
		exec($mysqlexec.' '.$host.' --user='.$GLOBALS['phpwcms']['db_user'].' --password="'.$GLOBALS['phpwcms']['db_pass'].'" '.$sock.' '.$GLOBALS['phpwcms']['db_table'].' < '.$sqlfile);
		set_status_message('import seems to be successful :)', 'success');
		return true;		
	}
	

}

function execute_mysqldump($sqlfile,&$config,$notice=''){
	
	$dump['file']['sql'] = $sqlfile;
	$dump['file']['gz'] = false;
	$dump['success'] = false;
	$dump['msg'] = array();
	
	if(!$config['backup_exec']){
		$txt = _mysqldump($GLOBALS['phpwcms']['db_table'],$notice);
		if(write_textfile($dump['file']['sql'], $txt)){
			$dump['msg'][] = $dump['file']['sql']." exist";
			$dump['success'] = true;
			
			if($dump['file']['gz'] = gzcompressfile($dump['file']['sql'],9)){
				$dump['msg'][] = "Dump compressed";
				$dump['success'] = true;
			}else{
				$dump['msg'][] = "Dump compression failed";
				$dump['success'] = false;
			}
		}else{
			$dump['msg'][] = "Error: ".$dump['file']['sql']." doesn't exist";
			$dump['success'] = false;				
		}					
	}else{					
		// using exec() with mysqldump
		// http://hilfe-center.1und1.de/sp-service/sofort_hilfe_faq/technische_fragen/web_hosting/datenbanken/mysql/11.html
		$hs = explode(":",$GLOBALS['phpwcms']['db_host']);
		if(count($hs)>1){
			$host = "--host=".$hs[0];
			$sock = "--socket=".$hs[1];
		}else{
			$host = "--host=".$hs[0];
			$sock ="";
		}
		
		// silly test if I am on my local machine.
		$mysqldumpexec = $config['mysqldump'];
		
		exec($mysqldumpexec.' --opt '.$host.' --user='.$GLOBALS['phpwcms']['db_user'].' --password="'.$GLOBALS['phpwcms']['db_pass'].'" '.$sock.' '.$GLOBALS['phpwcms']['db_table'].' > '.$dump['file']['sql']);
		
		if(file_exists($dump['file']['sql'])){
			$dump['msg'][] = $dump['file']['sql']." exist";
			$dump['success'] = true;
			
			if($dump['file']['gz'] = gzcompressfile($dump['file']['sql'],9)){
				$dump['msg'][] = "Dump compressed";
				$dump['success'] = true;
			}else{
				$dump['msg'][] = "Dump compression failed";
				$dump['success'] = false;
			}			
		}else{
			$dump['msg'][] = "Error: ".$dump['file']['sql']." doesn't exist";
			$dump['success'] = false;			
		}
		
	}
	
	if($dump['success'] === true && is_file($dump['file']['gz'])){
		$mailtext[] = "Date: ".date('Y-m-d H:i:s');
		$mailtext[] = "Host: ".$_SERVER['SERVER_NAME'];
		$mailtext[] = "Table: ".$GLOBALS['phpwcms']['db_table'];
		$mailtext[] = "Notice: ".$notice;
		
		$mail = array('recipient'=>($GLOBALS['phpwcms']['backup_email'])?$GLOBALS['phpwcms']['backup_email']:$GLOBALS['phpwcms']['admin_email'],
						'toName'=>($GLOBALS['phpwcms']['backup_email_name'])?$GLOBALS['phpwcms']['backup_email_name']:$GLOBALS['phpwcms']['admin_name'],
						'subject'=>'DB backup from '.$_SERVER['SERVER_NAME'],
						'isHTML'=>0,
						'text'=>implode("\n",$mailtext),
						'attach'=>array($dump['file']['gz']),
						'from'=>$GLOBALS['phpwcms']['admin_user'],
						'fromName'=>($GLOBALS['phpwcms']['backup_email_name'])?$GLOBALS['phpwcms']['backup_email_name']:$GLOBALS['phpwcms']['admin_name'],
						'sender'=>($GLOBALS['phpwcms']['backup_email'])?$GLOBALS['phpwcms']['backup_email']:$GLOBALS['phpwcms']['admin_email']);
		
		$x = sendEmail($mail);
		
		#$dump['msg'][] = print_r($mail,1);
		#$dump['msg'][] = print_r($x,1);
		
		if($x[0] === true){
			$dump['msg'][] = "Mail sent";
			$dump['success'] = true;
		}else{
			$dump['msg'][] = "Mail sent failed";
			$dump['msg'][] = "Error: ".($x[1])?$x[1]:"No Recipient => ".$mail['recipient'];
			$dump['success'] = false;
		}		
	}

	return $dump;	
}

function module_url($get='', $type='htmlentities') {
	$base = MODULE_HREF;
	if(is_array($get) && count($get)) {
		$get = implode('&', $get);
	} elseif(empty($get)) {
		$get = '';
	}
	if($get) $get = '&'.$get;
	if(empty($type) || $type != 'htmlentities') {
		$base = str_replace('&amp;', '&', MODULE_HREF);
	} else {
		$get = html_entities($get);
	}
	return $base.$get;
}

function exec_enabled() {
  if(function_exists('exec')) {
    return true;
}
  return false;
}

function gzfile_get_contents($filename, $use_include_path = 0)
{
    //File does not exist
    if( !@file_exists($filename) )
    {    return false;    }
   
    //Read and imploding the array to produce a one line string
   $data = gzfile($filename, $use_include_path);
   $data = implode($data);
   return $data;
}


function gzcompressfile($source,$level=false){
    $dest=$source.'.gz';
    $mode='wb'.$level;
    $error=false;
    if($fp_out=gzopen($dest,$mode)){
        if($fp_in=fopen($source,'rb')){
            while(!feof($fp_in))
                gzwrite($fp_out,fread($fp_in,1024*512));
            fclose($fp_in);
            }
          else $error=true;
        gzclose($fp_out);
        }
      else $error=true;
    if($error) return false;
      else return $dest;
} 


function _mysqldump($mysql_database,$notice='')
{
	$sql="show tables;";
	$result= mysql_query($sql);
	$output[] = "/* tables in $mysql_database */\n";
	$output[] = "/* Notice :". $notice." */\n";
	if( $result)
	{
		while( $row= mysql_fetch_row($result))
		{
			$output[] = _mysqldump_table_structure($row[0]);
			$output[] = _mysqldump_table_data($row[0]);
		}
	}
	else
	{
		$output[] = "/* no tables in $mysql_database */\n";
	}
	mysql_free_result($result);
	
	return implode("\n\n",$output);
}

function _mysqldump_table_structure($table)
{
	$output = "/* Table structure for table `$table` */\n";
		$output .= "DROP TABLE IF EXISTS `$table`;\n\n";	
		$sql="show create table `$table`; ";
		$result=mysql_query($sql);
		if( $result)
		{
			if($row= mysql_fetch_assoc($result))
			{
				$output .= $row['Create Table'].";\n\n";
			}
		}
		mysql_free_result($result);
	#}
	
	return $output;
}

function _mysqldump_table_data($table)
{
	$output = '';
	$sql="select * from `$table`;";
	$result=mysql_query($sql);
	if( $result)
	{
		$num_rows= mysql_num_rows($result);
		$num_fields= mysql_num_fields($result);
		
		if( $num_rows > 0)
		{
			$output = "/* dumping data for table `$table` */\n";
			
			$field_type=array();
			$i=0;
			while( $i < $num_fields)
			{
				$meta= mysql_fetch_field($result, $i);
				array_push($field_type, $meta->type);
				$i++;
			}
			
			//print_r( $field_type);
			$output .= "INSERT INTO `$table` VALUES ";
			$index=0;
			while( $row= mysql_fetch_row($result))
			{
				$output .= "(";
				for( $i=0; $i < $num_fields; $i++)
				{
					if( is_null( $row[$i]))
						$output .=  "null";
					else
					{
						switch( $field_type[$i])
						{
							case 'int':
								$output .=  $row[$i];
								break;
							case 'string':
							case 'blob' :
							default:
								$output .=  "'".mysql_real_escape_string($row[$i])."'";
								
						}
					}
					if( $i < $num_fields-1)
						$output .=  ",";
				}
				$output .=  ")";
				
				if( $index < $num_rows-1)
					$output .=  ",";
				else
					$output .=  ";";
				$output .=  "";
				
				$index++;
			}
		}
	}
	mysql_free_result($result);
	$output .=  "\n";
	
	return $output;
}

?>