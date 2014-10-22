<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package kantan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kantan' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php 
		// only include the Edit link if it's not the front page:
			$path = locate_template('front-page.php', $load = false, $require_once = true );
			if ('' == $path ) {
				edit_post_link( __( 'Edit', 'kantan' ), '<span class="edit-link">', '</span>' ); 
			}	
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
