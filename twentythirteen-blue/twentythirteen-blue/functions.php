<?php

function twentythirteen_blue_custom_header_setup() {

	// remove the header support
	remove_theme_support( 'custom-header' );
	
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '100e22',
		'default-image'          => '%2$s/images/headers/circle.png',

		// Set height and width, with a maximum value for the width.
		'height'                 => 230,
		'width'                  => 1600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'twentythirteen_header_style',
		'admin-head-callback'    => 'twentythirteen_admin_header_style',
		'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);

	// add it back, with changes
	add_theme_support( 'custom-header', $args );


	// remove the ugly orange headers
	unregister_default_headers( array( 'circle', 'diamond', 'star' ) );

	// replace with nice blue ones
	register_default_headers( array(
		'circle' => array(
			'url'           => '%2$s/images/headers/circle.png',
			'thumbnail_url' => '%2$s/images/headers/circle-thumbnail.png',
			'description'   => _x( 'Circle', 'header image description', 'twentythirteen' )
		),
		'diamond' => array(
			'url'           => '%2$s/images/headers/diamond.png',
			'thumbnail_url' => '%2$s/images/headers/diamond-thumbnail.png',
			'description'   => _x( 'Diamond', 'header image description', 'twentythirteen' )
		),
		'star' => array(
			'url'           => '%2$s/images/headers/star.png',
			'thumbnail_url' => '%2$s/images/headers/star-thumbnail.png',
			'description'   => _x( 'Star', 'header image description', 'twentythirteen' )
		),
	) );
}
add_action( 'after_setup_theme', 'twentythirteen_blue_custom_header_setup', 20 );