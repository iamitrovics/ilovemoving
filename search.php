<?php
/**
 * The template for displaying search results pages
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="blog-listing">
    <div class="container">
        <div class="row blf">
            <div class="col-md-8 col-lg-8">
                <div class="blog-listing-content">

                <?php if(have_posts()) : ?>
				    <?php while(have_posts()) : the_post(); ?>

                        <div class="blog-box">
                            <div class="blog-photo">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php 
                                    $values = get_field( 'featured_image_blog' );
                                    if ( $values ) { ?>

                                        <?php
                                        $imageID = get_field('featured_image_blog');
                                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 

                                    <?php 
                                    } else { ?>
                                                    
                                    <?php } ?>
                                </a>
                            </div>
                            <!-- /.blog-photo -->
                            <div class="blog-content">
                                
                                <span class="blog-info">By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="author-name"><?php the_author(); ?></span></a> in 
                                    <span class="category">
                                        <?php
                                        global $post;
                                        $categories = get_the_category($post->ID);
                                        $cat_link = get_category_link($categories[0]->cat_ID);
                                        echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                        ?>                                          
                                    </span>
                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span> </span>
                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_field('excerpt_text'); ?>
                                <a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
                                <div class="author">
                                    <div class="author-info">
                                        
                                        
                                    </div>
                                </div>
                                <!-- /.author -->
                            </div>
                            <!-- /.blog-content -->
                        </div>
                        <!-- /.blog-box -->
                    <?php endwhile;

		        else :
				                echo 'No Results';
			                endif;
			                ?>
                    
                </div>
                <!-- /.blog-listing -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-md-4 col-lg-4">
                
                <?php get_sidebar(); ?>

            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<?php
get_footer(); ?>
