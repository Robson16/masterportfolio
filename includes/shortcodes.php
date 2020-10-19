<?php

// Portfolio Items Thumbnail Link Shortcode
function portfolio_shortcode( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'number_of_items' => '6',
		),
		$atts
	);

    // Custom query
	$portfolio_items = new WP_Query( array(
	    'post_type' => 'portfolio',
	    'post_status' => 'publish',
	    'posts_per_page' => $atts['number_of_items'],
    ) );

    // Creating the markup
    $portfolio_html = "<div class='portfolio-grid'>";

    while ( $portfolio_items->have_posts() ) {
        $portfolio_items->the_post();

        $portfolio_html .= "<article id='post-" .  get_the_ID() . "' class='portfolio-item'>";
        $portfolio_html .= "<figure>"; 
        $portfolio_html .= "<a class='post-image-overlayer' href='" . esc_url( get_permalink( get_the_ID() ) ) . "'>";
        $portfolio_html .= get_the_post_thumbnail( $portfolio_items->the_ID, 'thumbnails_portfolio', array( 'alt' => get_the_title() ) );
        $portfolio_html .= "</a>";
        $portfolio_html .= "<figcaption>" . get_the_title() . "</figcaption>";
        $portfolio_html .= "</figure>";
        $portfolio_html .= "</article>";
    }

    $portfolio_html .= "</div>";
    
    // Reset the query postdata
    wp_reset_postdata();
    
    return $portfolio_html;
}
add_shortcode( 'portfolio', 'portfolio_shortcode' );

// Social Networks Link Shortcode
function social_networks_shortcode() {
    $networks = "";

    if ( get_theme_mod( 'setting_facebook' ) ) {
        $networks .= sprintf ( '<a class="facebook" href="%s" target="_black" rel="noopener" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>', esc_url( get_theme_mod( 'setting_facebook' ) ) );
    }
    if ( get_theme_mod( 'setting_twitter' ) ) {
    	$networks .= sprintf ( '<a class="twitter" href="%s" target="_black" rel="noopener" aria-label="Twitter">
    		<i class="fab fa-twitter"></i>
    	</a>', esc_url( get_theme_mod( 'setting_twitter' ) ) );
    }
    if ( get_theme_mod( 'setting_instagram' ) ) {
    	$networks .= sprintf ( '<a class="instagram" href="%s" target="_black" rel="noopener" aria-label="Instagram">
    		<i class="fab fa-instagram"></i>
    	</a>', esc_url( get_theme_mod( 'setting_instagram' ) ) );
    }
    if ( get_theme_mod( 'setting_linkedin' ) ) {
    	$networks .= sprintf ( '<a class="linkedin" href="%s" target="_black" rel="noopener" aria-label="Linkedin">
    		<i class="fab fa-linkedin-in"></i>
    	</a>', esc_url( get_theme_mod( 'setting_linkedin' ) ) );
    }
    if ( get_theme_mod( 'setting_pinterest' ) ) {
        $networks .= sprintf ( '<a class="pinterest" href="%s" target="_black" rel="noopener" aria-label="Pinterest">
    		<i class="fab fa-pinterest"></i>
    	</a>', esc_url( get_theme_mod( 'setting_pinterest' ) ) );
    }
    if ( get_theme_mod( 'setting_youtube' ) ) {
    	$networks .= sprintf ( '<a class="youtube" href="%s" target="_black" rel="noopener" aria-label="YouTube">
    		<i class="fab fa-youtube"></i>
    	</a>', esc_url( get_theme_mod( 'setting_youtube' ) ) );
    }
    if ( get_theme_mod( 'setting_wordpress' ) ) {
    	$networks .= sprintf ( '<a class="wordpress" href="%s" target="_black" rel="noopener" aria-label="WordPress Profile">
    		<i class="fab fa-wordpress"></i>
    	</a>', esc_url( get_theme_mod( 'setting_wordpress' ) ) );
    }
    if ( get_theme_mod( 'setting_github' ) ) {
    	$networks .= sprintf ( '<a class="github" href="%s" target="_black" rel="noopener" aria-label="GitHub">
    		<i class="fab fa-github-alt"></i>
    	</a>', esc_url( get_theme_mod( 'setting_github' ) ) );
    }
    if ( get_theme_mod( 'setting_gitlab' ) ) {
    	$networks .= sprintf ( '<a class="gitlab" href="%s" target="_black" rel="noopener" aria-label="GitLab">
    		<i class="fab fa-gitlab"></i>
    	</a>', esc_url( get_theme_mod( 'setting_gitlab' ) ) );
    }
    if ( get_theme_mod( 'setting_bitbucket' ) ) {
    	$networks .= sprintf ( '<a class="bitbucket" href="%s" target="_black" rel="noopener" aria-label="Bitbucket">
    		<i class="fab fa-bitbucket"></i>
    	</a>', esc_url( get_theme_mod( 'setting_bitbucket' ) ) );
    }

    return '<div class="social-networks">' . $networks .  '</div>';    
}
add_shortcode( 'social-networks', 'social_networks_shortcode' );