<?php
/**
 * @version 9.9.9
 */
global $post;

if ( ! $post->post_excerpt ) {
	return;
}

?>
<div class="post-content" itemprop="description">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
