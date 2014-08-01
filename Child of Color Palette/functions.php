<?php
//change login logo
function custom_login_logo() {
echo '<style type="text/css">
h1 a { background-image:url('.get_bloginfo('template_directory').'/images/login_logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_login_logo');
//Shortcodes in widgets
add_filter('widget_text', 'do_shortcode');
