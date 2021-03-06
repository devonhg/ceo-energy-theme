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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( is_active_sidebar( 'lower-sidebar' ) ) : ?>
	<div id="lower-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'lower-sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
