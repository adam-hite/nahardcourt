<?php 
	$logo = get_option('custom_logo', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png'); 
	$header_button_url = get_option('cta_url', '#');
	$header_button = get_option('cta_text', 'Login');
?>

<nav class="transition--fade">

     <?php get_template_part('inc/content-header', 'utility'); ?>

    <div class="container nav-stack">
        <div class="row">
            <div class="nav-stack__upper">
            
                <div class="col-xs-6">
            	    <a href="<?php echo esc_url(home_url('/')); ?>">
            	    	<img class="logo logo-dark" alt="logo" src="<?php echo esc_url($logo); ?>" />
            	    </a>
                </div>
                
                <?php if( $header_button_url && $header_button ) : ?>
	                <div class="col-xs-6 text-right">
	                    <a href="<?php echo esc_url($header_button_url); ?>" class="btn btn--sm btn--square">
	                        <span class="btn__text"><?php echo esc_html($header_button); ?></span>
	                    </a>
	                </div>
                <?php endif; ?>
                
            </div>
        </div><!--end of row-->
        <div class="row">
            <div class="col-sm-12">
	        	<div class="nav-bar">
	        		
	        		<?php get_template_part('inc/content-header', 'logo'); ?>
	        	    
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
	        	    
	        	</div><!--end nav bar-->
	        	
	        	<div class="nav-mobile-toggle visible-sm visible-xs">
	        	    <i class="icon-Align-Right pillar--icon icon--sm"></i>
	        	</div>
	        	
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</nav>