<?php
/**
 * kantan functions and definitions
 *
 * @package kantan
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600; /* pixels */
}

if ( ! function_exists( 'kantan_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kantan_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kantan, use a find and replace
	 * to change 'kantan' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kantan', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'kantan' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
	) );

	// Setup the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'kantan_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // kantan_setup
add_action( 'after_setup_theme', 'kantan_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kantan_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kantan' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'kantan_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kantan_scripts() {
	wp_enqueue_style( 'kantan-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kantan-navigation', get_template_directory_uri() . '/js/navigation.js' );

	wp_enqueue_script( 'kantan-slicknav', get_template_directory_uri() . '/js/jquery.slicknav.js' );

	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.css' );

	wp_enqueue_script( 'kantan-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kantan_scripts' );



/**
 * Import FontAwesome:
 */

function my_fontawesome_enqueue() {
   wp_deregister_style('fontawesome');
   wp_register_style('fontawesome', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css", false, null);
   wp_enqueue_style('fontawesome');
}
if (!is_admin()) add_action('wp_enqueue_scripts', 'my_fontawesome_enqueue', 10);

/**
 * Import Google Fonts:
 */

function my_googlefonts_enqueue() {
   wp_deregister_style('googlefonts');
   wp_register_style('googlefonts', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic%7CMontserrat", false, null);
   wp_enqueue_style('googlefonts');
}
if (!is_admin()) add_action('wp_enqueue_scripts', 'my_googlefonts_enqueue', 9);



/**
 * Get rid of WP-injected admin-bar styling: 
 * http://davidwalsh.name/remove-wordpress-admin-bar-css
 */

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
