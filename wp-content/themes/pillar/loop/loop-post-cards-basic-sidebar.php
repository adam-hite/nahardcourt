<div class="row">
	
	<div class="col-md-9">
	
		<div class="masonry pr30">
			<div class="masonry__container blog-load-more">
				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					
						/**
						 * Get blog posts by blog layout.
						 */
						get_template_part('loop/content-post', 'cards-basic-sidebar');
					
					endwhile;	
					else : 
						
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','none');
						
					endif;
				?>
			</div><!--end of masonry container-->
		</div>
		
		<?php
			/**
			 * Post pagination, use ebor_pagination() first and fall back to default
			 */
			echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
		?>
		
	</div>
	
	<?php get_sidebar(); ?>
	
</div><!--end of row-->