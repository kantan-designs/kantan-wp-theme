<?php
/**
 * @package kantan
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php kantan_posted_on(); ?>
		</div><!-- .entry-meta -->

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

<div class="cta-box">
	<form class="subscribe-cta" action="http://kantandesignsinc.createsend.com/t/d/s/tihijk/" method="post">

	    <h2>Dig this post?</h2>
	    <p>Get our thoughtful, conversion-focused (or code-focused) ideas, case studies, and food for thought every week.</p>
	    
	    <!-- <label for="fieldEmail">Email</label> -->
	    <input id="fieldEmail" placeholder="Your email" name="cm-tihijk-tihijk" type="email" required /><button type="submit">Subscribe</button><hr class="mobile-only"></form><div class="service-cta"><h2>About Kantan</h2>
	    <p>Find out how we can help fix your site copy, streamline your sales funnel &amp; more.</p><p><a href="<?php echo site_url(); ?>#our-services">See our services >></a></p>
	</div>
</div>

	</div><!-- .entry-content -->
	

	<footer class="entry-footer">

		<?php kantan_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
