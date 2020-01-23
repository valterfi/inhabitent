

<form role="search" method="get" class="search-form"  action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a href="#" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">
	</fieldset>
</form>