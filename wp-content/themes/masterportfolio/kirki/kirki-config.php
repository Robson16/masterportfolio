<?php

function masterportfolio_kirki() {
    if (class_exists('Kirki')) {
        Kirki::add_config('masterportfolio_kirki_config', array(
            'capability' => 'edit_theme_options',
            'option_type' => 'theme_mod',
        ));
        require_once get_template_directory() . '/kirki/kirki-control-skills.php';
        require_once get_template_directory() . '/kirki/kirki-control-networks.php';
        require_once get_template_directory() . '/kirki/kirki-control-contacts.php';
        require_once get_template_directory() . '/kirki/kirki-control-location.php';
    }
}

add_action('customize_register', 'masterportfolio_kirki');
