<?php
/**
 * Generic template part to display publication
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <br>
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' );

		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'narrow_large', array(
				// 'title' => get_the_title(),
				// 'alt' => get_the_title()
			) );
		}

		masterportfolio_post_meta();
		?>
    </header>
	<!-- /.entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<!-- /.entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->