<?php // this must be the ..search ?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<button class="submit" id="searchsubmit"><span class="screen-reader-text"><?php  esc_attr_e( 'Search', 'semi-bold' ); ?></span><?php echo file_get_contents(get_template_directory_uri().'/img/icon-search.svg'); ?></button>
	<label for="s" class="screen-reader-text"><?php _e( 'Search', 'semi-bold' ); ?></label>
	<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'semi-bold' ); ?>">
</form>