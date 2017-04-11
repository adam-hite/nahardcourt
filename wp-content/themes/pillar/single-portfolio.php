<?php 
	get_header();
	the_post();
?>

<section class="blog-post">
	
	<?php get_template_part('inc/content-format', get_post_format()); ?>
	
	<div class="container">
	
		<div class="row">
			<div class="col-md-10 col-md-offset-1 post-content">
				<?php
					the_content();
					wp_link_pages();
				?>
				<hr>
			</div>
		</div><!--end of row-->
		
		<?php 
			if( 'yes' == get_option('portfolio_single_sharing', 'yes') )
				get_template_part('inc/content-post', 'sharing'); 
		?>
		
	</div><!--end of container-->
</section>

<?php 
	if( 'yes' == get_option('portfolio_single_related', 'yes') )
		get_template_part('inc/content-portfolio', 'related'); 
		
	if( 'yes' == get_option('portfolio_single_nav', 'yes') )
		get_template_part('inc/content-portfolio','nav');
		
	get_footer();