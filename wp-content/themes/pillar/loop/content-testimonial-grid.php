<div class="col-sm-4">
	<div class="testimonial testimonial-1 text-center boxed bg--white">
		<?php
			the_post_thumbnail('full');
			the_content();
			the_title('<h5>', '</h5><span>'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</span>');
		?>
	</div>
</div>