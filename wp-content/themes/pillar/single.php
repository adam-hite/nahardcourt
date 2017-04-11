<?php 
	get_header();
	the_post();
	
	$sidebar = ( is_active_sidebar('primary') && get_post_meta( $post->ID, '_ebor_disable_sidebar', true ) !=='on' ) ? true : false;
	$class = ( $sidebar ) ? 'col-sm-9' : 'col-sm-10 col-sm-offset-1';
?>

<section class="blog-post">
	
	<?php get_template_part('inc/content-format', get_post_format()); ?>
	
	<div class="container">
	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			
				<div class="row">
				
					<div class="<?php echo esc_attr($class); ?> post-content">
						<?php
							the_content();
							wp_link_pages();
							the_tags('<div class="the-tags">',', ','</div>');
						?>
					</div>
					
					<?php 
						if( $sidebar )
							get_sidebar(); 
					?>
					
					<div class="col-sm-12">
						<hr />
					</div>
					
				</div>
				
				<?php
					if( 'yes' == get_option('single_related', 'yes') )
						get_template_part('inc/content-post', 'related'); 
				?>
				
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php 	
							if( 'yes' == get_option('single_sharing', 'yes') )
								get_template_part('inc/content-post', 'sharing'); 
							
							if( comments_open() )
								comments_template();
						?>
					</div>
				</div>
				
			</div>
		</div><!--end of row-->
		
	</div><!--end of container-->
</section>

<?php 
	if( 'yes' == get_option('post_single_nav', 'yes') )
		get_template_part('inc/content-post','nav');
		
	get_footer();