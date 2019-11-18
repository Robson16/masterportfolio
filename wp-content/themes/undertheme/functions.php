<?php

/**
 * Under-Theme functions and settings
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
if (!function_exists('undertheme_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function undertheme_setup() {
        // Enabling translation support
        $textdomain = 'undertheme';
        load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
        load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

        // Add theme support
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }
}

add_action('after_setup_theme', 'undertheme_setup');

/**
 * Enqueue scripts and styles.
 */
function undertheme_scripts() {
    // CSS
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', NULL, '4.3.1', 'all');
    wp_enqueue_style('undertheme-style', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');
    // Js
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/1cb1a8d503.js', NULL, '5.10.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'undertheme_scripts');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function undertheme_sidebars() {
    register_sidebar(array(
        'name' => __('Message Widget', 'undertheme'),
        'id' => 'message-widget',
        'description' => __('Add some widget.', 'undertheme'),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'undertheme_sidebars');

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';