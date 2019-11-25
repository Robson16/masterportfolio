<?php

// Register Custom Post Type
function masterportfolio_education_post_type() {

    $labels = array(
        'name' => _x('Degrees', 'Degrees', 'masterportfolio'),
        'singular_name' => _x('Degree', 'Degree', 'masterportfolio'),
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
        'capability_type' => 'post',
    );
    register_post_type('education', $args);
}

add_action('init', 'masterportfolio_education_post_type', 0);

// Register Custom Post Type
function masterportfolio_experience_post_type() {

    $labels = array(
        'name' => _x('Experiences', 'Experiences', 'masterportfolio'),
        'singular_name' => _x('Experience', 'Post Type Singular Name', 'masterportfolio'),
        'menu_name' => __('Experiences', 'masterportfolio'),
        'name_admin_bar' => __(' Experience', 'masterportfolio'),
        'archives' => __(' Experiences Archives', 'masterportfolio'),
        'attributes' => __(' Experiences Attributes', 'masterportfolio'),
        'parent_item_colon' => __('Parent  Experience:', 'masterportfolio'),
        'all_items' => __('All Experiences', 'masterportfolio'),
        'add_new_item' => __('Add New Experience', 'masterportfolio'),
        'add_new' => __('Add Experience', 'masterportfolio'),
        'new_item' => __('New Experience', 'masterportfolio'),
        'edit_item' => __('Edit Experience', 'masterportfolio'),
        'update_item' => __('Update Experience', 'masterportfolio'),
        'view_item' => __('View Experience', 'masterportfolio'),
        'view_items' => __('View Experiences', 'masterportfolio'),
        'search_items' => __('Search Experience', 'masterportfolio'),
        'not_found' => __('Not found', 'masterportfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'masterportfolio'),
        'featured_image' => __('Featured Image', 'masterportfolio'),
        'set_featured_image' => __('Set featured image', 'masterportfolio'),
        'remove_featured_image' => __('Remove featured image', 'masterportfolio'),
        'use_featured_image' => __('Use as featured image', 'masterportfolio'),
        'insert_into_item' => __('Insert into item', 'masterportfolio'),
        'uploaded_to_this_item' => __('Uploaded to this work experience', 'masterportfolio'),
        'items_list' => __(' Experiences list', 'masterportfolio'),
        'items_list_navigation' => __(' Experiences list navigation', 'masterportfolio'),
        'filter_items_list' => __('Filter  Experiences list', 'masterportfolio'),
    );
    $args = array(
        'label' => __('Experience', 'masterportfolio'),
        'description' => __('Works experiences of your life', 'masterportfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessman',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('experience', $args);
}

add_action('init', 'masterportfolio_experience_post_type', 0);
