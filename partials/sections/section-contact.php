<?php the_element_background( 'setting_contact_background', 'section#contact' ); ?>

<section id="contact">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <hgroup class="text-center mb-5">
                    <h3 class="title text-cursive text-white"><?php _e( 'Contact', 'masterportfolio' ); ?></h3>
                    <hr class="sm-line">
                    <h4 class="sub-title text-white"><?php _e( 'Get in touch!', 'masterportfolio' ); ?></h4>
                </hgroup>
            </div>
            <!-- /.col -->
            <div class="col-12 col-lg-4">
                <p>
                    <?php echo get_theme_mod( 'setting_contact_text' ); ?>
                </p>
                <ul class="list-unstyled social">
                    <?php if ( get_theme_mod( 'setting_whatsapp' ) ): ?>
                        <li>
                            <a class="whatsapp" href="<?php echo 'https://wa.me/' . clear_phones( get_theme_mod( 'setting_whatsapp' ) ); ?>" target="_black" rel="noopener" aria-label="Whatsapp">
                                <i class="fab fa-whatsapp"></i>
                                <span><?php echo get_theme_mod('setting_whatsapp'); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'setting_phone' ) ): ?>
                        <li>
                            <a class="phone" href="<?php echo 'tel:' . clear_phones( get_theme_mod( 'setting_phone' ) ); ?>" aria-label="<?php _e( 'Phone', 'masterportfolio' ); ?>">
                                <i class="fas fa-phone"></i>
                                <span><?php echo get_theme_mod( 'setting_phone' ); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'setting_email' ) ): ?>
                        <li>
                            <a class="email" href="<?php echo 'mailto:' . get_theme_mod( 'setting_email' ); ?>" target="_top" aria-label="Email">
                                <i class="far fa-envelope"></i>
                                <span><?php echo get_theme_mod( 'setting_email' ); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.col -->
            <div class="col-12 col-lg-8">
                <?php echo do_shortcode( get_theme_mod( 'setting_contact_form' ) ); ?>
            </div>
            <!-- /.col -->
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>