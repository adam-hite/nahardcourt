<?php $protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype'); ?>

<footer class="bg--dark footer-1 text-center-xs">
	<div class="container">
	
		<?php get_template_part('inc/content-footer', 'widgets'); ?>
		
		<div class="row footer__lower text-center-xs">
		
			<div class="col-sm-12">
				<hr>
			</div>
			
			<div class="col-sm-6">
				<span class="type--fine-print">
					<?php echo wp_kses_post(get_option('copyright', 'Modify this text from "appearance => customise"')); ?>
				</span>
			</div>
			
			<div class="col-sm-6 text-right text-center-xs">
				<ul class="social-list">
					<?php 
						for( $i = 1; $i < 5; $i++ ){
							if( get_option("footer_social_url_$i") ) {
								echo '<li>
									      <a href="' . esc_url(get_option("footer_social_url_$i"), $protocols) . '" target="_blank">
										      <i class="' . esc_attr(get_option("footer_social_icon_$i")) . '"></i>
									      </a>
									  </li>';
							}
						} 
					?>
				</ul>
			</div>
		
		</div>
	
	</div>
</footer> 