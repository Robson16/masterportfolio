<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">     
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <?php get_template_part('template-parts/navbar/main-menu'); ?>

        <header class="header-pages">
            <div class="container py-3">
                <h1 class="title"><?php echo get_the_title(); ?></h1>
                <hr>
            </div>
            <!-- /.container -->
        </header>