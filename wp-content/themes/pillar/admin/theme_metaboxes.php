<?php 

/**
 * Build theme metaboxes
 * Uses the cmb metaboxes class found in the ebor framework plugin
 * More details here: https://github.com/WebDevStudios/Custom-Metaboxes-and-Fields-for-WordPress
 * 
 * @since 1.0.0
 * @author tommusrhodus
 */
if(!( function_exists('ebor_custom_metaboxes') )){
	function ebor_custom_metaboxes( $meta_boxes ) {
		
		/**
		 * Setup variables
		 */
		$prefix = '_ebor_';
		
		$social_options = ebor_get_icons();
		foreach( $social_options as $social ){
			$new_social_options[$social] = ucfirst(str_replace('ti-', '', $social));	
		}
		
		$footer_options = ebor_get_footer_options();
		$footer_overrides['none'] = 'Do Not Override Footer Option On This Page';
		foreach( $footer_options as $key => $value ){
			$footer_overrides[$key] = 'Override Footer: ' . $value; 	
		}
		
		$header_options = ebor_get_header_options();
		$header_overrides['none'] = 'Do Not Override Header Option On This Page';
		foreach( $header_options as $key => $value ){
			$header_overrides[$key] = 'Override Header: ' . $value; 	
		}
		
		/**
		 * Post & Portfolio Header Images
		 */
		$meta_boxes[] = array(
			'id' => 'post_header_metabox',
			'title' => esc_html__('Page Overrides', 'pillar'),
			'object_types' => array('page', 'post', 'portfolio', 'team', 'product'), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name'         => esc_html__( 'Override Header?', 'pillar' ),
					'desc'         => esc_html__( 'Header Layout is set in "appearance" -> "customise". To override this for this page only, use this control.', 'pillar' ),
					'id'           => $prefix . 'header_override',
					'type'         => 'select',
					'options'      => $header_overrides,
					'std'          => 'none'
				),
				array(
					'name'         => esc_html__( 'Override Footer?', 'pillar' ),
					'desc'         => esc_html__( 'Footer Layout is set in "appearance" -> "customise". To override this for this page only, use this control.', 'pillar' ),
					'id'           => $prefix . 'footer_override',
					'type'         => 'select',
					'options'      => $footer_overrides,
					'std'          => 'none'
				),
			)
		);
		
		/**
		 * Social Icons for Team Members
		 */
		$meta_boxes[] = array(
			'id' => 'social_metabox',
			'title' => esc_html__('Team Member Details', 'pillar'),
			'object_types' => array('team'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => esc_html__('Job Title', 'pillar'),
					'desc' => '(Optional) Enter a Job Title for this Team Member',
					'id'   => $prefix . 'the_job_title',
					'type' => 'text',
				),
				array(
				    'id'          => $prefix . 'team_social_icons',
				    'type'        => 'group',
				    'options'     => array(
				        'add_button'    => esc_html__( 'Add Another Icon', 'pillar' ),
				        'remove_button' => esc_html__( 'Remove Icon', 'pillar' ),
				        'sortable'      => true
				    ),
				    'fields' => array(
						array(
							'name' => 'Social Icon',
							'desc' => 'What icon would you like for this team members first social profile?',
							'id' => $prefix . 'social_icon',
							'type' => 'select',
							'options' => $new_social_options
						),
						array(
							'name' => esc_html__('URL for Social Icon', 'pillar'),
							'desc' => esc_html__("Enter the URL for Social Icon 1 e.g www.google.com", 'pillar'),
							'id'   => $prefix . 'social_icon_url',
							'type' => 'text'
						),
				    ),
				),
			)
		);
		
		$meta_boxes[] = array(
			'id' => 'testimonial_metabox',
			'title' => esc_html__('Testimonial Details', 'pillar'),
			'object_types' => array('testimonial'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => esc_html__('Job Title', 'pillar'),
					'id'   => $prefix . 'the_job_title',
					'type' => 'text',
				)
			)
		);
		
		$meta_boxes[] = array(
			'id' => 'post_layout_metabox',
			'title' => esc_html__('Post Layout Options', 'pillar'),
			'object_types' => array('post'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => esc_html__('Disable Post Sidebar','pillar'),
					'desc' => esc_html__("Check to disable the sidebar on this post.", 'pillar'),
					'id'   => $prefix . 'disable_sidebar',
					'type' => 'checkbox',
				),
				array(
					'name' => esc_html__('oEmbed', 'pillar' ),
					'desc' => esc_html__('Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'pillar' ),
					'id'   => $prefix . 'the_oembed',
					'type' => 'oembed',
				),
			)
		);
		
		$meta_boxes[] = array(
			'id' => 'clients_metabox',
			'title' => esc_html__('Client URL', 'pillar'),
			'object_types' => array('client'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => esc_html__('URL for this client (optional)', 'pillar'),
					'desc' => esc_html__("Enter a URL for this client, if left blank, client logo will not be clickable.", 'pillar'),
					'id'   => $prefix . 'client_url',
					'type' => 'text',
				),
			),
		);
		
		$meta_boxes[] = array(
			'id' => 'portfolio_layout_metabox',
			'title' => esc_html__('Post Layout Options', 'pillar'),
			'object_types' => array('portfolio'), // post type
			'context' => 'normal',
			'priority' => 'high',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => esc_html__('oEmbed', 'pillar' ),
					'desc' => __('Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.', 'pillar' ),
					'id'   => $prefix . 'the_oembed',
					'type' => 'oembed',
				),
			)
		);
		
		return $meta_boxes;
	}
	add_filter( 'cmb2_meta_boxes', 'ebor_custom_metaboxes' );
}