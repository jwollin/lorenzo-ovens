<?php
/**
 * lorenzoovens functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lorenzoovens
 */

if ( ! function_exists( 'lorenzoovens_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lorenzoovens_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on lorenzoovens, use a find and replace
         * to change 'lorenzoovens' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'lorenzoovens', get_template_directory() . '/languages' );

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
            'primary' => esc_html__(
                'Primary',
                'lorenzoovens'
            ),
            'primary-footer-menu' => esc_html__(
                'Primary Footer',
                'primary-footer-menu'
            ),
            'secondary-footer-menu' => esc_html__(
                'Secondary Footer',
                'secondary-footer-menu'
            )
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
        add_theme_support( 'custom-background', apply_filters( 'lorenzoovens_custom_background_args', array(
            'default-color' => 'f4f0e0',
            'default-image' => '',
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'lorenzoovens_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lorenzoovens_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lorenzoovens_content_width', 640 );
}
add_action( 'after_setup_theme', 'lorenzoovens_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function lorenzoovens_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar One', 'lorenzoovens' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lorenzoovens' ),
		'before_widget' => '<div class="card"><section id="%1$s" class="widget %1$s">',
		'after_widget'  => '</section><!-- .widget .%2$s --></div><!-- .card -->',
		'before_title'  => '<h2 class="widget-title card-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Two', 'lorenzoovens' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'lorenzoovens' ),
		'before_widget' => '<div class="card"><section id="%2$s" class="widget %2$s">',
		'after_widget'  => '</section><!-- .widget .%2$s --></div><!-- .card -->',
		'before_title'  => '<h2 class="widget-title card-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
        'name'          =>__( 'Front page sidebar', 'wpb'),
        'id'            => 'sidebar-3',
        'description'   => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
        register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-4',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
}
add_action( 'widgets_init', 'lorenzoovens_widgets_init' );

function change_header_background() {
	$post_page_background = get_the_post_thumbnail_url();
    echo "url(" . $post_page_background . ")";
}

/**
 *
 * Enqueue scripts and styles.
 *
 */

function lorenzoovens_scripts() {
	wp_enqueue_style( 'lorenzoovens-style', get_stylesheet_uri() );

	wp_enqueue_style( 'oswald-google-font', 'https://fonts.googleapis.com/css?family=Oswald' );

	wp_enqueue_style( 'raleway-google-font', 'https://fonts.googleapis.com/css?family=Raleway' );

//	wp_enqueue_script( 'lorenzoovens-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    //if ( ! wp_script_is( 'jquery', 'enqueued' )) {

        // Enqueue jQuery
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js' );

    //}
    wp_enqueue_script( 'lorenzoovens-navigation', get_template_directory_uri() . '/js/init.js', array(), '20151215', true );
    wp_enqueue_script( 'materialize-js', get_template_directory_uri() . '/materialize-src/js/bin/materialize.js' );

	wp_enqueue_script( 'prefix-font-awesome', 'https://use.fontawesome.com/2a4239e3dd.js', array(), 'v4.7.0' );

	wp_enqueue_script( 'lorenzoovens-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorenzoovens_scripts' );

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
