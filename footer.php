<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kantan
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p id="footer"><small>&copy; 2014 Kantan Designs.</small></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery.slicknav.js"></script>
	

	
<script>

// Initialize jquery transitions and slicknav menu: 

// Remove min-height on iOS after fullscreen initialization

$(document).ready(function () {
	
	// initialize slicknav: 

	$('#menu-kantan-main').slicknav({
	prependTo:'#site-navigation',
	closeOnClick: 'true'
	});

	// get collapsed nav height to use for Jquery scroll later: 

	var navHeight = $("#site-navigation").height();
	



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


    // Jquery scroll for slicknav menu items: 

  	var site_url = "<?php echo site_url(); ?>";


	$(".menu-item-1761").click(function (event){
		location.assign(site_url+"#about");
	});

	$(".menu-item-1737").click(function (event){
		location.assign(site_url+"#our-services");
	});


	$(".menu-item-1738").click(function (event){
		location.assign(site_url+"#meet");
	});

	var adjustsmall = 0; 

		if ($(window).width() < 650) {
			adjustsmall = 60
		}
		else {
			adjustsmall = 0
		}


	$(".menu-item-1812").click(function (event){
		location.assign(site_url+"/blog");
	});

	$(".menu-item-1740").click(function (event){
		location.assign(site_url+"#get-in-touch");
	});



});

</script>

</body>
</html>
