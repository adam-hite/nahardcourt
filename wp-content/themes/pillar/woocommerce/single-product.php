<?php 
/**
 * @version 9.9.9
 */
	get_header(); 
	the_post();
	
	$query = ( isset($_GET['layout']) ) ? $_GET['layout'] : false;
	$layout = ( $query ) ? $query : get_option('pillar_product_layout', 'centered');
	
	get_template_part('loop/content-product', $layout);
	
	get_footer();