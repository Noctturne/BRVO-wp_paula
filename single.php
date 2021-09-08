<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BRVO Modding
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <?php
                        while(have_posts(  )): the_post();
                            get_template_part( 'template-parts/content', 'single' );
                        if( comments_open() || get_comments_number() ):
                            comments_template();
                        endif;
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
<?php
get_footer();