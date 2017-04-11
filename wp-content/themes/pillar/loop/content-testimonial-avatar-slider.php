<li>
	<div class="testimonial text-center">
		<?php the_post_thumbnail('full'); ?>
		<hr>
		<?php the_title('<h5>&mdash; ', '</h5>'); ?>
		<blockquote><?php echo get_the_content(); ?></blockquote>
	</div>
</li>