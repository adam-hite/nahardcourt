<?php 
	get_header(); 
	$term = get_queried_object();
?>

<section class="height-40 page-title page-title--animate">
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo esc_html($term->name); ?></h1>
				<p class="lead"><?php echo esc_html($term->description); ?></p>
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