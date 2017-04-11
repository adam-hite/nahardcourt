<?php ?>

<section class="project-navigation">
	<?php previous_post_link('%link', '<span class="h5"><span class="larr">&larr;</span> '. esc_html__('Previous Post', 'pillar') .'</span>'); ?>
	<a href="<?php echo esc_url(get_permalink(get_option( 'page_for_posts' ))); ?>">
		<span class="h5"><?php esc_html_e('All Posts', 'pillar'); ?></span>
	</a>
	<?php next_post_link('%link', '<span class="h5">'. esc_html__('Next Post', 'pillar') .' <span class="rarr">&rarr;</span></span>' ); ?>
</section>