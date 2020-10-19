<?php

/**
 * The template for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<main>
    <?php
    while ( have_posts() ) {
        the_post();
        get_template_part( 'partials/content/content', 'page' );
    }
    ?>
</main>

<?php
get_footer();
