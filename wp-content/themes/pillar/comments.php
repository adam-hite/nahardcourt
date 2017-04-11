<?php
	/**
	 * comments.php
	 * @author TommusRhodus
	 * @since 1.0.0
	 */
	$custom_comment_form = array(
		'fields' => apply_filters( 'comment_form_default_fields', array(
		    'author' => '<input type="text" id="author" name="author" placeholder="' . esc_attr__('Name *','pillar') . '" value="' . esc_attr( $commenter['comment_author'] ) . '" />',
		    'email'  => '<input name="email" type="text" id="email" placeholder="' . esc_attr__('Email *','pillar') . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" />',
		    'url'    => '<input name="url" type="text" id="url" placeholder="' . esc_attr__('Website','pillar') . '" value="' . esc_attr(  $commenter['comment_author_url'] ) . '" />')
		),
		'comment_field' => '<textarea name="comment" placeholder="' . esc_attr__('Your Comment Here','pillar') . '" id="comment" aria-required="true" rows="3"></textarea>',
		'cancel_reply_link' => esc_html__( 'Cancel' , 'pillar' ),
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'label_submit' => esc_html__( 'Submit' , 'pillar' ),
		'class_form' => 'comment-form comment__form form--square',
		'class_submit' => 'btn btn--primary'
	);
?>

<div class="row">
	<div class="col-sm-12">
		<div class="blog-post__comments">
		
			<hr>
			
			<h5><?php comments_number( esc_html__('0 Comments on ','pillar'), esc_html__('1 Comment on ','pillar'), esc_html__('% Comments on ','pillar') ); ?>"<?php the_title(); ?>"</h5>
			
			<?php
				if( have_comments() ){
					echo '<ul id="singlecomments" class="comments-list">';
					wp_list_comments('type=comment&callback=ebor_custom_comment');
					echo '</ul>';
				}
				paginate_comments_links();
				
				comment_form($custom_comment_form);
			?>

		</div><!--end of blog comments-->
	</div>
</div><!--end of row-->