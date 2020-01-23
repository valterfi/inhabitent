<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="first-section">
				<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'?>" class="logo" alt="Inhabitent full logo">
			</section>

			<section class="product-info container">
				<h2>Shop Stuff</h2>
				<div class="product-type-blocks">

					<?php $taxonomies = get_terms( 'product_taxonomy'); ?>
			
					<?php foreach ( $taxonomies as $term ) : ?>
						<div class="product-type-block-wrapper">
							<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg'?>">
							<p><?php echo $term->description; ?></p>
							<p><a href="<?php echo get_term_link($term)  ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
						</div>
					<?php endforeach; ?>

				</div>
			</section>

			<section class="latest-entries">
				<div class="container">
					<h2>Inhabitent Journal</h2>
					<ul>
						<?php
							$args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
							$posts = get_posts( $args ); // returns an array of posts
						?>

						<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>

							<li>
								<div class="thumbnail-wrapper">
									<img width="640" height="438" src="<?php the_post_thumbnail_url(); ?>" class="attachment-large size-large wp-post-image" sizes="(max-width: 640px) 100vw, 640px">
								</div>
								<div class="post-info-wrapper">
									<span class="entry-meta"><span class="posted-on"><?php the_date() ?></span> / <?php comments_number() ?></span>
									<h3 class="entry-title"><a href="https://tent.academy.red/van-camping-photo-contest/" rel="bookmark"><?php the_title(); ?></a></h3>
								</div>
								<a class="black-btn" href="<?php the_permalink() ?>">Read Entry</a>
							</li>

						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
				</div>
			</section>

			<br/>
			<br/>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
