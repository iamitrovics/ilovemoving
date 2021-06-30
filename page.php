<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

	<header id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-caption">
                        <h1><?php the_field('simple_header'); ?></h1>
                        <h2><?php the_field('simple_header_paragraph'); ?></h2>
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

    <section id="regular-page">
        <div class="container">
            <div class="row">
                <?php
                // check if the flexible content field has rows of data
                if( have_rows('flexible_content_simple') ):?>
                    <!--	// loop through the rows of data-->
	                <?php  while ( have_rows('flexible_content_simple') ) : the_row();?>
                        <?php if( get_row_layout() == '1_column' ):?>

                        <?php

			                // check if the repeater field has rows of data
			                if(have_rows('content_block')):
				                // loop through the rows of data
				                while(have_rows('content_block')) : the_row();

					                $column = get_sub_field('content_column');
					                ?>  

                                    <div class="col-lg-12">
                                 <?php echo $column; ?>
                             </div>

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>
      
                <?php elseif( get_row_layout() == '2_column' ):?>
                    <?php

			                // check if the repeater field has rows of data
			                if(have_rows('content_block_2')):

				                // loop through the rows of data
				                while(have_rows('content_block_2')) : the_row();

					                $column = get_sub_field('content_column');

					                ?>  

                                    <div class="col-lg-6">
                                 <?php echo $column; ?>
                             </div>

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>

                    <?php endif;?>
                <?php endwhile;?>

                <?php else :?>

                    <!--	// no layouts found-->

                <?php endif;?>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    

<?php get_footer(); ?>
