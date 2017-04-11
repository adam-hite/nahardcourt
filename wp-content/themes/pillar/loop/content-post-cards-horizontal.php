<?php 
	$cat_string = false;
	$category = get_the_category();
	if( is_array($category) ){
		foreach( $category as $cat ){
			$cat_string .= $cat->name . ' ';	
		}
	}
?>

<a class="col-sm-12 masonry__item" href="<?php the_permalink(); ?>">
	<div class="card card--horizontal card-6">
		<div class="card__image col-sm-7 col-md-8">
			<div class="background-image-holder">
				<?php the_post_thumbnail('full'); ?>
			</div>
		</div>
		<div class="card__body col-sm-5 col-md-4 boxed boxed--lg bg--white">
			<h6><?php echo esc_html($cat_string); ?></h6>
			<div class="card__title">
				<?php the_title('<h4>', '</h4>'); ?>
			</div>
			<?php the_excerpt(); ?>
			<hr>
			<div class="card__lower">
				<span><?php esc_html_e('by', 'pillar'); ?></span>
				<span class="h6"><?php the_author(); ?> &bull; </span>
				<span><?php the_time(get_option('date_format')); ?></span>
			</div>
		</div>
	</div>
</a>