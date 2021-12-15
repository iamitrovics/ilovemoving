<?php
/**
 * Template Name: FAQ
 *
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="inner-header2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_field('title_faq'); ?></h1>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <div id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="faq__accordion">

                        <?php

			                // check if the repeater field has rows of data
			                if(have_rows('accordion_repeater')):

				                // loop through the rows of data
				                while(have_rows('accordion_repeater')) : the_row();

                                    $title = get_sub_field('title');
					                $content  = get_sub_field('content');

					                ?>  

					                <div class="faq-wrap">
                                        <h3 class="accordion-heading"><?php echo $title; ?></h3>
                                        <div class="content">
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

<?php get_footer(); ?>