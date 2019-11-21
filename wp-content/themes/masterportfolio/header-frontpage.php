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
            'size' => (wp_is_mobile()) ? 'medium_large' : 'full',
        ));
        ?>

        <header class="header-home" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php echo ($header_img['url']) ? $header_img['url'] : '//via.placeholder.com/2560x1440' ?>);">
            <div class="container text-center pt-md-5 pb-5 mb-5">
                <div class="header-content">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-logo my-3">
                                <?php if (has_custom_logo()) the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <hgroup class="header-titles mb-5">
                                <h1 class="title"><?php bloginfo('name'); ?></h1>
                                <h2 class="sub-title"><?php echo rwmb_meta('_masterportfolio_subtitle'); ?></h2>
                            </hgroup>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-5">
                            <?php get_template_part('template-parts/content/content', 'social'); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <figure>
                                <img src="<?php echo (has_post_thumbnail()) ? get_the_post_thumbnail_url($post->ID, 'medium') : '//via.placeholder.com/300x300'; ?>" class="header-photo img-fluid rounded-circle" alt="<?php _e('My picture', 'masterportfolio'); ?>">
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </header>
