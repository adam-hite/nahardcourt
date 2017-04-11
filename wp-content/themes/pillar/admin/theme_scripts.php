<?php 

/**
 * Here is all the custom colours for the theme.
 * $handle is a reference to the handle used with wp_enqueue_style()
 */	
if (class_exists('WPLessPlugin')){

    $less = WPLessPlugin::getInstance();
	
    $less->setVariables(
    	array(
	        'color-bg-site'          => get_option('background_color', '#F8F8F8'),
	        'color-primary'          => get_option('color_primary', '#425cbb'),
	        'color-primary-1'        => get_option('color_primary_1', '#7cc36a'),
	        'color-primary-2'        => get_option('color_primary_2', '#d14b4b'),
	        'color-primary-3'        => get_option('color_primary_3', '#6c9a81'),
	        'color-dark'             => get_option('color_dark', '#232323'),
	        'color-bg-secondary'     => get_option('color_bg_secondary', '#F4F4F4'),
	        'color-on-dark'          => get_option('color_on_dark', '#f5f5f5'),
	        'color-body'             => get_option('color_body', '#767676'),
	        'color-heading'          => get_option('color_heading', '#343434'),
	        'navbar-height'          => get_option('nav_height', '65') . 'px',
	        'nav-logo-size'          => get_option('logo_height', '45') . '%',
	        'wordpress-base-size'           => get_option('pillar_base_size', '16'),
	        'wordpress-base-size-mobile'    => get_option('pillar_base_size_mobile', '14'),
	        'wordpress-base-size-px'        => get_option('pillar_base_size', '16') . 'px',
	        'wordpress-base-size-mobile-px' => get_option('pillar_base_size_mobile', '14') . 'px',
	        'h1-size'                => get_option('pillar_h1_size', '4em'),
	        'h2-size'                => get_option('pillar_h2_size', '2.8125em'),
	        'h3-size'                => get_option('pillar_h3_size', '2em'),
	        'h4-size'                => get_option('pillar_h4_size', '1.4375em'),
	        'h5-size'                => get_option('pillar_h5_size', '1em'),
	        'h6-size'                => get_option('pillar_h6_size', '0.625em'),
	        'base-line-height'       => get_option('pillar_base_line_height', '1.625em'),
	        'h1-line-height'         => get_option('pillar_h1_line_height', '1.015625em'),
	        'h2-line-height'         => get_option('pillar_h2_line_height', '1.15555555555556em'),
	        'h3-line-height'         => get_option('pillar_h3_line_height', '1.421875em'),
	        'h4-line-height'         => get_option('pillar_h4_line_height', '1.41304347826087em'),
	        'h6-line-height'         => get_option('pillar_h6_line_height', '2.6em'),
	        'p-lead-size'            => get_option('pillar_p_lead_size', '1.4375em'),
	        'p-lead-line-height'     => get_option('pillar_p_lead_line_height', '1.69565217391304em'),
	        'fine-print-size'        => get_option('pillar_fine_size', '0.6875em'),
	        'ul-line-height'         => get_option('pillar_ul_line_height', '2.34375em'),
	        'body-font'              => get_option('pillar_body_font', 'Lora'),
	        'heading-font'           => get_option('pillar_heading_font', 'Montserrat'),
	        'button-font'            => get_option('pillar_button_font', 'Montserrat'),
	        'nav-item-font'          => get_option('pillar_nav_font', 'Montserrat'),
	        'heading-weight'         => get_option('pillar_heading_weight', '600'),
	        'body-font-weight'       => get_option('pillar_body_weight', '400'),
	        'strong-font-weight'     => get_option('pillar_strong_weight', '600'),
	        'button-radius'          => get_option('pillar_button_border_radius', '100px'),
	        'border-width'           => get_option('pillar_button_border_width', '2px'),
	        'button-font-weight'     => get_option('pillar_button_font_weight', '400'),
	        'nav-item-font-size'     => get_option('pillar_nav_font_size', '11px'),
	        'nav-item-font-weight'   => get_option('pillar_nav_font_weight', '400'),
	        'nav-item-letter-spacing' => get_option('pillar_nav_letter_spacing', '0px'),
	        'input-label-font-size'   => get_option('pillar_label_font_size', '1em'),
	        'input-label-font-weight' => get_option('pillar_label_font_weight', '400'),
	        'input-border-radius'     => get_option('pillar_input_border_radius', '50px'),
	        'input-placeholder-size'  => get_option('pillar_input_font_size', '1em'),
	        'checkbox-border-radius'  => get_option('pillar_checkbox_border_radius', '50%'),
	        'checkbox-padding'        => get_option('pillar_checkbox_padding', '0'),
	        'radio-border-radius'     => get_option('pillar_radio_border_radius', '50%'),
	        'radio-padding'           => get_option('pillar_radio_padding', '0'),
	        'nav-uppercase-menu'      => get_option('pillar_nav_uppercase', 'true')
    	)
    );
    
}

/*
Register Fonts
*/
if(!( function_exists('ebor_fonts_url') )){
	function ebor_fonts_url(){
	    $font_url = '';
	    
	    /*
	    	Translators: If there are characters in your language that are not supported
	   		by chosen font(s), translate this to 'off'. Do not translate into your own language.
	     */
	    if ( 'off' !== _x( 'on', 'Google font: on or off', 'pillar' ) ) {
	        $font_url = add_query_arg( 'family', urlencode( get_option('pillar_google_font_string','Lora:400,400italic,700|Montserrat:400,700') ), "//fonts.googleapis.com/css" );
	    }
	    return $font_url;
	}
}

/**
 * Ebor Load Scripts
 * Properly Enqueues Scripts & Styles for the theme
 * @since version 1.0
 * @author TommusRhodus
 */ 
if(!( function_exists('ebor_load_scripts') )){
	function ebor_load_scripts() {
			
		//Enqueue Styles
		$extension = ( class_exists('WPLessPlugin') ) ? '.less' : '.css';
		wp_enqueue_style( 'ebor-google-font', ebor_fonts_url(), array(), '1.0.0' );
		wp_enqueue_style( 'bootstrap', EBOR_THEME_DIRECTORY . 'style/css/bootstrap.css' );
		wp_enqueue_style( 'ebor-fonts', EBOR_THEME_DIRECTORY . 'style/css/icons.css' );	
		wp_enqueue_style( 'ebor-plugins', EBOR_THEME_DIRECTORY . 'style/css/plugins.css' );	
		wp_enqueue_style( 'ebor-theme-styles', EBOR_THEME_DIRECTORY . 'style/css/theme' . $extension );
		wp_enqueue_style( 'ebor-style', get_stylesheet_uri() );
		
		//Enqueue Scripts
		if( 'yes' == get_option('pillar_use_parallax', 'yes') ){
			wp_enqueue_script( 'ebor-parallax', EBOR_THEME_DIRECTORY . 'style/js/parallax.js', array('jquery'), false, true  );
		}
		wp_enqueue_script( 'ebor-plugins', EBOR_THEME_DIRECTORY . 'style/js/plugins.js', array('jquery'), false, true  );
		wp_enqueue_script( 'ebor-scripts', EBOR_THEME_DIRECTORY . 'style/js/scripts.js', array('jquery'), false, true  );
		
		//Enqueue Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		$custom_css = false;
		
		//Nav links right
		if( 'yes' == get_option('nav_right', 'no') ){
			$custom_css .= '
				@media all and (min-width: 992px){
					.nav-float-right {
						float: right;
					}
					.nav-module:last-child {
						padding-right: 30px;	
					}
				}
			';	
		}
		
		//Mobile parallax
		if( 'no' == get_option('mobile_parallax', 'no') ){
			$custom_css .= '
				@media all and (max-width: 1024px) {
				  .parallax > .background-image-holder,
				  .parallax .slides li > .background-image-holder {
				    top: 0 !important;
				    transform: none !important;
				    -webkit-transform: none !important;
				    height: 100%;
				  }
				}
			';
		}
		
		//Maximize content width
		if( 'yes' == get_option('maximize_content', 'no') ){
			$custom_css .= '
				.single-post .col-sm-10.col-sm-offset-1,
				.single-post .col-md-10.col-md-offset-1,
				.single-portfolio .col-sm-10.col-sm-offset-1,
				.single-portfolio .col-md-10.col-md-offset-1,
				.single-team .col-sm-10.col-sm-offset-1,
				.single-team .col-md-10.col-md-offset-1,
				.single-product .col-md-8.col-md-offset-2.col-sm-12.col-sm-offset-0 {
					margin-left: 0px;
					width: 100%;
				}
				.single-product .tabs-container.tabs-2 {
					max-width: none;	
				}
			';
		}
		
		//Masonry shop prices always shown
		if( 'yes' == get_option('masonry_shop_prices', 'no') ){
			$custom_css .= '
				.shop-item-1 .shop-item__price.hover--reveal {
				  opacity: 1;
				  transform: translate3d(0, 0, 0);
				  -webkit-transform: translate3d(0, 0, 0);
				}
			';
		}
		
		//Nav max width
		if( 'yes' == get_option('nav_max_width', 'no') ){
			$custom_css .= '
				.nav-inner {
					max-width: 1170px;
					margin: 0 auto;	
				}
				.nav-bar { padding-left: 15px; }
			';
		}
		
		if( get_header_image() ){
			$custom_css .= '
				.nav-bar {
					background: url('. get_header_image() .') !important;	
					background-position: center center !important;
					background-repeat: no-repeat !important;
					background-size: cover !important;
				}
			';
		}
		
		$custom_css .= get_option('custom_css');
		
		//Add custom CSS ability
		wp_add_inline_style( 'ebor-style', $custom_css );
		
		/**
		 * localize script
		 */
		$script_data = array( 
			'slider_animation'          => get_option('slider_animation', 'slide')
		);
		wp_localize_script( 'ebor-scripts', 'wp_data', $script_data );
		
	}
	add_action('wp_enqueue_scripts', 'ebor_load_scripts', 110);
}

/**
 * Ebor Load Admin Scripts
 * Properly Enqueues Scripts & Styles for the theme
 * 
 * @since version 1.0
 * @author TommusRhodus
 */
if(!( function_exists('ebor_admin_load_scripts') )){
	function ebor_admin_load_scripts(){
		wp_enqueue_style( 'ebor-theme-admin-css', EBOR_THEME_DIRECTORY . 'admin/ebor-theme-admin.css' );
		wp_enqueue_style( 'ebor-fonts', EBOR_THEME_DIRECTORY . 'style/css/icons.css' );	
		wp_enqueue_script( 'ebor-theme-admin-js', EBOR_THEME_DIRECTORY . 'admin/ebor-theme-admin.js', array('jquery'), false, true  );
	}
	add_action('admin_enqueue_scripts', 'ebor_admin_load_scripts', 200);
}