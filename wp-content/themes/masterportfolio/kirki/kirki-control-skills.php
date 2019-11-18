<?php

Kirki::add_panel('panel_skills', array(
    'priority' => 160,
    'title' => esc_html__('Skills', 'masterportfolio'),
));

Kirki::add_section('section_skills_titles', array(
    'title' => esc_html__('Titles', 'masterportfolio'),
    'panel' => 'panel_skills',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_skills_title',
    'label' => esc_html__('Title', 'masterportfolio'),
    'section' => 'section_skills_titles',
    'default' => esc_html__('Skills', 'masterportfolio'),
    'priority' => 160,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_skills_subtitle',
    'label' => esc_html__('Subtitle', 'masterportfolio'),
    'section' => 'section_skills_titles',
    'default' => esc_html__('What am i best!', 'masterportfolio'),
    'priority' => 160,
]);

Kirki::add_section('section_skills_background', array(
    'title' => esc_html__('Background', 'masterportfolio'),
    'panel' => 'panel_skills',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'background',
    'settings' => 'setting_skills_background',
    'label' => esc_html__('Background Control', 'masterportfolio'),
    'description' => esc_html__('Background image controls for skill section', 'masterportfolio'),
    'section' => 'section_skills_background',
    'default' => [
        'background-color' => 'rgba(0,0,0,1)',
        'background-image' => '',
        'background-repeat' => 'repeat',
        'background-position' => 'center center',
        'background-size' => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport' => 'auto',
    'output' => [
        [
            'element' => '#skills',
        ],
    ],
]);

Kirki::add_section('section_skills_list', array(
    'title' => esc_html__('Skills List', 'masterportfolio'),
    'panel' => 'panel_skills',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'repeater',
    'label' => esc_html__('Skills List', 'masterportfolio'),
    'section' => 'section_skills_list',
    'priority' => 160,
    'row_label' => [
        'type' => 'field',
        'value' => esc_html__('Skill', 'masterportfolio'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add new skill', 'masterportfolio'),
    'settings' => 'setting_skills_list',
    'default' => [
        [
            'skill_name' => esc_html__('HTML5 / CSS3 / SASS', 'masterportfolio'),
            'skill_level' => 90,
        ],
        [
            'skill_name' => esc_html__('JavaScript / JQuery', 'masterportfolio'),
            'skill_level' => 80,
        ],
        [
            'skill_name' => esc_html__('PHP / MySQL', 'masterportfolio'),
            'skill_level' => 75,
        ],
        [
            'skill_name' => esc_html__('WordPress', 'masterportfolio'),
            'skill_level' => 70,
        ],
    ],
    'fields' => [
        'skill_name' => [
            'type' => 'text',
            'label' => esc_html__('Skill Name', 'masterportfolio'),
            'description' => esc_html__('This will be the label for your skill', 'masterportfolio'),
            'default' => '',
        ],
        'skill_level' => [
            'type' => 'number',
            'label' => esc_html__('Skill Level', 'masterportfolio'),
            'description' => esc_html__('This will be the percentage level', 'masterportfolio'),
            'default' => 0,
            'choices' => [
                'min' => 0,
                'max' => 100,
                'step' => 1,
            ],
        ],
    ]
]);
