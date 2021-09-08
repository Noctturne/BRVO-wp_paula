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
                    ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <div><?php the_content(); ?></div>
                            <?php 
                                if( comments_open() || get_comments_number() ):
                                comments_template();
                                endif;
                            ?>
                    <?php endwhile; ?>
                        </article>
                    <?php 
                endwhile;
                ?>
            </div>
        </div>
<?php get_footer(); ?>