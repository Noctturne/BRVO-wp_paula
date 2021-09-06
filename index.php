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
        <main class="container-fluid">
            <section class="hero"> 
                <div class="vh-100">
                    Hero Section 
                </div>
            </section>
            <section class="custom"> 
                <div class="row">
                    Custom Section
                </div>
            </section>
            <section class="popular-products"> 
                <div class="row">
                    Popular Products Section 
                    <?php 
                        if(have_posts(  )):
                            while(have_posts(  )): the_post();
                            ?>
                                <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div><?php the_content(); ?></div>
                                </article>
                           <?php 
                        endwhile;
                        else:
                    ?>
                        <p> Nothing to display </p>
                        <?php endif; ?>
                </div>
            </section>
            <section class="new-arrival"> 
                <div class="row">
                    New Arrival Section 
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
