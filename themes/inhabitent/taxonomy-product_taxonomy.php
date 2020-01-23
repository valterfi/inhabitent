<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<hr/>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts() ) : ?>

			<header class="page-header">
				<!-- <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?> -->
				<h1>SHOP STUFF</h1>
			</header><!-- .page-header -->

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
