<?php

/**
 * Custom fields created with:
 * 
 * Meta Box – WordPress Custom Fields Framework
 * 
 */
function meta_box($meta_boxes) {

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
                'id' => 'header_img',
                'type' => 'single_image',
                'name' => esc_html__('Header Image', 'masterportfolio'),
            ),
            array(
                'id' => 'subtitle',
                'type' => 'text',
                'name' => esc_html__('Subtitle', 'masterportfolio'),
                'size' => 200,
            ),
        ),
    );

    // Custom Post Type Education Degree Details meta-box fields 
    $meta_boxes[] = array(
        'id' => 'degree_details',
        'title' => esc_html__('Degree Details', 'masterportfolio'),
        'post_types' => array('education'),
        'context' => 'after_title',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => 'degree_start',
                'type' => 'date',
                'name' => esc_html__('Beginning of the course', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => 'degree_end',
                'type' => 'date',
                'name' => esc_html__('End of the course', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => 'degree_ongoing',
                'name' => esc_html__('Ongoing', 'masterportfolio'),
                'type' => 'checkbox',
                'desc' => esc_html__('Is this course in progress?', 'masterportfolio'),
            ),
            array(
                'id' => 'degree_institution',
                'type' => 'text',
                'name' => esc_html__('Educational Institution', 'masterportfolio'),
            ),
        ),
    );

    // Custom Post Type Education Degree Details meta-box fields 
    $meta_boxes[] = array(
        'id' => 'experience_details',
        'title' => esc_html__('Experience Details', 'masterportfolio'),
        'post_types' => array('experience'),
        'context' => 'after_title',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => 'experience_start',
                'type' => 'date',
                'name' => esc_html__('Beginning of the experience', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => 'experience_end',
                'type' => 'date',
                'name' => esc_html__('End of the experience', 'masterportfolio'),
                'timestamp' => 'true',
            ),
            array(
                'id' => 'experience_current',
                'name' => esc_html__('Current Employment', 'masterportfolio'),
                'type' => 'checkbox',
                'desc' => esc_html__('Is this your current job?', 'masterportfolio'),
            ),
            array(
                'id' => 'experience_company',
                'type' => 'text',
                'name' => esc_html__('Company Name', 'masterportfolio'),
            ),
            array(
                'id' => 'experience_portfolio',
                'type' => 'post',
                'name' => esc_html__('Portfolio', 'masterportfolio'),
                'desc' => esc_html__('Portfolio works you did at this company', 'masterportfolio'),
                'post_type' => 'portfolio',
                'field_type' => 'select_advanced',
                'clone' => 'true',
            ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'portfolio_details',
        'title' => esc_html__('Portfolio Details', 'masterportfolio'),
        'post_types' => array('portfolio'),
        'context' => 'after_title',
        'priority' => 'default',
        'autosave' => 'true',
        'fields' => array(
            array(
                'id' => 'client',
                'type' => 'text',
                'name' => esc_html__('Client', 'masterportfolio'),
                'desc' => esc_html__('Client\'s name', 'masterportfolio'),
            ),
            array(
                'id' => 'client_url',
                'type' => 'url',
                'name' => esc_html__('Client\'s URL', 'masterportfolio'),
                'desc' => esc_html__('Link to client website', 'masterportfolio'),
            ),
            array(
                'id' => 'designer',
                'type' => 'text',
                'name' => esc_html__('Designer\'s Name', 'masterportfolio'),
            ),
            array(
                'id' => 'designer_url',
                'type' => 'url',
                'name' => esc_html__('Designer\'s URL', 'masterportfolio'),
                'desc' => esc_html__('Link to designer website or social network', 'masterportfolio'),
            ),
            array(
                'id' => 'work_url',
                'type' => 'url',
                'name' => esc_html__('This Work\'s URL', 'masterportfolio'),
                'desc' => esc_html__('Link to this work in production site', 'masterportfolio'),
            ),
        ),
    );

    return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'meta_box');
