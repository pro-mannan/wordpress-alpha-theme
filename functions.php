<?php
/**
 * CometPro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CometPro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cometpro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on CometPro, use a find and replace
		* to change 'cometpro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cometpro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus([
		'mine_menu'			=> 'Mine Menu',
		'footer_menu'		=> 'Footer Menu'
	]);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cometpro_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support('post-formats',['audio','video','gallery','quote']);

	function footer_menu(){

	}
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cometpro_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cometpro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cometpro_content_width', 640 );
}
add_action( 'after_setup_theme', 'cometpro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cometpro_widgets_init() {
	register_sidebar([
		'name'				=> 'Right Sidebar',
		'id'				=> 'rsidebar',
		'description'		=> 'Comet Right Sidebar',
		'before_widget'			=> '<div class="widget">',
		'after_widget'			=> '</div>',
		'before_title'			=> '<h6 class="upper">',
		'after_title'			=> '</h6>'

	]);
	 register_sidebar([
	 	'name'				=> 'Footer Sidebar 1',
	 	'id'				=> 'fsidebar1',
	 	'description'		=> 'Coment Footer Sidebar',
	 	'before_widget'		=> '<div class="widget">',
	 	'after_widget'		=> '</div>',
	 	'before_title'		=> '<h6 class="upper">',
	 	'after_title'		=> '</h6>',

	 ]);


	  register_sidebar([
	 	'name'				=> 'Footer Sidebar 2',
	 	'id'				=> 'fsidebar2',
	 	'description'		=> 'Coment Footer Sidebar',
	 	'before_widget'		=> '<div class="widget">',
	 	'after_widget'		=> '</div>',
	 	'before_title'		=> '<h6 class="upper">',
	 	'after_title'		=> '</h6>',

	 ]);


	   register_sidebar([
	 	'name'				=> 'Footer Sidebar 3',
	 	'id'				=> 'fsidebar3',
	 	'description'		=> 'Coment Footer Sidebar',
	 	'before_widget'		=> '<div class="widget">',
	 	'after_widget'		=> '</div>',
	 	'before_title'		=> '<h6 class="upper">',
	 	'after_title'		=> '</h6>',

	 ]);
}
add_action( 'widgets_init', 'cometpro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cometpro_scripts() {

	wp_enqueue_style( 'cometpro-bundle', get_template_directory_uri() . '/asess/css/bundle.css');
	wp_enqueue_style( 'cometpro-stylehtml', get_template_directory_uri() . '/asess/css/style.css');
	wp_enqueue_style( 'montserrat','https://fonts.googleapis.com/css?family=Montserrat:400,700');
	wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500');
	wp_enqueue_style( 'Halant', 'https://fonts.googleapis.com/css?family=Halant:300,400');
	wp_enqueue_style( 'cometpro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cometpro-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cometpro-jquery', get_template_directory_uri() . '/asess/js/jquery.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cometpro-bundle', get_template_directory_uri() . '/asess/js/bundle.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cometpro-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cometpro-main', get_template_directory_uri() . '/asess/js/main.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cometpro-navigation', get_template_directory_uri() . '/asess//js/navigation.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'cometpro-cometjs', get_template_directory_uri() . '/asess/js/cometjs.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cometpro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// include redux framework now
include_once"libs/opt/redux-core/framework.php";
include_once"libs/opt/sample/sample-config.php";


// include CMB2 framework now
include_once"libs/cmb/config.php";
include_once"libs/cmb/init.php";


// include CMB2 framework now
include_once"libs/tgm/example.php";

//comet all Resgiser sidebar hear now
include_once "libs/widgets/comet_search_widget.php";
include_once "libs/widgets/comet_sidebar_title.php";

//comet all widgets footer link hear now
include_once "libs/widgets/comet_footer_about_us_widget.php";
include_once "libs/widgets/comet_footer_subcription.php";

// Coment Comment callback function hear now
include_once"libs/comments/replay_comments.php";




//VC_Map all element link hear Now
include_once"libs/shortcode/coment_slider.php";
include_once"libs/shortcode/comet_title.php";
include_once"libs/shortcode/comet_description.php";
include_once"libs/shortcode/comet_expertise.php";

