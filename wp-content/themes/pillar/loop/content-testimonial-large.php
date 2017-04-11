<div class="testimonial testimonial-3 row">
	<div class="col-sm-6 col-sm-push-6">
		<div class="testimonial__text">
			<blockquote><?php echo get_the_content(); ?></blockquote>
			<?php the_title('<h5>&mdash; ', '</h5><span class="h6">'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</span>'); ?>
		</div>
	</div>
	<div class="col-sm-6 col-sm-pull-6">
		<?php the_post_thumbnail('large'); ?>
	</div>
</div><!--end of row-->