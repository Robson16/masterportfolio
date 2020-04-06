<?php

/**
 * Master Portfolio functions and settings
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
if (!function_exists('masterportfolio_setup')) {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function masterportfolio_setup() {
        // Enabling translation support
        load_theme_textdomain( 'masterportfolio', get_stylesheet_directory() . '/languages/' );
        load_theme_textdomain( 'masterportfolio', get_template_directory() . '/languages/' );

        // Menu registration
        register_nav_menus( array(
            'main_menu'     => __( 'Main Menu', 'masterportfolio' ),
        ) );

        // Add theme support
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo', array(
            'height'        => 80,
            'width'         => 100,
            'flex-height'   => true,
            'flex-width'    => true,
            'header-text'   => array( 'site-title', 'site-description' ),
        ) );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );

        // Custom image sizes
        add_image_size( 'navbar_logo', 25, 20, true );
        add_image_size( 'large_narrow', 1200, 500, true );
        add_image_size( 'thumbnails_portfolio' , 348, 218, true );
    }

}

add_action( 'after_setup_theme', 'masterportfolio_setup' );

/**
 * Enqueue scripts and styles.
 */
function masterportfolio_scripts() {
    // CSS
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', NULL, '4.4.1', 'all' );
    wp_enqueue_style( 'masterportfolio-frontend-style', get_template_directory_uri() . '/assets/css/frontend/frontend-style.css', array( 'bootstrap' ), wp_get_theme()->get( 'Version' ), 'all' );
    // Js
    wp_deregister_script( 'jquery');
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
    wp_enqueue_script( 'webfontloader', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', NULL, '1.6.26', true );
    wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/1cb1a8d503.js', NULL, '5.10.2', false );

    // Enqueue only if the api key is available
    if ( get_theme_mod( 'setting_googlemaps_apikey' ) ) {
        wp_enqueue_script( 'maps-googleapi', '//maps.googleapis.com/maps/api/js?key=' . get_theme_mod( 'setting_googlemaps_apikey' ), NULL, '1.0', true );
        wp_enqueue_script( 'masterportfolio-init-map', get_template_directory_uri() . '/assets/js/initmap.js', array( 'maps-googleapi' ), '1.0', true );
    }
}

add_action('wp_enqueue_scripts', 'masterportfolio_scripts');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function masterportfolio_sidebars() {

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
        'after_widget'  => '</div></div>',
    );

    // Footer #1
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __('Footer Column One', 'masterportfolio'),
        'id'            => 'footer-column-one',
        'description'   => __('Add some widget.', 'masterportfolio'),
    ) ) );

    // Footer #2
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __('Footer Column Two', 'masterportfolio'),
        'id'            => 'footer-column-two',
        'description'   => __('Add some widget.', 'masterportfolio'),
    ) ) );

    // Footer #3
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Footer Column Three', 'masterportfolio' ),
        'id'            => 'footer-column-three',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );

    // Footer #4
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Footer Column Four', 'masterportfolio' ),
        'id'            => 'footer-column-four',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );

    // Frontpage #1
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Frontpage Widget One', 'masterportfolio' ),
        'id'            => 'frontpage-widget-one',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );

    // Frontpage #2
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Frontpage Widget Two', 'masterportfolio' ),
        'id'            => 'frontpage-widget-two',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );

    // Frontpage #3
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Frontpage Widget Three', 'masterportfolio' ),
        'id'            => 'frontpage-widget-three',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );

    // Frontpage #4
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Frontpage Widget Four', 'masterportfolio' ),
        'id'            => 'frontpage-widget-four',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );
    
    // Blog
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Blog Sidebar', 'masterportfolio' ),
        'id'            => 'blog-sidebar-widgets',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );
}

add_action( 'widgets_init', 'masterportfolio_sidebars' );

/**
 *  WordPress Bootstrap Nav Walker
 */
require_once get_template_directory() . '/includes/classes/class-wp-bootstrap-navwalker.php';

/**
 *  WordPress Bootstrap Pagination
 */
require_once get_template_directory() . '/includes/wp-bootstrap4.1-pagination.php';

/**
 *  TGM Plugin Activation
 */
require_once get_template_directory() . '/includes/required-plugins.php';

/**
 * Extra functions, filters, and actions for the theme
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 *  Custom Post Types
 */
require_once get_template_directory() . '/includes/post-type.php';

/**
 *  Custom Taxonomy
 */
require_once get_template_directory() . '/includes/taxonomy.php';

/**
 *  Meta-Box Framework Fields
 */
require_once get_template_directory() . '/includes/meta-boxes.php';

/**
 *  Kirki Framework Config
 */
require_once get_template_directory() . '/includes/kirki/kirki-config.php';
