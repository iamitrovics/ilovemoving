<?php 
/**
 * Template Name: About Us
 *
**/
get_header(); ?>

    <header id="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-caption">
                        <h1><?php the_field('title_about'); ?></h1>
                        <h2><?php the_field('title_paragraph_about'); ?></h2>
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
                if( have_rows('flexible_content') ):?>
                    <!--	// loop through the rows of data-->
	                <?php  while ( have_rows('flexible_content') ) : the_row();?>
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
