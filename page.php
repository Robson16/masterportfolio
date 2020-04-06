<?php
/**
 * The template for displaying page contents
 * 
 */

get_header(); 
?>

<main role="main">
    <section>
        <div class="container pb-5 pt-3">
            <?php 
            while( have_posts() ) {
                the_post();
                the_content();
            } 
            ?>
        </div>
        <!-- /.container -->
    </section>
</main>

<?php 
get_footer(); 
