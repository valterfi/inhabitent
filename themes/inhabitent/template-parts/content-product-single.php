<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="product-image-wrapper">
		<img width="640" height="480" src="<?php echo CFS()->get( 'image' ); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 640px) 100vw, 640px"> 
	</div>

    <div class="product-content-wrapper">
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1> </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <p class="price">$155.00</p>

            <p><?php the_content();?></p>

            <?php
				get_template_part( 'template-parts/social-buttons' );
			?>
        </div>
        <!-- .entry-content -->
    </div>
</article>