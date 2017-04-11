<div class="col-md-4 col-sm-6 col-xs-6">
	<div class="member member-1">
		<a href="<?php the_permalink(); ?>" class="pb40 image-link">
			<?php the_post_thumbnail('large'); ?>
		</a>
		<?php 
			the_title('<a href="'. get_permalink() .'"><h6>'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</h6><h5>', '</h5></a>');
			the_content();
		?>
	</div><!--end member-->
</div>