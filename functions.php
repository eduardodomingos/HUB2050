<?php
/**
 * HUB 2050 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HUB_2050
 */

if ( ! function_exists( 'hub_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hub_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on HUB 2050, use a find and replace
		 * to change 'hub' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hub', get_template_directory() . '/languages' );

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
		add_image_size( 'hub-fullbleed', 2000, 1200, true );
		add_image_size( 'hub-thumbnail', 400, 267, true );
		add_image_size( 'hub-partner-logo', 9999, 70, false );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'hub' ),
			'social' => esc_html__( 'Social Menu', 'hub' ),
			'footer' => esc_html__( 'Footer Menu', 'hub' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'hub_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		// add_theme_support( 'custom-logo', array(
		// 	'height'      => 250,
		// 	'width'       => 250,
		// 	'flex-width'  => true,
		// 	'flex-height' => true,
		// ) );
	}
endif;
add_action( 'after_setup_theme', 'hub_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hub_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hub_content_width', 640 );
}
add_action( 'after_setup_theme', 'hub_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function hub_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'hub' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'hub' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hub_scripts() {
	wp_enqueue_style( 'hub-fonts', '//fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:400,400i,700' );

	wp_enqueue_style( 'hub-animate', get_template_directory_uri() . '/css/animate.min.css' );

	wp_enqueue_style( 'hub-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hub-parallax', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '20181005', true );

	wp_enqueue_script( 'hub-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20181113', true );

	wp_enqueue_script( 'hub-isotope', get_template_directory_uri() . '/js/isotope.min.js', array(), '20190122', true );

	wp_enqueue_script( 'hub-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '20181005', true );

	// wp_enqueue_script( 'hub-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// wp_enqueue_script( 'hub-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'hub_scripts' );

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load SVG icon functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Load walker to modify the footer menu output.
 */
require get_template_directory() . '/inc/walker-footer-menu.php';


/**
 * Create an options page,
 */
if( function_exists('acf_add_options_page') ) {
	
	//acf_add_options_page();


	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Works Manager',
		'menu_title'	=> 'Works Manager',
		'parent_slug'	=> 'edit.php?post_type=work',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Partners Manager',
		'menu_title'	=> 'Partners Manager',
		'parent_slug'	=> 'edit.php?post_type=partners',
	));

}

