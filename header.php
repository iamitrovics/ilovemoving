<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>

	<?php if ( is_singular( array('cities', 'post') ) ) { ?>
        
        <?php if( get_field('general_schema_schema', 'options') ): ?>
            <?php the_field('general_schema_schema', 'options'); ?>
        <?php endif; ?>    

    <?php } elseif (is_page_template('page-templates/reviews-template.php')) { ?>
        
        <?php if( get_field('general_schema_schema', 'options') ): ?>
            <?php the_field('general_schema_schema', 'options'); ?>
        <?php endif; ?>    

	<?php } else { ?>

        <?php if( get_field('general_schema_with_reviews', 'options') ): ?>
            <?php the_field('general_schema_with_reviews', 'options'); ?>
        <?php endif; ?>    

	<?php } ?>  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

	<div class="menu-overlay"></div>
	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close-x.svg" alt=""></a>
		</header>
		<!-- // header  -->


		<nav id="sidebar-menu-wrapper">
			<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="" class="mobile-logo">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'mobile',
						'theme_location'    => 'mobile',
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
			<!-- // menu  -->

		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->		

	<div id="fixed-sidenav">
			<div class="sticky-popup">
				<div class="popup-header">
					<span class="popup-title">Quick Quote</span>
				</div>
				<!-- /.popup-header -->
				<div class="popup-content">
					<div class="quote-form">
						<div class="quote-form-in">

							<h4>What are you moving?</h4>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
                                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#home-quote-side" role="tab" aria-controls="profile" aria-selected="false">Home</a>
                                </li>								
								<li class="nav-item">
                                    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#auto-quote-side" role="tab" aria-controls="profile" aria-selected="false">Auto</a>
                                </li>							
                                 <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#quote-for-both-side" role="tab" aria-controls="contact" aria-selected="false">Both</a>
                                </li>
 
                            </ul>

                            <div class="tab-content" id="myTabContent">

								<div class="tab-pane fade  show active" id="home-quote-side" role="tabpanel" aria-labelledby="contact-tab">
                                    <?php echo do_shortcode('[contact-form-7 id="180" title="Estimate Form"]'); ?>
                                </div>
                                <!-- // tab 3  -->

                            	<div class="tab-pane fade" id="quote-for-both-side" role="tabpanel" aria-labelledby="contact-tab">
                                    <?php echo do_shortcode('[contact-form-7 id="10614" title="Quote For Both"]'); ?>
                                </div>
                                <!-- // tab 3  -->

       
                                <div class="tab-pane fade" id="auto-quote-side" role="tabpanel" aria-labelledby="profile-tab">
                                    <?php echo do_shortcode('[contact-form-7 id="10613" title="Auto Quote"]'); ?>
                                </div>
                                <!-- // tab 2  -->
    
                            </div>
                            <!-- // tabs content  -->

						</div>
						<!-- /.quote-form-in -->
					</div>
				</div>
				<!-- /.popup-content -->
			</div>
			<!-- /.sticky-popup -->
		</div>
		<!-- /#fixed-sidenav -->



		<div class="page-wrapper">
			<div id="menu_area" class="menu-area">
				<div id="cor-notice">
					<?php the_field('notice_text_top', 'options'); ?>
				</div>
				<div id="menu-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<nav class="navbar navbar-light navbar-expand-lg mainmenu">
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt=""></a>
									<!-- /.navbar-brand -->
									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav ml-auto">
											<?php if( have_rows('menu_items_header_main', 'options') ): ?>
										<?php while( have_rows('menu_items_header_main', 'options') ): the_row(); ?>

											<?php if (get_sub_field('link_type') == 'Single Item') { ?>
												<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a></li>
											<?php } elseif (get_sub_field('link_type') == 'Dropdown') { ?>

												<li class="dropdown">
													<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>" aria-expanded="false"><?php the_sub_field('item_label'); ?></a>
													<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
														<?php if( have_rows('dropdown_items') ): ?>
															<?php while( have_rows('dropdown_items') ): the_row(); ?>
																<li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label'); ?></a></li>
															<?php endwhile; ?>
														<?php endif; ?>
													</ul>
												</li>													

											<?php } elseif (get_sub_field('link_type') == 'Dropdown Multilevel') { ?>

												<li class="dropdown">
													<a class="dropdown-toggle" href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('item_label'); ?></a>
													<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">

														<?php if( have_rows('multilevel_items') ): ?>
															<?php while( have_rows('multilevel_items') ): the_row(); ?>

																<?php if (get_sub_field('type_of_item') == 'Single Items') { ?>

																	<li><a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label_sub'); ?></a></li>

																<?php } elseif (get_sub_field('type_of_item') == 'Dropdown Items') { ?>
																	<li class="dropdown">
																		<a class="dropdown-toggle" href="<?php the_sub_field('item_link'); ?>" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php the_sub_field('item_label_sub'); ?></a>
																		<ul class="dropdown-menu fade" aria-labelledby="navbarDropdown">
																			<?php if( have_rows('dropdown_items_sub') ): ?>
																			<?php while( have_rows('dropdown_items_sub') ): the_row(); ?>

																				<li><a href="<?php the_sub_field('link_sub_sub'); ?>"><?php the_sub_field('label_sub_sub'); ?></a></li>

																			<?php endwhile; ?>
																			<?php endif; ?>
																		</ul>
																	</li>
																<?php } ?>   																

															<?php endwhile; ?>
														<?php endif; ?>

													</ul>
												</li>

											<?php } ?>   

											<?php endwhile; ?>
										<?php endif; ?>
										</ul>
										<!-- /.navbar-nav -->

										<div id="mobile-menu--btn" class="d-lg-none">
											<a href="javascript:;">
												<span></span>
												<span></span>
												<span></span>
												<div class="clearfix"></div>
											</a>
										</div>
										<!-- // mobile  -->	

									</div>
									<!-- /.navbar-collapse -->
								</nav>
								<!-- /.mainmenu -->
							</div>
							<!-- /.col-md-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.continer -->
				</div>
				<!-- /#menu-wrapper -->
			</div>
			<!-- // desktop menu  --> 		
