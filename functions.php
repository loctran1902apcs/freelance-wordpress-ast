<?php
/**
 * Airi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Airi
 */

if ( ! function_exists( 'airi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function airi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Airi, use a find and replace
		 * to change 'airi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'airi', get_template_directory() . '/languages' );

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

		add_image_size( 'airi-720', 720 );
		add_image_size( 'airi-360-360', 360, 360, true );
		add_image_size( 'airi-850-485', 850, 485, true );
		add_image_size( 'airi-390-280', 390, 280, true );
		add_image_size( 'airi-969-485', 969, 485, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'airi' ),
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
		add_theme_support( 'custom-background', apply_filters( 'airi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

	}
endif;
add_action( 'after_setup_theme', 'airi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function airi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'airi_content_width', 1170 );
}
add_action( 'after_setup_theme', 'airi_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */
function airi_scripts() {
	wp_enqueue_style( 'airi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'airi-skip-link-focus-fix', get_template_directory_uri() . '/js/vendor/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'airi-font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );

	//Deregister FontAwesome from Elementor
	wp_deregister_style( 'font-awesome' );

	if ( !class_exists( 'Kirki_Fonts' ) ) {
		wp_enqueue_style( 'airi-fonts', '//fonts.googleapis.com/css?family=Work+Sans:400,500,600', array(), null );
	}

	//Load masonry

	wp_enqueue_script( 'airi-scripts', get_template_directory_uri() . '/js/vendor/scripts.js', array( 'jquery' ), '20180223', true );

	wp_enqueue_script( 'airi-main', get_template_directory_uri() . '/js/custom/custom.min.js', array( 'jquery' ), '20181017', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'airi_scripts' );

 /**
 * Enqueue custom Elementor scripts
 */
function airi_elementor_scripts() {
	wp_enqueue_script( 'airi-navigation', get_template_directory_uri() . '/js/vendor/navigation.js', array( 'jquery', 'jquery-slick', 'imagesloaded' ), '20180717', true );
}
add_action('elementor/frontend/after_register_scripts', 'airi_elementor_scripts');

// /**
// * Enqueue Bootstrap
// */
//function airi_enqueue_bootstrap() {
//	wp_enqueue_style( 'airi-bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css', array(), true );
//}
//add_action( 'wp_enqueue_scripts', 'airi_enqueue_bootstrap', 9 );

/**
 * Gutenberg
 */
function airi_editor_styles() {

	wp_enqueue_style( 'airi-block-editor-styles', get_theme_file_uri( '/editor-styles.css' ), '', '1.0', 'all' );

	if ( !class_exists( 'Kirki_Fonts' ) ) {
		wp_enqueue_style( 'airi-fonts', '//fonts.googleapis.com/css?family=Work+Sans:400,500,600', array(), null );
	}
}
add_action( 'enqueue_block_editor_assets', 'airi_editor_styles' );

/**
 * Disable Elementor globals on theme activation
 */
function airi_disable_elementor_globals () {
	update_option( 'elementor_disable_color_schemes', 'yes' );
	update_option( 'elementor_disable_typography_schemes', 'yes' );
}
add_action('after_switch_theme', 'airi_disable_elementor_globals');
