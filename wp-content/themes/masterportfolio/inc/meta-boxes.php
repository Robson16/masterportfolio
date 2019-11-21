<?php

/**
 * Custom fields created with:
 * 
 * Meta Box – WordPress Custom Fields Framework
 * 
 */
function masterportfolio_meta_box($meta_boxes) {
    $prefix = '_masterportfolio_';

    // Pages and posts additional informations meta-box fields
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

    // Custom Post Type Degree Details meta-box fields 
    $meta_boxes[] = array(
        'id' => 'degree_details',
        'title' => esc_html__('Degree Details', 'masterportfolio'),
        'post_types' => array('education'),
        'context' => 'after_title',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => $prefix . 'degree_start',
                'type' => 'date',
                'name' => esc_html__('Beginning of the course', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => $prefix . 'degree_end',
                'type' => 'date',
                'name' => esc_html__('End of the course', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => $prefix . 'degree_institution',
                'type' => 'text',
                'name' => esc_html__('Educational Institution', 'masterportfolio'),
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'masterportfolio_meta_box');
