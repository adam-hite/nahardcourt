<?php 
	global $product;
	$rating_count = $product->get_rating_count();
	$review_count = $product->get_review_count();
	$average      = $product->get_average_rating();
?>

<div class="col-sm-6 masonry__item">
	<a href="<?php the_permalink(); ?>">
		<div class="card card-7">
			<div class="card__image">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="card__body boxed bg--white">
				<div class="card__title">
					<?php the_title('<h6>'. ebor_the_terms('product_cat', ', ', 'name') .'</h6><h5>', '</h5>'); ?>
				</div>
				<div class="card__price">
					<?php 
						echo woocommerce_template_loop_price(); 
						if ( $rating_count > 0 ){
							echo ebor_rating_html($average);
						}
					?>
				</div>
			</div>
		</div>
	</a>
</div>