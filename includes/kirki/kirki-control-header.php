<?php

Kirki::add_panel('panel_header', array(
    'priority' => 160,
    'title' => esc_html__('Header', 'masterportfolio'),
));

Kirki::add_section('section_header_titles', array(
    'title' => esc_html__('Titles', 'masterportfolio'),
    'panel' => 'panel_header',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_header_title',
    'label' => esc_html__('Title', 'masterportfolio'),
    'section' => 'section_header_titles',
    'default' => esc_html__('I Am A Customizable Title', 'masterportfolio'),
    'priority' => 160,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_header_subtitle',
    'label' => esc_html__('Subtitle', 'masterportfolio'),
    'section' => 'section_header_titles',
    'default' => esc_html__('I Am A Customizable Sub-Title', 'masterportfolio'),
    'priority' => 160,
]);

Kirki::add_section('section_header_background', array(
    'title' => esc_html__('Background', 'masterportfolio'),
    'panel' => 'panel_header',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'background',
    'settings' => 'setting_header_background',
    'label' => esc_html__('Background Control', 'masterportfolio'),
    'description' => esc_html__('Background image controls for the headers', 'masterportfolio'),
    'section' => 'section_header_background',
    'default' => [
        'background-color' => 'rgba(0,0,0,0.5)',
        'background-image' => 'http://via.placeholder.com/2560x1440/093D33/117D67%20?text=Placeholder%20Image',
        'background-repeat' => 'no-repeat',
        'background-position' => 'center center',
        'background-size' => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'refresh',
    'output' => [
        [
            'element' => 'div.header-wrap',
        ],
    ],
]);


