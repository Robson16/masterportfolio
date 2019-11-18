<?php

/**
 * Custom fields created with:
 * 
 * Meta Box – WordPress Custom Fields Framework
 * 
 */
function masterportfolio_meta_box($meta_boxes) {
    $prefix = '_masterportfolio_';

    $meta_boxes[] = array(
        'id' => 'additional_information',
        'title' => esc_html__('Additional Information', 'masterportfolio'),
        'post_types' => array('page', 'post'),
        'context' => 'after_title',
        'priority' => 'default',
        'autosave' => 'false',
        'fields' => array(
            array(
                'id' => $prefix . 'header_img',
                'type' => 'single_image',
                'name' => esc_html__('Header Image', 'masterportfolio'),
            ),
            array(
                'id' => $prefix . 'subtitle',
                'type' => 'text',
                'name' => esc_html__('Subtitle', 'masterportfolio'),
                'size' => 200,
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'masterportfolio_meta_box');
