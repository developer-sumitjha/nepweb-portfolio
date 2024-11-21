<?php

// Enqueue Theme Style
function nepweb_scripts() {
	wp_enqueue_style( 'nepweb-style', get_stylesheet_uri() );
	wp_enqueue_script('nepweb-script', get_template_directory_uri() . "/assets/js/scripts.js");
}
add_action( 'wp_enqueue_scripts', 'nepweb_scripts' );


if ( ! function_exists( 'nepweb_register_nav_menu' ) ) {

	function nepweb_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'secondary_menu' => __( 'Secondary Menu', 'text_domain'),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'nepweb_register_nav_menu', 0 );
}



// Add Theme Support
add_theme_support( 'post-thumbnails' );
// add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
// add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
// add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

require_once get_template_directory() . '/theme-options.php';
