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
        $textdomain = 'masterportfolio';
        load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
        load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

        // Menu registration
        register_nav_menus(array(
            'main_menu' => __('Main Menu', 'masterportfolio'),
        ));

        // Add theme support
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'height' => 80,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));
        add_theme_support('post-thumbnails');

        // Custom image sizes
        add_image_size('navbar_logo', 25, 20, true);
        add_image_size('post_header', 2560, 450, true);
    }

}

add_action('after_setup_theme', 'masterportfolio_setup');

/**
 * Remove default meta boxes
 */
function remove_metaboxes() {
    remove_meta_box('postcustom', 'page', 'normal'); //removes custom fields for page
    remove_meta_box('commentstatusdiv', 'page', 'normal'); //removes comments status for page
    remove_meta_box('commentsdiv', 'page', 'normal'); //removes comments for page
    remove_meta_box('authordiv', 'page', 'normal'); //removes author for page
}

add_action('admin_menu', 'remove_metaboxes');

/**
 * Enqueue scripts and styles.
 */
function masterportfolio_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', NULL, '4.3.1', 'all');
    wp_enqueue_style('masterportfolio-style', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');
    // Js
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('webfontloader', '//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', NULL, '1.6.26', true);
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/1cb1a8d503.js', NULL, '5.10.2', false);
}

add_action('wp_enqueue_scripts', 'masterportfolio_scripts');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function masterportfolio_sidebars() {
    // Footer
    register_sidebar(array(
        'name' => __('Footer Column One', 'masterportfolio'),
        'id' => 'footer-column-one',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Column Two', 'masterportfolio'),
        'id' => 'footer-column-two',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Column Three', 'masterportfolio'),
        'id' => 'footer-column-three',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Column Four', 'masterportfolio'),
        'id' => 'footer-column-four',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    // Frontpage
    register_sidebar(array(
        'name' => __('Frontpage Widget One', 'masterportfolio'),
        'id' => 'frontpage-widget-one',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Frontpage Widget Two', 'masterportfolio'),
        'id' => 'frontpage-widget-two',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Frontpage Widget Three', 'masterportfolio'),
        'id' => 'frontpage-widget-three',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Frontpage Widget Four', 'masterportfolio'),
        'id' => 'frontpage-widget-four',
        'description' => __('Add some widget.', 'masterportfolio'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'masterportfolio_sidebars');


/**
 *  WordPress Bootstrap Nav Walker
 */
require_once get_template_directory() . '/class/class-wp-bootstrap-navwalker.php';

/**
 *  WordPress Bootstrap Pagination
 */
require_once get_template_directory() . '/inc/wp-bootstrap4.1-pagination.php';

/**
 *  TGM Plugin Activation
 */
require_once get_template_directory() . '/inc/required-plugins.php';

/**
 * Extra functions, filters, and actions for the theme
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 *  Meta-Box Framework Fields
 */
require_once get_template_directory() . '/inc/meta-boxes.php';

/**
 *  Kirki Framework Config
 */
require_once get_template_directory() . '/kirki/kirki-config.php';


