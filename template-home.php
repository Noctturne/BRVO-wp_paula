<?php
/**
 * Template name: Home Page
 *
 * @package BRVO Modding
 */
?>
<?php get_header('home'); ?>

    <main>
        <section class="custom"> 
            <div class="row">
                Custom Section
            </div>
        </section>

        <?php
        /* Only show these section if WooCommerce is active */ 
        if( class_exists ( 'WooCommerce' )):
        ?>
        <section class="popular-products"> 
            <?php 

            /* DATA FROM CUSTOMIZE */
            $popular_limit = get_theme_mod( 'set_popular_max_num', 4);
            $popular_col = get_theme_mod( 'set_popular_max_col', 4);
            $new_arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 3);
            $new_arrivals_col = get_theme_mod( 'set_new_arrivals_max_col', 3);

            ?>
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h1 class="text-center"> <?php echo get_theme_mod( 'set_popular_title', 'Popular Products') ?> </h1>
                    </div>
                   <?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
                </div>
            </div>
        </section>
        <section class="new-arrival"> 
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h1 class="text-center"> <?php echo get_theme_mod( 'set_new_arrivals_title', 'New Arrivals') ?> </h1>
                    </div>
                    <?php echo do_shortcode( '[products limit=" ' . $new_arrivals_limit . ' " columns=" ' . $new_arrivals_col . ' " orderby="date"]' ); ?>
                </div>
            </div>
        </section>
    </main>
    <?php endif; ?>
	<!-- End class_exists for WooCommerce -->
<?php get_footer(); ?>