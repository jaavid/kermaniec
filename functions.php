<?php
/**
 * Kerman IEC functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kerman_IEC
 */

if ( ! function_exists( 'kermaniec_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kermaniec_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Kerman IEC, use a find and replace
		 * to change 'kermaniec' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kermaniec', get_template_directory() . '/languages' );

		//Special IEC Functions	
	    add_filter('excerpt_more', 'iec_excerpt_more');	

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'kermaniec' ),
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
		add_theme_support( 'custom-background', apply_filters( 'kermaniec_custom_background_args', array(
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
add_action( 'after_setup_theme', 'kermaniec_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kermaniec_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kermaniec_content_width', 640 );
}
add_action( 'after_setup_theme', 'kermaniec_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kermaniec_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kermaniec' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kermaniec' ),
		'before_widget' => '<section id="%1$s" class="widget segment ui purple raised %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<span class="ui purple large ribbon label"><i class="angle left icon"></i> ',
		'after_title' => '</span>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kermaniec' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'kermaniec' ),
		'before_widget' => '<section id="%1$s" class="widget segment ui purple raised %2$s">',
		'after_widget'  => '</section>',
		'before_title' => '<span class="ui purple large ribbon label">',
		'after_title' => '</span>',
	) );
	register_sidebar(array(
		'id' => 'azan',
		'name' => __('اذان'),
		'description' =>'نمایش دهنده اذان',
		'before_widget' => '<div id="%1$s" class="content foothq %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="ui purple large ribbon label"><i class="icon clock"></i> ',
		'after_title' => '</span>',
	));
		register_sidebar(array(
		'id' => 'weather',
		'name' => __('آب و هوا'),
		'description' =>'نمایش دهنده آب و هوا',
		'before_widget' => '<div id="%1$s" class="content foothq %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="ui purple large ribbon label"><i class="icon cloud"></i> ',
		'after_title' => '</span>',
	));
	register_sidebar(array(
		'id' => 'amar',
		'name' => __('آمار'),
		'description' =>'نمایش دهنده آمار',
		'before_widget' => '<div id="%1$s" class="content foothq %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<span class="ui purple large ribbon label"><i class="chart bar outline icon"></i> ',
		'after_title' => '</span>',
	));
}
add_action( 'widgets_init', 'kermaniec_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kermaniec_scripts() {
	wp_enqueue_style( 'kermaniec-style', get_stylesheet_uri() );
	wp_enqueue_script( 'kermaniec-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'kermaniec-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// Match Height
	wp_enqueue_script( 'matchHeight-js', get_template_directory_uri() . '/assets/matchHeight/jquery.matchHeight-min.js', array('jquery'), '20151215', true );
	
	// Seamtic RTL Compressed CSS
	wp_enqueue_style( 'framework-css', get_template_directory_uri() . '/framework/compiled/semantic.rtl.min.css' );
	
	// Semantic Compressec JS
	wp_enqueue_script( 'framework-js', get_template_directory_uri() . '/framework/compiled/semantic.min.js', array('jquery'), '20151215', true );
	
	// Slick CSS
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/slick-carousel/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/slick-carousel/slick/slick-theme.css' );	
	
	// Slick JS
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/slick-carousel/slick/slick.min.js', array('jquery'), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'kermaniec_scripts' );

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

/**
 * IEC additions.
 */
require get_template_directory() . '/inc/iec.php';

add_filter( 'wpseo_breadcrumb_links', 'yoast_seo_breadcrumb_append_link' );
function yoast_seo_breadcrumb_append_link( $links ) {
    global $post;
    if ( is_singular( 'service') ) {
        $breadcrumb[] = array(
            'url' => site_url( '/iec-eservices' ),
            'text' => 'میز خدمت الکترونیکی',
        );
        array_splice( $links, 1, -2, $breadcrumb );
    }
    return $links;
}


// Add Service ID to Edit services in backend
add_filter( 'manage_edit-service_columns', 'add_columns' );

function add_columns( $columns ) {
    $columns['sid'] = 'شناسه خدمت';
    return $columns;
}
add_action( 'manage_service_posts_custom_column', 'columns_content', 10, 2 );
function columns_content( $column_name, $post_id ) {
    if ( 'sid' != $column_name ) {return;}
	$return 	= get_post_meta( $post_id, 'serviceid', true );
	echo $return;
}