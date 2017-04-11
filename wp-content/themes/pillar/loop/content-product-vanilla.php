<?php
	global $woocommerce, $product;
	$image = get_post_thumbnail_id( $post->ID);
	$attachment_ids = $product->get_gallery_attachment_ids();
	array_unshift($attachment_ids, $image);
?>

<section>
    <div class="container">
    	
    	<?php
    		/**
    		 * woocommerce_before_single_product hook.
    		 *
    		 * @hooked wc_print_notices - 10
    		 */
    		 do_action( 'woocommerce_before_single_product' );
    	
    		 if ( post_password_required() ) {
    		 	echo get_the_password_form();
    		 	return;
    		 }
    	?>
    	
        <div class="row">
            <div class="shop-item-detail shop-item-detail-1">
                <div class="col-sm-6">
                    <div class="slider" data-animation="fade" data-arrows="true" data-paging="true">
                        <ul class="slides">
                            <?php
                            	if( is_array($attachment_ids) ){
                            		foreach( $attachment_ids as $id ){
                            			echo '<li>'. wp_get_attachment_image($id, 'full') .'</li>';
                            		}
                            	}
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1 col-sm-6">
                    <?php
                    	/**
                    	 * woocommerce_single_product_summary hook.
                    	 *
                    	 * @hooked woocommerce_template_single_title - 5
                    	 * @hooked woocommerce_template_single_rating - 10
                    	 * @hooked woocommerce_template_single_price - 10
                    	 * @hooked woocommerce_template_single_excerpt - 20
                    	 * @hooked woocommerce_template_single_add_to_cart - 30
                    	 * @hooked woocommerce_template_single_meta - 40
                    	 * @hooked woocommerce_template_single_sharing - 50
                    	 */
                    	do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="container">
		<?php echo woocommerce_output_product_data_tabs(); ?>
	</div>
</section>

<?php echo woocommerce_output_related_products(); ?>