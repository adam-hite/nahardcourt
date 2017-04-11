<?php 
	get_header(); 
	$author = get_user_by( 'slug', get_query_var( 'author_name' ) );
?>

<section class="height-40 page-title page-title--animate">
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo esc_html(esc_html__('Posts By: ','pillar') . $author->display_name); ?></h1>
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