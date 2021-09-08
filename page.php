<?php
/**
 * Page template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BRVO Modding
 */
?>
<?php get_header(); ?>
        <div class="container">
            <div class="row">
                <?php 
                    while(have_posts(  )): the_post();
                        get_template_part( 'template-parts/content', 'page' );
                    endwhile; 
                ?>
            </div>
        </div>
<?php get_footer(); ?>