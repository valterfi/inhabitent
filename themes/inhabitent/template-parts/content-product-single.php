<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<img width="1500" height="1026" src="<?php the_post_thumbnail_url( 'large' ); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 1500px) 100vw, 1500px">
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">Van Camping Photo Contest</a></h2>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<!-- .entry-meta -->
	</header>
	<!-- .entry-header -->

	<div class="entry-content">
	
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<br/>

	<?php
		get_template_part( 'template-parts/social-buttons' );
	?>
</article><!-- #post-## -->
