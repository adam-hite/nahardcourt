<?php if (get_option('pillar_header_cart', 'yes') == 'yes' && class_exists('Woocommerce')) : global $woocommerce; ?>
	<div class="nav-module right">
		<a href="#" class="nav-function" data-notification-link="cart-overview">
			<i class="interface-bag icon icon--sm"></i>
			<div class="ebor-cart-count"><?php echo esc_html($woocommerce->cart->get_cart_contents_count()); ?></div>
			<span><?php esc_html_e('Cart', 'pillar'); ?></span>
		</a>
	</div>
<?php endif; ?>