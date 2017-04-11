<?php get_header(); ?>

<section class="imagebg height-60 parallax" data-overlay="8">
	<div class="background-image-holder">
		<img alt="image" src="<?php echo esc_url(get_option('pillar_team_header_image')); ?>" />
	</div>
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo wp_kses_post(get_option('team_title', 'Our Team')); ?></h1>
				<p class="lead"><?php echo wp_kses_post(get_option('team_subtitle', 'The team subtitle.')); ?></p>
			</div>
		</div><!--end row-->
	</div><!--end container-->
</section>

<?php 
	get_template_part('loop/loop-team', get_option('team_layout', 'grid'));
	get_footer();