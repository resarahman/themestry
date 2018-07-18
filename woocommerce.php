<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package almas
 */

get_header(); ?>

<div class="row">
	
	<?php if ( ! is_singular() ) : ?> 
		<?php get_sidebar(); ?>
	<?php endif ?>

	<div id="primary" class="content-area col-md-<?php echo is_singular() ? 12 : 8; ?>">
		<main id="main" class="site-main">

		<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();