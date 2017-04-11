<?php get_header(); ?>

<section class="height-40 page-title page-title--animate">
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo wp_kses_post(get_option('blog_title', 'Blog Cards')); ?></h1>
				<p class="lead"><?php echo wp_kses_post(get_option('blog_subtitle', 'Showcase blog posts in a classic sidebar arrangement.')); ?></p>
			</div>
		</div><!--end row-->
	</div><!--end container-->
</section>

<section>
	<div class="container">
		<?php get_template_part('loop/loop-post', get_option('blog_layout', 'classic-sidebar')); ?>
	</div><!--end of container-->
</section>

<?php get_footer();