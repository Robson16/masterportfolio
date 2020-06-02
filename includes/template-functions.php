<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 */

/**
 * Add custom post-types to default query loading on tags archive
 * 
 * @param type $query
 */
function archive_tag_post_types( $query ) {
    if ( $query->is_tag() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'post_type', array('post', 'portfolio') );
    }
}

add_action( 'pre_get_posts', 'archive_tag_post_types' );

/**
 * Get a phone number, and return it without any non-numeric characters
 * @param str $phone
 * @return str 
 */
function clear_phones( $phone ) {
    $chars = array( ".", "(", ")", "-", " " );
    return str_replace( $chars, "", $phone );
}

/**
 * Add Alt and Title to the user avatar
 * 
 */
function gravatar_alt( $gravatar ) {
    if ( have_comments() ) {
        $alt = get_comment_author();
    } else {
        $alt = get_the_author_meta( 'display_name' );
    }

    return str_replace( 'alt=\'\'', 'alt=\'' . $alt . '\' title=\'' . $alt . '\'', $gravatar );
}

add_filter( 'get_avatar', 'gravatar_alt' );

/**
 * Remove website field from comment form
 * 
 */
function website_remove($fields) {
    if ( isset($fields['url']) )
        unset( $fields['url'] );
    return $fields;
}

add_filter( 'comment_form_default_fields', 'website_remove' );

/**
 * Using the Kirki Customizer Framework - Background Control, receive the settingName and elementTarget to output the styles tag in the DOM 
 * @param str $settingName
 * @param str $elementTarget
 * @return none 
 */
function the_element_background( string $settingName, string $elementTarget ) {
    $default = array(
        'background-color'      => 'rgba(0,0,0,0.5)',
        'background-image'      => 'http://via.placeholder.com/2560x1440/093D33/117D67%20?text=Placeholder%20Image',
        'background-repeat'     => 'no-repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    );

    $backgroundStyles = get_theme_mod( $settingName, $default );

    echo "<style>";
    echo $elementTarget . "{";
    echo "color: #FFFFFF; ";
    echo sprintf( 'background-color: %s; ', $backgroundStyles['background-color'] );
    echo sprintf( 'background-image: linear-gradient(%1$s, %1$s), url("%2$s"); ', $backgroundStyles['background-color'], $backgroundStyles['background-image'] ); 
    echo sprintf( 'background-repeat: %s; ', $backgroundStyles['background-repeat'] );
    echo sprintf( 'background-position: %s; ', $backgroundStyles['background-position'] );
    echo sprintf( 'background-size: %s; ', $backgroundStyles['background-size'] );
    echo sprintf( 'background-attachment: %s; ', $backgroundStyles['background-attachment'] );
    echo "}";
    echo "</style>";
}