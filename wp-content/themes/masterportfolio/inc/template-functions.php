<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 */

/**
 * Add custom post-types to default query loading on tags archive
 * 
 * @param type $query
 */
function archive_tag_post_types($query) {
    if ($query->is_tag() && $query->is_main_query() && !is_admin()) {
        $query->set('post_type', array('post', 'portfolio'));
    }
}

add_action('pre_get_posts', 'archive_tag_post_types');

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

/**
 * Checks if the page is the blog page
 * @global object $post
 * @return boolean
 */
function is_blog() {
    global $post;
    $posttype = get_post_type($post);
    return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post') ) ? true : false;
}

/**
 * Add Alt and Title to the user avatar
 * 
 */
function gravatar_alt($gravatar) {
    if (have_comments()) {
        $alt = get_comment_author();
    } else {
        $alt = get_the_author_meta('display_name');
    }

    return str_replace('alt=\'\'', 'alt=\'' . $alt . '\' title=\'' . $alt . '\'', $gravatar);
}

add_filter('get_avatar', 'gravatar_alt');

/**
 * Remove website field from comment form
 * 
 */
function website_remove($fields) {
    if (isset($fields['url']))
        unset($fields['url']);
    return $fields;
}

add_filter('comment_form_default_fields', 'website_remove');