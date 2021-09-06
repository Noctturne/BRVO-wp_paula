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
        <div id="page" class="site">
            <header>
                <section class="top-bar">
                    <div class="row">
                        <nav class="navbar bg-transparent">
                            <div class="container">
                                <!-- LOGO -->
                                <a class="navbar-brand brand"> P </a>
                                <!-- MENÚ BUTTON -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <!-- MENÚ -->
                                    <?php
                                    $args = array(
                                        'theme_location' => 'main-menu',
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
            </header>