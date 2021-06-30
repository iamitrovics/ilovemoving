<?php 
/**
 * Template Name: Testimonials
 *
**/
get_header(); ?>

<header id="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1><?php the_field('title_testimonials'); ?></h1>
                    <h2><?php the_field('paragraph_testimonial'); ?></h2>
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
<div id="testimonials-page">
    <div class="container">
        <div class="row">

            <?php if( have_rows('video_testimonials_repeater') ): ?>
				<?php while( have_rows('video_testimonials_repeater') ): the_row(); ?>

				    <div class="col-md-6">
                        <div class="video-holder">
                            <?php the_sub_field('video_box_testimonials'); ?>
                        </div>
                        <!-- /.video-holder -->
                    </div>
                    <!-- /.col-md-6 -->
                    
				<?php endwhile; ?>
			<?php endif; ?>    
            
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="quote-form-area">
                    <h2><?php the_field('form_title_testimonials'); ?></h2>
                    <div class="quote-form">
                        <div class="quote-form-in">
                                <?php the_field('form_code_testimonials'); ?>
                        </div>
                        <!-- /.quote-form-in -->
                    </div>
                    <!-- /.quote-form -->
                </div>
                <div class="reviews">

                    <?php
                    $loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => -1) ); ?>  
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                
                                <div class="testimonial-item">
                                    <span class="subject">I Love Moving</span>
                                    <!-- /.subject -->
                                    <p><?php the_field('testimonial_text'); ?></p>
                                    <span class="author"><?php the_title(); ?></span>
                                    <div class="star-area"><img src="<?php the_field('testimonial_icon'); ?>" alt=""></div>
                                <!-- /.star-area -->
                                </div>
                                <!-- /.testimonial-item -->
                                
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>      
                    
                </div>
                <!-- /.reviews -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#testimonials-page -->

<?php get_footer(); ?>

