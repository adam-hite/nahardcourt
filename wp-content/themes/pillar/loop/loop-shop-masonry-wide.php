<section class="wide-grid masonry masonry-shop">

	<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			
				/**
				 * Get blog posts by blog layout.
				 */
				get_template_part('loop/content-shop', 'masonry-wide');
			
			endwhile;	
			else : 
				
				/**
				 * Display no posts message if none are found.
				 */
				get_template_part('loop/content','none');
				
			endif;
		?>
	</div><!--end masonry container-->
	
	<?php 
		/**
		 * Post pagination, use ebor_pagination() first and fall back to default
		 */
		echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
	?>
	
</section>