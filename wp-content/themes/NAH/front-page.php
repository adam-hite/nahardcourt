<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <?php
    
    // vars
    $hero = get_field('home_hero');
    $heroText = get_sub_field('home_hero_text');

    if( $hero ): ?>
      <figure id="hero">
        <?php the_post_thumbnail('full'); ?>
        <?php if( $hero ): ?>
          <figcaption><?php echo $hero['home_hero_text']; ?></figcaption>
        <?php endif; ?>
      </figure>
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php

            $features = get_field('home_features');

            if( $features ): ?>
                <section class="features">
                    <h1><?php echo $features['features_headline']; ?></h1>
                    <ul>
                        <li>
                            <h2><?php echo $features['features_item1_title']; ?></h2>
                            <p><?php echo $features['features_item1_description']; ?></p>
                            <a class="btn btn-secondary" href="<?php echo $features['features_item1_url']; ?>"><?php echo $features['features_item1_button_text']; ?></a>
                        </li>
                        <li>
                            <h2><?php echo $features['features_item2_title']; ?></h2>
                            <p><?php echo $features['features_item2_description']; ?></p>
                            <a class="btn btn-secondary" href="<?php echo $features['features_item2_url']; ?>"><?php echo $features['features_item1_button_text']; ?></a>
                        </li>
                        <li>
                            <h2><?php echo $features['features_item3_title']; ?></h2>
                            <p><?php echo $features['features_item3_description']; ?></p>
                            <a class="btn btn-secondary" href="<?php echo $features['features_item3_url']; ?>"><?php echo $features['features_item1_button_text']; ?></a>
                        </li>
                    </ul>
                </section>
            <?php endif; ?>

            <section class="homme-news">
                <div class="home-news-latest-wrapper">
                    <?php 
                    $image = get_field('home_latest_news_image');
                    if( !empty($image) ): ?>
                        <img class="image_has_shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <div class="home-news-latest">
                        <h3 class="labeled">Latest News</h3>
                        <article>
                            <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                <div class="meta">Posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y') ?>.</div>
                                <?php echo '<p class="post-excerpt">' . get_the_excerpt() . '</p>'; ?>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </article>
                        <a href="/news" class="btn btn-primary">Read All News</a>
                    </div>
                    <div class="home-news-categories">
                        <h3 class="labeled">Categories</h3>
                        <p>
                            <?php 
                                $args = array(
                                    'style' => '0',
                                    'separator' => '&nbsp;'
                                );
                                wp_list_categories($args);
                            ?>
                        </p>
                    </div>
                    <div class="home-news-more">
                        <h3 class="labeled">More Headlines</h3>
                        <ul>
                            <?php 
                                $args = array(
                                    'post_per_page'=> '5',
                                    'offset'=>1,
                                );
                                $the_query = new WP_Query( $args ); 
                            ?>
                            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
            </section>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
