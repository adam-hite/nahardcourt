<div class="row">

	<div class="col-md-9">
		<div class="masonry masonry-shop pr30">
			<div class="row">	
				<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
					<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
						
							/**
							 * Get blog posts by blog layout.
							 */
							get_template_part('loop/content-shop', 'cards-sidebar');
						
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
		</div><!--end masonry-->
		<?php 
			/**
			 * Post pagination, use ebor_pagination() first and fall back to default
			 */
			echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
		?>
	</div><!--end 9 col-->
	
	<?php get_sidebar('shop'); ?>

</div><!--end of row-->