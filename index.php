<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BRVO Modding
 */
?>
<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="hero"> Hero Section </section>
            <section class="custom"> Custom Section </section>
            <section class="popular-products"> Popular Products Section </section>
            <section class="new-arrival"> New Arrival Section </section>
        </main>
    </div>
<?php get_footer(); ?>
