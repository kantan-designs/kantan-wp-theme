<?php
/**
 * The template for displaying all single posts.
 *
 * @package kantan
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main package-background background col-wrapper" role="main">

			<div class="opacity_95 white-box width_65 package lower-text-area">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					<?php kantan_post_nav(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>