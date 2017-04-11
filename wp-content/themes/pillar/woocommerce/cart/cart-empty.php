<?php
/**
 * @version 9.9.9
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();
?>

<p class="cart-empty text-center">
	<?php esc_html_e( 'Your cart is currently empty.', 'pillar' ) ?>
</p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<p class="return-to-shop text-center">
	<a class="btn btn--lg btn--primary mb--1" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
		<span class="btn__text"><?php esc_html_e( 'Return To Shop', 'pillar' ) ?></span>
	</a>
</p>
