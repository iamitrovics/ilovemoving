<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post
 */
  
 get_header();  ?>

    <header id="featured-header"  style="background-image: url(<?php the_field('background_image_feat_header') ?>);">
        <div class="overlay"></div>
        <div class="container">
            <div class="hero-caption">
                <h1><?php the_title(); ?></h1>
                <?php the_field('hero_text_featured'); ?>
            </div>
            <a href="#featured-article--page" class="btn-down animate-flicker"><img src="<?php bloginfo('template_directory'); ?>/img/ico/scroll-down.svg" alt=""></a>

        </div>
        <!-- // container  -->
        <div class="overlay"></div>
    </header>
    <!-- // featured header  -->

    <div id="featured-article--page">
    <?php if( have_rows('content_sections_featured') ): ?>
        <?php while( have_rows('content_sections_featured') ): the_row(); ?>
            <?php if( get_row_layout() == 'intro' ): ?>

                <div class="intro-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro-text">
                                    <?php the_sub_field('intro_text'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // intro wrapper  -->

            <?php elseif( get_row_layout() == 'toc' ): ?>

                <div class="toc-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h5><?php the_sub_field('toc_title'); ?></h5>
                                <div class="toc-inner">
                                    <ul>
                                    <?php if( have_rows('toc_list') ): ?>
                                    <?php while( have_rows('toc_list') ): the_row(); ?>

                                        <li><a href="#<?php the_sub_field('link_to'); ?>"><?php the_sub_field('label'); ?></a></li>

                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // wrapper  -->

            <?php elseif( get_row_layout() == 'heading_section' ): ?>

                <div class="heading-wrapper" id="<?php the_sub_field('section_id'); ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading-text">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                            </div>
                            <!-- // text col  -->
                        </div>
                    </div>
                </div>
                <!-- // wrapper ehading  -->

            <?php elseif( get_row_layout() == 'features' ): ?>

                <div class="features-wrapper">
                    <div class="container">

                        <?php if( get_sub_field('intro_text') ): ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro-text">
                                    <?php the_sub_field('intro_text'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- // intro text  -->
                        <?php endif; ?>

                        <div class="row features">
                            <?php if( have_rows('features_list') ): ?>
                            <?php while( have_rows('features_list') ): the_row(); ?>

                                <div class="col-md-4">
                                    <div class="feat-card">
                                        <span class="title"><?php the_sub_field('title'); ?></span>
                                        <?php the_sub_field('text_block'); ?>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- // feats  -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="bottom-text">
                                    <?php the_sub_field('bottom_text'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- // intro text  -->                        

                    </div>
                </div>
                <!-- // features wrapper  -->

            <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                <div class="full-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // ful wrapper  -->

             <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                <div class="container">
                    <div class="quote-cta--single">
                        <span class="title"><?php the_sub_field('cta_title'); ?></span>
                        <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                    </div>
                    <!-- // single  -->    
                </div>             
                <!-- // container  -->

            <?php elseif( get_row_layout() == 'content_left_image_right' ): ?>

                    <?php if (get_sub_field('background_color') == 'White') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Gray') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Blue') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Dark Blue') { ?>
                        <div class="content-wrapper">                                                        
                    <?php } ?>   
                    
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="content-text">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                                <!-- // text  -->

                                <div class="col-md-6">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php the_sub_field('image_alt'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- // image holder  -->

                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // content wrapper  -->        
                    
            <?php elseif( get_row_layout() == 'image_left_content_right' ): ?>

                    <?php if (get_sub_field('background_color') == 'White') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Gray') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Blue') { ?>
                        <div class="content-wrapper">
                    <?php } elseif (get_sub_field('background_color') == 'Dark Blue') { ?>
                        <div class="content-wrapper">                                                        
                    <?php } ?>   
                    
                        <div class="container">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'service-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php the_sub_field('image_alt'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                    </div>
                                </div>
                                <!-- // image holder  -->

                                
                                <div class="col-md-6">
                                    <div class="content-text">
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                </div>
                                <!-- // text  -->                                

                            </div>
                            <!-- // row  -->
                        </div>
                    </div>
                    <!-- // content wrapper  -->    
                    
                <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                    <div class="image-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="image-holder">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php the_sub_field('alt_image'); ?>" src="<?php echo $image[0]; ?>" /> 
                                        <div class="caption">
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // image  -->

                <?php elseif( get_row_layout() == 'video' ): ?>

                    <div class="video-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="video-holder">
                                       <?php the_sub_field('video_code'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // image  -->       
                    
                <?php elseif( get_row_layout() == 'accordion' ): ?>

                <div class="faq">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><?php the_sub_field('faq_title'); ?></h3>
                                <div class="faq__accordion">

                                    <?php

                                        // check if the repeater field has rows of data
                                        if(have_rows('qa_list')):

                                            // loop through the rows of data
                                            while(have_rows('qa_list')) : the_row();

                                                $title = get_sub_field('question');
                                                $content  = get_sub_field('answer');

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
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#faq -->


            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <!-- // feauted article page  -->

    <div class="quote-form-area" id="bottom-form">
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

