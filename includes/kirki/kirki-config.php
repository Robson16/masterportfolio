<?php

function masterportfolio_kirki() {
    if ( class_exists('Kirki') ) {
        Kirki::add_config( 'masterportfolio_kirki_config', array(
            'capability' => 'edit_theme_options',
            'option_type' => 'theme_mod',
        ) );

        require_once get_template_directory() . '/includes/kirki/kirki-control-header.php';
        require_once get_template_directory() . '/includes/kirki/kirki-control-networks.php';
    }
}

add_action( 'customize_register', 'masterportfolio_kirki' );
