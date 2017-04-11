<?php 
	get_header();
	the_post();
	$icons = ebor_get_icons();
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
			<div class="col-sm-12 post-content icon-view">
				<?php
					foreach( $icons as $key => $icon ){
						if( 0 == $key)
							continue;
							
						echo '<div><i class="'. $icon .'"></i><span>'. $icon .'</span></div>';	
					}
				?>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();