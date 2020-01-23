<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img width="1500" height="1026" src="<?php the_post_thumbnail_url( 'large' ); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 1500px) 100vw, 1500px">
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<!-- .entry-meta -->
	</header>
	<!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
		<p><a href="<?php echo esc_url( get_permalink() ) ?>" class="read-more black-btn">Read more →</a></p>
	</div><!-- .entry-content -->
	<!-- .entry-content -->
</article>


