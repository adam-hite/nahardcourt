<div class="col-md-3 col-sm-6 masonry__item" data-masonry-filter="<?php echo ebor_the_terms('portfolio_category', ',', 'name'); ?>">
	<a href="<?php the_permalink(); ?>">
		<div class="hover-element hover-element-1" data-title-position="top,right">
			<div class="hover-element__initial">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="hover-element__reveal" data-overlay="9">
				<div class="boxed">
					<?php the_title('<h5>', '</h5>'); ?>
					<span><em><?php echo ebor_the_terms('portfolio_category', ', ', 'name'); ?></em></span>
				</div>
			</div>
		</div><!--end hover element-->
	</a>
</div>