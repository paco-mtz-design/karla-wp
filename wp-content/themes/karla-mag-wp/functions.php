<?php

if (function_exists('add_theme_support'))
{
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size( 'feeds-thumb', 560, 340, true ); // Hard Crop Mode
}

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>
