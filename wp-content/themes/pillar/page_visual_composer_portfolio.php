<?php 
	get_header();
	the_post();
	
	the_content();
	
	if( 'yes' == get_option('portfolio_single_sharing', 'yes') )
		get_template_part('inc/content-portfolio','sharing');
	
	if( 'yes' == get_option('portfolio_single_related', 'yes') )
		get_template_part('inc/content-portfolio', 'related'); 
		
	if( 'yes' == get_option('portfolio_single_nav', 'yes') )
		get_template_part('inc/content-portfolio','nav');
	
	get_footer();