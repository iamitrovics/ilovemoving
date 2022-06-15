<?php 
/**
 * Template Name: Homepage
 *
**/
get_header(); ?>

<header id="masheader">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <span class="heading-title"><?php the_field('heading_title'); ?></span>
                    <p><?php the_field('heading_paragraph_1') ?></p>
                    <p><?php the_field('heading_paragraph_2') ?></p>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<div id="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-in">
                    <div class="row">

                        <?php

			                // check if the repeater field has rows of data
			                if(have_rows('services_repeater')):

				                // loop through the rows of data
				                while(have_rows('services_repeater')) : the_row();

					                $image = get_sub_field('image_sevices');
					                $title = get_sub_field('title_services');
					                $link  = get_sub_field('link_services');

					                ?>  

					                <div class="col-md-4">
                                        <div class="service-item">
                                            <a href="<?php echo $link; ?>">
                                            <img src="<?php echo $image; ?>">
                                            <span class="service-title"><?php echo $title; ?></span>
                                            </a>
                                        </div>
                                        <!-- /.service-item -->
                                    </div>
                                    <!-- /.col-md-4 -->

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.services-in -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#services-area -->
<section id="about-area" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_field('video_title'); ?></h1>
                <div class="about-video">
                    <a href="<?php the_field('video_link'); ?>" class="various"><img src="<?php the_field('video_image'); ?>" alt=""></a>
                </div>
                <!-- /.about-video -->
                <p><?php the_field('video_text'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /#about-area -->
<div id="testimonials" style="background-image: url(<?php the_field('testimonial_background_image'); ?>" class="section-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('testimonial_title'); ?></h2>

                <?php
                    $post_objects = get_field('testimonial_list_home');

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

                <div class="about-video">
                    <a href="<?php the_field('testimonial_video_link'); ?>" class="various"><img src="<?php the_field('testimonial_video_image'); ?>" alt=""></a>
                </div>
                <!-- /.about-video -->
                <div class="view-all-holder">
                    <p><strong><a href="<?php the_field('testimonial_link_home'); ?>"><?php the_field('testimonial_label_home'); ?></a></strong></p>
                </div>
                <!-- /.view-all-holder -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#testimonials -->
<section class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('title_moving'); ?></h2>
                <p><?php the_field('text_moving'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->
<div id="brands">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Reviews & Associations:</h2>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <ul>

                    <?php

			        // check if the repeater field has rows of data
			        if(have_rows('reviews_repeater')):

				        // loop through the rows of data
				        while(have_rows('reviews_repeater')) : the_row();

					        $icon = get_sub_field('review_icon');
					        $link  = get_sub_field('review_link');

					        ?>  

                            <li><a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon; ?>" alt="" width="100" height="100"></a></li>

				        <?php endwhile;

			        else :
				        echo 'No data';
			        endif;
			        ?>

                </ul>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#brands --> 
<section class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('text_block_title'); ?></h2>
                <p><?php the_field('text_block_1'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->
<div class="estimate-area">
    <a href="<?php the_field('contact_link'); ?>">Get a free moving estimate now!</a>
</div>
<section class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('text_block_title_2'); ?></h2>
                <p><?php the_field('text_block_2'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->
<div class="estimate-area">
    <a href="tel:<?php the_field('contact_link_2'); ?>"><?php the_field('contact_link_2_text'); ?></a>
</div>
<section class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('text_block_title_3'); ?></h2>
                <p><?php the_field('text_block_3'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->
<div id="promo-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="mk-flipbox flip-horizontal">
                    <div class="mk-flipbox-holder">
                        <div class="mk-flipbox-front">
                            <div class="mk-flipbox-content">
                                <div class="front-icon">
                                    <img src="<?php the_field('promo_box_icon_1'); ?>" alt="">                                   
                                </div>
                                <span class="front-title"><?php the_field('promo_box_title_1'); ?></span>
                                <span class="front-desc"><?php the_field('promo_description_1'); ?></span>
                            </div>
                        </div>
                        <!-- /.mk-flipbox-front -->
                        <div class="mk-flipbox-back">
                            <div class="mk-flipbox-content">
                                <span class="back-title"><?php the_field('promo_flip_title_1'); ?></span>
                                <span class="back-desc"><?php the_field('promo_flip_description_1'); ?></span>
                            </div>
                        </div>
                        <!-- /.mk-flipbox-back -->
                    </div>
                    <!-- /.mk-flipbox-holder -->
                </div>
                <!-- /.mk-flipbox flip-horizontal -->
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-md-5 col-lg-4">
                <div class="mk-flipbox flip-horizontal">
                    <div class="mk-flipbox-holder">
                        <div class="mk-flipbox-front">
                            <div class="mk-flipbox-content">
                                <div class="front-icon">
                                    <img src="<?php the_field('promo_box_icon_2'); ?>" alt="">
                                </div>
                                <span class="front-title"><?php the_field('promo_box_title_2'); ?></span>
                                <span class="front-desc"><?php the_field('promo_description_2'); ?></span>
                            </div>
                        </div>
                        <!-- /.mk-flipbox-front -->
                        <div class="mk-flipbox-back">
                            <div class="mk-flipbox-content">
                                <span class="back-title"><?php the_field('promo_flip_title_2'); ?></span>
                                <span class="back-desc"><?php the_field('promo_flip_description_2'); ?></span>
                            </div>
                        </div>
                        <!-- /.mk-flipbox-back -->
                    </div>
                    <!-- /.mk-flipbox-holder -->
                </div>
                <!-- /.mk-flipbox flip-horizontal -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#promo-area -->

<section class="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('promo_title'); ?></h2>
                <p><?php the_field('promo_text'); ?></p>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.home-section -->

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
                                    <?php the_field('form_code_homepage'); ?>
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

<div id="contact-info-area">
    <div class="container">

            <?php

			// check if the repeater field has rows of data
			if(have_rows('location_repeater')):

				// loop through the rows of data
				while(have_rows('location_repeater')) : the_row();

					$map = get_sub_field('location_map');
					$title = get_sub_field('location_title');
                    $address = get_sub_field('location_address');
                    $phone_link = get_sub_field('phone_number_link');
                    $phone = get_sub_field('phone_number');
                    $mail = get_sub_field('email');

					?>  
                    <div class="contact-info-item">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="company-map">
                                    <a href="<?php the_sub_field('location_url'); ?>" target="_blank">
                                        <?php 
                                        $image = get_sub_field('location_map');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $image ) {
                                            echo wp_get_attachment_image( $image, $size );
                                        }   
                                        ?>    
                                    </a>
                                </div>
                                <!-- /.company-map -->
                            </div>
                            <!-- /.col-md-8 -->
                            <div class="col-md-4">
                                <div class="contact-info">
                                    <span class="contact-title"><?php echo $title; ?></span>
                                    <address>
                                        <?php echo $address; ?>
                                    </address>
                                    <p><strong>Phone:</strong> <a href="tel:<?php echo $phone_link; ?>"><?php echo $phone; ?></a></p>
                                    <p><strong>Email:</strong> <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></p>
                                </div>
                                <!-- /.contact-info -->
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                    </div>

				<?php endwhile;

			else :
				echo 'No data';
			endif;
			?>
           
        <!-- /.contact-info-item -->
    </div>
    <!-- /.container -->
</div>
<!-- /#contact-info-area -->

<script>
jQuery(function() {
  jQuery('#menu_area').addClass('home-header');
});</script>

<?php get_footer(); ?>
