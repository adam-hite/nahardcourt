<nav class="transition--fade">
	
	<?php get_template_part('inc/content-header', 'utility'); ?>
	
    <div class="nav-bar centered-inline" data-fixed-at="200">
    	<div class="container">
		<?php 
			$logo = get_option('custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png'); 
			$logo_light = get_option('custom_logo_light', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png');
		?>
		
		<div class="nav-module logo-module">
		    <a href="<?php echo esc_url(home_url('/')); ?>">
		    	<img class="logo logo-dark" alt="logo" src="<?php echo esc_url($logo); ?>" />
		    	<img class="logo logo-light" alt="logo" src="<?php echo esc_url($logo_light); ?>" />
		    </a>
		</div>
			        
        <div class="nav-module menu-module">
            <?php  
            	if ( has_nav_menu( 'primary' ) ){
            	    wp_nav_menu( 
            	    	array(
            		        'theme_location'    => 'primary',
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
	    </div>
    </div><!--end nav bar-->
    
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right pillar--icon icon--sm"></i>
    </div>

</nav>