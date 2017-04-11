<footer class="bg--dark footer-4">

	<div class="container">
		<?php get_template_part('inc/content-footer', 'widgets'); ?>
	</div><!--end of container-->
	
	<div class="footer__lower">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-6 text-center-xs">
					<span class="type--fine-print">
						<?php echo wp_kses_post(get_option('copyright', 'Modify this text from "appearance => customise"')); ?>
					</span>
				</div>
				
				<div class="col-sm-6 text-right text-center-xs">
					<a href="#top" class="inner-link top-link">
						<i class="interface-up-open-big"></i>
					</a>
				</div>
				
			</div><!--end of row-->
		</div><!--end of container-->
	</div>
	
</footer>