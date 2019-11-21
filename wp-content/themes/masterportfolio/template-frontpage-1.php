<?php
/*
 * Template Name: Front-Page 1
 * 
 * Generic template for use in front-page,
 * you can make this template as the model of a page,
 * this will use the content and below will make 
 * more things with the custom post-types of the theme
 * 
 */
?>

<?php get_header('frontpage'); ?>

<main role="main">
    <section>
        <div class="container pb-5 pt-3">
            <hgroup class="text-center my-4">
                <h2 class="title-cursive font-weight-bold"><?php echo get_the_title(); ?></h2>
                <hr class="sm-line">
            </hgroup>
            <?php the_content(); ?>
        </div>
        <!-- /.container -->
    </section>

    <?php get_template_part('template-parts/frontpage/frontpage', 'widget'); ?>
    <?php get_template_part('template-parts/frontpage/frontpage', 'skills'); ?>
    <?php get_template_part('template-parts/frontpage/frontpage', 'resume'); ?>
</main>

<?php get_footer(); ?>
