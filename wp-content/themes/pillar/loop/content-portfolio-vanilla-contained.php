<div class="col-md-4 col-sm-6 masonry__item" data-masonry-filter="<?php echo ebor_the_terms('portfolio_category', ',', 'name'); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="portfolio-item portfolio-item-1 text-center">
			<?php the_post_thumbnail('large'); ?>
			<?php the_title('<h5>', '</h5>'); ?>
			<span><em><?php echo ebor_the_terms('portfolio_category', ', ', 'name'); ?></em></span>
		</div>
	</a>
</div><!--end item-->