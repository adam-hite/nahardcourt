<?php 

//Show cart total price
function ebor_ajax_cart_total_price( $fragments ) {
	global $woocommerce;
	ob_start();
	echo '<span class="ebor-number">'. $woocommerce->cart->get_cart_total() .'</span>';
	$fragments['span.ebor-number'] = ob_get_clean();
	return $fragments;
}
add_filter('add_to_cart_fragments', 'ebor_ajax_cart_total_price');

//Show cart count
function ebor_ajax_cart_total( $fragments ) {
	global $woocommerce;
	ob_start();
	echo '<div class="ebor-cart-count">'. $woocommerce->cart->get_cart_contents_count() .'</div>';
	$fragments['div.ebor-cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter('add_to_cart_fragments', 'ebor_ajax_cart_total');

//Show cart contents
function ebor_ajax_cart_total_contents( $fragments ) {
	global $woocommerce;
	ob_start();
?>
	<ul class="cart-overview__items">
	            
        <?php foreach ($woocommerce->cart->cart_contents as $cart_item_key => $cart_item) : ?>
        
        	<?php $_product = $cart_item['data']; ?>
        	
            <li>
            	<div class="item__image">
            		<a href="<?php echo get_permalink($cart_item['product_id']); ?>">
            			<?php echo get_the_post_thumbnail($cart_item['product_id'], 'shop_thumbnail'); ?>
            		</a>
            	</div>
                <div class="item__detail">
                	<span><?php echo apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product); ?></span>
                	<span class="h6"><?php echo esc_html($cart_item['quantity']); ?> x <?php echo woocommerce_price($_product->get_price()); ?></span>
                </div>
            </li>
            
        <?php endforeach; ?>

    </ul>
<?php
	$fragments['ul.cart-overview__items'] = ob_get_clean();
	return $fragments;
}
add_filter('add_to_cart_fragments', 'ebor_ajax_cart_total_contents');

function ebor_rating_html($count = false){

	$stars = ( round($count * 2) / 2 );
		
	$stars_html = '<div class="review__score">';
	
	if( 0.5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 1 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 1.5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 2 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star empty"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 2.5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 3 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star empty"></div><div class="star empty"></div>';	
	} elseif( 3.5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star empty"></div>';	
	} elseif( 4 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star empty"></div>';	
	} elseif( 4.5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>';	
	} elseif( 5 == $stars ){
		$stars_html .= '<div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div><div class="star"></div>';	
	}
	
	$stars_html .= '</div>';
	return $stars_html;
}