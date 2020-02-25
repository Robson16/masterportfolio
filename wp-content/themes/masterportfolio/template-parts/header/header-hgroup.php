<hgroup>
    <?php

    if ( is_search() ) {
        echo sprintf( '<h1 class="d-inline-block title title-cursive">%s <span>%s</span></h1>', __( 'Search results for:', 'masterportfolio'), get_search_query() );
    }

    if ( is_archive() ) {
        echo sprintf( '<h1 class="title title-cursive">%s</h1>', get_the_archive_title() );
    }

    if ( is_home() ) {
        echo sprintf( '<h1 class="title title-cursive">%s</h1>', __( 'Blog', 'masterportfolio' ) );
    }

    if ( is_404() ) {
        echo sprintf( '<h1 class="title title-cursive">%s</h1>', __( 'Not Found', 'masterportfolio' ) );
    }

    if ( is_single() || is_page() ) {
        echo sprintf( '<h1 class="title title-cursive">%s</h1>', get_the_title() );
    }

    if ( rwmb_meta('subtitle') ) {
        echo sprintf( '<h3>%s</h3>', rwmb_meta( 'subtitle' ) );
    }

    ?>
</hgroup>

<hr class="mt-0">