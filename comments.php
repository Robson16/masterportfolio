<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>

<div class="comments">

    <div class="row my-5">
        <div class="col-12">
            <?php if (have_comments()) : ?>
                <h3 class="text-cursive comments-title">
                    <?php _e('Comments', 'masterportfolio'); ?>
                </h3>
                <?php the_comments_navigation(); ?>
                <ul class="comment-list">
                    <?php
                    wp_list_comments(array(
                        'style' => 'ul',
                        'short_ping' => true,
                        'avatar_size' => 46,
                    ));
                    ?>
                </ul>
                <!-- .comment-list -->
                <?php the_comments_navigation(); ?>
            <?php endif; ?>
            <?php // Se os comentários estão fechados, mas existe algum, deixamos um pequeno aviso. ?>
            <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
                <p class="no-comments"><?php _e('Comments closed.', 'masterportfolio'); ?></p>
            <?php endif; ?>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
    
    <div class="row">
        <div class="col-12">
            <?php
            comment_form(array(
                'title_reply_before' => '<h2 id="reply-title" class="text-cursive comment-reply-title">',
                'title_reply' => __('Leave a comment.', 'masterportfolio'),
                'title_reply_after' => '</h2>',
            ));
            ?>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->

</div>
<!-- /.comments -->
