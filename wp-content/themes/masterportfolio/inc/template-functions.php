<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 */

/**
 * Get a phone number, and return it without any non-numeric characters
 * @param str $phone
 * @return str 
 */
function clear_phones($phone) {
    $chars = array(".", "(", ")", "-", " ");
    return str_replace($chars, "", $phone);
}

/**
 * Get a string with the name of the template file and return true if it is currently displayed
 * 
 * @global string $template
 * @param string $template_name
 * @return boolean
 */
function is_template($template_name) {
    global $template;
    $dir_frags = explode('/', $template);
    $template_current = preg_replace("/(.+)\.php$/", "$1", end($dir_frags));

    return ($template_current === $template_name) ? true : false;
}
