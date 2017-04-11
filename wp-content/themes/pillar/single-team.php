<?php 
	get_header();
	the_post();
	
	$class = ( false ) ? 'col-sm-8' : 'col-sm-10 col-sm-offset-1';
	$icons = get_post_meta( $post->ID, '_ebor_team_social_icons', true );
?>

<section class="blog-post">
	
	<div class="blog-post__title bg--secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
					<?php the_title('<h1 class="h2">', '</h1><h6>'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</h6>'); ?>
					<?php if( is_array($icons) ) : ?>
						<ul class="social-list">
							<?php 
								foreach( $icons as $key => $icon ){
									if(!( isset( $icon['_ebor_social_icon_url'] ) ))
										continue;
										
									echo '<li><a href="'. $icon['_ebor_social_icon_url'] .'" target="_blank"><i class="'. $icon['_ebor_social_icon'] .'"></i></a></li>';
								}
							?>
						</ul>	
					<?php endif; ?>
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</div>
	
	<?php if( has_post_thumbnail() ) : ?>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 text-center">
					<?php the_post_thumbnail('large', array('class' => 'blog-post__hero box-shadow')); ?>
				</div>
			</div><!--end of row-->
		</div>
	
	<?php endif; ?>
	
	<div class="container">
	
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			
				<div class="row">
				
					<div class="<?php echo esc_attr($class); ?> post-content">
						<?php
							the_content();
							wp_link_pages();
						?>
					</div>
					
					<div class="col-sm-12">
						<hr />
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<?php 	
							if( 'yes' == get_option('single_sharing', 'yes') )
								get_template_part('inc/content-post', 'sharing'); 
						?>
					</div>
				</div>
				
			</div>
		</div><!--end of row-->
		
	</div><!--end of container-->
</section>

<?php 
	get_template_part('inc/content-team','nav');
	
	get_footer();