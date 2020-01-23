<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-blocks container-footer">

					<?php 				
						if ( ! is_active_sidebar( 'footer-1' ) ) {
							return;
						}
					?>

					<?php dynamic_sidebar( 'footer-1' ); ?>

					<div class="footer-block-item">
						<div class="text-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-text.svg'?>" alt="Inhabitent logo">
							</a>
						</div>
					</div>
				</div>

				<?php
					get_template_part( 'template-parts/footer/site-info' );
				?>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

		

	</body>
</html>
