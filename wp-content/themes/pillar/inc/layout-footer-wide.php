<?php 
	$protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype'); 
	$logo = get_option('alt_footer_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png'); 
?>

<footer class="footer-3 bg--white text-center-xs">

	<div class="col-sm-3">
		<img alt="logo" class="logo" src="<?php echo esc_url($logo); ?>" />
		<a href="mailto: <?php echo wp_kses_post(get_option('pillar_header_email', 'hello@pillar.net')); ?>" class="type--underline"><?php echo wp_kses_post(get_option('pillar_header_email', 'hello@pillar.net')); ?></a>
	</div>
	
	<div class="col-sm-6 text-center">
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
	
	<div class="col-sm-3 text-right text-center-xs">
	
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
		
		<span class="type--fine-print">
			<?php echo wp_kses_post(get_option('copyright', 'Modify this text from "appearance => customise"')); ?>
		</span>
		
	</div>

</footer>