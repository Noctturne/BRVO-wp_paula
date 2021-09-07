<?php
/**
 * BRVO Modding functions, styles and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package BRVO Modding
 */
function brvo_modding_scripts() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.0.2', true );
	wp_enqueue_style('bootstrap-css',  get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.2', 'all');
	wp_enqueue_style('brvo-modding-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all');
}
add_action( 'wp_enqueue_scripts', 'brvo_modding_scripts' );


function brvo_modding_config(){
	register_nav_menus(
		array(
			'brvo_modding_main_menu' => 'BRVO Modding Main Menu'
		)
	);
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 255,
		'single_image_width' => 255,
		'product_grid' => array(
			'default_rows' => 4,
			'min_rows' => 4,
			'max_rows' => 10,
			'default_columns' => 4,
			'min_columns' => 1,
			'max_columns' => 4,
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if( ! isset( $content_width ) ){
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'brvo_modding_config', 0 );








