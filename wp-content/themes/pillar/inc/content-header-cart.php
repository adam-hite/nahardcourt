<?php 
	if(!( class_exists('Woocommerce') ))
		return false;
			
	global $woocommerce;
	$cart_url = $woocommerce->cart->get_cart_url();
	$checkout_url = $woocommerce->cart->get_checkout_url();
	
	$notices = WC()->session->get( 'wc_notices', array() );
	$class = ( array_key_exists('success', $notices) ) ? 'data-autoshow="1000"' : false;
?>

<?php if (get_option('pillar_header_cart', 'yes') == 'yes') : ?>

	<div class="notification pos-right pos-top cart-overview" data-notification-link="cart-overview" data-animation="from-right" <?php echo esc_html($class); ?>>
	
		<div class="cart-overview__title">
		    <h5><?php esc_html_e('Your Cart', 'pillar'); ?></h5>
		</div>
		
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
		
		<div class="cart-overview__subtotal">
		    <h5><?php esc_html_e('Subtotal', 'pillar'); ?>:</h5>
		    <span class="ebor-number"><?php echo htmlspecialchars_decode($woocommerce->cart->get_cart_total()); ?></span>
		</div>
		
		<div class="cart-overview__action">
		    <a href="<?php echo esc_url($cart_url); ?>" class="btn btn--square btn--primary">
		    	<span class="btn__text">
		    		<?php esc_html_e('View/Edit Cart', 'pillar'); ?>
		    	</span>
		    </a>
		</div>
		
		<div class="cart-overview__action">
		    <a href="<?php echo esc_url($checkout_url); ?>" class="btn btn--square btn--success">
		    	<span class="btn__text">
		    		<?php esc_html_e('Checkout Now', 'pillar'); ?>
		    	</span>
		    </a>
		</div>
		
		<div class="notification-close-cross notification-close"></div>
	
	</div>

<?php endif; ?>