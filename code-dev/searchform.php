<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url('/') ) ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php esc_html_e('Search for','code-dev'); ?>:</label>
            <input type="text" value="" name="s" id="s">
            <input type="submit" id="searchsubmit" value="<?php esc_html_e('Search','code-dev'); ?>">
            <input type="hidden" value="post" name="post_type" id="post_type" />
        </div>
</form>