<?php
/**
 * BRVO Modding functions, styles and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package BRVO Modding
 */
// Register customizer
require_once get_template_directory() . '/inc/customizer.php';

function brvo_modding_scripts() {
	// Bootstrap
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.0.2', true );
	wp_enqueue_style('bootstrap-css',  get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.2', 'all');
	// My styles
	wp_enqueue_style('brvo-modding-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all');
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Lobster&family=Montserrat:ital,wght@0,700;1,400&display=swap');
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
	add_theme_support( 'custom-logo', array(
		'height' => 85,
		'width' => 160,
		'flex_height' => true,
		'flex_width' => true,
	) );


	add_theme_support( 'custom-header', array(
		'default-image'      => get_template_directory_uri() . '/images/headers/bg-blue.png',
		'header-text' => true,
        'default-text-color' => 'FFF',
        'width'              => 1920,
        'height'             => 1080,
	) );

	if( ! isset( $content_width ) ){
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'brvo_modding_config', 0 );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'brvo_modding_woocommerce_add_to_cart_fragments', 'brvo_modding_woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
		<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}

/* Sidebars */
add_action( 'widgets_init', 'brvo_modding_sidebars');
	function brvo_modding_sidebars(){
		register_sidebar( array( 
			'name' => 'BRVO Modding Main Sidebar',
			'id' => 'brvo-modding-sidebar-1',
			'description' => 'Drag and drop your widgets',
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		) );

		register_sidebar( array( 
			'name' => 'Shop Sidebar',
			'id' => 'brvo-modding-sidebar-shop',
			'description' => 'Drag and drop your WooCommerce widgets',
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		) );

		register_sidebar( array( 
			'name' => 'Footer Sidebar',
			'id' => 'brvo-modding-sidebar-footer',
			'description' => 'Drag and drop your footer widgets',
			'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		) );
	}






