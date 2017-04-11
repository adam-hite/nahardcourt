<div class="blog-post__title imagebg parallax" data-overlay="5">

	<div class="background-image-holder">
		<?php the_post_thumbnail('full'); ?>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
				<?php the_title('<h1 class="h2">', '</h1>'); ?>
				<div class="blog-post__author">
					<span><em><?php esc_html_e('by', 'pillar'); ?></em></span>
					<span class="h6"><?php the_author(); ?></span>
				</div>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
	
</div>