<?php 
/**
 * Template Name: Free Estimate
 *
**/
get_header(); ?>


<header id="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1><?php the_field('title_estimate'); ?></h1>
                    <h2><?php the_field('title_paragraph_estimate'); ?></h2>
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

<?php get_footer(); ?>

