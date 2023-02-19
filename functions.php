<?php
  /**
 * mauricode functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mauricode
 */

 if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/* Vider automatiquement la corbeille WordPress 
       define('EMPTY_TRASH_DAYS', 5 );*/


if ( ! function_exists( 'mauricode_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mauricode_setup() {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mauricode, use a find and replace
		 * to change 'mauricode' to the name of your theme in all the template files.
		 */
	
		load_theme_textdomain( 'mauricode', get_template_directory() . '/languages' );

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
		add_theme_support('post-thumbnails');    
		add_image_size( 'featured-thumbnail', 300, 270, true ); //Register image sizes
		add_image_size( 'small_image', 500, 250, true );
           
		function get_the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {
			$custom_thumbnail = '';
		
			if ( null === $post_id ) {
				$post_id = get_the_ID();
			}
		
			if ( has_post_thumbnail( $post_id ) ) {
				$attributes = array_merge( $additional_attributes);
		
				$custom_thumbnail = wp_get_attachment_image(
					get_post_thumbnail_id( $post_id ),
					$size,
					false,
					$attributes
				);
			}
		
			return $custom_thumbnail;
		}
		
		/**
		 * Renders Custom Thumbnail with Lazy Load.
		 *
		 * @param int    $post_id               Post ID.
		 * @param string $size                  The registered image size.
		 * @param array  $additional_attributes Additional attributes.
		 */
		function the_post_custom_thumbnail( $post_id, $size = 'featured-thumbnail', $additional_attributes = [] ) {
			echo get_the_post_custom_thumbnail( $post_id, $size, $additional_attributes );
		}
		// This theme uses wp_nav_menu() in one location.
	
              register_nav_menus(
             array(
                  'menu_principal' => esc_html__( 'Menu principal', 'mauricode_theme' ),
                  'menu_pied'  => esc_html__( 'Menu pied', 'mauricode_theme' ),
                  'social'  => esc_html__( 'Social Links Menu', 'mauricode_theme' ),
             )
             );
         
     
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
				'widget',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'mauricode_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

       add_filter( 'wp_lazy_loading_enabled', '__return_false' );
		//Add post format support 

		add_theme_support('post-formats', array('video','aside','gallery' ,'link'));

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
        
		// Enable support for <title> tag.
		add_theme_support( 'title-tag' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			apply_filters(
				'mauricode_custom_background_args',
			array(
				'height'      => 45,
				'width'       => 164,
				'flex-width'  => true,
				'flex-height' => true,
			
				)
				)
		);

	}
endif;
add_action( 'after_setup_theme', 'mauricode_setup' );




function mauricode_scripts() {	
	// include bootstrap 4 css
	wp_enqueue_style( 'bootstrapcdn-4.6.2-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', [],);
	// wp_enqueue_script( 'theme-mauricode-navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );

	// include bootstrap 4 js
	wp_enqueue_script( 'bootstrapcdJquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', ['jquery'], true );
	
	wp_enqueue_script( 'bootstrapcdn-4.6.2-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', ['jquery'], true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'mauricode_scripts' );
https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css
