<?php

// Register Custom Post Type
function masterportfolio_custom_post_type() {

    $labels = array(
        'name' => _x('Degrees', 'Post Type General Name', 'masterportfolio'),
        'singular_name' => _x('Degree', 'Post Type Singular Name', 'masterportfolio'),
        'menu_name' => __('Degree', 'masterportfolio'),
        'name_admin_bar' => __('Degree', 'masterportfolio'),
        'archives' => __('Degree Archives', 'masterportfolio'),
        'attributes' => __('Degree Attributes', 'masterportfolio'),
        'parent_item_colon' => __('Parent Degree:', 'masterportfolio'),
        'all_items' => __('All Degree', 'masterportfolio'),
        'add_new_item' => __('Add New Degree', 'masterportfolio'),
        'add_new' => __('Add Degree', 'masterportfolio'),
        'new_item' => __('New Degree', 'masterportfolio'),
        'edit_item' => __('Edit Degree', 'masterportfolio'),
        'update_item' => __('Update Degree', 'masterportfolio'),
        'view_item' => __('View Degree', 'masterportfolio'),
        'view_items' => __('View Degrees', 'masterportfolio'),
        'search_items' => __('Search Degree', 'masterportfolio'),
        'not_found' => __('Not found', 'masterportfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'masterportfolio'),
        'featured_image' => __('Featured Image', 'masterportfolio'),
        'set_featured_image' => __('Set featured image', 'masterportfolio'),
        'remove_featured_image' => __('Remove featured image', 'masterportfolio'),
        'use_featured_image' => __('Use as featured image', 'masterportfolio'),
        'insert_into_item' => __('Insert into degree', 'masterportfolio'),
        'uploaded_to_this_item' => __('Uploaded to this degree', 'masterportfolio'),
        'items_list' => __('Items list', 'masterportfolio'),
        'items_list_navigation' => __('Degrees list navigation', 'masterportfolio'),
        'filter_items_list' => __('Filter degrees list', 'masterportfolio'),
    );
    $args = array(
        'label' => __('Education Degree', 'masterportfolio'),
        'description' => __('Educational Background', 'masterportfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('education', $args);
}

add_action('init', 'masterportfolio_custom_post_type', 0);
