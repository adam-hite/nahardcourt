<div class="pillars-1">
	<div class="slider" data-items="6" data-timing="3000">
		<ul class="slides client-slides">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content-client', 'carousel');
				
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
</div>