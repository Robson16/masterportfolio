<?php

Kirki::add_panel( 'panel_contacts', array(
    'priority' => 160,
    'title' => esc_html__( 'Contacts', 'masterportfolio' ),
));

Kirki::add_section('section_contacts_infos', array(
    'title' => esc_html__( 'Contacts Infos', 'masterportfolio' ),
    'panel' => 'panel_contacts',
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'textarea',
    'settings' => 'setting_contact_text',
    'label' => __('Small Text', 'masterportfolio'),
    'description' => __('Short text or phrase to invite people to contact you', 'masterportfolio'),
    'section' => 'section_contacts_infos',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_whatsapp',
    'label' => __('Whatsapp', 'masterportfolio'),
    'description' => __('Whatsapp number in full phone number in international format', 'masterportfolio'),
    'section' => 'section_contacts_infos',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_phone',
    'label' => __('Phone', 'masterportfolio'),
    'description' => __('Phone number in full phone number in international format', 'masterportfolio'),
    'section' => 'section_contacts_infos',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_email',
    'label' => __('Email', 'masterportfolio'),
    'description' => __('Email Address', 'masterportfolio'),
    'section' => 'section_contacts_infos',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_contact_form',
    'label' => __('Contact Form', 'masterportfolio'),
    'description' => __('Paste a contact form shortcode', 'masterportfolio'),
    'section' => 'section_contacts_infos',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_section('section_contacts_background', array(
    'title' => esc_html__('Background', 'masterportfolio'),
    'panel' => 'panel_contacts',
    'priority' => 160,
));

Kirki::add_field( 'masterportfolio_kirki_config', [
	'type'        => 'background',
	'settings'    => 'setting_contact_background',
	'label'       => esc_html__( 'Background Control', 'masterportfolio' ),
	'description' => esc_html__( 'Background conrols for contact section', 'masterportfolio' ),
	'section'     => 'section_contacts_background',
	'default'     => [
		'background-color'      => 'rgba(0,0,0,0.5)',
		'background-image'      => 'http://via.placeholder.com/2560x1440/093D33/117D67%20?text=Placeholder%20Image',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'refresh',
	'output'      => [
		[
			'element' => 'section#contact',
		],
	],
] );