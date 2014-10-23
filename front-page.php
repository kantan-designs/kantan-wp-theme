<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @package kantan
 */

get_header(); ?>

<div class="content-area">
	<main class="site-main" role="main">
		<div class="background col-wrapper fullscreen" style="background-image:url('<?php echo get_bloginfo('template_url') ?>/images/hero-background.png');" data-img-width="1600" data-img-height="1064">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>
		</div>

		<div class="col-wrapper">
			<!-- "You don't just want a "pretty" ...  -->
			<div id="about" class="white-box col-wrapper">
				
				<div class="width_65 h2_copy">
					<?php the_field('section'); ?>
				</div>

				<div class="width_50 body-copy">
					<?php the_field('section_body'); ?>
				</div>

				<!-- "Kantan's copy & UX is perfect for ...  -->
				<div class="blue-box width_65">
					<div class="blue-box-title">
						<?php the_field('perfect-for'); ?>
					</div>

				<!-- "Small Businesses, Tech Startups ...  -->
					<div class="row-wrapper white-box blue-box-copy">
						<?php the_field('perfect-for-list'); ?>
					</div>
				</div>
			</div>	
		</div>
		<div class="section-rule">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/white-point.png" alt="section separator">
		</div>

		<div class="package-background background col-wrapper" style="background-image:url('<?php echo get_bloginfo('template_url') ?>/images/package-background@2px.png');" data-img-width="1600" data-img-height="1064">

			<div id="our-services" class="col-wrapper">
				<div class="width_65">
					<?php the_field('our_services'); ?>
				</div>
				<div class="services_body col-wrapper">
					<div class="width_50">
						<?php the_field('our_services_body'); ?>
					</div>
				</div>


				<div id="package1" class="opacity_95 white-box width_65 package">
					<div class="step-ribbon">
						<img src="<?php echo get_bloginfo('template_url') ?>/images/step1-banner@2x.png" alt="step 1 ribbon">
					</div>
					<div class="col-wrapper left-text">

						<div class="h2_copy width_70">
							<?php the_field('step1'); ?>
						</div>

						<div class="width_70">
							<?php the_field('step1_body1'); ?>
						</div>
						<div class="package-list body-copy width_70">
							<?php the_field('step1_list'); ?>
						</div>
						<div class="body-copy width_70">
							<?php the_field('step1_body2'); ?>
						</div>

						
						<a id="big-orange-button" class="width_70" href="mailto:hello@kantan.io?subject=Help+me+with+my+product+messaging"><h2><?php the_field('step1_button'); ?></h2></a>
						
					</div>
				</div>

				<div id="package2" class="opacity_95 white-box width_65 package">
					<div class="step-ribbon">
						<img src="<?php echo get_bloginfo('template_url') ?>/images/step2-banner@2x.png" alt="step 2 ribbon">
					</div>
					<div class="col-wrapper left-text">

						<div class="h2_copy width_70">
							<?php the_field('step2'); ?>
						</div>

						<div class="body-copy width_70">
							<?php the_field('step2_body1'); ?>
						</div>
						<div class="package-list width_70">
							<?php the_field('step2_list'); ?>
						</div>
						<div class="body-copy width_70">
							<?php the_field('step2_body2'); ?>
						</div>
						<a id="big-red-button" class="width_70" href="mailto:hello@kantan.io?subject=Help+me+with+optimizing+my+copy">
							<h2><?php the_field('step2_button'); ?></h2></a>

					</div>
				</div>

				<div id="package3" class="opacity_95 white-box width_65 package">
					<div class="step-ribbon">
						<img src="<?php echo get_bloginfo('template_url') ?>/images/step3-banner@2x.png" alt="step 3 ribbon">
					</div>
					<div class="col-wrapper left-text">

						<div class="h2_copy width_70">
							<?php the_field('step3'); ?>
						</div>

						<div class="body-copy width_70">
							<?php the_field('step3_body1'); ?>
						</div>
						<div class="package-list body-copy width_70">
							<?php the_field('step3_list'); ?>
						</div>
						<div class="body-copy width_70">
							<?php the_field('step3_body2'); ?>
						</div>

						<a id="big-blue-button" class="width_70" href="mailto:hello@kantan.io?subject=Help+me+with+my+page+designs"><h2><?php the_field('step3_button'); ?></h2></a>
					</div>
				</div>


			</div>

			<div id="meet" class="white-box col-wrapper">
				
				<div class="width_65 h2_copy">
					<?php the_field('meet-the-team'); ?>
				</div>

				<div class="bio width_65 body-copy">

					<div class="small-round-pic left">
						<img id="momo" src="<?php echo get_bloginfo('template_url') ?>/images/momoko.png" alt="Momoko Price headshot">
					</div>
					<div id="momo-text" class="left-text width_65 right">
						<?php the_field('momo-bio'); ?>
					</div>

				</div>

				<div class="bio width_65 body-copy">

					<div class="small-round-pic left">
						<img id="john" src="<?php echo get_bloginfo('template_url') ?>/images/john.jpg" alt="John McDowall headshot">
					</div>
					<div id="john-text" class="left-text width_65 right">
						<?php the_field('john-bio'); ?>
					</div>

					</div>

				</div>
					
			</div>

			<div class="background col-wrapper" style="background-image:url('<?php echo get_bloginfo('template_url') ?>/images/get-in-touch-background@2px.png');" data-img-width="1600" data-img-height="1064">
				<img id="point2" src="<?php echo get_bloginfo('template_url') ?>/images/white-point.png" alt="section separator">

				<div class="h2_copy">		
					<?php the_field('get-in-touch'); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
	
	
</div>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery.slicknav.js"></script>
	
	<script>

	// Initialize jquery transitions and slicknav menu: 

	$(document).ready(function () {

		// slicknav: 

		$('#menu-kantan-main').slicknav({
		prependTo:'#site-navigation'
		});

		

		$(".logo").click(function (){

			 $('html, body').animate({
			 	scrollTop: 0
    		}, 'slow');
		});


		$("#menu-item-1761").click(function (event){
			event.preventDefault();

			 $('html, body').animate({
			 	scrollTop: $("#about").offset().top - $("#site-navigation").height() - 30
    		}, 'slow');
		});


		$("#menu-item-1737").click(function (event){
			event.preventDefault();

			 $('html, body').animate({
			 	scrollTop: $("#our-services").offset().top - $("#site-navigation").height() - 30 
    		}, 'slow');
		});


		$("#menu-item-1738").click(function (event){
			event.preventDefault();

			 $('html, body').animate({
			 	scrollTop: $("#meet").offset().top - $("#site-navigation").height() - 30
    		}, 'slow');
		});


		$("#menu-item-1740").click(function (event){
			event.preventDefault();

			 $('html, body').animate({
			 	scrollTop: $("#point2").offset().top - $("#site-navigation").height() - $("#point2").height() - 60
    		}, 'slow');
		});
	});

	// Initialize slicknav functionality: 



	// Remove layout classes from elements at small-screen sizes:

	$(function(){

	$(window).bind("resize",function(){
	    console.log($(this).width());
	    
	    if($(this).width() <1300){
	    $('#momo-text, #john-text').removeClass('left-text width_65 right')
	    }
	    else{
	    $('#momo-text, #john-text').addClass('left-text width_65 right')
	    }
})
})



	</script>



</body>
</html>
	


