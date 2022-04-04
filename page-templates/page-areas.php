<?php 
/**
 * Template Name: Areas We Serve
 *
**/
get_header(); ?>

<header id="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-caption">
                    <h1><?php the_title(); ?></h1>
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

<section id="cities-list">
    <div class="container">
        <div class="row">

                <div class="col-md-12">
                    <ul>
                        <?php
                            $loop = new WP_Query( array( 'post_type' => 'cities', 'posts_per_page' => 14325) ); ?>  
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li>
                            <a href="<?php echo get_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>

                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>     
                    </ul>
                   
                </div>	
                <!-- // col-md-12  -->

             

        </div>
        <!-- // row  -->
    </div>
    <!-- // container  -->
</section>
<!-- // list  -->

<?php get_footer(); ?>