<?php
	$displays = get_option('ebor_cpt_display_options');
	$slug = ( $displays['portfolio_slug'] ) ? $displays['portfolio_slug'] : 'portfolio';
?>

<section class="project-navigation">
	<?php previous_post_link('%link', '<span class="h5"><span class="larr">&larr;</span> '. esc_html__('Previous Project', 'pillar') .'</span>'); ?>
	<a href="<?php echo esc_url(home_url($slug)); ?>">
		<span class="h5"><?php esc_html_e('All Projects', 'pillar'); ?></span>
	</a>
	<?php next_post_link('%link', '<span class="h5">'. esc_html__('Next Project', 'pillar') .' <span class="rarr">&rarr;</span></span>' ); ?>
</section>