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
		<div id="hero" class="radial-center-blue col-wrapper fullscreen">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>
			
		</div>

		<div class="col-wrapper">
			<!-- "You don't just want a "pretty" ...  -->
			<div id="about" class="anchor white-box col-wrapper">
				
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

		<div class="package-background background col-wrapper">

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

						
						<a id="big-orange-button" class="width_70" href="mailto:hello@kantan.io?subject=Interested%20in%20messaging%20help"><h2><?php the_field('step1_button'); ?></h2></a>
						
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
						<a id="big-red-button" class="width_70" href="mailto:hello@kantan.io?subject=Interested%20in%20copy%20and%20page%20optimization">
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

						<a id="big-blue-button" class="width_70" href="mailto:hello@kantan.io?subject=Interested%20in%20testing%20help"><h2><?php the_field('step3_button'); ?></h2></a>
					</div>
				</div>


			</div>

			<div id="meet" class="white-box col-wrapper">
				
				<div class="width_65 h2_copy">
					<?php the_field('meet-the-team'); ?>
				</div>

				<div class="bio width_65 body-copy">

					<div class="small-round-pic left">
						<img id="momo" src="<?php echo get_bloginfo('template_url') ?>/images/momo-headshot.png" alt="Momoko Price headshot">
					</div>
					<div id="momo-text" class="left-text width_65 right">
						<?php the_field('momo-bio'); ?>
					</div>

				</div>

				<div class="bio width_65 body-copy">

					<div class="small-round-pic left">
						<img id="john" src="<?php echo get_bloginfo('template_url') ?>/images/john-headshot.png" alt="John McDowall headshot">
					</div>
					<div id="john-text" class="left-text width_65 right">
						<?php the_field('john-bio'); ?>
					</div>

					</div>

				</div>
					
			</div>

			<div class="col-wrapper radial-center-red">
				<img id="point2" src="<?php echo get_bloginfo('template_url') ?>/images/white-point.png" alt="section separator">

				<div id="get-in-touch" class="h2_copy">		
					<?php the_field('get-in-touch'); ?>
				</div>
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

	
	

	$(document).ready(function () {

		// get collapsed nav height to use for Jquery scroll later: 
		var navHeight = $("#site-navigation").height();

		// Check the current URL on page load to see if a hash was passed

		var windowScrollTop = 0;
		setTimeout(function(){
			windowScrollTop = $(document).scrollTop();
			console.log(windowScrollTop);

			if ( window.location.hash ) {
				var anchor = location.hash;
				pos = $(anchor).position().top;
				console.log(anchor, pos);
				$(document).scrollTop(windowScrollTop-navHeight+10);
			};
		}, 0);
	
		
		// initialize slicknav: 
		$('#menu-kantan-main').slicknav({
			prependTo:'#site-navigation',
			closeOnClick: 'true'
		});
		

		$(".logo").click(function (event){
			event.preventDefault();

			 $('html, body').animate({
			 	scrollTop: 0
    		}, 'slow');
		});

		// add appearance of nav background color on scroll:

		$(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $("#site-navigation").addClass("scrolled");
        	}   
    	});

		// make sure nav background is opaque on small screens: 

    	$(".slicknav_menu").click(function (event){
			event.preventDefault();
			$("#site-navigation").addClass("scrolled");
        });


    	

		// Fade in subhead and color in 'yes' button:

		$(window).load(function() {

			$("#yes_button").delay(500).queue(function(){
				$(this).addClass("opaque");
			});	

			$("#hero_how, #hero_arrow").delay(500).queue(function(next){
				$(this).addClass("opaque");
				next();
			});

		});

		// add animate.css to desktop browsers only:

		$("#yes_button").delay(500).queue(function(){
				$(this).addClass("opaque animated tada");
			});

		 


		// Jquery scroll for slicknav menu items: 

		$(".menu-item-1761, #hero_arrow").click(function (event){
			event.preventDefault();

			 $('html, body').stop(true,true).animate({
			 	scrollTop: $("#about").offset().top - navHeight + 10
    		}, "slow" );
		});

		$(".menu-item-1737").click(function (event){
			event.preventDefault();

			 $('html, body').stop(true,true).animate({
			 	scrollTop: $("#our-services").offset().top - navHeight + 10 
    		}, 'slow');
		});


		$(".menu-item-1738").click(function (event){
			event.preventDefault();

			 $('html, body').stop(true,true).animate({
			 	scrollTop: $("#meet").offset().top - navHeight + 10
    		}, 'slow');
		});

		var adjustsmall = 0; 

  		if ($(window).width() < 650) {
  			adjustsmall = 100
  		}
  		else {
  			adjustsmall = 0
  		}

  		var site_url = "<?php echo site_url(); ?>";

  		$(".menu-item-1812").click(function (event){
  			location.assign(site_url+"/blog");
  			return true;
		});

		$(".menu-item-1740").click(function (event){
			event.preventDefault();

			 $('html, body').stop(true,true).animate({
			 	scrollTop: $("#get-in-touch").offset().top - navHeight + adjustsmall
    		}, 'slow');
		});
	
	});
	
	</script>

	

</body>
</html>
	


