<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php get_template_part( 'partials/navbar/main-menu' ); ?>

        <?php the_element_background( 'setting_header_background', 'div.header-wrap' ); ?>

        <header id="header">
            <div class="header-wrap">
                <div class="container text-center pt-md-5 pb-5">
                    <div class="header-content">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="header-logo my-3">
                                    <?php if (has_custom_logo()) the_custom_logo(); ?>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->

                        <div class="row">
                            <div class="col-sm-12">
                                <hgroup class="header-titles mb-5">
                                    <h3 class="h1 title"><?php echo get_theme_mod('setting_header_title', 'I Am A Customizable Title'); ?></h3>
                                    <h4 class="h2 sub-title"><?php echo get_theme_mod('setting_header_subtitle', 'I Am A Customizable Sub-Title'); ?></h4>
                                </hgroup>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->

                        <div class="row">
                            <div class="col-sm-12 mb-5">
                                <div class="social d-flex flex-wrap justify-content-center align-items-center">
                                    <?php if (get_theme_mod('setting_facebook')): ?>
                                        <a class="facebook" href="<?php echo get_theme_mod('setting_facebook') ?>" target="_black" rel="noopener" aria-label="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_twitter')): ?>
                                        <a class="twitter" href="<?php echo get_theme_mod('setting_twitter') ?>" target="_black" rel="noopener" aria-label="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_instagram')): ?>
                                        <a class="instagram" href="<?php echo get_theme_mod('setting_instagram') ?>" target="_black" rel="noopener" aria-label="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_linkedin')): ?>
                                        <a class="linkedin" href="<?php echo get_theme_mod('setting_linkedin') ?>" target="_black" rel="noopener" aria-label="Linkedin">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_pinterest')): ?>
                                        <a class="pinterest" href="<?php echo get_theme_mod('setting_pinterest') ?>" target="_black" rel="noopener" aria-label="Pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_youtube')): ?>
                                        <a class="youtube" href="<?php echo get_theme_mod('setting_youtube') ?>" target="_black" rel="noopener" aria-label="YouTube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_wordpress')): ?>
                                        <a class="wordpress" href="<?php echo get_theme_mod('setting_wordpress') ?>" target="_black" rel="noopener" aria-label="WordPress Profile">
                                            <i class="fab fa-wordpress"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_github')): ?>
                                        <a class="github" href="<?php echo get_theme_mod('setting_github') ?>" target="_black" rel="noopener" aria-label="GitHub">
                                            <i class="fab fa-github-alt"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_gitlab')): ?>
                                        <a class="gitlab" href="<?php echo get_theme_mod('setting_gitlab') ?>" target="_black" rel="noopener" aria-label="GitLab">
                                            <i class="fab fa-gitlab"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_bitbucket')): ?>
                                        <a class="bitbucket" href="<?php echo get_theme_mod('setting_bitbucket') ?>" target="_black" rel="noopener" aria-label="Bitbucket">
                                            <i class="fab fa-bitbucket"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_whatsapp')): ?>
                                        <a class="whatsapp" href="<?php echo 'https://wa.me/' . clear_phones(get_theme_mod('setting_whatsapp')); ?>" target="_black" rel="noopener" aria-label="Whatsapp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_phone')): ?>
                                        <a class="phone" href="<?php echo 'tel:' . clear_phones(get_theme_mod('setting_phone')); ?>" aria-label="<?php _e('Phone', 'masterportfolio'); ?>">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('setting_email')): ?>
                                        <a class="email" href="<?php echo 'mailto:' . get_theme_mod('setting_email'); ?>" target="_top" aria-label="Email">
                                            <i class="far fa-envelope"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <!--/.social-->
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.header-content-->
                </div>
                <!--/.container-->

            </div>

            <div class="container pt-5 pb-3">
                <?php
                get_template_part( 'partials/header/header', 'hgroup' );
                if ( function_exists( 'yoast_breadcrumb' ) ) yoast_breadcrumb( '<p class="breadcrumbs m-0">', '</p>' );
                ?>
            </div>
            <!-- /.container -->
        </header>