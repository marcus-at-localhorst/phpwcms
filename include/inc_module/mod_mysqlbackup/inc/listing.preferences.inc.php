<?php
// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------

?>

<p>
	If you have more control over your server you can use <code>mysqlbackup</code> and <code>mysql</code> executables directly.
	Else we just try another Method. :)
	Please test before use and do a manual backup!
	If you are 100% sure you can use it.
</p>

<form action="<?php echo module_url('controller=pref') ?>" method="post" name="config">
	
<table cellpadding="0" cellspacing="0" width="100%">
<tr>
    <td colspan="2" class="rowspacer0x7"></td>
</tr>

<tr>
    <td class="chatlist" align="right"><label for="bname">Name:</label>&nbsp;</td>
	<td class="tdbottom3 tdtop3" ><input id="bname" type="text" name="bname" class="f11b width375" value="<?php echo $plugin['config']['backup_email_name'] ?>" /></td>
</tr>
<tr>
    <td class="chatlist" align="right"><label for="email">Email:</label>&nbsp;</td>
	<td class="tdbottom3 tdtop3"> <input id="email" type="text" name="email" class="f11b width375" value="<?php echo $plugin['config']['backup_email'] ?>" /></td>
</tr>
<tr>
    <td class="chatlist" align="right"><label for="backup_dir">Path:</label>&nbsp;</td>
	<td class="tdbottom3 tdtop3"><input id="backup_dir" type="text" name="backup_dir" class="f11b width375" value="<?php echo PHPWCMS_CONTENT.'backup/' ?>" disabled="disabled" />
	<?php echo (!is_writable(PHPWCMS_CONTENT.'backup/')?'<br/><span class="chatlist">dir is not writable, please set via ftp</span>':""); ?>
	</td>
</tr>
<tr>
    <td colspan="2" class="rowspacer7x7"></td>
</tr>
<tr>
    <td class="chatlist">&nbsp;</td>
	<td class="tdbottom3 tdtop3"><input id="backup_exec" type="checkbox" name="backup_exec" <?php is_checked($plugin['config']['backup_exec'], 1); ?> value="1"/>
	<label for="backup_exec" class="chatlist">Use mysqldump with exec()</label></td>
</tr>
<tr>
    <td class="chatlist">&nbsp;</td>
	<td class="tdbottom3 tdtop3"></td>
</tr>
<?php if($plugin['config']['backup_exec_enable']): ?>
<tr>
    <td class="chatlist" align="right"><label for="mysqldump">Path to <code>mysqldump</code>:</label>&nbsp;</td>
	<td class="tdbottom3 tdtop3"><input id="mysqldump" type="text" name="mysqldump" class="f11b width375" value="<?php echo $plugin['config']['mysqldump'] ?>" /></td>
</tr>
<tr>
    <td class="chatlist" align="right"><label for="mysql">Path to <code>mysql</code>:</label>&nbsp;</td>
	<td class="tdbottom3 tdtop3"><input id="mysql" type="text" name="mysql" class="f11b width375" value="<?php echo $plugin['config']['mysql'] ?>" /></td>
</tr>
<?php else: ?>
<tr>
    <td class="chatlist">&nbsp;</td>
	<td class="tdbottom3 tdtop3"><div class="">
	You cannot use exec(), anyway - backup should work too.
</div></td>
</tr>

<?php endif; ?>
<tr>
    <td colspan="2" class="rowspacer7x7"></td>
</tr>
</table>	

<div align="right">
<input type="submit" name="config" value="Go!" />
</div>
</form>

<p><pre>TODO:
- clean up code
- equalize plugin vars and use properly returns for messages etc.
- <del>let user select switching to exec or normal method.</del>
- better interface
- security check
- move backup dir to content/
- do some serverchecks on first run
- more tests

<?php print_r($plugin['config']); ?>	
</pre>
	
</p>