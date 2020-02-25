<?php
/*
 * 
 */
?>

<?php get_header(); ?>

<main role="main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <?php if (has_post_thumbnail()): ?>
                            <figure class="border" title="<?php the_title_attribute(); ?>">
                                <?php
                                the_post_thumbnail('medium_large', array(
                                    'class' => 'img-fluid',
                                    'alt' => get_the_title(),
                                ));
                                ?>
                            </figure>
                        <?php endif; ?>
                    </div>
                    <!--/.col-->
                    <div class="col-12 col-lg-4">

                        <?php if (has_term('', 'portfolio_category') || has_tag()): ?>
                            <div class="border border-left-0 border-right-0 mb-3 py-3">

                                <?php if (has_term('', 'portfolio_category')): ?>
                                    <?php $categories = wp_get_post_terms($post->ID, 'portfolio_category', array('fields' => 'all')); ?>
                                    <i class="fas fa-folder-open fa-sm"></i>
                                    <?php foreach ($categories as $category): ?>
                                        <a href="<?php echo get_term_link($category->term_id); ?>" class="small"><?php echo $category->name; ?></a>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                                <?php the_tags('<i class="fas fa-tag fa-sm"></i> <span class="small">', ', ', '</span>'); ?>
                            </div>
                        <?php endif; ?>

                        <ul class="list-unstyled border border-left-0 border-right-0 border-top-0 pb-3">
                            <li>
                                <span class="font-weight-bold text-uppercase"><?php _e('Client:', 'masterportfolio'); ?></span>
                                <?php
                                if (rwmb_meta('client_url')) {
                                    echo sprintf("<a href='%s' target='_blank' rel='noopener'>%s</a>", rwmb_meta('client_url'), rwmb_meta('client'));
                                } else {
                                    echo rwmb_meta('client');
                                }
                                ?>
                            </li>
                            <li>
                                <span class="font-weight-bold text-uppercase"><?php _e('Design by:', 'masterportfolio'); ?></span>
                                <?php
                                if (rwmb_meta('designer_url')) {
                                    echo sprintf("<a href='%s' target='_blank' rel='noopener'>%s</a>", rwmb_meta('designer_url'), rwmb_meta('designer'));
                                } else {
                                    echo rwmb_meta('designer');
                                }
                                ?>
                            </li>
                            <li>
                                <span class="font-weight-bold text-uppercase"><?php _e('Created in:', 'masterportfolio'); ?></span>
                                <?php echo date_i18n( get_option( 'date_format' ), rwmb_meta('date'), current_time('timestamp') ) ; ?>
                            </li>
                        </ul>

                        <?php the_content(); ?>

                        <?php if (!empty(get_the_content())): ?>
                            <hr>
                        <?php endif; ?>

                        <?php if (rwmb_meta('work_url')): ?>
                            <a class="btn btn-outline" href="<?php echo rwmb_meta('work_url'); ?>" target="_blank" rel="noopener"><?php _e('See Online', 'masterportfolio'); ?></a>
                        <?php endif; ?>

                    </div>
                    <!--/.col-->
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </article>
        <!-- #post-<?php the_ID(); ?> -->

        <div class="container">
            <?php
            if (comments_open() || get_comments_number()) {
                comments_template();
            }
            ?>
        </div>
        <!--/.container-->

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
