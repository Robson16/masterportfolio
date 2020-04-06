<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Master Portfolio for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
require_once get_template_directory() . '/includes/classes/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'masterportfolio_register_required_plugins');

function masterportfolio_register_required_plugins() {

    $plugins = array(
        // This is how to include a plugin from the WordPress Plugin Repository.
        array(
            'name' => 'Meta Box – WordPress Custom Fields Framework',
            'slug' => 'meta-box',
            'required' => true,
        ),
        array(
            'name' => 'Kirki Customizer Framework',
            'slug' => 'kirki',
            'required' => true,
        ),
        array(
            'name' => 'Classic Editor',
            'slug' => 'classic-editor',
            'required' => false,
        ),
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => true,
        ),
        array(
            'name' => 'Flamingo',
            'slug' => 'flamingo',
            'required' => true,
        ),
    );

    $config = array(
        'id' => 'masterportfolio', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
        'strings' => array(
            'page_title' => __('Install Required Plugins', 'masterportfolio'),
            'menu_title' => __('Install Plugins', 'masterportfolio'),
            'installing' => __('Installing Plugin: %s', 'masterportfolio'),
            'updating' => __('Updating Plugin: %s', 'masterportfolio'),
            'oops' => __('Something went wrong with the plugin API.', 'masterportfolio'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'masterportfolio'),
            'notice_can_install_recommended' => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'masterportfolio'),
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'masterportfolio'),
            'notice_ask_to_update_maybe' => _n_noop('There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'masterportfolio'),
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'masterportfolio'),
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'masterportfolio'),
            'install_link' => _n_noop('Begin installing plugin', 'Begin installing plugins', 'masterportfolio'),
            'update_link' => _n_noop('Begin updating plugin', 'Begin updating plugins', 'masterportfolio'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin activating plugins', 'masterportfolio'),
            'return' => __('Return to Required Plugins Installer', 'masterportfolio'),
            'plugin_activated' => __('Plugin activated successfully.', 'masterportfolio'),
            'activated_successfully' => __('The following plugin was activated successfully:', 'masterportfolio'),
            'plugin_already_active' => __('No action taken. Plugin %1$s was already active.', 'masterportfolio'),
            'plugin_needs_higher_version' => __('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'masterportfolio'),
            'complete' => __('All plugins installed and activated successfully. %1$s', 'masterportfolio'),
            'dismiss' => __('Dismiss this notice', 'masterportfolio'),
            'notice_cannot_install_activate' => __('There are one or more required or recommended plugins to install, update or activate.', 'masterportfolio'),
            'contact_admin' => __('Please contact the administrator of this site for help.', 'masterportfolio'),
            'nag_type' => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
        ),
    );


    tgmpa($plugins, $config);
}
