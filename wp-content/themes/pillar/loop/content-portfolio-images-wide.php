<div class="col-md-4 col-sm-6 col-xs-12 masonry__item" data-masonry-filter="<?php echo ebor_the_terms('portfolio_category', ',', 'name'); ?>">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('large'); ?>
	</a>
</div><!--end item-->