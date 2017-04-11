<?php
/**
 * @version 9.9.9
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

<div class="tabs-container tabs-1">
	<ul class="tabs text-center">
		<?php foreach ( $tabs as $key => $tab ) : ?>
			<li>
				<div class="tab__title">
					<div class="tab__title btn">
						<span class="btn__text"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></span>
					</div>
				</div>
				<div class="tab__content">
					<?php call_user_func( $tab['callback'], $key, $tab ); ?>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>

<?php endif; ?>
