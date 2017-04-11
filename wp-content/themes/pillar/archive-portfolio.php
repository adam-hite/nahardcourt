<?php get_header(); ?>

<section class="imagebg height-60 parallax" data-overlay="8">
	<div class="background-image-holder">
		<img alt="image" src="<?php echo esc_url(get_option('pillar_portfolio_header_image')); ?>" />
	</div>
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo wp_kses_post(get_option('portfolio_title', 'Our Portfolio')); ?></h1>
				<p class="lead"><?php echo wp_kses_post(get_option('portfolio_subtitle', 'The portfolio subtitle.')); ?></p>
			</div>
		</div><!--end row-->
	</div><!--end container-->
</section>

<?php 
	get_template_part('loop/loop-portfolio', get_option('portfolio_layout', 'cards-small'));
	get_footer();