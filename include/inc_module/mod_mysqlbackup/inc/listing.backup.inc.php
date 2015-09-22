<?php
// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------


		$files = returnFileListAsArray($plugin['config']['backup_dir'],'sql,gz');
		#$files = array_reverse($files,1);
		krsort($files);

?>

<form action="<?php echo MODULE_HREF ?>" method="post" name="backupform" id="backupform" enctype="multipart/form-data">
<!-- radiobut names as arr! -->
<input id="backup" type="radio" name="opt" value="backup" /> <label for="backup">backup database</label><br/>
<input id="revert" type="radio" name="opt" value="revert" /> <label for="revert">revert to selected database</label><br/> 
<input id="import" type="radio" name="opt" value="import" /> <label for="import">import</label> 
<input type="file" name="importfile" id="importfile" />
<br/>
<textarea name="notice" style="overflow:auto;height:100px;white-space: pre;width:100%;"></textarea>
<div align="right">
<input type="submit" name="action" value="Go!" />
</div>

<?php
if(isset($txt)){
	
	echo '<textarea style="overflow:auto;height:300px;white-space: pre;width:100%;">'.$txt.'</textarea>';
	
}
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" summary="">
		
	<tr><td colspan="6"><img src="img/leer.gif" alt="" width="1" height="3"></td></tr>
	<tr><td colspan="6" bgcolor="#92A1AF"><img src="img/leer.gif" alt="" width="1" height="1"></td></tr>
	
<?php
// loop listing available newsletters
$row_count = 0;                

foreach($files as $row) {

	echo '<tr'.( ($row_count % 2) ? ' bgcolor="#F3F5F8"' : '' ).'>';

	echo '<td class="tdbottom3 tdtop3" nowrap="nowrap">';
	if($row['ext'] == "sql")
	echo '<input type="radio" name="importdump" value="'.$row['filename'].'"/>';
	echo '</td>';

	echo '<td class="tdbottom3 tdtop3" nowrap="nowrap">';
	echo '<a href="'.$phpwcms['modules'][$module]['dir'].'dl.php?file='.$row['filename'].'">';
	echo $row['filename'];
	echo '</a></td>';
		
	echo '<td class="tdbottom3 tdtop3">';
	#echo html_specialchars($row['referrer']).'" target="_blank">'.html_specialchars($row['domain']);
	echo '</td>';
	
	echo '<td class="tdbottom3 tdtop3">&nbsp;';
	echo fsizelong($row['filesize']);
	echo '&nbsp;</td>';

	
	echo '<td class="tdbottom3 tdtop3">';
	#echo html_specialchars(PHPWCMS_CHARSET != 'utf-8' && seems_utf8($row['query']) ? makeCharsetConversion($row['query'], 'utf-8', PHPWCMS_CHARSET, false) : $row['query']);
	echo date('Y.m.d H:i:s',$row['filetime']);
	echo '</td>';
	
	echo '<td class="tdbottom3 tdtop3">';
	echo '<input class="deletedump" type="checkbox" name="deletedump[]" value="'.$row['filename'].'"/>';
	echo '</td>';

	echo "</tr>\n";

	$row_count++;
}

if($row_count) {
	echo '<tr><td colspan="6" bgcolor="#92A1AF"><img src="img/leer.gif" alt="" width="1" height="1"></td></tr>';
	echo '<tr><td colspan="5" align="right">Select all for delete&nbsp;</td>';
	echo '<td bgcolor="#92A1AF">';
	echo '<input id="checkAll" type="checkbox" name="selectall" value="1"/>';
	echo '</td></tr>';
}

?>	

	<tr><td colspan="5"><img src="img/leer.gif" alt="" width="1" height="15"></td></tr>
</table>
</form>