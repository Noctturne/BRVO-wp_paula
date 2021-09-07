<?php
/**
 * Template name: Home Page
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