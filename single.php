<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
get_header();
?>

<main role="main">
    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'partials/content/content', 'single' );
    ?>

    <div class="container">
    <?php
        the_post_navigation(
            array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'masterportfolio' ) . '</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'masterportfolio' ) . '</span>',
            )
        );

        if (comments_open() || get_comments_number()) comments_template();        

    endwhile;
    ?>
    </div>
    <!-- /.container -->
</main>

<?php
get_footer();
