<?php 
/**
 * Template Name: Thank You
 *
**/
get_header(); ?>

    <div id="error-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="not-found-title"><?php the_field('text_first_tnx'); ?></span>
                    <h1><?php the_field('title_tnx'); ?></h1>
                    <p><?php the_field('text_second_tnx'); ?></p>
                    <?php get_template_part('searchform'); ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#error-page -->

<?php get_footer(); ?>
