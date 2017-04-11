<div class="blog-item blog-item-1 masonry__item col-sm-12">
	
	<?php if( get_post_meta($post->ID, '_ebor_the_oembed', 1) ) : ?>
		<div class="single pb40"><p><?php echo wp_oembed_get(get_post_meta($post->ID, '_ebor_the_oembed', 1)); ?></p></div>
	<?php elseif( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('full'); ?>
		</a>
	<?php endif; ?>
	
	<?php the_title('<a href="'. get_permalink() .'"><h4>', '</h4></a>'); ?>
	
	<div class="blog-item__author">
		<span><em><?php esc_html_e('by', 'pillar'); ?></em></span>
		<span class="h6"><?php the_author(); ?> &bull; </span>
		<span><em><?php the_time(get_option('date_format')); ?></em></span>
	</div>

	<?php 
		the_excerpt(); 
		get_template_part('inc/content-loop', 'sharing'); 
	?>
	
	<hr>
	
</div><!--end blog item-->