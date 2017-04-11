<li class="imagebg" data-overlay="5">
	<div class="background-image-holder">
		<?php the_post_thumbnail('full'); ?>
	</div>
	<div class="container pos-absolute pos-bottom text-center-xs">
		<div class="row">
			<div class="col-sm-6">
				<?php the_title('<h3>', '</h3>'); ?>
				<p class="lead"><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
				<a class="btn btn--sm" href="<?php the_permalink(); ?>"><span class="btn__text"><?php esc_html_e('View Case Study', 'pillar'); ?></span></a>
			</div>
		</div>
	</div>
</li>