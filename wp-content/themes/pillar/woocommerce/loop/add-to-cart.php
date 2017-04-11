<?php
/**
 * @version 9.9.9
 */
global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s btn btn--sm "><span class="btn__text">%s</span></a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? str_replace('button p', 'p', $class) : 'btn btn--sm' ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
