<form role="search" method="get" class="search-form"  action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a id="search-icon-id" href="#" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<?php if ( is_page( 'HomePage' ) || is_page( 'About' ) ): ?>
			<label id="search-label-id" class="search-input-hide">
		<?php else: ?>
			<label id="search-label-id" class="search-input-hide label-green">
		<?php endif; ?>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">
	</fieldset>
</form>