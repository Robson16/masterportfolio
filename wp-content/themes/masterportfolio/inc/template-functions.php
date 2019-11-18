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