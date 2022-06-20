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

<div class="mobile-quote-form">
    <div class="quote-form">
        <div class="quote-form-in">
            <span class="quote-form-title">Quick Quote</span>
			<?php echo do_shortcode( '[contact-form-7 id="180" title="Estimate Form"]' ); ?>
        </div>
        <!-- /.quote-form-in -->
    </div>
</div>
<!-- /.mobile-quote-form -->
<header id="city-header" style="background-image: url(<?php the_field('background_image_ctity_header') ?>);">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-xl-5">
                <div class="header-caption">
                    <span class="heading-title"><?php the_field('custom_title_city_header') ?></span>
                    <p><?php the_field('hero_text_city_header') ?></p>
                    <div class="trusted-logos">
                        <ul>
                            <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/fmc.png" alt="FMC" width="100" height="100"></a></li>
                            <li><a href="http://www.bbb.org/losangelessiliconvalley/business-reviews/moving-and-storage-company/i-love-moving-in-los-angeles-ca-100114726" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/bbb.png" alt="bbb" width="100" height="100"></a></li>
                            <li><a href="https://www.customerlobby.com/reviews/10605/i-love-moving/review/119351" target="_blank" class="landing-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/customer-lobby.png" alt="" width="100" height="100"></a></li>
                            <li><a href="https://www.checkbca.org/report/i-love-international-movers-100114726" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/bca-ilm.png" alt="BCA" width="138" height="78"></a></li>
                            <li><a title="yelp" href="https://www.yelp.com/biz/i-love-international-moving-los-angeles-7" class="landing-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/yelp.png" alt="Yelp" width="100" height="100"></a></li>
                            <li><a href="http://www.iamovers.org/" target="_blank" class="landing-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/logo-iam.jpg" alt="International Association of Movers" width="150" height="150"></a></li>
                        </ul>
                    </div>
                    <!-- /.trusted-logos -->
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-xl-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>
<!-- /#city-header -->

<?php if( have_rows('content_layout_city') ): ?>
    <?php while( have_rows('content_layout_city') ): the_row(); ?>

        <?php if( get_row_layout() == 'intro_cities' ): ?>

            <section id="city-intro">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="city-intro-content">
                                <h1><?php the_sub_field('main_title_intro_cities') ?></h1>
                                <p><?php the_sub_field('content_block_intro_cities') ?></p>
                            </div>
                            <!-- /.city-intro-content -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="city-intro-photo">
                                <?php the_sub_field('featured_video_intro_cities') ?>
                            </div>
                            <!-- /.city-intro-photo -->
                        </div>
                        <!-- /.col-md-6 -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /#city-intro -->

        <?php elseif( get_row_layout() == 'services' ): ?>

            <section id="city-services" style="background-image: url(<?php the_sub_field('services_background_cities') ?>);">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <div class="city-services-intro">
                                <?php the_sub_field('intro_text_serv') ?>
                            </div>
                            <!-- /.city-services-intro -->
                        </div>
                        <!-- /.col-md-5 -->
                        <div class="col-md-7">
                            <div class="city-services-list">
                                <div class="row">
                                    
                                     <?php
                                        $post_objects = get_sub_field('services_list_post_object');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>
                                
                                                    <div class="col-xl-3 col-md-6">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <div class="csl-item">
                                                                <img src="<?php the_field('header_icon_services'); ?>" alt="">
                                                                <span class="service-title"><?php the_field('header_title_services'); ?></span>
                                                            </div>
                                                            <!-- /.csl-item -->
                                                        </a>
                                                    </div>
                                                    <!-- /.col-xl-3 col-md-6 -->

                                                <?php endforeach; ?>
                                            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                        <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.city-services-list -->
                        </div>
                        <!-- /.col-md-7 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /#city-services -->

        <?php elseif( get_row_layout() == 'testimonials_cities' ): ?>

        <div id="testimonials" style="background-image: url(<?php the_sub_field('background_image_test_cities'); ?>" class="section-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php the_sub_field('title_testimonials_cities'); ?></h2>
                        <?php
                                $post_objects = get_sub_field('testimonials_list_cities');

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
                            <?php the_sub_field('video_testimonials_cities'); ?>
                        </div>
                        <!-- /.about-video -->
                        <div class="view-all-holder">
                            <p><strong><a href="<?php the_sub_field('testimonial_link_cities'); ?>"><?php the_sub_field('testimonial_label_cities'); ?></a></strong></p>
                        </div>
                        <!-- /.view-all-holder -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                    <?php if( get_sub_field('description_box_cities') ): ?>
                        <div class="city-middle-content">
                            <?php the_sub_field('description_box_cities'); ?> 
                        </div>
                        <!-- /.city-middle-content -->
                        <?php else : ?>
                                
                    <?php endif; ?>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#testimonials -->

        <?php elseif( get_row_layout() == 'reviews_links_slider' ): ?>

        <div id="city-reviews">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                         <div class="member-area">
                            <h2><?php the_sub_field('icons_title_cities'); ?></h2>
                            <p>Member of:</p>
                            <div class="trusted-logos">
                                <ul>
                                    <li><a href="#" target="_blank"><img  src="<?php echo get_template_directory_uri(); ?>/img/logos/city/fmc.png" alt="FMC" width="100" height="100"></a></li>
                                    <li><a href="http://www.bbb.org/losangelessiliconvalley/business-reviews/moving-and-storage-company/i-love-moving-in-los-angeles-ca-100114726" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/bbb.png" alt="bbb" width="100" height="100"></a></li>
                                    <li><a href="https://www.customerlobby.com/reviews/10605/i-love-moving/review/119351" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/customer-lobby.png" alt="" width="100" height="100"></a></li>
                                    <li><a href="https://www.checkbca.org/report/i-love-international-movers-100114726" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/bca-ilm.png" alt="BCA" width="138" height="78"></a></li>
                                    <li><a title="yelp" href="https://www.yelp.com/biz/i-love-international-moving-los-angeles-7"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/yelp.png" alt="Yelp" width="100" height="100"></a></li>
                                    <li><a href="http://www.iamovers.org/" target="_blank" class="landing-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/logo-iam.jpg" alt="International Association of Movers" width="150" height="150"></a></li>
                                    <li><a href="https://www.instagram.com/iloveINTmoving/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logos/city/ig-logo.png" alt="I Love Moving Instagram" width="50" height="50"></a></li>
                                </ul>
                            </div>
                            <!-- /.trusted-logos -->
                        </div>
                        <!-- /.header-caption -->
                    </div>
                    <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <div id="city-reviews-slider">

                            <?php
                                $post_objects = get_sub_field('slider_reviews_cities_po');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                
                                            <div>
                                                <div class="review-area">
                                                    <div class="author-info">
                                                        <img src="<?php the_field('author_image_yelp'); ?>" alt="">
                                                        <span class="author"><?php the_title(); ?></span>
                                                        <!-- /.author -->
                                                    </div>
                                                    <!-- /.author-info -->
                                                    <div class="review-info">
                                                        <?php the_field('review_content_yelp') ?>
                                                        <div class="review-logo">
                                                            <a href="<?php the_field('reviews_logo_link'); ?>" target="_blank"><img src="<?php the_field('reviews_logo_yelp'); ?>" alt="Yelp Logo"></a>
                                                        </div>
                                                        <!-- /.review-logo -->
                                                    </div>
                                                    <!-- /.review-info -->
                                                </div>
                                                <!-- /.review-area -->
                                            </div>
                                
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                        <!-- /#city-reviews-slider -->
                
                    </div>
                    <!-- /.col-md-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#city-reviews -->

        <?php elseif( get_row_layout() == 'contact_us' ): ?>

        <section id="city-contact">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-md-5">
                       <div class="city-contact-content">
                            <?php the_sub_field('contact_content_cities'); ?>
                       </div>
                        <!-- /.city-contact-content --> 
                    </div>
                    <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <div class="city-map">
                            <?php the_sub_field('map_code'); ?>
                            <div class="estimate-button">
                                <a href="<?php the_sub_field('estimate_link'); ?>"><?php the_sub_field('estimate_label'); ?></a> 
                            </div>
                            <!-- /.estimate-button --> 
                        </div>
                        <!-- /.city-map -->
                    </div>
                    <!-- /.col-md-7 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /#city-contact -->

        <?php elseif( get_row_layout() == 'full_width_content' ): ?>

            <div class="container section-area regular-page">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full-content">
                            <?php the_sub_field('content_block'); ?>
                        </div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        <?php elseif( get_row_layout() == 'image_left_text_right' ): ?>

            <div class="container regular-page city-regular">
                <div class="row">
                    <div class="col-md-6">
                        <div class="featured-photo section-cities">
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
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="full-content">
                            <?php the_sub_field('content_block'); ?>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        <?php elseif( get_row_layout() == 'image_right_text_left' ): ?>

            <div class="container regular-page city-regular">
                <div class="row">
                    <div class="col-md-6">
                        <div class="full-content">
                            <?php the_sub_field('content_block'); ?>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="featured-photo section-cities">
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
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        <?php elseif( get_row_layout() == 'full_width_image' ): ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="featured-photo section-cities">
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
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        
            
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer(); ?>
