<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
		<!-- .entry-meta -->
	</header>
	<!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<p><a href="<?php echo esc_url( get_permalink() ) ?>" class="read-more black-btn">Read more →</a></p>
	</div><!-- .entry-content -->
	<!-- .entry-content -->
</article>
