<?php
/*
 * The template for displaying page contents
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <section>
        <div class="container pb-5 pt-3">
            <?php the_content(); ?>
        </div>
        <!-- /.container -->
    </section>
</main>

<?php get_footer(); ?>
