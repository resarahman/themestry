<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Themestry
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4">
	<?php 
		if ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) {
			dynamic_sidebar( 'sidebar-shop' );
		} else {
			dynamic_sidebar( 'sidebar-1' );
		} 
	?>
</aside><!-- #secondary -->
