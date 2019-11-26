<?php

Kirki::add_section('section_location', array(
    'title' => esc_html__('Location', 'masterportfolio'),
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_googlemaps_apikey',
    'label' => __('API Key', 'masterportfolio'),
    'description' => __('Google Maps API Key', 'masterportfolio'),
    'section' => 'section_location',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'textarea',
    'settings' => 'setting_address',
    'label' => __('Address', 'masterportfolio'),
    'section' => 'section_location',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_latitude',
    'label' => __('Latitude', 'masterportfolio'),
    'section' => 'section_location',
    'default' => '',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_longitude',
    'label' => __('Longitude', 'masterportfolio'),
    'section' => 'section_location',
    'default' => '',
    'priority' => 10,
]);
