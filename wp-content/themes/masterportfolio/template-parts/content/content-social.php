<?php
/*
 * Template Part to view social networks and other contacts
 */
?>

<div class="social">
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
