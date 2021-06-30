<?php
/**
 * Template Name: Country Facts
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
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_field('title_country_facts'); ?></h1>
                        <h2><?php the_field('title_paragraph_country_facts'); ?></h2>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <div class="container section-area" id="regular-page">
        <div class="row">
            <div class="col-md-12">
                <?php the_field('intro_text_country_facts'); ?>
                <div class="country-facts-holder">

                    <h3>Moving to:</h3>

                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php 

                    // check for rows (parent repeater)
                    if( have_rows('countries_repeater_country_facts') ): ?>
                        <div class="country-facts-single">
                        <?php 

                        // loop through rows (parent repeater)
                        while( have_rows('countries_repeater_country_facts') ): the_row(); ?>
                            <div class="country-facts-single-box">
                                <h4><?php the_sub_field('letter_country_facts'); ?></h4>
                                <?php 

                                // check for rows (sub repeater)
                                if( have_rows('countries_list_country_facts') ): ?>
                                    <ul>
                                    <?php 

                                    // loop through rows (sub repeater)
                                    while( have_rows('countries_list_country_facts') ): the_row();

                                        // display each item as a list - with a class of completed ( if completed )
                                        ?>
                                        <li><a href="<?php the_sub_field('country_link_country_facts'); ?>"><?php the_sub_field('country_name_country_facts'); ?></a></li>
                                    <?php endwhile; ?>
                                    </ul>
                                <?php endif; //if( get_sub_field('items') ): ?>
                            </div>	

                        <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
                        </div>
                    <?php endif; // if( get_field('to-do_lists') ): ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php get_footer(); ?>