<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BRVO Modding
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title> Modding Paula </title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site vh-100 bg-mixColored text-white">
            <header>
                <section class="top-bar">
                    <div class="row">
                        <nav class="navbar bg-transparent">
                            <div class="container">
                                <!-- LOGO -->
                                <span class="navbar-brand">
                                    <a href="<?php echo home_url( '/' ) ?>"> 
                                        <?php if(has_custom_logo( )): ?>
                                            <?php the_custom_logo(  ); ?> 
                                        <?php else: ?>
                                            <p> LOGO </p>
                                        <?php endif; ?>
                                    </a>
                                </span>
                                <div class="d-flex float-end">
                                    <div class="cart pt-1">
                                        <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart text-light"></i></a>
                                        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                    </div>
                                    <!-- MENÚ BUTTON -->
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"><i class="fas fa-bars fa-sm text-light"></i></span>
                                    </button>
                                </div>
                                    <!-- MENÚ -->
                                    <?php
                                    $args = array(
                                        'theme_location' => 'brvo_modding_main_menu',
                                        'container_id' => 'navbarTop',
                                        'container_class' => 'collapse navbar-collapse',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                wp_nav_menu($args);
                                ?>
                            </div>
                        </nav>
                    </div>
                </section>
                <div class="title position-absolute top-50 start-50 translate-middle">
                    <h1 class="display-1 text-center text-light"> <?php the_title( ); ?></h1>
                </div>
            </header>
        </div>