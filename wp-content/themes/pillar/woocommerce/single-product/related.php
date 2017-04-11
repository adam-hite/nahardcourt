<?php
/**
 * @version 9.9.9
 */
global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) === 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => 3,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products = new WP_Query( $args );

if ( $products->have_posts() ) : ?>

	<section class="bg--white">
		<div class="container">
			<div class="row">
				<div class="related-products">
				
					<div class="col-sm-12">
						<h4><?php esc_html_e('Related Products', 'pillar'); ?></h4>
					</div>

					<?php while ( $products->have_posts() ) : $products->the_post(); ?>
		
						<?php get_template_part( 'loop/content-shop', 'cards-small' ); ?>
		
					<?php endwhile; // end of the loop. ?>

				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</section>

<?php endif;

wp_reset_postdata();