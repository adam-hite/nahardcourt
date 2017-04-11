<div class="slider slider--controlsoutside" data-animation="fade" data-arrows="false" data-paging="true" data-timing="<?php echo esc_attr(get_option('testimonial_speed', '5000')); ?>">
	<ul class="slides">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			
				/**
				 * Get blog posts by blog layout.
				 */
				get_template_part('loop/content-testimonial', 'carousel');
			
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