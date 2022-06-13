<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


	<?php if( get_field('footer_code_snippet', 'options') ): ?>
		<?php the_field('footer_code_snippet', 'options'); ?>
	<?php endif; ?>

	<footer id="page-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_1', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
					wp_nav_menu( array(
						'menu'              => 'footer-links-1',
						'theme_location'    => 'footer-links-1',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_2', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
					wp_nav_menu( array(
						'menu'              => 'footer-links-2',
						'theme_location'    => 'footer-links-2',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_3', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
					wp_nav_menu( array(
						'menu'              => 'footer-links-3',
						'theme_location'    => 'footer-links-3',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('menu_title_footer_4', 'options') ?></span>
                    <!-- /.footer-title -->
                    <ul>
                        <?php
					wp_nav_menu( array(
						'menu'              => 'footer-links-4',
						'theme_location'    => 'footer-links-4',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
                <div class="footer-breadcrumb">
                    <span class="footer-title">This Page</span>
                    <!-- /.footer-title -->
                    <ul>
                       <li><?php the_breadcrumb(); ?></li>
                    </ul>
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="footer-sitemap">
                    <span class="footer-title"><?php the_field('title_footer_repeater', 'options'); ?></span>
                    <!-- /.footer-title -->
                    <div class="certifications">

                        <?php

			                // check if the repeater field has rows of data
			                if(have_rows('link_list_repeater', 'options')):

				                // loop through the rows of data
				                while(have_rows('link_list_repeater', 'options')) : the_row();

					                $icon = get_sub_field('link_image_footer', 'options');
					                $link  = get_sub_field('link_footer', 'options');

					                ?>  

                                    <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon; ?>" alt=""></a>

				                <?php endwhile;

			                else :
				                echo 'No data';
			                endif;
			                ?>

                    </div>
                    <!-- /.certifications -->
                    <div class="socials-cards">
                        <div class="footer-socials">
                            <span class="sc-title"><?php the_field('title_footer_repeater_soc', 'options'); ?></span>
                            <!-- /.sc-title -->
                            <ul>

                                <?php

			                        // check if the repeater field has rows of data
			                        if(have_rows('social_list_repeater', 'options')):

				                        // loop through the rows of data
				                        while(have_rows('social_list_repeater', 'options')) : the_row();

					                        $icon = get_sub_field('link_image_footer_soc', 'options');
					                        $link  = get_sub_field('link_footer_soc', 'options');

					                        ?>  

                                            <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $icon; ?>" alt=""></a>

				                        <?php endwhile;

			                        else :
				                        echo 'No data';
			                        endif;
			                        ?>
                            
                            </ul>
                        </div>
                        <!-- /.footer-socials -->
                        <div class="footer-cards">
                            <span class="sc-title"><?php the_field('title_payment_footer', 'options'); ?></span>
                            <!-- /.sc-title -->
                            <img src="<?php the_field('image_payment_footer', 'options'); ?>" alt="">
                        </div>
                        <!-- /.footer-cards -->
                    </div>
                    <!-- /.socials-cards -->
                </div>
                <!-- /.footer-sitemap -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_field('copyrights_text', 'options') ?>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.copyright -->
</footer>
<!-- /#page-footer -->

</div>
<!-- /.page-wrapper -->
<div id="cookie-notice">
    <div id="cookie-notice-in">
        <div class="notice-text">
            <p><?php the_field('notice_text_cookies', 'options') ?></p>
        </div>
        <!-- /.notice-text -->
        <div class="notice-btns">
            <a href="#" id="accept-cookie">Ok</a>
        </div>
        <!-- /.notice-btns -->
        <a href="javascript:void(0);" id="close-notice"></a>
    </div>
    <!-- /#cookie-notice-in -->
</div>
<!-- /#cookie-notice -->
<a id="go-to-top" href="javascript:;"><i class="fas fa-chevron-up"></i></a>

    <?php wp_footer(); ?>

	<div id="fixed-cta">
		<span class="label">Get a Free Estimate</span>
		<a href="tel:855-879-6683"><small><img src="<?php bloginfo('template_directory'); ?>/img/ico/phone-solid.svg" alt=""></small><span>Call: </span> <strong>855-879-6683</strong></a>
	</div>
	<!-- // fixed cta  -->

    <script>
    if (!sessionStorage.alreadyClicked) {
        jQuery('#cookie-notice').addClass('slide-up');
        sessionStorage.alreadyClicked = 1;
    }
  </script> 


</body>
</html>

