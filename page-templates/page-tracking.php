<?php 
/**
 * Template Name: Tracking Shipment
 *
**/
get_header(); ?>


<header id="inner-header2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1><?php the_field('title_free_track'); ?></h1>
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

<div class="quote-form-area" id="free-estimate-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php the_field('form_title_track'); ?></p>
                <div class="quote-form">
                    <div class="quote-form-in">
                            <?php the_field('form_code_track'); ?>
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

