<?php
/**
 * Example of a single WPSL store template for the Twenty Fifteen theme.
 * 
 * @package NAH
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <header class="entry-header">
                    <h1 class="entry-title"><?php single_post_title(); ?></h1>        
                </header>
                <div class="entry-content">
                <?php
                    global $post;

                    $queried_object = get_queried_object();
                    
                    // Add the map shortcode
                    echo do_shortcode( '[wpsl_map]' );
                    
                    // Add the content
                    $post = get_post( $queried_object->ID );
                    setup_postdata( $post );
                    wp_reset_postdata( $post );
                    
                    // Add the address shortcode
                    echo do_shortcode( '[wpsl_address]' );

                    the_content();
                ?>
                </div>
            </article>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>