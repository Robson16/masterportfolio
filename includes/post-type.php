<?php

// Register Custom Post Type
function portfolio_post_type() {
    $labels = array(
        'name' => _x('Portfolio', 'Post Type General Name', 'masterportfolio'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'masterportfolio'),
        'menu_name' => __('Portfolio', 'masterportfolio'),
        'name_admin_bar' => __('Portfolio', 'masterportfolio'),
        'archives' => __('Portfolio Archives', 'masterportfolio'),
        'attributes' => __('Portfolio Attributes', 'masterportfolio'),
        'parent_item_colon' => __('Portfolio Parent Item:', 'masterportfolio'),
        'all_items' => __('All Portfolio Items', 'masterportfolio'),
        'add_new_item' => __('Add New Portfolio Item', 'masterportfolio'),
        'add_new' => __('Add New Item', 'masterportfolio'),
        'new_item' => __('New Portfolio Item', 'masterportfolio'),
        'edit_item' => __('Edit Portfolio Item', 'masterportfolio'),
        'update_item' => __('Update Portfolio Item', 'masterportfolio'),
        'view_item' => __('View Portfolio Item', 'masterportfolio'),
        'view_items' => __('View Portfolio Items', 'masterportfolio'),
        'search_items' => __('Search Portfolio Item', 'masterportfolio'),
        'not_found' => __('Not found', 'masterportfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'masterportfolio'),
        'featured_image' => __('Featured Image', 'masterportfolio'),
        'set_featured_image' => __('Set featured image', 'masterportfolio'),
        'remove_featured_image' => __('Remove featured image', 'masterportfolio'),
        'use_featured_image' => __('Use as featured image', 'masterportfolio'),
        'insert_into_item' => __('Insert into portfolio item', 'masterportfolio'),
        'uploaded_to_this_item' => __('Uploaded to this portfolio item', 'masterportfolio'),
        'items_list' => __('Portfolio Items list', 'masterportfolio'),
        'items_list_navigation' => __('Portfolio Items list navigation', 'masterportfolio'),
        'filter_items_list' => __('Filter Portfolio items list', 'masterportfolio'),
    );
    $args = array(
        'label' => __('Portfolio', 'masterportfolio'),
        'description' => __('Portfolio Works', 'masterportfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-book-alt',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    register_post_type( 'portfolio', $args );
}

add_action( 'init', 'portfolio_post_type', 0 );