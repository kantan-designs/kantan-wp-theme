<?php
/**
 * @package kantan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php kantan_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kantan' ),
				'after'  => '</div>',
			) );
		?>

	<form class="subscribe" action="http://kantandesignsinc.createsend.com/t/d/s/tihijk/" method="post">
	    <h5>Dig this post?</h5>
	    <p>Get our thoughtful, conversion-focused (or code-focused) ideas, case studies, and food for thought every week.</p>
	    <p>
	        <!-- <label for="fieldName">Name</label> -->
	        <input id="fieldName" placeholder="Your name" name="cm-name" type="text" />	 
	        <!-- <label for="fieldEmail">Email</label> -->
	        <input id="fieldEmail" placeholder="Your email" name="cm-tihijk-tihijk" type="email" required />
	    <button type="submit">Get Kantan posts</button></p>
	    
	</form>

	</div><!-- .entry-content -->
	

	<footer class="entry-footer">

		<?php kantan_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
