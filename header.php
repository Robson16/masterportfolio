<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <a id="main-menu-open" class="menu-overlay-open">
            <span class="screen-reader-text">
                <?php _e( "Open menu", "masterportfolio" ); ?>
            </span>
            &#9776;
        </a>

        <nav id="main-menu" class="menu-overlay">
            <a id="main-menu-close" class="menu-overlay-close">
                <span class="screen-reader-text">
                    <?php _e( "Close menu", "masterportfolio" ); ?>
                </span>
                &times;
            </a>
            <div class="menu-overlay-inner">
                <?php
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                }

                wp_nav_menu( array(
                    'theme_location' => 'main_menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'menu-overlay-links',
                    'menu_class' => ''
                ) );

                get_search_form();
                ?>
            </div>
        </nav>

        <?php
        if (!is_page()) : the_header_background(); ?>       
            <header id="header">
                <div class="container">
                    <?php
                    // Taxonomy Archive
                    if ( is_tax( 'portfolio_category' ) ) printf( '<h1>%s</h1>', single_term_title( __( 'Category: ', 'masterportfolio' ), false ) );
                    // Portfolio Custom Post Type Archive
                    else if ( is_post_type_archive( 'portfolio' ) ) printf( '<h1>%s</h1>', __( 'Portfolio', 'masterportfolio') );
                    // Default Archive
                    else if ( is_archive() ) printf( '<h1>%s</h1>', get_the_archive_title() );
                    
                    if ( is_search() ) printf( '<h1>%s&nbsp;<span>%s</span></h1>', __( 'Search results for:', 'masterportfolio'), get_search_query() );
                    if ( is_home() ) printf( '<h1>%s</h1>', __( 'Blog', 'masterportfolio' ) );
                    if ( is_404() ) printf( '<h1>%s</h1>', __( 'Not Found', 'masterportfolio' ) );

                    if ( is_single() ) {
                        masterportfolio_post_meta();
                        printf( '<h1>%s</h1>', get_the_title() );
                    }

                    if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb( '<p class="breadcrumbs">','</p>' );
                    ?>
                </div>
                <!-- /.container -->
            </header>
        <?php endif; ?>