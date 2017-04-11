<div class="slider testimonial-5" data-arrows="false" data-paging="true">
	<ul class="slides">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			
				/**
				 * Get blog posts by blog layout.
				 */
				get_template_part('loop/content-testimonial', 'avatar-slider');
			
			endwhile;	
			else : 
				
				/**
				 * Display no posts message if none are found.
				 */
				get_template_part('loop/content','none');
				
			endif;
		?>
	</ul>
</div>