<?php 
	if(!( 'post' == get_post_type() ))
		return false;

	$terms = get_the_terms( $post->ID , 'category', 'string');
	$term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );
	
	$related_query = new WP_Query( 
		array(
			'post_type' => 'post',
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'id',
					'terms' => $term_ids,
					'operator'=> 'IN' //Or 'AND' or 'NOT IN'
				)
			),
			'posts_per_page' => 3,
			'ignore_sticky_posts' => 1,
			'orderby' => 'rand',
			'post__not_in' => array($post->ID)
		) 
	);
	
	if( $related_query->found_posts == 0)
		return false;
?>   

<div class="row">
	<div class="col-sm-12">
	
		<h5><?php esc_html_e('Related articles', 'pillar'); ?></h5>
		
		<div class="row related-row">
			<div class="masonry">
				<div class="masonry__container">
					<?php
						if ( $related_query->have_posts() ) : while ( $related_query->have_posts() ) : $related_query->the_post();
						
							/**
							 * Get blog posts by blog layout.
							 */
							get_template_part('loop/content-post', 'cards-related');
						
						endwhile;	
						else : 
							
							/**
							 * Display no posts message if none are found.
							 */
							get_template_part('loop/content','none');
							
						endif;
						wp_reset_postdata();
					?>
				</div><!--end of masonry container-->
			</div>
		</div><!--end of row-->

		<hr />
		
	</div>
</div><!--end of row-->