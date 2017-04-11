<?php 
	global $product;
	$rating_count = $product->get_rating_count();
	$review_count = $product->get_review_count();
	$average      = $product->get_average_rating();
?>

<div class="col-md-6 col-sm-4 masonry__item">
	<a href="<?php the_permalink(); ?>">
		<div class="shop-item shop-item-1">
			<div class="shop-item__price hover--reveal">
				<?php 
					echo woocommerce_template_loop_price(); 
					if ( $rating_count > 0 ){
						echo ebor_rating_html($average);
					}
				?>
			</div>
			<div class="shop-item__image">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="shop-item__title">
				<?php the_title('<h5>', '</h5>'); ?>
			</div>
		</div>
	</a>
</div>