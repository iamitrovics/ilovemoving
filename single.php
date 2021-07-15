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

    <header id="inner-header2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

    <div id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-body">
                        <div class="blog-meta">
                            <span>Posted
                            
                            <?php
                            global $post;
                            $categories = get_the_category($post->ID);
                            $cat_link = get_category_link($categories[0]->cat_ID);
                            echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                            ?>                               
                            
                             / <?php echo get_the_date( 'F j, Y' ); ?>
                             <br>
                             By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                            </span>
                        </div>
                        <!-- /.blog-meta -->
                        <div class="blog-content">

                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>

                                        <div class="intro-text">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                        <div class="full-content">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                        <div class="featured-photo">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <div class="caption">
                                                <?php the_sub_field('image_caption'); ?>
                                            </div>
                                        </div>

                                    <?php elseif( get_row_layout() == 'half_width_image' ): ?>

                                        <div class="half-width-image">

                                            <div class="featured-photo half-content">
                                                <?php
                                                $imageID = get_sub_field('featured_image_1_half');
                                                $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                ?> 

                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                <div class="caption">
                                                    <?php the_sub_field('image_caption'); ?>
                                                </div>
                                            </div>

                                            <div class="featured-photo half-content">
                                                <?php
                                                $imageID = get_sub_field('featured_image_2_half');
                                                $image = wp_get_attachment_image_src( $imageID, 'side-image' );
                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                ?> 

                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                <div class="caption">
                                                    <?php the_sub_field('image_caption'); ?>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.half-width-image -->

                                    <?php elseif( get_row_layout() == 'quote' ): ?>

                                        <div class="quote-holder">
                                            <?php the_sub_field('quotation_content'); ?>
                                            <small><?php the_sub_field('source'); ?></small>
                                        </div>

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="video-holder">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>

                                    <?php elseif( get_row_layout() == 'accordion' ): ?>

                                        <div class="content__accordion">

                                            <h2><?php the_sub_field('accordion_title'); ?></h2>

                                            <?php

			                                    // check if the repeater field has rows of data
			                                    if(have_rows('accordion_list')):

				                                    // loop through the rows of data
				                                    while(have_rows('accordion_list')) : the_row();

                                                        $title = get_sub_field('heading');
					                                    $content  = get_sub_field('content');

					                                    ?>  

					                                    <div class="faq-wrap">
                                                            <h3><?php echo $title; ?></h3>
                                                            <div>
                                                                <?php echo $content; ?>
                                                            </div>
                                                        </div>

				                                    <?php endwhile;

			                                    else :
				                                    echo 'No data';
			                                    endif;
			                                    ?>

                                        </div>
                                        <!-- /#faq__accordion -->


                                        <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                            <div class="quote-cta--single">
                                                <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                                <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                            </div>
                                            <!-- // single  -->                                            

                                        <?php elseif( get_row_layout() == 'table' ): ?>

                                        <table style="width:100%" class="single-table">
                                            <thead>
                                                <tr role="row">

                                                <?php

                                                    // check if the repeater field has rows of data
                                                    if(have_rows('table_head_cells')):

                                                        // loop through the rows of data
                                                        while(have_rows('table_head_cells')) : the_row();

                                                            $hlabel = get_sub_field('table_cell_label_thead');

                                                            ?>  

                                                            <th tabindex="0" rowspan="1" colspan="1"><?php echo $hlabel; ?></th>

                                                        <?php endwhile;

                                                    else :
                                                        echo 'No data';
                                                    endif;
                                                    ?>

                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php while ( have_posts() ) : the_post(); ?>

                                                <?php 

                                                // check for rows (parent repeater)
                                                if( have_rows('table_body_row') ): ?>
                                                    
                                                    <?php 

                                                    // loop through rows (parent repeater)
                                                    while( have_rows('table_body_row') ): the_row(); ?>

                                                            <?php 

                                                            // check for rows (sub repeater)
                                                            if( have_rows('table_body_cells') ): ?>
                                                                <tr>
                                                                    <?php 

                                                                    // loop through rows (sub repeater)
                                                                    while( have_rows('table_body_cells') ): the_row();

                                                                        
                                                                        ?>
                                                                        <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                                    <?php endwhile; ?>
                                                                </tr>
                                                            <?php endif; //if( get_sub_field('') ): ?>

                                                    <?php endwhile; // while( has_sub_field('') ): ?>
                                                        
                                                <?php endif; // if( get_field('') ): ?>

                                                <?php endwhile; // end of the loop. ?>
                                                
                                            </tbody>
                                        </table>

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /.blog-content -->
                    </div>
                    <!-- /.blog-body -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-page -->

    <div class="quote-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Free Moving Estimate</h2>
                    <div class="quote-form">
                        <div class="quote-form-in">

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#moving-quote" role="tab" aria-controls="home" aria-selected="true">Moving Quote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#auto-quote" role="tab" aria-controls="profile" aria-selected="false">Auto Quote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#quote-for-both" role="tab" aria-controls="contact" aria-selected="false">Quote for Both</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="moving-quote" role="tabpanel" aria-labelledby="home-tab">
                                        <?php echo do_shortcode('[contact-form-7 id="180" title="Estimate Form"]'); ?>
                                    </div>
                                    <!-- // tab 1  -->
                                    <div class="tab-pane fade" id="auto-quote" role="tabpanel" aria-labelledby="profile-tab">
                                        <?php echo do_shortcode('[contact-form-7 id="10613" title="Auto Quote"]'); ?>
                                    </div>
                                    <!-- // tab 2  -->
                                    <div class="tab-pane fade" id="quote-for-both" role="tabpanel" aria-labelledby="contact-tab">
                                        <?php echo do_shortcode('[contact-form-7 id="10614" title="Quote For Both"]'); ?>
                                    </div>
                                    <!-- // tab 3  -->

                                </div>
                                <!-- // tabs content  -->

                        </div>
                        <!-- /.quote-form-in -->
                    </div>
                    <!-- /.quote-form -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.quote-form-area -->    
   
<?php
get_footer();

