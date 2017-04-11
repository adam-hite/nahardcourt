<?php 
	if(!( 'portfolio' == get_post_type() ))
		return false;

	$terms = get_the_terms( $post->ID , 'portfolio_category', 'string');
	$term_ids = array_values( wp_list_pluck( $terms,'term_id' ) );
	
	$related_query = new WP_Query( 
		array(
			'post_type' => 'portfolio',
			'tax_query' => array(
				array(
					'taxonomy' => 'portfolio_category',
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

	
<h5 class="text-center"><?php esc_html_e('Related projects', 'pillar'); ?></h5>

<section class="wide-grid pb40">
	<div class="masonry">
	
		<div class="masonry__container <?php echo esc_attr(get_option('animated_masonry', 'masonry--animate')); ?>">
			<?php
				if ( $related_query->have_posts() ) : while ( $related_query->have_posts() ) : $related_query->the_post();
				
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content-portfolio', 'vanilla-wide');
				
				endwhile;	
				else : 
					
					/**
					 * Display no posts message if none are found.
					 */
					get_template_part('loop/content','none');
					
				endif;
				wp_reset_postdata();
			?>
		</div>
		
	</div>
</section>