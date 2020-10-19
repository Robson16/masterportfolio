<?php

// Register Custom Taxonomy
function portfolio_category_taxonomy() {

    $labels = array(
        'name' => _x('Portfolio Categories', 'Portfolio Categories', 'masterportfolio'),
        'singular_name' => _x('Portfolio Category', 'Portfolio Category', 'masterportfolio'),
        'menu_name' => __('Portfolio Categories', 'masterportfolio'),
        'all_items' => __('All Portfolio Categories', 'masterportfolio'),
        'parent_item' => __('Parent Portfolio Categories', 'masterportfolio'),
        'parent_item_colon' => __('Parent Portfolio Categories:', 'masterportfolio'),
        'new_item_name' => __('New Portfolio Category Name', 'masterportfolio'),
        'add_new_item' => __('Add New Portfolio Category', 'masterportfolio'),
        'edit_item' => __('Edit Portfolio Category', 'masterportfolio'),
        'update_item' => __('Update Portfolio Category', 'masterportfolio'),
        'view_item' => __('View Portfolio Category', 'masterportfolio'),
        'separate_items_with_commas' => __('Separate categories with commas', 'masterportfolio'),
        'add_or_remove_items' => __('Add or remove categories', 'masterportfolio'),
        'choose_from_most_used' => __('Choose from the most used', 'masterportfolio'),
        'popular_items' => __('Popular Portfolio Categories', 'masterportfolio'),
        'search_items' => __('Search Portfolio Categories', 'masterportfolio'),
        'not_found' => __('Not Found', 'masterportfolio'),
        'no_terms' => __('No categories', 'masterportfolio'),
        'items_list' => __('Portfolio Categories list', 'masterportfolio'),
        'items_list_navigation' => __('Portfolio Categories list navigation', 'masterportfolio'),
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
