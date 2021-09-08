<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package BRVO Modding
 */
?>

<?php if( is_active_sidebar( 'brvo-modding-sidebar-1' ) ): ?>
	<aside class="col-12 col-lg-3 col-md-4 h-100">
		<?php dynamic_sidebar( 'brvo-modding-sidebar-1' ); ?>
	</aside>
<?php endif;