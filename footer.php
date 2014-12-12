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
			<p><small>&copy; 2014 Kantan Designs.</small></p>
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





});
</script>

</body>
</html>
