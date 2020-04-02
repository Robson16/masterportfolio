<?php

Kirki::add_section('section_social_networks', array(
    'title' => esc_html__('Social Networks', 'masterportfolio'),
    'priority' => 160,
));

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_facebook',
    'label' => __('Facebook', 'masterportfolio'),
    'description' => __('Facebook page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://www.facebook.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'text',
    'settings' => 'setting_twitter',
    'label' => __('Twitter', 'masterportfolio'),
    'description' => __('Twitter User', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => '@JohnDoe',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_instagram',
    'label' => __('Instagram', 'masterportfolio'),
    'description' => __('Instagram page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://www.instagram.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_linkedin',
    'label' => __('Linkedin', 'masterportfolio'),
    'description' => __('Linkedin page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://www.linkedin.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_pinterest',
    'label' => __('Pinterest', 'masterportfolio'),
    'description' => __('Pinterest page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://pinterest.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_youtube',
    'label' => __('YouTube', 'masterportfolio'),
    'description' => __('YouTube page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://youtube.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_wordpress',
    'label' => __('WordPress', 'masterportfolio'),
    'description' => __('WordPress Profile page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://profiles.wordpress.org/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_github',
    'label' => __('GitHub', 'masterportfolio'),
    'description' => __('GitHub page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://github.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_gitlab',
    'label' => __('GitLab', 'masterportfolio'),
    'description' => __('GitLab page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://gitlab.com/',
    'priority' => 10,
]);

Kirki::add_field('masterportfolio_kirki_config', [
    'type' => 'link',
    'settings' => 'setting_bitbucket',
    'label' => __('Bitbucket', 'masterportfolio'),
    'description' => __('Bitbucket page URL', 'masterportfolio'),
    'section' => 'section_social_networks',
    'default' => 'https://bitbucket.org/',
    'priority' => 10,
]);