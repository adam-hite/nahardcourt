<div class="wide-grid masonry">
	<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			
				/**
				 * Get blog posts by blog layout.
				 */
				get_template_part('loop/content-team', 'masonry');
			
			endwhile;	
			else : 
				
				/**
				 * Display no posts message if none are found.
				 */
				get_template_part('loop/content','none');
				
			endif;
		?>
	</div><!--end masonry container-->
</div>