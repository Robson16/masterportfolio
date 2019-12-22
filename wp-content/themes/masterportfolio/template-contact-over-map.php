<?php
/*
 * Template Name: Contact Over Map
 * 
 * Global template for use in contact page,
 * you can make this template as the model of a page,
 * this will use the content and below will make 
 * more things with the custom post-types of the theme
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <section>
        <div class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-around align-items-center text-center my-5">

                        <?php if (get_theme_mod('setting_phone')): ?>
                            <a class="d-flex flex-column text-dark py-3" href="<?php echo 'tel:' . clear_phones(get_theme_mod('setting_phone')); ?>" aria-label="<?php _e('Phone', 'masterportfolio'); ?>">
                                <i class="fas fa-phone fa-5x mb-3"></i>
                                <strong><?php echo get_theme_mod('setting_phone'); ?></strong>
                            </a>
                        <?php endif; ?>

                        <?php if (get_theme_mod('setting_whatsapp')): ?>
                            <a class="d-flex flex-column text-dark py-3" href="<?php echo 'https://wa.me/' . clear_phones(get_theme_mod('setting_whatsapp')); ?>" aria-label="Whatsapp">
                                <i class="fab fa-whatsapp fa-5x mb-3"></i>
                                <strong><?php echo get_theme_mod('setting_whatsapp'); ?></strong>
                            </a>
                        <?php endif; ?>

                        <?php if (get_theme_mod('setting_email')): ?>
                            <a class="d-flex flex-column text-dark py-3" href="<?php echo 'mailto:' . get_theme_mod('setting_email'); ?>" aria-label="Email">
                                <i class="far fa-envelope fa-5x mb-3"></i>
                                <strong><?php echo get_theme_mod('setting_email'); ?></strong>
                            </a>
                        <?php endif; ?>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!--/.bg-light-->

        <div class="contact-over-map">
            <div id="map" class="bg-google-map" data-lat="<?php echo get_theme_mod('setting_latitude') ?>" data-lng="<?php echo get_theme_mod('setting_longitude') ?>"></div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="title text-white text-center mb-5"><?php _e('Get in touch!', 'masterportfolio'); ?></h3>
                    </div>
                    <!-- /.col -->

                    <div class="col-12 col-lg-8 offset-lg-2">
                        <?php echo do_shortcode(get_theme_mod('setting_contact_form')); ?>
                    </div>
                    <!-- /.col -->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.contact-over-map-->
    </section>
</main>

<?php get_footer(); ?>
