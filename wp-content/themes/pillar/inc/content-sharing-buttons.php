<?php
	$the_id = get_the_ID();
	$url[] = '';
	$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
?>

<a class="btn btn--sm bg--facebook" target="_blank" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onClick="return ebor_fb_like_<?php echo esc_attr($the_id); ?>()">
	<span class="btn__text">
		<i class="socicon-facebook"></i> <?php esc_html_e('Share on Facebook', 'pillar'); ?>
	</span>
</a>

<a class="btn btn--sm bg--twitter" target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>" onClick="return ebor_tweet_<?php echo esc_attr($the_id); ?>()">
	<span class="btn__text">
		<i class="socicon-twitter"></i> <?php esc_html_e('Share on Twitter', 'pillar'); ?>
	</span>
</a>

<a class="btn btn--sm bg--googleplus" target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" onClick="return ebor_pin_<?php echo esc_attr($the_id); ?>()">
	<span class="btn__text">
		<i class="socicon-pinterest"></i> <?php esc_html_e('Share on Pinterest', 'pillar'); ?>
	</span>
</a>

<script type="text/javascript">
	function ebor_fb_like_<?php echo esc_attr($the_id); ?>() {
		window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo sanitize_title(get_the_title()); ?>','sharer','toolbar=0,status=0,width=626,height=436');
		return false;
	}
	function ebor_tweet_<?php echo esc_attr($the_id); ?>() {
		window.open('https://twitter.com/share?url=<?php the_permalink(); ?>&t=<?php echo sanitize_title(get_the_title()); ?>','sharer','toolbar=0,status=0,width=626,height=436');
		return false;
	}
	function ebor_pin_<?php echo esc_attr($the_id); ?>() {
		window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url($url[0]); ?>&description=<?php echo sanitize_title(get_the_title()); ?>','sharer','toolbar=0,status=0,width=626,height=436');
		return false;
	}
</script>