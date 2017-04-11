<?php 
	/**
	 * @version 9.9.9
	 */
	 global $product; 
?>

<li>
	<a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
		<?php echo $product->get_image(); ?>
		<h6 class="product-title"><?php echo $product->get_title(); ?></h6>
	</a>
	<?php echo $product->get_price_html(); ?>
	<?php if ( ! empty( $show_rating ) ) : ?>
		<?php 
			$rating_count = $product->get_rating_count();
			$review_count = $product->get_review_count();
			$average      = $product->get_average_rating();
			
			if ( $rating_count > 0 ){
				echo ebor_rating_html($average);
			}
		?>
	<?php endif; ?>
</li>
