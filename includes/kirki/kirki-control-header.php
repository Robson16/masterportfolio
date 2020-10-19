<?php

Kirki::add_panel( 'panel_header', array(
    'priority' => 160,
    'title' => esc_html__( 'Header', 'masterportfolio' ),
));

// Singular Show Switch

Kirki::add_section( 'section_header_featured_image', array(
    'title'          => esc_html__( 'Featured Image Options', 'masterportfolio' ),
    'panel'          => 'panel_header',
    'description'    => esc_html__( 'Check where to use the featured image as the header background image.', 'kirki' ),
    'priority'       => 160,
) );

Kirki::add_field( 'masterportfolio_kirki_config', [
	'type'        => 'switch',
	'settings'    => 'setting_header_featured_image_post',
	'label'       => esc_html__( 'Post', 'masterportfolio' ),
	'section'     => 'section_header_featured_image',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Yes', 'masterportfolio' ),
		'off' => esc_html__( 'No', 'masterportfolio' ),
	],
] );

Kirki::add_field( 'masterportfolio_kirki_config', [
	'type'        => 'switch',
	'settings'    => 'setting_header_featured_image_portfolio',
	'label'       => esc_html__( 'Portfolio', 'masterportfolio' ),
	'section'     => 'section_header_featured_image',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Yes', 'masterportfolio' ),
		'off' => esc_html__( 'No', 'masterportfolio' ),
	],
] );

// Background Image

Kirki::add_section( 'section_header_background', array(
    'title'         => esc_html__( 'Background', 'masterportfolio' ),
    'panel'         => 'panel_header',
    'priority'      => 160,
));

Kirki::add_field( 'masterportfolio_kirki_config', [
    'type'          => 'background',
    'settings'      => 'setting_header_background',
    'label'         => esc_html__( 'Background Control', 'masterportfolio' ),
    'description'   => esc_html__( 'Background image controls for the headers', 'masterportfolio' ),
    'section'       => 'section_header_background',
    'default'       => [
        'background-color' => 'rgba(0,0,0,0.2)',
        'background-image' => 'http://via.placeholder.com/2560x1440/093D33/117D67%20?text=Placeholder%20Image',
        'background-repeat' => 'no-repeat',
        'background-position' => 'center center',
        'background-size' => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'     => 'refresh',
    'output'        => [
        [
            'element' => 'div.header-wrap',
        ],
    ],
]);