<?php 
/**
 * @version 9.9.9
 */
 $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) ); ?>

<ul class="item__reviews">
    <li>
        <?php echo get_avatar( $comment->comment_author_email, 120 ); ?>
        <div class="review__text">
        	<?php echo ebor_rating_html($rating); ?>
            <h5><?php comment_author(); ?></h5>
            <span class="type--fine-print"><?php echo get_comment_date( get_option( 'date_format' ) ); ?></span>
            <?php comment_text(); ?>
        </div>
    </li>
</ul>