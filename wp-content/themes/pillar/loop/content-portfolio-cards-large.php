<div class="col-sm-12 masonry__item" data-masonry-filter="<?php echo ebor_the_terms('portfolio_category', ',', 'name'); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="card card--horizontal card-5">
			<div class="card__image col-sm-7 col-md-8">
				<div class="background-image-holder">
					<?php the_post_thumbnail('large'); ?>
				</div>
			</div>
			<div class="card__body col-sm-5 col-md-4 boxed boxed--lg bg--white">
				<?php the_title('<div class="card__title"><h4>', '</h4></div>'); ?>
				<span><em><?php echo ebor_the_terms('portfolio_category', ', ', 'name'); ?></em></span>
				<?php echo wpautop(wp_trim_words(get_the_excerpt(), 10)); ?>
			</div>
		</div>
	</a>
</div><!--end item-->