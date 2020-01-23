<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php $wpb_all_query = new WP_Query(array('post_type'=>'product_type', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

		<?php if ( $wpb_all_query->have_posts() ) : ?>


			<header class="page-header">
				<h1 class="page-title">Shop Stuff</h1>
				<ul class="product-type-list">

					<?php $taxonomies = get_terms( 'product_taxonomy'); ?>
				
					<?php foreach ( $taxonomies as $term ) : ?>
						<li>
							<p><a href="<?php echo get_term_link($term)  ?>"><?php echo $term->name; ?></a></p>
						</li>
					<?php endforeach; ?>

				</ul>
			</header>

			<hr/>

			<?php /* Start the Loop */ ?>
			<div class="container">
				<div class="product-grid">
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

						<?php
							get_template_part( 'template-parts/content-product' );
						?>

					<?php endwhile; ?>
				</div>
			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
