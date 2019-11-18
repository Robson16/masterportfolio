<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row min-vh-100">
        <div class="col-xl-5 col-lg-6 col-md-8 p-5 p-lg-4 mx-auto d-flex align-items-center">
            <div>
                <p><?php the_custom_logo(); ?></p>
                <h1 class="text-uppercase"><?php echo get_bloginfo('title'); ?></h1>
                <?php
                if (is_active_sidebar('message-widget')) {
                    dynamic_sidebar('message-widget');
                }
                ?>
                <p class="social">
                    <?php if (get_theme_mod('set_facebook')): ?>
                        <a class="external facebook" href="<?php echo get_theme_mod('set_facebook') ?>" target="_black" rel="noopener" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('set_youtube')): ?>
                        <a class="youtube" href="<?php echo get_theme_mod('set_youtube') ?>" target="_black" rel="noopener" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('set_twitter')): ?>
                        <a class="twitter" href="<?php echo get_theme_mod('set_twitter') ?>" target="_black" rel="noopener" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('set_instagram')): ?>
                        <a class="instagram" href="<?php echo get_theme_mod('set_instagram') ?>" target="_black" rel="noopener" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('set_email')): ?>
                        <a class="email" href="<?php echo 'mailto:' . get_theme_mod('set_email'); ?>" target="_top" aria-label="Email">
                            <i class="far fa-envelope"></i>
                        </a>
                    <?php endif; ?>
                </p>
                <p class="credit">&copy; <?php echo get_the_date('Y') . '&nbsp;' . get_bloginfo('title'); ?> | <?php _e('Created by', 'undertheme'); ?> <a href="//www.robsonhrodrigues.com.br/" target="_black" rel="noopener">Robson H. Rodrigues</a></p>
            </div>
        </div>
        <!-- /.col -->
        <div style="background-image: url(<?php echo (get_theme_mod('set_wallpaper')) ? wp_get_attachment_image_src(get_theme_mod('set_wallpaper'), 'full')[0] : '//via.placeholder.com/1920x1080'; ?>);" class="col-xl-6 col-lg-5 col-md-4 intro-right">
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

<?php
get_footer();
