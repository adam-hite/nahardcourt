<?php 
	$protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype');
	$logo_light = get_option('custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png');
?>

<div class="notification pos-left pos-top nav-slide text-center col-sm-6 col-xs-12 notification--reveal left-vertical-nav bg--dark" data-notification-link="nav-slide" data-animation="from-left">
		
	<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
		<img alt="logo" src="<?php echo esc_url($logo_light); ?>" />
	</a>
	
	<?php  
		if ( has_nav_menu( 'left-vertical' ) ){
		    wp_nav_menu( 
		    	array(
			        'theme_location'    => 'left-vertical',
			        'depth'             => 3,
			        'container'         => false,
			        'container_class'   => false,
			        'menu_class'        => 'menu',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			        'walker'            => new ebor_framework_medium_rare_bootstrap_navwalker()
		        )
		    ); 
		} else {
			echo '<ul class="menu"><li><a href="'. admin_url('nav-menus.php') .'">Set up a navigation menu now</a></li></ul>';
		}

		get_template_part('inc/content-header', 'cart-icon');
		get_template_part('inc/content-header', 'search-icon');
	?>

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

<nav class="transition--fade bg--dark">

    <div class="nav-bar" data-fixed-at="200">
    	
    	<?php get_template_part('inc/content-header', 'logo'); ?>
    	
    	<div class="nav-float-right">
        
	        <div class="nav-module menu-module left">
	            <?php  
	            	if ( has_nav_menu( 'left-vertical' ) ){
	            	    wp_nav_menu( 
	            	    	array(
	            		        'theme_location'    => 'left-vertical',
	            		        'depth'             => 3,
	            		        'container'         => false,
	            		        'container_class'   => false,
	            		        'menu_class'        => 'menu',
	            		        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	            		        'walker'            => new ebor_framework_medium_rare_bootstrap_navwalker()
	            	        )
	            	    ); 
	            	} else {
	            		echo '<ul class="menu"><li><a href="'. admin_url('nav-menus.php') .'">Set up a navigation menu now</a></li></ul>';
	            	}
	            ?>
	        </div><!--end nav module-->
	        
	        <?php 
	        	get_template_part('inc/content-header', 'cart-icon');
	        	get_template_part('inc/content-header', 'search-icon');
	        ?>
        
        </div>
        
    </div><!--end nav bar-->
    
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right pillar--icon icon--sm"></i>
    </div>
    
</nav>