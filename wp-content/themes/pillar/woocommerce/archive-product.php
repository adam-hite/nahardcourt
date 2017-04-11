<?php 
	/**
	 * @version 9.9.9
	 */
	get_header(); 
	
	$layout = ( isset($_GET['layout']) ) ? $_GET['layout'] : get_option('shop_layout', 'cards-large');
?>

<?php if( get_option('pillar_shop_header_image') ) : ?>

<section class="imagebg height-40 parallax" data-overlay="8">
	<div class="background-image-holder">
		<img alt="image" src="<?php echo esc_url(get_option('pillar_shop_header_image')); ?>" />
	</div>
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php woocommerce_page_title(); ?></h1>
				<p class="lead"><?php woocommerce_breadcrumb(); ?></p>
			</div>
		</div><!--end row-->
	</div><!--end container-->
</section>

<?php else : ?>

	<section class="height-40 page-title page-title--animate">
	    <div class="container pos-vertical-center">
	        <div class="row">
	            <div class="col-sm-12 text-center">
	                <h1><?php woocommerce_page_title(); ?></h1>
	                <p class="lead"><?php woocommerce_breadcrumb(); ?></p>
	            </div>
	        </div>
	    </div>
	</section>

<?php endif; ?>

<?php 
	if(!( 'masonry-wide' == $layout ))
		echo '<section><div class="container">';
	
	if(!( 'masonry-wide' == $layout )){
		do_action( 'woocommerce_before_shop_loop' );
	} else {
		echo '<section class="pb40"><div class="container">';
		do_action( 'woocommerce_before_shop_loop' );
		echo '</section></div>';
	}
	
	echo '<div class="clearfix"></div>';
	get_template_part('loop/loop-shop', $layout); 
	
	if(!( 'masonry-wide' == $layout ))
		echo '</section></div>';
	
	get_footer();