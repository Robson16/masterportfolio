<?php

Kirki::add_section('section_contacts', array(
    'title' => esc_html__('Contacts', 'masterportfolio'),
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_whatsapp',
    'label' => __('Whatsapp', 'masterportfolio'),
    'description' => __('Whatsapp number in full phone number in international format', 'masterportfolio'),
    'section' => 'section_contacts',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_phone',
    'label' => __('Phone', 'masterportfolio'),
    'description' => __('Phone number in full phone number in international format', 'masterportfolio'),
    'section' => 'section_contacts',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_email',
    'label' => __('Email', 'masterportfolio'),
    'description' => __('Email Address', 'masterportfolio'),
    'section' => 'section_contacts',
    'default' => '',
    'priority' => 10,
]);
