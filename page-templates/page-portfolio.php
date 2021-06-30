<?php
/**
 * Template Name: Portfolio
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

	<header id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-caption">
                        <h1><?php the_field('title_portfolio'); ?></h1>
                        <h2><?php the_field('title_paragraph_portfolio'); ?></h2>
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

    <div id="gallery-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-items">

                        <?php 
                            $images = get_field('gallery');
                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>

                                    <div class="gallery-item">
                                        <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">
                                            <img src="<?php echo $image['url']; ?>" />
                                        </a>
                                    </div>

                                <?php endforeach; ?>
                                
                        <?php endif; ?>

                    </div>
                    <!-- /.gallery-items -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#gallery-page -->

<?php get_footer(); ?>