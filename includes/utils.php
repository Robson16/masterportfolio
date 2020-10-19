<?php
/**
 * Using the Kirki Customizer Framework - Background Control, receive the settingName and elementTarget to output the styles tag in the DOM 
 * @param none
 * @return none 
 */
function the_header_background() {
    $default = array(
        'background-color'      => 'rgba(0,0,0,0.5)',
        'background-image'      => 'http://via.placeholder.com/2560x1440/093D33/117D67%20?text=Placeholder%20Image',
        'background-repeat'     => 'no-repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    );

    $backgroundStyles = get_theme_mod( 'setting_header_background', $default );

    if ( is_single() && has_post_thumbnail() ) {
        $backgroundStyles['background-position'] = 'center center';
        $backgroundStyles['background-attachment'] = 'scroll';

        if ( get_post_type() === 'post' && get_theme_mod( 'setting_header_featured_image_post', true ) ) {
            $backgroundStyles['background-image'] = get_the_post_thumbnail_url( get_the_ID(),'full' );
        }
        if ( get_post_type() === 'portfolio' && get_theme_mod( 'setting_header_featured_image_portfolio', true ) ) {
            $backgroundStyles['background-image'] = get_the_post_thumbnail_url( get_the_ID(),'full' );
        }
    }

    echo "<style>";
    echo "#header {";
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

/**
 * Generates the tagging of a list of meta infos on the post
 * @param none
 * @return none 
 */
function masterportfolio_post_meta() {

    // Author.
    $author = array(
        '<li class="post-author meta-wrapper">',
            '<span class="meta-icon">',
                '<span class="screen-reader-text">',
                    __( 'Post Author', 'masterportfolio' ),
                '</span>',
                '<i class="fas fa-user"></i>',
            '</span>',
            '<span class="meta-text">',
                sprintf(
                    __( 'By %s', 'masterportfolio' ),
                    '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a>'
                ),
            '</span>',
        '</li>'
    );

    // Post date.
    $date = array(
        '<li class="post-date meta-wrapper">',
            '<span class="meta-icon">',
                '<span class="screen-reader-text">',
                    __( 'Publication date', 'masterportfolio' ),
                '</span>',
                '<i class="fas fa-calendar-alt"></i>',
            '</span>',
            '<span class="meta-text">',
                get_the_date(),
            '</span>',
        '</li>'
    );

    // Categories.
    $categories = array();

    if ( has_category() || has_term( '', 'portfolio_category' ) ) {
        // If is Post or Custom Post Type
        $categoriesArray = ( get_post_type() === 'post' ) ? get_the_category() : get_the_terms( $post->ID, 'portfolio_category' );
        $categoriesLength = count( $categoriesArray );
        $categoriesLinks = "";    
        $x = 1;

        foreach ( $categoriesArray as $category ) {
            // Make a string with all categories links
            $categoriesLinks .= sprintf( 
                '<a href="%s">%s</a>%s', 
                esc_url( get_term_link( $category->term_id ) ), 
                esc_html( $category->name ),
                ( $x !== $categoriesLength ) ? "&#44;&nbsp;" : "" // Check if is the last item, to not add comma and space
            );

            $x++;
        }    

        array_push( $categories,
            '<li class="post-categories meta-wrapper">',
                '<span class="meta-icon">',
                    '<span class="screen-reader-text">',
                        __( 'Post categories', 'masterportfolio' ),
                    '</span>',
                    '<i class="fas fa-folder"></i>',
                '</span>',
                '<span class="meta-text">',
                    sprintf(
                        __( "In %s", 'masterportfolio' ),
                        $categoriesLinks
                    ),
                '</span>',
            '</li>'
        );
    }
    
    // Tags.
    $tags = array();

    if ( has_tag() ) {
        array_push( $tags,
            '<li class="post-tags meta-wrapper">',
                '<span class="meta-icon">',
                    '<span class="screen-reader-text">',
                        __( 'Post tags', 'masterportfolio' ),
                    '</span>',
                    '<i class="fas fa-tag fa-sm"></i>',
                '</span>',
                '<span class="meta-text">',
                    get_the_tag_list( '', ', ', '' ),
                '</span>',
            '</li>'
        );
    }
    
    // Comments link.
    $commentsNumber = intval( get_comments_number() );

    if ( $commentsNumber === 0 ) 
        $commentsTotal = __( 'No comment', 'masterportfolio' );
    if ( $commentsNumber === 1 ) 
        $commentsTotal = __( '1 comment', 'masterportfolio' );
    if ( $commentsNumber > 1 ) 
        $commentsTotal = sprintf( __( '%s comments', 'masterportfolio' ), $commentsNumber );

    $comments = array(
        '<li class="post-comments-count meta-wrapper">',
            '<span class="meta-icon">',
                '<span class="screen-reader-text">',
                    __( 'Total comments', 'masterportfolio' ),
                '</span>',
                '<i class="fas fa-comments"></i>',
            '</span>',
            '<span class="meta-text">',
                $commentsTotal,
            '</span>',
        '</li>',
    );

    // Combine all arrays
    $metaItems = array_merge($author, $date, $categories, $tags, $comments);

    echo '<div class="post-meta-wrapper"><ul class="post-meta">';
    echo implode('', $metaItems); // Join array elements with a string
    echo '</ul></div>';
}
