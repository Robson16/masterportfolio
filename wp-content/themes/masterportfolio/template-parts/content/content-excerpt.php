<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <a href="<?php the_permalink(); ?>">
        <h3 class="d-flex">
            <span class="badge badge-secondary text-capitalize font-weight-light rounded-0 bg-color-three mr-2"><?php echo get_post_type(); ?></span>
            <span class="text-uppercase font-weight-bold"><?php echo get_the_title(); ?></span>
        </h3>
    </a>

    <?php if (has_post_thumbnail()): ?>
        <figure class="border" title="<?php the_title_attribute(); ?>">
            <a class="thumbnail" href="<?php the_permalink(); ?>">
                <?php
                the_post_thumbnail('large_narrow', array(
                    'class' => 'img-fluid',
                    'alt' => get_the_title(),
                ));
                ?>
            </a>
        </figure>
    <?php endif; ?>
 
    <p class="mb-1">
        <i class="far fa-calendar-alt"></i>
        <?php echo get_the_date(); ?> 

        &nbsp;

        <i class="fas fa-user"></i>
        <?php the_author_posts_link(); ?>

        &nbsp;

        <i class="fas fa-folder-open fa-sm"></i>
        <?php
        if (get_post_type() == 'post') {
            the_category(', ');
        } elseif (get_post_type() == 'portfolio' && has_term('', 'portfolio_category')) {

            $categories = wp_get_post_terms($post->ID, 'portfolio_category', array('fields' => 'all'));

            foreach ($categories as $category) {
                echo '<a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a>';
            }
        }
        ?>

        &nbsp;

        <i class="fas fa-tag fa-sm"></i>
        <?php the_tags('', ', ', ''); ?>
    </p>

    <?php the_excerpt(); ?>

    <a class="btn btn-outline text-uppercase font-weight-bold py-3 px-4" href="<?php the_permalink(); ?>">
        <?php _e('Read more', 'masterportfolio'); ?>
    </a>

    <hr class="my-5">

</article><!-- #post-<?php the_ID(); ?> -->
