<?php
/**
 * 2021b Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 2021b
 */

add_action( 'wp_enqueue_scripts', 'twentytwentyone_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function twentytwentyone_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'twentytwentyone-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( '2021b-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'twentytwentyone-style' )
	);

}
