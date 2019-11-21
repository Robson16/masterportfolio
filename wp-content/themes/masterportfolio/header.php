<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">     
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php get_template_part('template-parts/navbar/main-menu'); ?>

        <?php
        $header_img = rwmb_meta('_masterportfolio_header_img', array(
            'size' => (wp_is_mobile()) ? 'medium_large' : 'post_header',
        ));
        ?>

        <header class="header-pages">
            <img class="img-fluid" src="<?php echo ($header_img['url']) ? $header_img['url'] : '//via.placeholder.com/2560x450'; ?>" alt="<?php _e('Page Banner', 'masterportfolio'); ?>" />
            <div class="container py-3">
                <div class="row">
                    <div class="col">
                        <h1 class="title"><?php echo get_the_title(); ?></h1>
                        <hr>
                        <p class="h3"><?php echo rwmb_meta('_masterportfolio_subtitle'); ?></p>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </header>