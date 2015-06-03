<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>

<?php if ( is_active_sidebar( 'upper-sidebar' ) ) : ?>
	<div id="upper-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'upper-sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php woocommerce_content(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'lower-sidebar' ) ) : ?>
	<div id="lower-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'lower-sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
