<?php
/*
 * Template Name: Front-Page 1
 * 
 * Global template for use in front-page,
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
                <h3 class="title-cursive font-weight-bold"><?php echo get_the_title(); ?></h3>
                <hr class="sm-line">
                <h4 class="sub-title"><?php echo rwmb_meta('subtitle'); ?></h4>
            </hgroup>
            <?php the_content(); ?>
        </div>
        <!-- /.container -->

        <div class="bg-light">
            <div class="container py-2 py-lg-5">
                <div class="row flex-column flex-sm-row">

                    <?php if (is_active_sidebar('frontpage-widget-one')) : ?> 
                        <div class="col my-3">
                            <div class="h-100 bg-white p-3">
                                <?php dynamic_sidebar('frontpage-widget-one'); ?>
                            </div>
                        </div>
                        <!-- /.col -->
                    <?php endif; ?>

                    <?php if (is_active_sidebar('frontpage-widget-two')) : ?> 
                        <div class="col my-3">
                            <div class="h-100 bg-white p-3">
                                <?php dynamic_sidebar('frontpage-widget-two'); ?>
                            </div>
                        </div>
                        <!-- /.col -->
                    <?php endif; ?>

                    <?php if (is_active_sidebar('frontpage-widget-three')) : ?> 
                        <div class="col my-3">
                            <div class="h-100 bg-white p-3">
                                <?php dynamic_sidebar('frontpage-widget-three'); ?>
                            </div>
                        </div>
                        <!-- /.col -->
                    <?php endif; ?>

                    <?php if (is_active_sidebar('frontpage-widget-four')) : ?> 
                        <div class="col my-3">
                            <div class="h-100 bg-white p-3">
                                <?php dynamic_sidebar('frontpage-widget-four'); ?>
                            </div>
                        </div>
                        <!-- /.col -->
                    <?php endif; ?>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
    </section>

    <?php get_template_part('template-parts/sections/section', 'skills'); ?>
    <?php get_template_part('template-parts/sections/section', 'resume'); ?>
    <?php get_template_part('template-parts/sections/section', 'portfolio'); ?>
    <?php get_template_part('template-parts/sections/section', 'contact'); ?>
</main>

<?php get_footer(); ?>
