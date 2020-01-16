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

			<?php $taxonomies = get_terms( 'product_taxonomy'); ?>
		
			<?php foreach ( $taxonomies as $term ) : ?>
				<p><?php echo $term->name; ?></p>
				<p><?php echo $term->description; ?></p>
			<?php endforeach; ?>

			<?php
				$args = array( 'post_type' => 'post', 'order' => 'ASC', 'numberposts' => 3 );
				$posts = get_posts( $args ); // returns an array of posts
			?>

			<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
				<h1><?php the_title(); ?></h1>
				 <?php the_post_thumbnail(); ?>
				 <?php the_date() ?>
				 <?php comments_number() ?>
			<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
