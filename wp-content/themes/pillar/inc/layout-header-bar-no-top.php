<nav class="transition--fade">
	
    <div class="nav-bar" data-fixed-at="200">
    	<div class="nav-inner">
    	
	    	<?php get_template_part('inc/content-header', 'logo'); ?>
	        
	        <div class="nav-float-right">
	        
		        <div class="nav-module menu-module left">
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
		        
		        <?php 
		        	if( 'yes' == get_option('main_nav_social', 'no') ){
		        		get_template_part('inc/content-header', 'social-icons');
		        	}
		        	
		        	get_template_part('inc/content-header', 'cart-icon');
		        	get_template_part('inc/content-header', 'search-icon');
		        ?>
	        
	        </div>
        
        </div>
    </div><!--end nav bar-->
    
    <div class="nav-mobile-toggle visible-sm visible-xs">
        <i class="icon-Align-Right pillar--icon icon--sm"></i>
    </div>

</nav>