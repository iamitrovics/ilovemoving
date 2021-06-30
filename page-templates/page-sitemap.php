<?php
/**
 * Template Name: Sitemap
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="inner-header2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <div class="container section-area">
        <div class="row">
            <div class="col-md-12">
                    <div class="sitemap-item">
                        <span class="sitemap-title">Posts</span>
                        <ul>

                            <?php 
                                // the query
                                $the_query = new WP_Query( array(
                                    'posts_per_page' => -1,
                                )); 
                            ?>

                                <?php if ( $the_query->have_posts() ) : ?>
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>           

                                    <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>
                                            
                        </ul>
                    </div>
                    <!-- /.sitemap-item -->
                    <div class="sitemap-item">
                        <span class="sitemap-title">Archives</span>
                        <ul>
                            <?php wp_get_archives(); ?>
                        </ul>
                    </div>
                    <!-- /.sitemap-item -->
                    <div class="sitemap-item">
                        <span class="sitemap-title">Categories</span>
                        <ul>
                            <?php wp_list_categories('title_li='); ?>
                        </ul>
                    </div>
                    <!-- /.sitemap-item -->

            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php get_footer(); ?>