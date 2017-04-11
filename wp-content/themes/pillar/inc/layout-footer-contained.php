<?php $protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype'); ?>

<footer class="footer-2 text-center-xs bg--white">
	<div class="container">
	
		<div class="row">
		
			<div class="col-sm-8">
				<?php  
					if ( has_nav_menu( 'footer' ) ){
					    wp_nav_menu( 
					    	array(
						        'theme_location'    => 'footer',
						        'depth'             => 1,
						        'container'         => false,
						        'container_class'   => false,
						        'menu_class'        => 'footer__navigation'
					        )
					    ); 
					}
				?>
			</div>
			
			<div class="col-sm-4 text-right text-center-xs">
				<ul class="social-list">
					<?php 
						for( $i = 1; $i < 5; $i++ ){
							if( get_option("footer_social_url_$i") ) {
								echo '<li>
									      <a href="' . esc_url(get_option("footer_social_url_$i"), $protocols) . '" target="_blank">
										      <i class="' . get_option("footer_social_icon_$i") . '"></i>
									      </a>
									  </li>';
							}
						} 
					?>
				</ul>
			</div>
		
		</div><!--end row-->
		
		<div class="row">
			<div class="col-sm-12">
				<a href="mailto: <?php echo wp_kses_post(get_option('pillar_header_email', 'hello@pillar.net')); ?>" class="type--underline"><?php echo wp_kses_post(get_option('pillar_header_email', 'hello@pillar.net')); ?></a>
			</div>
		</div><!--end row-->
		
		<div class="row">
			<div class="col-sm-12">
				<div class="footer__lower">
					<span class="type--fine-print">
						<?php echo wp_kses_post(get_option('copyright', 'Modify this text from "appearance => customise"')); ?>
					</span>
				</div>
			</div>
		</div><!--end row-->
		
	</div><!--end container-->
</footer>