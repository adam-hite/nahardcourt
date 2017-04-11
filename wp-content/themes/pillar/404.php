<?php get_header(); ?>

<section class="height-100 bg--primary page-error">
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<i class="pillar--icon icon--lg icon-Compass-4"></i>
				<h1><?php esc_html_e('Error 404 - Page Not Found', 'pillar'); ?></h1>
				<p><?php esc_html_e("The page you were looking for wasn't found", 'pillar'); ?></p>
				<p><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('back home', 'pillar'); ?></a></p>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();