<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package BRVO Modding
 */
?>

<?php if( is_active_sidebar( 'brvo-modding-sidebar-shop' ) ): ?>
		<?php dynamic_sidebar( 'brvo-modding-sidebar-shop' ); ?>
<?php endif;