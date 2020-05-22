<?php

require( get_template_directory() .'/src/Context.class.php');

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/css/style.css', false, filemtime( get_stylesheet_directory() . '/css/style.css' ) );
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], filemtime( get_stylesheet_directory() . '/js/main.js' ) );
} );
