<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package kantan
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url') ?>/css/all-ie-only.css" />
<![endif]-->

<meta name="google-site-verification" content="hklJh07OEqeUL-RwPamy0y7bQAdyMUmbcs1aQewT9YY" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56615055-1', 'auto');

  ga('require', 'displayfeatures');
  ga('require', 'linkid', 'linkid.js');

  ga('send', 'pageview');

</script>


</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'kantan' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="logo">
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.png" alt="Kantan Designs"></a>
			</div>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">	
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
