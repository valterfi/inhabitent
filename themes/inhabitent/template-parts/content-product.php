<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
	
<div class="product-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumbnail-wrapper">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><img width="640" height="480" src="<?php echo CFS()->get( 'image' ); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 640px) 100vw, 640px"></a>
	</div>
	<div class="product-info">
		<h2 class="entry-title"><?php the_title() ?></h2>
		<span class="price"><?php echo CFS()->get( 'Price' ); ?></span>
	</div>
</div>

