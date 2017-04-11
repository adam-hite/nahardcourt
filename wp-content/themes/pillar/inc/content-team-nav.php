<?php
	$displays = get_option('ebor_cpt_display_options');
	$slug = ( $displays['team_slug'] ) ? $displays['team_slug'] : 'team';
?>

<section class="project-navigation">
	<?php previous_post_link('%link', '<span class="h5"><span class="larr">&larr;</span> '. esc_html__('Previous Team Member', 'pillar') .'</span>'); ?>
	<a href="<?php echo esc_url(home_url($slug)); ?>">
		<span class="h5"><?php esc_html_e('All Team Members', 'pillar'); ?></span>
	</a>
	<?php next_post_link('%link', '<span class="h5">'. esc_html__('Next Team Member', 'pillar') .' <span class="rarr">&rarr;</span></span>' ); ?>
</section>