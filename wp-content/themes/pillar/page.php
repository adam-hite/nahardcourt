<?php 
	get_header();
	the_post();
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php the_title('<h1 class="h2">', '</h1>'); ?>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<section class="bg--secondary">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 post-content">
				<?php
					the_content();
					wp_link_pages();
				?>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();