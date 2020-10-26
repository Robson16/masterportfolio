<?php

/**
 * Master Portfolio functions and settings
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

// Enqueue scripts and styles.
function masterportfolio_scripts() {
    wp_enqueue_style( 'masterportfolio-webfonts', get_template_directory_uri() . '/assets/css/shared/webfonts.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'masterportfolio-shared-style', get_template_directory_uri() . '/assets/css/shared/shared-styles.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_style( 'masterportfolio-frontend-style', get_template_directory_uri() . '/assets/css/frontend/frontend-styles.css', array(), wp_get_theme()->get( 'Version' ), 'all' );

    wp_enqueue_script( 'masterportfolio-frontend-script', get_template_directory_uri() . '/assets/js/frontend/frontend-bundled.js', array(), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script( 'comment-reply' );
}
add_action('wp_enqueue_scripts', 'masterportfolio_scripts');

/**
 * Gutenberg Assets
 * @see https://www.billerickson.net/block-styles-in-gutenberg/
 */
function masterportfolio_gutenberg_assets() {
    wp_enqueue_style( 'masterportfolio-webfonts', get_template_directory_uri() . '/assets/css/shared/webfonts.css', array(), wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_script('masterportfolio-editor-script', get_stylesheet_directory_uri() . '/assets/js/admin/register-block-styles.js', array('wp-blocks', 'wp-dom'), '1.0', true);
}
add_action('enqueue_block_editor_assets', 'masterportfolio_gutenberg_assets');

// Sets up theme defaults and registers support for various WordPress features.
if (!function_exists('masterportfolio_setup')) {
    function masterportfolio_setup() {
        // Enabling translation support
        load_theme_textdomain( 'masterportfolio', get_stylesheet_directory() . '/languages/' );
        load_theme_textdomain( 'masterportfolio', get_template_directory() . '/languages/' );

        // Menu registration
        register_nav_menus( array(
            'main_menu'     => __( 'Main Menu', 'masterportfolio' ),
        ) );

        // Load custom styles in the editor.
        add_theme_support( 'editor-styles' );
        add_editor_style( get_stylesheet_directory_uri() . '/assets/css/shared/shared-styles.css' );
        add_editor_style( get_stylesheet_directory_uri() . '/assets/css/admin/admin-styles.css' );
        
        // Customizable logo
        add_theme_support( 'custom-logo', array(
            'height'        => 80,
            'width'         => 100,
            'flex-height'   => true,
            'flex-width'    => true,
            'header-text'   => array( 'site-title', 'site-description' ),
        ) );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for featured image on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Enable support for embedded media for full weight
        add_theme_support( 'responsive-embeds' );

        // Enables wide and full dimensions
        add_theme_support( 'align-wide' );

        // Standard style for each block.
        add_theme_support( 'wp-block-styles' );

        // Creates the specific color palette
        add_theme_support( 'editor-color-palette', array(
            array(
                'name'  => __( 'White', 'masterportfolio' ),
                'slug'  => 'white',
                'color' => '#ffffff',
            ),
            array(
                'name'  => __( 'Caribbean Green', 'masterportfolio' ),
                'slug'  => 'caribbean-green',
                'color' => '#1cc9a7',
            ),
            array(
                'name'  => __( 'Mountain Meadow', 'masterportfolio' ),
                'slug'  => 'mountain-meadow',
                'color' => '#1abd9c',
            ),
            array(
                'name'  => __( 'Zomp', 'masterportfolio' ),
                'slug'  => 'zomp',
                'color' => '#17a387',
            ),
            array(
                'name'  => __( 'Generic Viridian', 'masterportfolio' ),
                'slug'  => 'generic-viridian',
                'color' => '#117d67',
            ),
            array(
                'name'  => __( 'MSU Green', 'masterportfolio' ),
                'slug'  => 'msu-green',
                'color' => '#093d33',
            ),
            array(
                'name'  => __( 'Black', 'masterportfolio' ),
                'slug'  => 'black',
                'color' => '#000000',
            ),
        ) );

        // Custom font sizes.
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => __( 'Small', 'masterportfolio' ),
                'size' => 12,
                'slug' => 'small',
            ),
            array(
                'name' => __( 'Normal', 'masterportfolio' ),
                'size' => 16,
                'slug' => 'normal',
            ),
            array(
                'name' => __( 'Medium', 'masterportfolio' ),
                'size' => 20,
                'slug' => 'medium',
            ),
            array(
                'name' => __( 'Big', 'masterportfolio' ),
                'size' => 32,
                'slug' => 'big',
            ),
            array(
                'name' => __( 'Huge', 'masterportfolio' ),
                'size' => 48,
                'slug' => 'huge',
            ),
        ) );

        // Custom image sizes
        add_image_size( 'narrow_large', 1200, 500, true );
        add_image_size( 'thumbnails_portfolio' , 420, 320, true );
    }
}
add_action( 'after_setup_theme', 'masterportfolio_setup' );

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
    
    // Blog
    register_sidebar( array_merge( $shared_args, array(
        'name'          => __( 'Blog Sidebar', 'masterportfolio' ),
        'id'            => 'blog-sidebar-widgets',
        'description'   => __( 'Add some widget.', 'masterportfolio' ),
    ) ) );
}
add_action( 'widgets_init', 'masterportfolio_sidebars' );

/**
 * Add custom post-types to default query loading on tags archive
 * 
 * @param type $query
 */
function masterportfolio_archive_tag_post_types( $query ) {
    if ( $query->is_tag() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'post_type', array( 'post', 'portfolio' ) );
    }
}
add_action( 'pre_get_posts', 'masterportfolio_archive_tag_post_types' );

/**
 * Add Alt and Title to the user avatar
 * 
 */
function masterportfolio_gravatar_alt( $gravatar ) {
    if ( have_comments() ) {
        $alt = get_comment_author();
    } else {
        $alt = get_the_author_meta( 'display_name' );
    }

    return str_replace( 'alt=\'\'', 'alt=\'' . $alt . '\' title=\'' . $alt . '\'', $gravatar );
}
add_filter( 'get_avatar', 'masterportfolio_gravatar_alt' );

/**
 * Remove website field from comment form
 * 
 */
function masterportfolio_website_remove($fields) {
    if ( isset($fields['url']) )
        unset( $fields['url'] );
    return $fields;
}
add_filter( 'comment_form_default_fields', 'masterportfolio_website_remove' );

/**
 *  WordPress Bootstrap Nav Walker
 */
require_once get_template_directory() . '/includes/classes/class-wp-bootstrap-navwalker.php';

/**
 *  TGM Plugin Activation
 */
require_once get_template_directory() . '/includes/required-plugins.php';

/**
 *  Theme Custom Shortcodes
 */
require_once get_template_directory() . '/includes/shortcodes.php';

/**
 * Extra functions, filters, and actions for the theme
 */
require_once get_template_directory() . '/includes/utils.php';

/**
 *  Custom Post Types
 */
require_once get_template_directory() . '/includes/post-type.php';

/**
 *  Custom Taxonomy
 */
require_once get_template_directory() . '/includes/taxonomy.php';

/**
 *  Kirki Framework Config
 */
require_once get_template_directory() . '/includes/kirki/kirki-config.php';
