<?php
//Shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

//Use shortcode to display screenshots
function wps_screenshot($atts, $content = null) {
extract(shortcode_atts(array(
"screenshot" => 'http://s.wordpress.com/mshots/v1/',
"url" => 'http://',
"alt" => 'screenshot',
"width" => '400',
"height" => '300'
), $atts));
return $screen = '<img src="' . $screenshot . ''
. urlencode($url) . '?w=' . $width .
'&h=' . $height . '" alt="' . $alt . '"/>';
}
add_shortcode("screenshot", "wps_screenshot");
