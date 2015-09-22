<?php

/**
 * set a path to a html template in Main Block in Backend, read it and overwrite the variable
 */

$templatefile = PHPWCMS_TEMPLATE.$block['maintext'];

if(strlen($templatefile) == strlen(strip_tags($templatefile))){
	if(preg_match('#\.tmpl|\.html$#', $templatefile) && is_file($templatefile)){
		$template = @file_get_contents($templatefile);
	}else{
		$template = false;
	}
	$block['maintext'] = ($template)?$template:'<div class="error">No valid template!</div>';
}
