<div class="row masonry-contained shop-home">

	<div class="masonry masonry-shop">					
		<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content-shop', 'masonry');
				
				endwhile;	
				else : 
					
					/**
					 * Display no posts message if none are found.
					 */
					get_template_part('loop/content','none');
					
				endif;
			?>
		</div><!--end masonry container-->
	</div><!--end masonry-->
	
	<?php 
		/**
		 * Post pagination, use ebor_pagination() first and fall back to default
		 */
		echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
	?>
	
</div><!--end of row-->