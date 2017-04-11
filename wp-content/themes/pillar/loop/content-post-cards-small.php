<?php 
	$cat_string = false;
	$category = get_the_category();
	if( is_array($category) ){
		foreach( $category as $cat ){
			$cat_string .= $cat->name . ' ';	
		}
	}
?>

<div class="col-md-4 col-sm-6 masonry__item">
	<a href="<?php the_permalink(); ?>">
		<div class="card card-4">
			<div class="card__image">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="card__body boxed boxed--sm bg--white">
				<h6><?php echo esc_html($cat_string); ?></h6>
				<div class="card__title">
					<?php the_title('<h5>', '</h5>'); ?>
				</div>
				<hr>
				<div class="card__lower">
					<span><?php esc_html_e('by', 'pillar'); ?></span>
					<span class="h6"><?php the_author(); ?> &bull; </span>
					<span><?php the_time(get_option('date_format')); ?></span>
				</div>
			</div>
		</div>
	</a>
</div><!--end item-->