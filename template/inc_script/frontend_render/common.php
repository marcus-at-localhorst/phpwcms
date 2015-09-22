<?php

/**
 * Global Stuff
 */

// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
   die("You Cannot Access This Script Directly, Have a Nice Day.");
}


// -- Load JavaScript

$jss = array("inc_layout/js/bootstrap.js", "inc_layout/js/plugins.js", "inc_layout/js/common.js");

foreach($jss as $js){
	$GLOBALS['block']['custom_htmlhead'][$js] = getJavaScriptSourceLink(TEMPLATE_PATH.$js);
}

/* 
 * grab all inline scripts and 
 * turn it to PHPWCMS internal <!-- JS: --> notion 
 * After that run PHPQUERY else html tags in scripts get mangled
 * Then phpwcms renders <script> tags back...
 */
if(!empty($phpwcms['js_in_body'])) {
	if(preg_match_all('#<script\b[^>]*>(.*?)</script>#si', $content['all'], $match))
	{
		foreach($match[1] as $k => $js){
			$match[1][$k] = "<!-- JS:  {$js} -->";
		}
		$content['all'] = str_replace($match[0],$match[1],$content['all']);
	}
}
