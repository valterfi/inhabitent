<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>


			<article id="post-31" class="post-31 post type-post status-publish format-standard has-post-thumbnail hentry category-contests tag-photography tag-vans">
				<header class="entry-header">
					<img width="1500" height="1026" src="https://tent.academy.red/wp-content/uploads/2016/04/van-camper.jpg" class="attachment-large size-large wp-post-image" alt="Van camper at night" srcset="https://tent.academy.red/wp-content/uploads/2016/04/van-camper.jpg 1500w, https://tent.academy.red/wp-content/uploads/2016/04/van-camper-300x205.jpg 300w, https://tent.academy.red/wp-content/uploads/2016/04/van-camper-768x525.jpg 768w, https://tent.academy.red/wp-content/uploads/2016/04/van-camper-1024x700.jpg 1024w" sizes="(max-width: 1500px) 100vw, 1500px">
					<h2 class="entry-title"><a href="https://tent.academy.red/van-camping-photo-contest/" rel="bookmark">Van Camping Photo Contest</a></h2>
					<div class="entry-meta">
						<span class="posted-on"><time class="entry-date published" datetime="2016-04-14T18:40:34+00:00">14 April 2016</time><time class="updated" datetime="2018-06-19T14:29:35+00:00">19 June 2018</time></span> / 3 Comments / <span class="byline"> by <span class="author vcard">Mandi Wise</span></span>
					</div>
					<!-- .entry-meta -->
				</header>
				<!-- .entry-header -->

				<div class="entry-content">
					<p>Ethical tumblr gentrify listicle roof party. Normcore jean shorts single-origin coffee aesthetic, selvage williamsburg chartreuse austin banjo tumblr trust fund. Vinyl freegan trust fund, blue bottle chicharrones VHS fanny pack pop-up tumblr put a bird on it blog whatever. Authentic next level shabby chic squid. Brooklyn chicharrones fanny pack waistcoat <span>[…]</span></p>
					<p><a href="https://tent.academy.red/van-camping-photo-contest/" class="read-more black-btn">Read more →</a></p>
				</div>
				<!-- .entry-content -->
			</article>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
