<?php
/**
 * @version 9.9.9
 */
 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="btn btn--primary mb--1">
	<span class="btn__text"><?php echo esc_html__( 'Proceed to Checkout', 'pillar' ); ?></span>
</a>
