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

// build the database table prepend part
define ('DB_PREPEND', $phpwcms["db_prepend"] ? $phpwcms["db_prepend"].'_' : '');

// open the connection to MySQL database
$is_mysql_error = false;

if($phpwcms["db_pers"] == 1) {
	$db = @mysql_pconnect($phpwcms["db_host"], $phpwcms["db_user"], $phpwcms["db_pass"]) or ($is_mysql_error = true);
} else {
	$db = @mysql_connect($phpwcms["db_host"], $phpwcms["db_user"], $phpwcms["db_pass"]) or ($is_mysql_error = true);
}

$is_mysql_error = _dbSelect() ? false : true;

if($is_mysql_error) {
	header('Location: '.PHPWCMS_URL.'dbdown.php');
	exit();

}

// set DB to compatible mode
// for compatibility issues try to check for MySQL version and charset
$phpwcms['db_version'] = _dbInitialize();
define('PHPWCMS_DB_VERSION', $phpwcms['db_version']);

if(!function_exists('mysql_real_escape_string')) {
	if(function_exists('mysql_escape_string')) {
		function mysql_real_escape_string($string) {
			return mysql_escape_string( $string );
		}
	} else {
		function mysql_real_escape_string($string) {
			return str_replace("'", "''", str_replace("\\", "\\\\", $string) );
		}
	}
}
// deprecated function for escaping db items
function aporeplace($value='') {
	// ToDo: Check if _dbEscape($value, false) might better replacement
	return mysql_real_escape_string($value);
}

function _dbSelect($db_table='') {

	if(empty($db_table)) {
		$db_table = $GLOBALS['phpwcms']["db_table"];
	}

	if(isset($GLOBALS['phpwcms']["db_table_selected"]) && $GLOBALS['phpwcms']["db_table_selected"] == $db_table) {
		return true;
	}

	// Set current selected DB Table
	$GLOBALS['phpwcms']["db_table_selected"] = $db_table;

	return @mysql_select_db($db_table, $GLOBALS['db']);

}

function _dbQuery($query='', $_queryMode='ASSOC') {

	if(empty($query)) return false;

	global $db;
	$queryResult	= array();
	$queryCount		= 0;

	if($result = @mysql_query($query, $db)) {

		switch($_queryMode) {

			// INSERT, UPDATE, DELETE
			case 'INSERT':	$queryResult['INSERT_ID']		= mysql_insert_id($db);
			case 'DELETE':
			case 'UPDATE':
							$queryResult['AFFECTED_ROWS']	= mysql_affected_rows($db);
							return $queryResult;
							break;

			// INSERT ... ON DUPLICATE KEY
			case 'ON_DUPLICATE':
							$queryResult['AFFECTED_ROWS']	= mysql_affected_rows($db);
							$queryResult['INSERT_ID']		= mysql_insert_id($db);
							if($queryResult['AFFECTED_ROWS'] == 2) {
								$queryResult['INSERT_ID']		= 0;
								$queryResult['AFFECTED_ROWS']	= 1;
							}
							return $queryResult;
							break;

			// SELECT Queries
			case 'ROW':		$_queryMode = 'mysql_fetch_row';	break;
			case 'ARRAY':	$_queryMode = 'mysql_fetch_array';	break;

			// COUNT
			case 'COUNT':	// first check if SQL COUNT() is used
							$query = strtoupper($query);
							if(strpos($query, 'SELECT COUNT(') !== false) {
								$row = mysql_fetch_row($result);
								return $row ? (int) $row[0] : 0;
							} else {
								return mysql_num_rows($result);
							}
							break;

			// SET, CREATE, ALTER, DROP, RENAME
			case 'RENAME':
			case 'DROP':
			case 'ALTER':
			case 'SET':
			case 'CREATE':	return true;
							break;

			// send SHOW query and count results
			case 'COUNT_SHOW':
							return mysql_num_rows($result);
							break;

			default: 		$_queryMode = 'mysql_fetch_assoc';

		}

		while($row = $_queryMode($result)) {

			$queryResult[$queryCount] = $row;
			$queryCount++;

		}
		mysql_free_result($result);

		return $queryResult;

	} else {
		return false;
	}

}

function _dbCount($query='') {
	return _dbQuery($query, 'COUNT');
}

// function for simplified insert
function _dbInsert($table='', $data=array(), $special='', $prefix=NULL) {

	if(empty($table)) return false;
	if(!is_array($data) || !count($data)) return false;

	$table	= (is_string($prefix) ? $prefix : DB_PREPEND).$table;
	$fields	= array();
	$values	= array();
	$x		= 0;

	foreach($data as $key => $value) {
		$fields[$x]	= '`'.$key.'`';
		$values[$x]	= _dbEscape($value);
		$x++;
	}

	if($special) {
		$special = strtoupper(trim($special));
		if($special != 'LOW_PRIORITY' || $special != 'DELAYED') {
			$special = 'DELAYED';
		}
		$special .= ' ';
	}

	$query  = 'INSERT '.$special.'INTO ' . $table . ' (';
	$query .= implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')';

	return _dbQuery($query, 'INSERT');

}

function _dbInsertOrUpdate($table='', $data=array(), $where='', $prefix=NULL) {

	// INSERT ... ON DUPLICATE KEY UPDATE is available for MySQL >= 4.1.0
	// $where is necessary OR if $where is empty first array $data element
	// have to be the primary OR a unique key otherwise this will fail

	global $phpwcms;

	if(empty($table)) return false;
	if(!is_array($data) || !count($data)) return false;

	$table	= (is_string($prefix) ? $prefix : DB_PREPEND).$table;
	$fields	= array();
	$values	= array();
	$set	= array();
	$x		= 0;

	foreach($data as $key => $value) {
		$fields[$x]	= '`'.$key.'`';
		$values[$x]	= _dbEscape($value);
		$set[$x]	= $fields[$x].'='.$values[$x];
		$x++;
	}

	$insert  = 'INSERT INTO ' . $table . ' (';
	$insert .= implode(',', $fields) . ') VALUES (' . implode(',', $values) . ')';

	if($phpwcms['db_version'] < 40100) {
		// the old way

		// 1st send INSERT
		$result = _dbQuery($insert, 'INSERT');

		if($result === false) {

			// INSERT was false, now try UPDATE
			$update  = 'UPDATE ' . $table . ' SET ';
			$update .= implode(',', $set) . ' WHERE ';
			if($where === '' || strpos($where, '=') === false) {
				reset($data);
				$key	= key($data);
				$value 	= current($data);
				$update .= '`'.$key.'`=';
				$update .= _dbEscape($value);
			} else {
				$update .= trim($where);
			}

			return _dbQuery($update, 'UPDATE');

		} else {

			return $result;
		}

	} else {
		// the new way
		$insert .= ' ON DUPLICATE KEY UPDATE ';
		$insert .= implode(',', $set);

		return _dbQuery($insert, 'ON_DUPLICATE');
	}

	return false;

}

// simplified db select
function _dbGet($table='', $select='*', $where='', $group_by='', $order_by='', $limit='', $prefix=NULL, $_queryMode='ASSOC') {

	if(empty($table)) return false;

	$table		= (is_string($prefix) ? $prefix : DB_PREPEND).$table;
	$sets		= array();
	$select		= trim($select);
	$limit		= trim($limit);
	$group_by	= trim($group_by);
	$order_by	= trim($order_by);

	if($select === '') {
		$select = '*';
	}
	if($limit !== '') {
		if(is_int($limit)) {
			$limit = ' LIMIT ' . $limit;
		} else {
			$limit = explode(',', $limit);
			$limit[0] = intval(trim($limit[0]));
			$limit[1] = isset($limit[1]) ? intval(trim($limit[1])) : 0;
			if($limit[0] && $limit[1]) {
				$limit = ' LIMIT ' . $limit[0] . ',' . $limit[1];
			} elseif($limit[0] === 0 && $limit[1]) {
				$limit = ' LIMIT ' . $limit[1];
			} elseif($limit[0]) {
				$limit = ' LIMIT ' . $limit[0];
			} else {
				$limit = '';
			}
		}
	}
	if($group_by !== '') {
		$group_by = ' GROUP BY '._dbEscape($group_by, false);
	} else {
		$group_by = '';
	}

	if($order_by !== '') {
		$order_by = ' ORDER BY '._dbEscape($order_by, false);
	} else {
		$order_by = '';
	}

	if($where != '') {
		$where = trim($where);
		if( substr(strtoupper($where), 0, 5) !== 'WHERE' ) {
			$where = 'WHERE '.$where;
		}
		$where = ' '.$where;
	}

	$query = trim( 'SELECT ' . $select . ' FROM ' . $table . $where . $group_by . $order_by . $limit);

	return _dbQuery($query, $_queryMode);
}

// function for simplified update
function _dbUpdate($table='', $data=array(), $where='', $special='', $prefix=NULL) {

	if(empty($table)) return false;
	if(!is_array($data) || !count($data)) return false;

	$table	= (is_string($prefix) ? $prefix : DB_PREPEND).$table;
	$sets	= array();

	foreach($data as $key => $value) {
		$sets[]	= '`'.$key.'`=' . _dbEscape($value);
	}

	if($special) {
		$special = strtoupper(trim($special));
		if($special != 'LOW_PRIORITY') $special = 'LOW_PRIORITY';
		$special .= ' ';
	}

	if($where != '') {
		$where = trim($where);
		if( substr(strtoupper($where), 0, 5) !== 'WHERE' ) {
			$where = 'WHERE '.$where;
		}
	}

	$query = trim( 'UPDATE ' . $special . $table . ' SET ' . implode(',', $sets) . ' ' . $where );

	return _dbQuery($query, 'UPDATE');

}

function _dbGetCreateCharsetCollation() {
	global $phpwcms;
	$value = '';
	if($phpwcms['db_version'] > 40100 && $phpwcms['db_charset']) {
		$value .= ' DEFAULT';
		$value .= ' CHARACTER SET '.$phpwcms['db_charset'];
		if(!empty($phpwcms['db_collation'])) {
			$value .= ' COLLATE '.$phpwcms['db_collation'];
		}
	}
	return $value;
}

function _report_error($error_type='DB', $query='') {
	global $db;
	$error = mysql_error($db);
	if($query) {
		$query  = str_replace(',', ",\n", $query);
		$error .= '<pre>' . $query .'</pre>';
	}
	return $error;
}

function _dbInitialize() {

	global $phpwcms;

	// check if mysql version is set
	if(empty($phpwcms['db_version'])) {
		$version = _dbQuery('SELECT VERSION()', 'ROW');
		if(isset($version[0][0])) {
			$version = explode('.', $version[0][0]);
			$version[0] = intval($version[0]);
			$version[1] = empty($version[1]) ? 0 : intval($version[1]);
			$version[2] = empty($version[2]) ? 0 : intval($version[2]);
			$phpwcms["db_version"] = (int)sprintf('%d%02d%02d', $version[0], $version[1], $version[2]);
		} else {
			return 0;
		}
	}
	if($phpwcms['db_version'] > 40000) {

		if(empty($phpwcms['db_charset'])) {
			$mysql_charset_map = array(	'big5'         => 'big5',	'cp-866'       => 'cp866',	'euc-jp'       => 'ujis',
										'euc-kr'       => 'euckr',	'gb2312'       => 'gb2312',	'gbk'          => 'gbk',
										'iso-8859-1'   => 'latin1',	'iso-8859-2'   => 'latin2',	'iso-8859-7'   => 'greek',
										'iso-8859-8'   => 'hebrew',	'iso-8859-8-i' => 'hebrew',	'iso-8859-9'   => 'latin5',
										'iso-8859-13'  => 'latin7',	'iso-8859-15'  => 'latin1',	'koi8-r'       => 'koi8r',
										'shift_jis'    => 'sjis',	'tis-620'      => 'tis620',	'utf-8'        => 'utf8',
										'windows-1250' => 'cp1250',	'windows-1251' => 'cp1251',	'windows-1252' => 'latin1',
										'windows-1256' => 'cp1256',	'windows-1257' => 'cp1257'   );
			$phpwcms['db_charset'] = $mysql_charset_map[ strtolower($phpwcms['charset']) ];
		}

		// Send charset used in phpwcms for every query
		$sql = "SET NAMES "._dbEscape($phpwcms['db_charset']);
		if($phpwcms['db_version'] > 40100 && !empty($phpwcms['db_collation'])) {
			$sql .= " COLLATE "._dbEscape($phpwcms['db_collation']);
		}
		if(!empty($phpwcms['db_timezone'])) {
			$sql .= ", time_zone = "._dbEscape($phpwcms['db_timezone']);
		}
		_dbQuery($sql, 'SET');
	}

	return $phpwcms['db_version'];
}

// duplicate a DB record based on 1 unique column
function _dbDuplicateRow($table='', $unique_field='', $id_value=0, $exception=array(), $prefix=NULL) {

	// use exceptions to define duplicate values: 'field_name' => 'value' (INT/STRING)
	// to avoid problems with UNIQUE/auto increment columns set 'field_name' => '--UNIQUE--'
	// to overwrite a unique value use excpetions 'unique_field_name' => 'new_value'
	// to use simple SQL functions for exceptions define it like 'field_name' => 'SQL:NOW()'
	// for simple string operations use '--SELF--' like 'field_name' => 'Copy --SELF--'
	// --SELF-- will be replaced by current value of the field

	if(empty($table) || empty($unique_field) || empty($id_value)) return false;
	if(!is_array($exception)) $exception = array();

	$table	= (is_string($prefix) ? $prefix : DB_PREPEND).$table;

	$where_value = is_string($id_value) ? _dbEscape($id_value) : $id_value;
	$row = _dbQuery('SELECT * FROM '.$table.' WHERE '.$unique_field.'='.$where_value.' LIMIT 1');

	// check against result
	if(isset($row[0]) && is_array($row[0]) && count($row[0])) {
		$row = $row[0];
		unset($row[$unique_field]);
	} else {
		return false;
	}

	// check eceptions
	foreach($exception as $key => $value) {
		if(isset($row[$key])) {
			if($value === '--UNIQUE--') {
				unset($row[$key]);
			} else {
				if(is_string($value) && strpos($value, '--SELF--') !== false) {
					$value = str_replace('--SELF--', $row[$key], $value);
				}
				$row[$key] = $value;
			}
		}
	}

	$_VALUE	= array();
	$_SET	= array();
	$c		= 0;

	// build INSERT query
	foreach($row as $key => $value) {
		$_VALUE[$c]	= $key;
		if(is_string($value)) {
			if(strpos($value, 'SQL:') === 0) {
				$_SET[$c] = str_replace('SQL:', '', $value);
			} else {
				$_SET[$c] = _dbEscape($value);
			}
		} else {
			$_SET[$c] = _dbEscape($value);
		}
		$c++;
	}

	$sql  = 'INSERT INTO '.$table.' (';
	$sql .= implode(', ', $_VALUE);
	$sql .= ') VALUES (';
	$sql .= implode(', ', $_SET);
	$sql .= ')';

	$new_id = _dbQuery($sql, 'INSERT');

	if(!empty($new_id['INSERT_ID'])) {

		// fine - auto increment returns new ID
		return $new_id['INSERT_ID'];

	} elseif(isset($new_id['INSERT_ID']) && $new_id['INSERT_ID'] === 0) {

		// hm - maybe no auto increment - but insert was done
		// so lets check against $unique_field and its possible new value
		if(!empty($exception[$unique_field]) && $exception[$unique_field] != '__UNIQUE__') {
			return $exception[$unique_field];
		}

	}
	return false;

}

/*
 * Set Config - store given key/value in config database
 *
 * 2008/03/13 Thiemo Mättig, fixed for MySQL 4.0, use _dbInsertOrUpdate()
 */
function _setConfig($key, $value=NULL, $group='', $status=1) {

	$time		= now();
	$group		= trim($group);
	$status 	= intval($status);

	if (! is_array($key)) {
		$key = array($key => $value);
	}

	foreach($key as $k => $value) {

		if( is_string($value) ) {
			$vartype = 'string';
		} elseif( is_int($value) ) {
			$vartype = 'int';
		} elseif( is_float($value) ) {
			$vartype = 'float';
		} elseif( is_bool($value) ) {
			$vartype = 'bool';
		} elseif( is_array($value) ) {
		 	$vartype = 'array';
			$value   = serialize($value);
		} elseif( is_object($value) ) {
			$vartype = 'object';
			$value   = serialize($value);
		} else {
			$vartype = '';
			$value   = '';
		}

		$data = array(	'sysvalue_key'			=> $k,
						'sysvalue_group'		=> $group,
						'sysvalue_lastchange'	=> $time,
						'sysvalue_status'		=> $status,
						'sysvalue_vartype'		=> $vartype,
						'sysvalue_value'		=> $value	 );

		if ( ! _dbInsertOrUpdate('phpwcms_sysvalue', $data) ) {
			$mysql_error = trim( @mysql_error() );
			trigger_error("_setConfig failed".(empty($mysql_error) ? '' : ' with MySQL error: '.$mysql_error), E_USER_WARNING);
		}

	}

	return true;
}

function _dbEscape($value='', $quoted=TRUE, $prefix='', $suffix='') {
	if(!is_string($value) && !is_numeric($value)) {
		if(is_array($value) || is_object($value)) {
			$value = serialize($value);
			$prefix = '';
			$suffix = '';
		} elseif(is_bool($value)) {
			return $value ? 'true' : 'false';
		} elseif(is_null($value)) {
			return 'NULL';
		} else {
			$value = strval($value);
		}
	}
	$value = $prefix . mysql_real_escape_string($value) . $suffix;
	return $quoted === TRUE ? "'" . $value . "'" : $value;
}

/*
 * Get Config - retrieve Config value from database
 *
 * If $key is string, single value will be returned.
 * If $key given as array - array containing values will be returned.
 * If $set_global is set config value will be registered in $GLOBALS[$set_global],
 * set $set_global = FALSE and var will not be registered in $GLOBALS
 */
function _getConfig($key, $set_global='phpwcms') {
	$return = 'array';
	$string = '';
	if(is_string($key)) {
		if($set_global && isset($GLOBALS[$set_global][$key])) {
			return $GLOBALS[$set_global][$key];
		}
		$return = 'value';
		$string = $key;
		$key = array($key);
	}
	if(is_array($key) && count($key)) {
		$result = array();
		foreach($key as $value) {
			if($set_global && isset($GLOBALS[$set_global][$value])) {
				$result[ $value ] = $GLOBALS[$set_global][$value];
				continue;
			}
			$sql = 'SELECT * FROM '.DB_PREPEND."phpwcms_sysvalue WHERE sysvalue_status=1 AND sysvalue_key='".mysql_real_escape_string($value)."'";
			$row = _dbQuery($sql);
			if(isset($row[0])) {
				switch($row[0]['sysvalue_vartype']) {
					case 'string':	$result[ $value ] = (string) $row[0]['sysvalue_value'];					break;
					case 'int':		$result[ $value ] = (int) $row[0]['sysvalue_value'];					break;
					case 'float':	$result[ $value ] = (float) $row[0]['sysvalue_value'];					break;
					case 'bool':	$result[ $value ] = (bool) $row[0]['sysvalue_value'];					break;
					case 'array':	$result[ $value ] = (array) @unserialize($row[0]['sysvalue_value']);	break;
					case 'object':	$result[ $value ] = (object) @unserialize($row[0]['sysvalue_value']);	break;
					default:		$result[ $value ] = $row[0]['sysvalue_value'];
				}
			}
		}
		if($set_global && count($result)) {
			foreach($result as $key => $value) {
				$GLOBALS[$set_global][$key] = $result[$key];
			}
		}
		if($return === 'array')	{
			return $result;
		} elseif(isset($result[$string])) {
			return $result[$string];
		}
	}
	return false;
}

/**
 * Set MySQL variable
 *
 * An often seen default value is just 1M for that MySQL variable
 * Serialized data or text can be much bigger than this and
 * MySQL connection can get lost. This fixes this and set it
 * to a global default value of 16M
 */
function _dbSetVar($var='', $value=NULL, $compare=FALSE) {

	$var = trim($var);

	// stop if this was set yet. can be defined as
	// additional  config value in conf.inc.php

	if(!is_string($var) || !$var || $value === NULL) {

		return FALSE;

	} elseif(isset($GLOBALS['phpwcms']['mysql_'.$var]) && $GLOBALS['phpwcms']['mysql_'.$var] == $value) {

		return TRUE;

	}

	// check if it is a valid MySQL var
	$_var		= _dbEscape($var, FALSE);
	$result		= _dbQuery('SELECT @@'.$_var.' AS mysqlvar');
	$default	= NULL;

	if(isset($result[0]['mysqlvar'])) {

		// check if the given MySQL var exists
		$default = $result[0]['mysqlvar'];

		if($default !== NULL) {

			$GLOBALS['phpwcms']['mysql_'.$var] = $default;

			switch($compare) {

				case '>':
					$set = $default > $value ? TRUE : FALSE;
					break;

				case '<':
					$set = $default < $value ? TRUE : FALSE;
					break;

				case '!=':
					$set = $default != $value ? TRUE : FALSE;
					break;

				default:
					$set = FALSE;

			}

			// change MySQL var setting
			if($set) {

				$value	= _dbEscape($value, is_numeric($default) ? FALSE : TRUE);

				// try SET SESSION first
				if(!_dbQuery('SET @@'.$_var.'='.$value, 'SET')) {

					if(!_dbQuery('SET @@session.'.$_var.'='.$value, 'SET')) {

						if(!_dbQuery('SET @@global.'.$_var.'='.$value, 'SET')) {

							return FALSE;

						}

					}

				}

				$GLOBALS['phpwcms']['mysql_'.$var] = $value;
				return TRUE;

			}

		}

	}

	return FALSE;
}

?>