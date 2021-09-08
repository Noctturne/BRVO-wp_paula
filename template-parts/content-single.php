<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2>
        <?php the_title(); ?>
        </h2>
        <div class="meta">
            <p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
            <br/>
            <?php if(has_category()): ?>
                Categories: <span><?php the_category(' '); ?></span>
            <?php endif; ?>
            <br/>
            <?php if(has_tag()):  ?>
                Tags: <span><?php the_tags( '', ', ' ) ?></span>
            <?php endif; ?>
            </p>
        </div>
        <div class="post-thumbnail">
            <?php if (has_post_thumbnail( )): 
                the_post_thumbnail(array('class' => 'img-fluid'));
            endif;
            ?>
        </div>
    </header>
    <?php /* Only 50 words of the post content*/ ?>
    <div class="content">
        <?php wp_link_pages(array( 
            'before' => '<p class="inner-pagination">' . 'Pages',
            'after' => '</p>',
        ))?>
        <?php the_content(); ?>
    </div>
</article>