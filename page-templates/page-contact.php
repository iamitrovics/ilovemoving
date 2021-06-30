<?php 
/**
 * Template Name: Contact Us
 *
**/
get_header(); ?>


<header id="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1><?php the_field('title_contact'); ?></h1>
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
<div id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-8">
                <div class="contact-form">
                        <?php the_field('form_code_contact'); ?>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-md-5 col-lg-4">
                <div class="contact-info">
                    <?php the_field('contact_links_contact'); ?>
                </div>
                <!-- /.contact-info -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /#contact-page -->

<?php get_footer(); ?>
