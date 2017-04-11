<?php 
	global $product;
	$rating_count = $product->get_rating_count();
	$review_count = $product->get_review_count();
	$average      = $product->get_average_rating();
?>

<div <?php post_class('col-sm-12 masonry__item'); ?>>
	<div class="card card-8">
		<div class="card__image col-sm-7 col-md-6">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('large'); ?>
			</a>
		</div>
		<div class="card__body col-sm-5 col-md-6 boxed bg--white">
			<div class="card__title">
				<?php the_title('<h3>', '</h3><h6>'. get_the_term_list( $post->ID, 'product_cat', '', ', ' ) .'</h6>'); ?>
			</div>
			<div class="card__price">
				<?php 
					echo woocommerce_template_loop_price(); 
					if ( $rating_count > 0 ){
						echo ebor_rating_html($average);
					}
				?>
			</div>
			<hr>
			<p class="col-md-10"><?php echo wp_trim_words(get_the_excerpt(), 22) ?></p>
			<?php echo woocommerce_template_loop_add_to_cart(); ?>
			<a class="btn btn--transparent" href="<?php the_permalink(); ?>">
				<span class="btn__text">
					<?php esc_html_e('More Detail', 'pillar'); ?>
				</span>
			</a>
		</div>
	</div>
</div>