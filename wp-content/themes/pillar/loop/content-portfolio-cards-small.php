<div class="<?php echo esc_attr(get_option('pillar_portfolio_columns', 'col-md-6')); ?> col-sm-6 masonry__item" data-masonry-filter="<?php echo ebor_the_terms('portfolio_category', ',', 'name'); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="card card-3">
			<div class="card__image">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="card__body boxed bg--white">
				<?php the_title('<div class="card__title"><h5>', '</h5></div>'); ?>
				<span><em><?php echo ebor_the_terms('portfolio_category', ', ', 'name'); ?></em></span>
			</div>
		</div>
	</a>
</div><!--end item-->