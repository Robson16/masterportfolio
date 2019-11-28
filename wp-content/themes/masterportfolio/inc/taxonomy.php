<?php

// Register Custom Taxonomy
function education_category_taxonomy() {

    $labels = array(
        'name' => _x('Categories', 'Categories', 'masterportfolio'),
        'singular_name' => _x('Category', 'Category', 'masterportfolio'),
        'menu_name' => __('Categories', 'masterportfolio'),
        'all_items' => __('All Categories', 'masterportfolio'),
        'parent_item' => __('Parent Categories', 'masterportfolio'),
        'parent_item_colon' => __('Parent Categories:', 'masterportfolio'),
        'new_item_name' => __('New Category Name', 'masterportfolio'),
        'add_new_item' => __('Add New Category', 'masterportfolio'),
        'edit_item' => __('Edit Category', 'masterportfolio'),
        'update_item' => __('Update Category', 'masterportfolio'),
        'view_item' => __('View Category', 'masterportfolio'),
        'separate_items_with_commas' => __('Separate categories with commas', 'masterportfolio'),
        'add_or_remove_items' => __('Add or remove categories', 'masterportfolio'),
        'choose_from_most_used' => __('Choose from the most used', 'masterportfolio'),
        'popular_items' => __('Popular Categories', 'masterportfolio'),
        'search_items' => __('Search Categories', 'masterportfolio'),
        'not_found' => __('Not Found', 'masterportfolio'),
        'no_terms' => __('No categories', 'masterportfolio'),
        'items_list' => __('Categories list', 'masterportfolio'),
        'items_list_navigation' => __('Categories list navigation', 'masterportfolio'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('education_category', array('education'), $args);
}

add_action('init', 'education_category_taxonomy', 0);

// Register Custom Taxonomy
function portfolio_category_taxonomy() {

    $labels = array(
        'name' => _x('Categories', 'Categories', 'masterportfolio'),
        'singular_name' => _x('Category', 'Category', 'masterportfolio'),
        'menu_name' => __('Categories', 'masterportfolio'),
        'all_items' => __('All Categories', 'masterportfolio'),
        'parent_item' => __('Parent Categories', 'masterportfolio'),
        'parent_item_colon' => __('Parent Categories:', 'masterportfolio'),
        'new_item_name' => __('New Category Name', 'masterportfolio'),
        'add_new_item' => __('Add New Category', 'masterportfolio'),
        'edit_item' => __('Edit Category', 'masterportfolio'),
        'update_item' => __('Update Category', 'masterportfolio'),
        'view_item' => __('View Category', 'masterportfolio'),
        'separate_items_with_commas' => __('Separate categories with commas', 'masterportfolio'),
        'add_or_remove_items' => __('Add or remove categories', 'masterportfolio'),
        'choose_from_most_used' => __('Choose from the most used', 'masterportfolio'),
        'popular_items' => __('Popular Categories', 'masterportfolio'),
        'search_items' => __('Search Categories', 'masterportfolio'),
        'not_found' => __('Not Found', 'masterportfolio'),
        'no_terms' => __('No categories', 'masterportfolio'),
        'items_list' => __('Categories list', 'masterportfolio'),
        'items_list_navigation' => __('Categories list navigation', 'masterportfolio'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('portfolio_category', array('portfolio'), $args);
}

add_action('init', 'portfolio_category_taxonomy', 0);
