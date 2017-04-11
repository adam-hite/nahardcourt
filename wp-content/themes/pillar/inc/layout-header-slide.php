<?php 
	$protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype');
	$logo_light = get_option('custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png');
?>

<nav>

    <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
        <?php get_template_part('inc/content-header', 'logo'); ?>
    </div>

    <div class="nav-mobile-toggle" data-modal-id data-notification-link="nav-slide">
        <i class="icon-Align-Right pillar--icon icon--sm"></i>
        <span class="h6"><?php esc_html_e('Menu', 'pillar'); ?></span>
    </div>
    
</nav>

<div class="notification pos-right pos-top nav-slide text-center col-sm-6 col-xs-12 bg--dark" data-notification-link="nav-slide" data-animation="from-right">
	<div class="nav-slide__content">
	
		<div class="pos-vertical-center">
		
			<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
				<img alt="logo" src="<?php echo esc_url($logo_light); ?>" />
			</a>
			
			<?php  
				if ( has_nav_menu( 'offscreen' ) ){
				    wp_nav_menu( 
				    	array(
					        'theme_location'    => 'offscreen',
					        'depth'             => 1,
					        'container'         => false,
					        'container_class'   => false,
					        'menu_class'        => 'menu'
				        )
				    ); 
				}
			?>
			
		</div>
	
		<div class="pos-absolute pos-bottom">
			<ul class="social-list">
				<?php 
					for( $i = 1; $i < 5; $i++ ){
						if( get_option("header_social_url_$i") ) {
							echo '<li>
								      <a href="' . esc_url(get_option("header_social_url_$i"), $protocols) . '" target="_blank">
									      <i class="' . esc_attr(get_option("header_social_icon_$i")) . '"></i>
								      </a>
								  </li>';
						}
					} 
				?>
			</ul>
			<span class="type--fine-print"><?php echo wp_kses_post(get_option('copyright', 'Modify this text from "appearance => customise"')); ?></span>
		</div>
		
	</div>
</div>