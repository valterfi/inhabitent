<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts() ) : ?>

			<header class="page-header">

			<?php
				$taxonomy = get_queried_object();
			?>
				<h1 class="page-title"><?php echo $taxonomy->name;?></h1>
				<div class="taxonomy-description">
					<p><?php echo $taxonomy->description;?></p>
				</div>
			</header>

			<hr/>

			<?php /* Start the Loop */ ?>
			<div class="container">
				<div class="product-grid">
					<?php while (have_posts() ) : the_post(); ?>

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
