<?php
/**
 * The sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="blog-rhs">
    <div class="rhs-search">
        <?php get_template_part('searchform'); ?>
    </div>
    <!-- /.rhs-search -->
    <div class="blog-rhs-item">
        <span class="rhs-title"><?php the_field('testimonial_title_sidebar', 'options'); ?> </span>
        <?php the_field('testimonial_link_sidebar', 'options'); ?> 
    </div>
    <!-- /.blog-rhs-item -->
    <div class="blog-rhs-item">
        <span class="rhs-title">Recent Posts</span>
        <ul>

            <?php 
                // the query
                $the_query = new WP_Query( array(
                    'posts_per_page' => 5,
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
    <!--
    <div class="blog-rhs-item">
        <span class="rhs-title">Archives</span>
        <ul>
            <?php wp_get_archives(); ?>
        </ul>
    </div>
    <div class="blog-rhs-item">
        <span class="rhs-title">Categories</span>
        <ul>
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
     -->
</div>
<!-- /.blog-rhs -->

