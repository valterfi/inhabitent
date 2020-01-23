<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2><a class="search-title-especific" href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    </header>
    <!-- .entry-header -->

    <div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a href="<?php echo esc_url( get_permalink() ) ?>" class="read-more black-btn">Read more →</a></p>
	</div><!-- .entry-summary -->
    <!-- .entry-summary -->
</article>
