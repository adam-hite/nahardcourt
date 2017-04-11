<?php
/**
 * @version 9.9.9
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', esc_html__( 'Product Description', 'pillar' ) ) );

?>

<?php if ( $heading ): ?>
  <h4><?php echo esc_html($heading); ?></h4>
<?php endif; ?>

<div class="post-content">
	<?php the_content(); ?>
</div>