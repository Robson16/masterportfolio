<?php
/**
 * Under-Theme: Customizer
 *
 */

function undertheme_customizer($wp_customize) {
	/**
     * Wallpaper
     */
    $wp_customize->add_section('sec_wallpaper', array(
        'title' => esc_html__('Wallpaper', 'undertheme'),
        'description' => esc_html__('Image on the right side', 'undertheme'),
        'priority' => 150
    ));
    $wp_customize->add_setting('set_wallpaper', array(
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'set_wallpaper', array(
        'label' => esc_html__('Image', 'undertheme'),
        'section' => 'sec_wallpaper',
        'settings' => 'set_wallpaper',
        'width' => 960,
        'height' => 1080
    )));

    // Social Networks
    $wp_customize->add_section('sec_social', array(
        'title' => esc_html__('Social networks', 'undertheme'),
    ));
    // Social Network - Facebook
    $wp_customize->add_setting('set_facebook', array(
        'type' => 'theme_mod',
        'default' => 'https://facebook.com/',
        'sanitize_callback' => 'wp_kses_post'
    ));
    $wp_customize->add_control('set_facebook', array(
        'label' => 'Facebook',
        'section' => 'sec_social',
        'type' => 'text'
    ));
    // Social Network - YouTube
    $wp_customize->add_setting('set_youtube', array(
        'type' => 'theme_mod',
        'default' => 'https://youtube.com/',
        'sanitize_callback' => 'wp_kses_post'
    ));
    $wp_customize->add_control('set_youtube', array(
        'label' => 'YouTube',
        'section' => 'sec_social',
        'type' => 'text'
    ));
    // Social Network - Twitter
    $wp_customize->add_setting('set_twitter', array(
        'type' => 'theme_mod',
        'default' => 'https://twitter.com/',
        'sanitize_callback' => 'wp_kses_post'
    ));
    $wp_customize->add_control('set_twitter', array(
        'label' => 'Twitter',
        'section' => 'sec_social',
        'type' => 'text'
    ));
    // Social Network - Instagram
    $wp_customize->add_setting('set_instagram', array(
        'type' => 'theme_mod',
        'default' => 'https://instagram.com/',
        'sanitize_callback' => 'wp_kses_post'
    ));
    $wp_customize->add_control('set_instagram', array(
        'label' => 'instagram',
        'section' => 'sec_social',
        'type' => 'text'
    ));
}

add_action('customize_register', 'undertheme_customizer');