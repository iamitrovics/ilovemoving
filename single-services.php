<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

	<header id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-caption">
                        <img src="<?php the_field('header_icon_services'); ?>" alt="">
                        <h1><?php the_field('header_title_services'); ?></h1>
                        <h2><?php the_field('header_paragraph_services'); ?></h2>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <!-- /#inner-header -->

    <section id="regular-page">
        <div class="container">
            <div class="row">
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('flexible_content_services') ):?>
                    <!--	// loop through the rows of data-->
	                <?php  while ( have_rows('flexible_content_services') ) : the_row();?>
                        <?php if( get_row_layout() == '1_column' ):?>

                        <?php

			                // check if the repeater field has rows of data
			                if(have_rows('content_block_1')):
				                // loop through the rows of data
				                while(have_rows('content_block_1')) : the_row();

					                $column = get_sub_field('content_column');
					                ?>  

                                    <div class="col-lg-12">
                                 <?php echo $column; ?>
                             </div>

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>
      
                <?php elseif( get_row_layout() == '2_column' ):?>
                    <?php

			                // check if the repeater field has rows of data
			                if(have_rows('content_block_2')):

				                // loop through the rows of data
				                while(have_rows('content_block_2')) : the_row();

					                $column = get_sub_field('content_column');

					                ?>  

                                    <div class="col-lg-6">
                                 <?php echo $column; ?>
                             </div>

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>

                    <?php endif;?>
                <?php endwhile;?>

                <?php else :?>

                    <!--	// no layouts found-->

                <?php endif;?>

                    <?php get_template_part( 'content-form-services' ); ?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
    <!-- /#about-page -->
     <div id="testimonials" style="background-image: url(<?php the_field('background_image_testimonial_services'); ?>" class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>I Love Moving Review</h2>
                    <?php
                    $post_objects = get_field('testimonial_list_services');

                    if( $post_objects ): ?>
                        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                                
                                <div class="star-area"><img src="<?php the_field('testimonial_icon'); ?>" alt=""></div>
                                <!-- /.star-area -->
                                <span class="author"><?php the_title(); ?></span>
                                <p><?php the_field('testimonial_text'); ?></p>
                                
                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                    <div class="view-all-holder">
                        <p><strong><a href="<?php the_field('testimonial_link'); ?>"><?php the_field('testimonial_label'); ?></a></strong></p>
                    </div>
                    <!-- /.view-all-holder -->
                </div>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </div>   

<?php
get_footer();
