<div class="col-sm-6 masonry__item">
	<a href="<?php the_permalink(); ?>">
		<div class="boxed bg--white box-shadow">
			<span><?php the_time(get_option('date_format')); ?></span>
			<?php the_title('<h5>', '</h5>'); ?>
			<hr>
			<?php echo wpautop(wp_trim_words(get_the_excerpt(), 22)); ?>
		</div>
	</a>
</div>