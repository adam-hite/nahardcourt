<div class="col-md-5 col-md-offset-1 col-sm-6">
	<div class="testimonial testimonial-2 text-center">
		<span class="testimonial__quote">&ldquo;</span>
		<blockquote><?php echo get_the_content(); ?></blockquote>
		<?php
			the_post_thumbnail('full');
			the_title('<h5>', '</h5><span>'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</span>');
		?>
	</div>
</div>