<?php $icons = get_post_meta( $post->ID, '_ebor_team_social_icons', true ); ?>

<div class="col-md-3 col-sm-6 masonry__item">
	<div class="hover-element member member-2" data-title-position="center,center">
		<div class="hover-element__initial">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<div class="hover-element__reveal" data-overlay="9">
		
			<div class="boxed">
				<?php the_title('<a href="'. get_permalink() .'"><h6>'. get_post_meta($post->ID, '_ebor_the_job_title', 1) .'</h6><h5>', '</h5></a>'); ?>
			</div>
			
			<?php if( is_array($icons) ) : ?>
				<ul class="social-list pos-absolute pos-bottom">
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
	</div><!--end hover element-->
</div>