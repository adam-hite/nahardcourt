<?php
/**
 * @version 9.9.9
 */
?>

<form class="search-form" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="input-with-icon">
		<i class="icon-Magnifi-Glass2"></i>
		<input type="text" id="s2" class="mb0" name="s" placeholder="<?php esc_attr_e('Type here', 'pillar'); ?>" />
		<input type="hidden" name="post_type" value="product" />
	</div>
</form>