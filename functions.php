<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

//Add borwser class so we can style according to browser
function organizedthemes_browser_body_class($classes) {
 
    global $is_gecko, $is_IE, $is_safari, $is_chrome;
 
    if($is_gecko)
    {
    	$classes[] = 'firefox';
    }
    elseif($is_safari)
    {
    	$classes[] = 'safari';
    }
    elseif($is_chrome) 
    {
    	$classes[] = 'chrome';
    }
    elseif($is_IE)
    {  
	$classes[] = 'ie';
    }
    else
    {            
    	$classes[] = 'unknown';
    }
 
    return $classes;
 
}
add_filter('body_class','organizedthemes_browser_body_class');

?>
