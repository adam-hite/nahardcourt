<?php 
	$protocols = array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype');
?>

<nav>
    <div class="nav-bar nav--absolute nav--transparent" data-fixed-at="200">
        <?php get_template_part('inc/content-header', 'logo'); ?>
    </div>
    <!--end nav bar-->
    <div class="nav-mobile-toggle modal-trigger" data-modal-id="nav-offscreen">
        <i class="icon-Align-Right icon--pillar icon--sm"></i>
        <span class="h6"><?php esc_html_e('Menu', 'pillar'); ?></span>
    </div>
</nav>

<div class="modal-container nav-modal" data-modal-id="nav-offscreen">
  <div class="modal-content bg--dark" data-width="100%" data-height="100%">
    <div class="pos-vertical-center">
      <div class="col-md-6 col-md-offset-3 text-center offscreen-menu">
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
    </div>
    <div class="col-xs-12 text-center pos-absolute pos-bottom">
        <ul class="social-list">
        	<?php 
        		for( $i = 1; $i < 5; $i++ ){
        			if( get_option("header_social_url_$i") ) {
        				echo '<li>
        					      <a href="' . esc_url(get_option("header_social_url_$i"), $protocols) . '" target="_blank">
        						      <i class="' . get_option("header_social_icon_$i") . '"></i>
        					      </a>
        					  </li>';
        			}
        		} 
        	?>
        </ul>
    </div>
  </div><!--end of modal-content-->
</div><!--end of modal-container-->