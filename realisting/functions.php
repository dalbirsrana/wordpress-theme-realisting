<?php
/**
 *
 * @package realisting
 */

if ( ! function_exists( 'realisting_setup' ) ) :


	function realisting_setup() {


		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main' => esc_html__( 'Primary', 'realisting' ),
			'menu-footer' => esc_html__( 'Footer', 'realisting' ),
		) );

		/**
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
		) );

		/*
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 40,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/*
		* Add Support for custom header
		*/
		add_theme_support( 'custom-header', array(
			'height' 		=> '900',
			'width'			=> '1800',
			'uploads'		=> true,
			'default-image' => get_template_directory_uri() . '/graphics/home-hero-image.jpg',
		) );
		// Photo by Janis Rozenfelds on Unsplash


	}
endif;

add_action( 'after_setup_theme', 'realisting_setup' );


/**
 * Enqueue scripts and styles.
 */
function realisting_scripts() {
	$rand = rand();
	wp_enqueue_style( 'realisting-style', get_stylesheet_uri(), '', $rand );

	wp_enqueue_style( 'realisting_favIcon', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css' );

	wp_enqueue_style('realisting_google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');

	wp_enqueue_script( 'realisting-script', get_template_directory_uri() . '/main.js', array(), null, true );

}
add_action( 'wp_enqueue_scripts', 'realisting_scripts' );
