<?php 
	get_header(); 
	$total_results = $wp_query->found_posts;	
?>

<section class="height-40">
	<div class="container pos-vertical-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3><?php echo esc_html__('Results for', 'pillar'); ?>: <span>&ldquo;<?php echo ucfirst(get_search_query()); ?>&rdquo;</span></h3>
				<span><em><?php echo esc_html($total_results) . esc_html__(' results found mentioning', 'pillar'); ?></em> &ldquo;<?php echo ucfirst(get_search_query()); ?>&rdquo;</span>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<section class="bg--secondary">
	<div class="container">
		<?php 
			if(!( 0 == $total_results )){
				get_template_part('loop/loop-post', get_option('search_results_layout', 'cards-small'));
			} else {
				get_template_part('loop/content-none');
			}
		?>
	</div><!--end of container-->
</section>

<section class="space--even bg--white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h4><?php esc_html_e("Didn't find what you were looking for?", 'pillar'); ?></h4>
				<a class="btn btn--primary modal-trigger" href="#" data-modal-id="search-form">
					<span class="btn__text"><?php esc_html_e('New Search Query', 'pillar'); ?></span>
				</a>
			</div>
		</div><!--end of row-->
	</div><!--end of container-->
</section>

<?php get_footer();