<?php
/**
 * BRVO Modding functions, styles and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package BRVO Modding
 */
function brvo_modding_scripts() {
	wp_enqueue_style('brvo-modding-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all');
}
add_action( 'wp_enqueue_scripts', 'brvo_modding_scripts' );