<div class="row">
	<div class="masonry masonry-blog">
		<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?> blog-load-more">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content-post', 'cards-large');
				
				endwhile;	
				else : 
					
					/**
					 * Display no posts message if none are found.
					 */
					get_template_part('loop/content','none');
					
				endif;
			?>
		</div><!--end of masonry container-->
	</div><!--end masonry-->
</div>

<?php
	/**
	 * Post pagination, use ebor_pagination() first and fall back to default
	 */
	echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();