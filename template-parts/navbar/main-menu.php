<?php
/*
 * Template Part of de main navbar in the theme
 * 
 */
?>

<nav id="navbar" role="navigation" class="navbar navbar-dark navbar-expand-lg bg-dark box-shadow"> 
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()): ?>
                <img class="img-fluid" src="<?php echo wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'navbar_logo', true)[0]; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
            <?php endif; ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarNav',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
    </div>
</nav>