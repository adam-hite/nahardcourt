<div class="row">
	<div class="masonry box-shadow-wide">
		<div class="masonry__filters masonry__filters--outside text-center" data-filter-all-text="<?php esc_attr_e('Show All', 'pillar'); ?>"></div>
		<div class="masonry__container masonry--gapless <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content-portfolio', 'grid-2col');
				
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

	<?php
		/**
		 * Post pagination, use ebor_pagination() first and fall back to default
		 */
		if(is_archive()) { ?>
			<div id="archive-navigation" class="text-center">
				<hr>
				<?php echo posts_nav_link(' '); ?>
			</div>
			<?php
		}			
	?>

</div><!--end row-->