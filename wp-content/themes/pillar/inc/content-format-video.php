<div class="blog-post__title bg--secondary">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
				<?php the_title('<h1 class="h2">', '</h1>'); ?>
				<div class="blog-post__author">
					<span><em><?php esc_html_e('by', 'pillar'); ?></em></span>
					<span class="h6"><?php the_author(); ?></span>
				</div>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="video-cover blog-post__hero box-shadow">
				<div class="background-image-holder">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="video-play-icon "></div>
				<p>
					<?php echo wp_oembed_get(get_post_meta($post->ID, '_ebor_the_oembed', 1)); ?>
				</p>
			</div>
		</div>
	</div><!--end of row-->
</div>