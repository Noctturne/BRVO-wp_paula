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
        <section class="popular-products"> 
            <div class="container">
                <div class="row">
                    <h1 class="text-center"> Popular Products </h1>
                    <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
                </div>
            </div>
        </section>
        <section class="new-arrival"> 
            <div class="container">
                <div class="row">
                    <h1 class="text-center"> New Arrival </h1>
                    <?php echo do_shortcode('[products limit="3" columns="3" orderby="date"]'); ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>