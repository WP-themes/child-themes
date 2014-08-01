<?php
/**
 * This file calls the init.php file, but only
 * if the child theme hasn't called it first.
 *
 * This method allows the child theme to load
 * the framework so it can use the framework
 * components immediately.
 *
 *
 * @category Genesis
 * @package  Templates
 * @author   StudioPress
 * @license  GPL-2.0+
 * @link     http://my.studiopress.com/themes/genesis
 */

require_once( dirname( __FILE__ ) . '/lib/init.php' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Display a custom favicon
add_filter( 'genesis_pre_load_favicon', 'sp_favicon_filter' );
function sp_favicon_filter( $favicon_url ) {
  return 'http://www.webdesignpop.com/wp-content/images/favicon.ico';
}

//* Unregister secondary navigation menu
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );

//* Customize the submit button text in comments
add_filter( 'comment_form_defaults', 'sp_comment_submit_button' );
function sp_comment_submit_button( $defaults ) {

        $defaults['label_submit'] = __( 'Send', 'custom' );
        return $defaults;

}

//* Customize the return to top of page text
add_filter( 'genesis_footer_backtotop_text', 'sp_footer_backtotop_text' );
function sp_footer_backtotop_text($backtotop) {
  $backtotop = '[footer_backtotop text="Take Me to The Top"]';
  return $backtotop;
}
//* Customize the entire footer
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
  ?>
  <p>&copy; Copyright 2014 <a href="http://webdesignpop.com/">web design POP, Ltd. Co.</a> &middot; All Rights Reserved &middot; <a href="/privacy-policy">Privacy Policy</a> &middot; <a href="/terms-conditions">Terms & Conditions</a></p>
  <?php
}
