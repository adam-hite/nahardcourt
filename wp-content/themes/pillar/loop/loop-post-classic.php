<div class="row">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
		<div class="row">
		
			<div class="masonry">
				<div class="masonry__container blog-load-more">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
							/**
							 * Get blog posts by blog layout.
							 */
							get_template_part('loop/content-post', 'classic');
						
						endwhile;	
						else : 
							
							/**
							 * Display no posts message if none are found.
							 */
							get_template_part('loop/content','none');
							
						endif;
					?>
				</div>
			</div>
			
			<?php
				/**
				 * Post pagination, use ebor_pagination() first and fall back to default
				 */
				echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
			?>
			
		</div>
	</div>
</div><!--end of row-->