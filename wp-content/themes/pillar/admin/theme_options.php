<?php 

/**
 * Build theme options
 * Uses the Ebor_Options class found in the ebor-framework plugin
 * Panels are WP 4.0+!!!
 * 
 * @since 1.0.0
 * @author tommusrhodus
 */
if( class_exists('Ebor_Options') ){
	$ebor_options = new Ebor_Options;
	
	/**
	 * Variables
	 */
	$theme = wp_get_theme();
	$theme_name = $theme->get( 'Name' );
	$footer_default = 'Modify this text from "appearance => customise"';
	$footer_layouts = ebor_get_footer_options();
	$header_layouts = ebor_get_header_options();
	$team_layouts = array_flip(ebor_get_team_layouts());
	$blog_layouts = array_flip(ebor_get_blog_layouts());
	$portfolio_layouts = array_flip(ebor_get_portfolio_layouts());
	$post_types = get_post_types();
	
	$shop_archive_layouts = array_flip(ebor_get_shop_layouts());
	$shop_post_layouts = array(
		'centered' => 'Centered',
		'centered-sidebar' => 'Centered & Sidebar',
		'image' => 'Image Header',
		'vanilla' => 'Vanilla Layout'
	);
	
	$site_layouts = array(
		'normal-layout' => 'Full Width',
		'boxed-layout' => 'Boxed'	
	);
	
	$portfolio_columns = array(
		'col-md-6' => '2 Columns',
		'col-md-4' => '3 Columns',
		'col-md-3' => '4 Columns'	
	);
	
	$social_options = ebor_get_icons();
	$prefixes = array('socicon-','icon-');
	foreach( $social_options as $social ){
		$new_social_options[$social] = ucfirst(str_replace($prefixes, '', $social));	
	}
	asort($new_social_options);
	
	/**
	 * Default stuff
	 * 
	 * Each of these is a default option that appears in each theme, demo data, favicons and a custom css input
	 * 
	 * @since 1.0.0
	 * @author tommusrhodus
	 */
	$ebor_options->add_panel( $theme_name . ': Demo Data', 5, '');
	$ebor_options->add_panel( $theme_name . ': Styling Settings', 205, 'All of the controls in this section directly relate to the styling page of ' . $theme_name);
	$ebor_options->add_section('demo_data_section', 'Import Demo Data', 10, $theme_name . ': Demo Data', '<strong>Please read this before importing demo data via this control:</strong><br /><br />The demo data this will install includes images from my demo site with <strong>heavy blurring applied</strong> this is due to licensing restrictions. Simply replace these images with your own.<br /><br />Note that this process can take up to 15mins on slower servers, go make a cup of tea. If you havn\'t had a notification in 30mins, use the fallback method outlined in the written documentation.<br /><br />');
	$ebor_options->add_section('custom_css_section', 'Custom CSS', 40, $theme_name . ': Styling Settings');
	$ebor_options->add_setting('demo_import', 'demo_import', 'Import Demo Data', 'demo_data_section', '', 10);
	$ebor_options->add_setting('textarea', 'custom_css', 'Custom CSS', 'custom_css_section', '', 30);
	
	/**
	 * Panels
	 * 
	 * add_panel($name, $priority, $description)
	 * 
	 * @since 1.0.0
	 * @author tommusrhodus
	 */
	$ebor_options->add_panel( $theme_name . ': Site Settings', 210, 'All of the controls in this section directly relate to the site settings of ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Header Settings', 215, 'All of the controls in this section directly relate to the header and logos of ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Blog Settings', 225, 'All of the controls in this section directly relate to the control of blog items within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Portfolio Settings', 230, 'All of the controls in this section directly relate to the control of portfolio items within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Team Settings', 235, 'All of the controls in this section directly relate to the control of team items within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Testimonial Settings', 237, 'All of the controls in this section directly relate to the control of testimonial items within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Shop Settings', 240, 'All of the controls in this section directly relate to the control of shop items within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Search Results Settings', 242, 'All of the controls in this section directly relate to the control of search results within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Footer Settings', 290, 'All of the controls in this section directly relate to the control of the footer within ' . $theme_name);
	$ebor_options->add_panel( $theme_name . ': Visual Composer Settings', 295, 'All of the controls in this section directly relate to the control of visual composer within ' . $theme_name);
	
	/**
	 * Sections
	 * 
	 * add_section($name, $title, $priority, $panel, $description)
	 * 
	 * @since 1.0.0
	 * @author tommusrhodus
	 */
	//Styling
	$ebor_options->add_section('buttons_section', 'Buttons', 5, $theme_name . ': Styling Settings');
	
	$ebor_options->add_section('site_layout_section', 'Site Layout', 10, $theme_name . ': Site Settings');
	$ebor_options->add_section('site_settings_section', 'Site Settings', 15, $theme_name . ': Site Settings');
	
	//Blog Sections
	$ebor_options->add_section('blog_settings', 'Blog Settings', 1, $theme_name . ': Blog Settings');
	
	//Blog Title
	$ebor_options->add_section('blog_title_section', 'Blog Title Bar', 15, $theme_name . ': Blog Settings');
	$ebor_options->add_setting('input', 'blog_title', 'Blog Title', 'blog_title_section', 'Our Journal', 10);
	$ebor_options->add_setting('input', 'blog_subtitle', 'Blog Subtitle', 'blog_title_section', 'The blog subtitle', 15);
	
	//portfolio Title
	$ebor_options->add_section('portfolio_title_section', 'Portfolio Title Bar', 15, $theme_name . ': Portfolio Settings');
	$ebor_options->add_setting('input', 'portfolio_title', 'Portfolio Title', 'portfolio_title_section', 'Our Portfolio', 10);
	$ebor_options->add_setting('input', 'portfolio_subtitle', 'Portfolio Subtitle', 'portfolio_title_section', 'The portfolio subtitle', 15);
	$ebor_options->add_setting('image', 'pillar_portfolio_header_image', 'Portfolio Header Background', 'portfolio_title_section', '', 20);
	
	//team Title
	$ebor_options->add_section('team_title_section', 'Team Title Bar', 15, $theme_name . ': Team Settings');
	$ebor_options->add_setting('input', 'team_title', 'Team Title', 'team_title_section', 'Our Team', 10);
	$ebor_options->add_setting('input', 'team_subtitle', 'Team Subtitle', 'team_title_section', 'The team subtitle', 15);
	$ebor_options->add_setting('image', 'pillar_team_header_image', 'Team Header Background', 'team_title_section', '', 20);
	
	//shop Title
	$ebor_options->add_section('shop_title_section', 'Shop Title Bar', 15, $theme_name . ': Shop Settings');
	$ebor_options->add_setting('input', 'shop_title', 'Shop Title', 'shop_title_section', 'Our Shop', 10);
	$ebor_options->add_setting('input', 'shop_subtitle', 'Shop Subtitle', 'shop_title_section', 'The shop subtitle', 15);
	$ebor_options->add_setting('image', 'pillar_shop_header_image', 'Shop Header Background', 'shop_title_section', '', 20);
	
	//Shop Sections
	$ebor_options->add_section('shop_layout_section', 'Shop Layouts', 10, $theme_name . ': Shop Settings');
	
	//Portfolio Sections
	$ebor_options->add_section('portfolio_text_section', 'Portfolio Settings', 15, $theme_name . ': Portfolio Settings', '<code>Please Note:</code> The "Portfolio Layouts Columns" option does not affect all portfolio layouts. If your layout is unaffected it is because currently, it does not support this option.');
	$ebor_options->add_section('team_text_section', 'Team Settings', 10, $theme_name . ': Team Settings');
	$ebor_options->add_section('blog_text_section', 'Blog Settings', 5, $theme_name . ': Blog Settings');
	
	$ebor_options->add_section('testimonial_section', 'Testimonials Settings', 15, $theme_name . ': Testimonial Settings');

	$ebor_options->add_section('search_results_section', 'Search Results Settings', 15, $theme_name . ': Search Results Settings');
	
	//Header Settings
	$ebor_options->add_section('logo_settings_section', 'Logo Settings', 10, $theme_name . ': Header Settings');
	$ebor_options->add_section('footer_social_settings_section', 'Footer Icons Settings', 40, $theme_name . ': Footer Settings', '');
	$ebor_options->add_section('header_layout_section', 'Header Layout', 5, $theme_name . ': Header Settings', 'This setting controls the theme header site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.');
	$ebor_options->add_section('sub_header_layout_section', 'Sub Header Settings', 10, $theme_name . ': Header Settings', 'This setting controls the theme header site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.');
	
	//Footer Settings
	$ebor_options->add_section('footer_layout_section', 'Footer Layout', 5, $theme_name . ': Footer Settings', 'This setting controls the theme footer site-wide. If you need to you can override this setting on specific posts and pages from within that posts edit screen.');
	$ebor_options->add_section('subfooter_settings_section', 'Sub-Footer Settings', 30, $theme_name . ': Footer Settings');
	$ebor_options->add_section('footer_social_settings_section', 'Footer Icons Settings', 40, $theme_name . ': Footer Settings', 'These social icons are only shown in certain footer layouts.');

	
	//Visual Composer 
	$ebor_options->add_section('visual_composer_section', 'Visual Composer Settings', 10, $theme_name . ': Visual Composer Settings');
	
	/**
	 * Settings (The Actual Options)
	 * Repeated settings are stepped using a for() loop and counter
	 * 
	 * add_setting($type, $option, $title, $section, $default, $priority, $select_options)
	 * 
	 * @since 1.0.0
	 * @author tommusrhodus
	 */
	//Visual Composer
	$ebor_options->add_setting('select', 'pillar_vc_redirect_post', 'Redirect standard template for posts?', 'visual_composer_section', 'yes', 5, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_vc_redirect_portfolio', 'Redirect standard template for portfolio posts?', 'visual_composer_section', 'yes', 10, array('yes' => 'Yes', 'no' => 'No')); 
	$ebor_options->add_setting('select', 'pillar_vc_redirect_team', 'Redirect standard template for team posts?', 'visual_composer_section', 'yes', 15, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_vc_redirect_page', 'Redirect standard template for pages?', 'visual_composer_section', 'yes', 20, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_vc_redirect_product', 'Redirect standard template for products?', 'visual_composer_section', 'yes', 25, array('yes' => 'Yes', 'no' => 'No'));
	
	//site Settings
	$ebor_options->add_setting('select', 'pillar_use_parallax', 'Use Parallax Images? Yes means you get parallax background images, but also smooth scrolling. No means that parallax scrolling images will be disabled, but normal window scrolling will return.', 'site_settings_section', 'yes', 5, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'mobile_parallax', 'Enable Parallax on Mobile?', 'site_settings_section', 'no', 35, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'maximize_content', 'Maximize width of all content areas? (1200px)', 'site_settings_section', 'no', 35, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'disable_loader', 'Turn off site preloader?', 'site_settings_section', 'no', 35, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'animated_masonry', 'Turn off masonry animations?', 'site_settings_section', 'masonry--animate', 40, array('masonry--animate--off' => 'Yes', 'masonry--animate' => 'No'));
	$ebor_options->add_setting('select', 'slider_animation', 'Animation of sliders', 'site_settings_section', 'slide', 45, array('slide' => 'Slide', 'fade' => 'Fade'));
	
	//Buttons
	$ebor_options->add_setting('select', 'button_style', 'Button Style - Note: enabling rounded buttons does not affect tabs, accorions etc (certain element will remain regular by design)', 'buttons_section', 'btn-regular', 45, array('btn-regular' => 'Regular Buttons', 'theme--square' => 'Square Buttons'));

	//Colour Options
	$ebor_options->add_setting('color', 'color_primary', 'Primary Colour', 'colors', '#425cbb', 5);
	$ebor_options->add_setting('color', 'color_primary_1', 'Primary Colour 1', 'colors', '#7cc36a', 10);
	$ebor_options->add_setting('color', 'color_primary_2', 'Primary Colour 2', 'colors', '#d14b4b', 15);
	$ebor_options->add_setting('color', 'color_primary_3', 'Primary Colour 3', 'colors', '#6c9a81', 17);
	$ebor_options->add_setting('color', 'color_dark', 'Dark Colour', 'colors', '#232323', 20);
	$ebor_options->add_setting('color', 'color_bg_secondary', 'Secondary Colour', 'colors', '#F4F4F4', 25);
	$ebor_options->add_setting('color', 'color_on_dark', 'Primary Colour on Dark', 'colors', '#f5f5f5', 30);
	$ebor_options->add_setting('color', 'color_body', 'Body Text', 'colors', '#767676', 35);
	$ebor_options->add_setting('color', 'color_heading', 'Headings Text', 'colors', '#343434', 40);

	//Portfolio options
	$ebor_options->add_setting('select', 'portfolio_layout', 'Portfolio Archives Layout', 'portfolio_text_section', 'cards-small', 30, $portfolio_layouts);
	$ebor_options->add_setting('select', 'pillar_portfolio_columns', 'Portfolio Layouts Columns', 'portfolio_text_section', 'col-md-6', 31, $portfolio_columns);
	$ebor_options->add_setting('input', 'portfolio_all', 'Portfolio Filters "All"', 'portfolio_text_section', 'All', 10);
	$ebor_options->add_setting('select', 'portfolio_single_sharing', 'Show Sharing Buttons on Single Portfolio Post?', 'portfolio_text_section', 'yes', 40, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'portfolio_single_related', 'Show Related Posts on Single Portfolio Post?', 'portfolio_text_section', 'yes', 43, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'portfolio_single_nav', 'Show Post Navigation on Single Portfolio Post?', 'portfolio_text_section', 'yes', 45, array('yes' => 'Yes', 'no' => 'No'));
	
	//Blog Options
	$ebor_options->add_setting('select', 'blog_layout', 'Blog Archives Layout', 'blog_text_section', 'classic-sidebar', 15, $blog_layouts);
	$ebor_options->add_setting('select', 'pillar_load_more', 'Use Load More Button instead of Pagination?', 'blog_text_section', 'no', 17, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'single_related', 'Show Related Posts on Single Blog Post?', 'blog_text_section', 'yes', 20, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'single_sharing', 'Show Sharing Buttons on Single Blog Post?', 'blog_text_section', 'yes', 25, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'post_single_nav', 'Show Post Navigation on Single Blog Post?', 'blog_text_section', 'yes', 25, array('yes' => 'Yes', 'no' => 'No'));
	
	//Team Options
	$ebor_options->add_setting('select', 'team_layout', 'Team Archives Layout', 'team_text_section', 'grid', 30, $team_layouts);
	
	//Logo Options
	$ebor_options->add_setting('image', 'custom_logo', 'Logo', 'logo_settings_section', EBOR_THEME_DIRECTORY . 'style/img/logo-dark.png', 5);
	$ebor_options->add_setting('image', 'custom_logo_light', 'Light Logo', 'logo_settings_section', EBOR_THEME_DIRECTORY . 'style/img/logo-light.png', 10);
	$ebor_options->add_setting('range', 'logo_height', 'Logo Height (45 Default)(% height of bar)', 'logo_settings_section', '45', 15, array('min' => '0', 'max' => '100', 'step' => '1'));
	$ebor_options->add_setting('range', 'nav_height', 'Nav Bar Height (65 Default)', 'logo_settings_section', '65', 15, array('min' => '45', 'max' => '120', 'step' => '1'));
	
	//Footer Options
	$ebor_options->add_setting('textarea', 'copyright', 'Copyright Message', 'subfooter_settings_section', $footer_default, 20);
	$ebor_options->add_setting('image', 'alt_footer_logo', 'Footer Logo (Overrides header logo being used in certain footers)', 'subfooter_settings_section', '', 25);
	
	//Header Layout Option
	$ebor_options->add_setting('select', 'header_layout', 'Global Header Layout', 'header_layout_section', 'bar', 5, $header_layouts);
	$ebor_options->add_setting('select', 'nav_right', 'Align menu to right? (Left default, certain headers only.)', 'header_layout_section', 'no', 7, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_nav_uppercase', 'Auto Capitalize Nav Text?', 'header_layout_section', 'true', 8, array('true' => 'Yes', 'false' => 'No'));
	$ebor_options->add_setting('select', 'nav_max_width', 'Restrict Nav Bar Width to 1170px?', 'header_layout_section', 'no', 9, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_header_search', 'Show search bar in header?', 'header_layout_section', 'yes', 10, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'pillar_header_cart', 'Show shopping cart in header?', 'header_layout_section', 'yes', 15, array('yes' => 'Yes', 'no' => 'No'));
	$ebor_options->add_setting('select', 'main_nav_social', 'Show social icons in header?', 'header_layout_section', 'no', 20, array('yes' => 'Yes', 'no' => 'No'));
	
	$ebor_options->add_setting('input', 'testimonial_speed', 'Testimonial Carousel Speed (ms)', 'testimonial_section', '5000', 10);

	//Search Options
	$ebor_options->add_setting('select', 'search_results_layout', 'Search Results Layout', 'search_results_section', 'cards-small', 5, $blog_layouts);
	
	$ebor_options->add_setting('input', 'cta_url', 'Call to Action Button URL', 'sub_header_layout_section', '', 10);
	$ebor_options->add_setting('input', 'cta_text', 'Call to Action Button Text', 'sub_header_layout_section', 'Get Pillar', 15);
	$ebor_options->add_setting('input', 'pillar_header_address', 'Utility Header Address', 'sub_header_layout_section', '68 Cardamon Place, Melbourne Vic 3000', 20);
	$ebor_options->add_setting('input', 'pillar_header_email', 'Utility Header Email', 'sub_header_layout_section', 'hello@pillar.net', 25);
	
	//Shop Layouts
	$ebor_options->add_setting('select', 'shop_layout', 'Shop Page Layout', 'shop_layout_section', 'cards-large', 5, $shop_archive_layouts);
	$ebor_options->add_setting('select', 'pillar_product_layout', 'Single Product Layout', 'shop_layout_section', 'centered', 10, $shop_post_layouts);
	$ebor_options->add_setting('select', 'masonry_shop_prices', 'Masonry Layouts - Always show prices?', 'shop_layout_section', 'no', 15, array('yes' => 'Yes', 'no' => 'No'));
	
	//Footer Layouts
	$ebor_options->add_setting('select', 'footer_layout', 'Global Footer Layout', 'footer_layout_section', 'twitter', 5, $footer_layouts);
	
	//Footer Icons
	for( $i = 1; $i < 5; $i++ ){
		$ebor_options->add_setting('select', 'footer_social_icon_' . $i, 'Footer Social Icon ' . $i, 'footer_social_settings_section', 'none', 20 + $i + $i, $new_social_options);
		$ebor_options->add_setting('input', 'footer_social_url_' . $i, 'Footer Social URL ' . $i, 'footer_social_settings_section', '', 21 + $i + $i);
	}
	
	//Header icons
	for( $i = 1; $i < 5; $i++ ){
		$ebor_options->add_setting('select', 'header_social_icon_' . $i, 'Header Social Icon ' . $i, 'sub_header_layout_section', 'none', 30 + $i + $i, $new_social_options);
		$ebor_options->add_setting('input', 'header_social_url_' . $i, 'Header Social URL ' . $i, 'sub_header_layout_section', '', 31 + $i + $i);
	}
	
	//Advanced Styling
	$ebor_options->add_panel( $theme_name . ': Advanced Styling Settings', 207, 'All of the controls in this section directly relate to the styling page of ' . $theme_name);
	
	//Advanced Type
	$ebor_options->add_section('advanced_font_section', 'Typography', 10, $theme_name . ': Advanced Styling Settings');
	$ebor_options->add_setting('input', 'pillar_body_font', 'Body Font Name (Lora Default)', 'advanced_font_section', 'Lora', 3);
	$ebor_options->add_setting('input', 'pillar_heading_font', 'Heading Font Name (Montserrat Default)', 'advanced_font_section', 'Montserrat', 5);
	$ebor_options->add_setting('input', 'pillar_button_font', 'Button Font Name (Montserrat Default)', 'advanced_font_section', 'Montserrat', 10);
	$ebor_options->add_setting('input', 'pillar_nav_font', 'Navigation Font Name (Montserrat Default)', 'advanced_font_section', 'Montserrat', 15);
	$ebor_options->add_setting('input', 'pillar_heading_weight', 'Heading Font Weight (600 Default)', 'advanced_font_section', '600', 20);
	$ebor_options->add_setting('input', 'pillar_body_weight', 'Body Font Weight (400 Default)', 'advanced_font_section', '400', 25);
	$ebor_options->add_setting('input', 'pillar_strong_weight', 'Bold Text Font Weight (600 Default)', 'advanced_font_section', '600', 30);
	$ebor_options->add_setting('input', 'pillar_google_font_string', 'Google Font URL Loading Parameters (Lora:400,400italic,700|Montserrat:400,700 - Default)', 'advanced_font_section', 'Lora:400,400italic,700|Montserrat:400,700', 35);
	
	
	$ebor_options->add_section('advanced_type_section', 'Typography Sizes', 10, $theme_name . ': Advanced Styling Settings');
	$ebor_options->add_setting('input', 'pillar_base_size', 'Base Font Size (16 Default)', 'advanced_type_section', '16', 1);
	$ebor_options->add_setting('input', 'pillar_base_size_mobile', 'Base Font Size Mobile (14 Default)', 'advanced_type_section', '14', 2);
	$ebor_options->add_setting('input', 'pillar_h1_size', 'h1 Heading Size (4em Default)', 'advanced_type_section', '4em', 5);
	$ebor_options->add_setting('input', 'pillar_h2_size', 'h2 Heading Size (2.8125em Default)', 'advanced_type_section', '2.8125em', 10);
	$ebor_options->add_setting('input', 'pillar_h3_size', 'h3 Heading Size (2em Default)', 'advanced_type_section', '2em', 15);
	$ebor_options->add_setting('input', 'pillar_h4_size', 'h4 Heading Size (1.4375em Default)', 'advanced_type_section', '1.4375em', 20);
	$ebor_options->add_setting('input', 'pillar_h5_size', 'h5 Heading Size (1em Default)', 'advanced_type_section', '1em', 25);
	$ebor_options->add_setting('input', 'pillar_h6_size', 'h6 Heading Size (0.625em Default)', 'advanced_type_section', '0.625em', 30);
	$ebor_options->add_setting('input', 'pillar_p_lead_size', 'p.lead Size (1.4375em Default)', 'advanced_type_section', '1.4375em', 32);
	$ebor_options->add_setting('input', 'pillar_base_line_height', 'Base Line Height (1.625em Default)', 'advanced_type_section', '1.625em', 35);
	$ebor_options->add_setting('input', 'pillar_h1_line_height', 'h1 Heading Line Height (1.015625em Default)', 'advanced_type_section', '1.015625em', 40);
	$ebor_options->add_setting('input', 'pillar_h2_line_height', 'h2 Heading Line Height (1.15555555555556em Default)', 'advanced_type_section', '1.15555555555556em', 45);
	$ebor_options->add_setting('input', 'pillar_h3_line_height', 'h3 Heading Line Height (1.421875em Default)', 'advanced_type_section', '1.421875em', 50);
	$ebor_options->add_setting('input', 'pillar_h4_line_height', 'h4 Heading Line Height (1.41304347826087em Default)', 'advanced_type_section', '1.41304347826087em', 55);
	$ebor_options->add_setting('input', 'pillar_h6_line_height', 'h6 Heading Line Height (2.6em Default)', 'advanced_type_section', '2.6em', 60);
	$ebor_options->add_setting('input', 'pillar_p_lead_line_height', 'p.lead Line Height (1.69565217391304em Default)', 'advanced_type_section', '1.69565217391304em', 65);
	$ebor_options->add_setting('input', 'pillar_fine_size', 'Fine Print Size (0.6875em Default)', 'advanced_type_section', '0.6875em', 70);
	$ebor_options->add_setting('input', 'pillar_ul_line_height', 'UL/OL Line Height (2.34375em Default)', 'advanced_type_section', '2.34375em', 75);
	
	$ebor_options->add_section('advanced_button_section', 'Buttons', 15, $theme_name . ': Advanced Styling Settings');
	$ebor_options->add_setting('input', 'pillar_button_border_radius', 'Button Border Radius (100px Default)', 'advanced_button_section', '100px', 5);
	$ebor_options->add_setting('input', 'pillar_button_border_width', 'Button Border Width (2px Default)', 'advanced_button_section', '2px', 10);
	$ebor_options->add_setting('input', 'pillar_button_font_weight', 'Button Font Weight(400 Default)', 'advanced_button_section', '400', 15);
	
	$ebor_options->add_section('advanced_nav_section', 'Navigation Items', 20, $theme_name . ': Advanced Styling Settings');
	$ebor_options->add_setting('input', 'pillar_nav_font_size', 'Nav Item Font Size (11px Default)', 'advanced_nav_section', '11px', 5);
	$ebor_options->add_setting('input', 'pillar_nav_font_weight', 'Nav Item Font Weight (400 Default)', 'advanced_nav_section', '400', 10);
	$ebor_options->add_setting('input', 'pillar_nav_letter_spacing', 'Nav Item Letter Spacing (0px Default)', 'advanced_nav_section', '0px', 15);
	
	$ebor_options->add_section('advanced_forms_section', 'Forms', 25, $theme_name . ': Advanced Styling Settings');
	$ebor_options->add_setting('input', 'pillar_label_font_size', 'Label Font Size (1em Default)', 'advanced_forms_section', '1em', 5);
	$ebor_options->add_setting('input', 'pillar_label_font_weight', 'Label Font Weight (400 Default)', 'advanced_forms_section', '400', 10);
	$ebor_options->add_setting('input', 'pillar_input_border_radius', 'Input Border Radius (50px Default)', 'advanced_forms_section', '50px', 15);
	$ebor_options->add_setting('input', 'pillar_input_font_size', 'Input Font Size (1em Default)', 'advanced_forms_section', '1em', 25);
	$ebor_options->add_setting('input', 'pillar_checkbox_border_radius', 'Checkbox Border Radius (50% Default)', 'advanced_forms_section', '50%', 30);
	$ebor_options->add_setting('input', 'pillar_checkbox_padding', 'Checkbox Padding (0 Default)', 'advanced_forms_section', '0', 35);
	$ebor_options->add_setting('input', 'pillar_radio_border_radius', 'Radio Border Radius (50% Default)', 'advanced_forms_section', '50%', 40);
	$ebor_options->add_setting('input', 'pillar_radio_padding', 'Radio Padding (0 Default)', 'advanced_forms_section', '0', 45);

}