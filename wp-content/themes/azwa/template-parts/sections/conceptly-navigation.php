 <!-- Start: Header
============================= -->
<?php
	$azwa_hide_show_search		= get_theme_mod('hide_show_search','1');
	$azwa_header_search		    = get_theme_mod('header_search','fa-search'); 
	$azwa_hs_get_button		    = get_theme_mod('hide_show_get_button');
	$azwa_header_btn			= get_theme_mod('header_get');
	$azwa_header_btn_link		= get_theme_mod('header_btn_link');	
?>
<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>

    <!-- Start: Navigation
    ============================= -->
    <header id="header-section" class="header active-azwa">

    	<?php do_action( 'conceptly_above_header');  ?>

    	<div class="navigator-wrapper">
    		<div class="theme-mobile-nav d-lg-none d-block <?php echo esc_attr(conceptly_sticky_menu()); ?>">
    			<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="theme-mobile-menu">
								<div class="mobile-logo">
									<div class="logo">
										<?php
											if(has_custom_logo())
											{
												the_custom_logo();
											}
											else { 
											?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<h4 class="site-title">
													<?php echo esc_html(get_bloginfo('name'));  ?>
												</h4>	
											</a>
										<?php 						
											}
										?>
										<?php
											$azwa_site_desc = get_bloginfo( 'description');
											if ($azwa_site_desc) : ?>
												<p class="site-description"><?php echo esc_html($azwa_site_desc); ?></p>
										<?php endif; ?>
			                        </div>
								</div>		
								<div class="menu-toggle-wrap">
									<div class="mobile-menu-right"></div>
									<div class="hamburger-menu">
										<button type="button" class="menu-toggle">
											<div class="top-bun"></div>
											<div class="meat"></div>
											<div class="bottom-bun"></div>
										</button>
									</div>
								</div>
								<div id="mobile-m" class="mobile-menu">
									<button type="button" class="header-close-menu close-style"></button>
								</div>
							</div>
						</div>
					</div>
				</div>        
		    </div>
    		<div class="nav-area d-none d-lg-block">
		        <div class="navbar-area <?php echo esc_attr(conceptly_sticky_menu()); ?>">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-3 col-6 my-auto">
		                        <div class="logo">
									<?php
										if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<h4 class="site-title">
												<?php echo esc_html(get_bloginfo('name'));  ?>
											</h4>	
										</a>
									<?php 						
										}
									?>
									<?php
										$azwa_site_desc = get_bloginfo( 'description');
										if ($azwa_site_desc) : ?>
											<p class="site-description"><?php echo esc_html($azwa_site_desc); ?></p>
									<?php endif; ?>
		                        </div>
		                    </div>
		                    <div class="col-lg-9 my-auto">
		                    	<div class="theme-menu">
			                        <nav class="menubar">
			                            <?php 
											wp_nav_menu( 
												array(  
													'theme_location' => 'primary_menu',
													'container'  => '',
													'menu_class' => 'menu-wrap',
													'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
													'walker' => new WP_Bootstrap_Navwalker()
													 ) 
												);
										?>
			                        </nav>	
			                        <div class="menu-right">			
				                        <ul class="header-wrap-right">
											<?php if($azwa_hide_show_search =='1'){ ?>
											<li class="search-button">
												<button id="view-search-btn" class="header-search-toggle"><i class="fa <?php  echo esc_attr( $azwa_header_search ); ?>"></i></button>												
											</li>
											<?php } ?>
											
											<?php if($azwa_hs_get_button =='1'){ ?>
											<li class="header-btn">
												<a class="quote-btn boxed-btn" href="<?php echo esc_url($azwa_header_btn_link);?>"><?php echo esc_html($azwa_header_btn); ?></a>
											</li>
											<?php } ?>
				                        </ul>
				                    </div>
			                    </div>
		                    </div>
						</div>
			        </div>
		        </div>
		    </div>
	    </div>
    </header>
    <!-- Quik search -->
	<div class="view-search-btn header-search-popup">
		<div class="search-overlay-layer"></div>
		<div class="search-overlay-layer"></div>
		<div class="search-overlay-layer"></div>
	    <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'azwa' ); ?>">
	        <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'azwa' ); ?></span>
	        <input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'azwa' ); ?>" name="s" id="popfocus" value="" autofocus>
	        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
	    </form>
        <button type="button" class="close-style header-search-close"></button>
	</div>
	<!-- / -->
    <!-- End: Navigation
    ============================= -->
<?php 
if ( !is_page_template( 'templates/template-homepage.php' ) ) {
	conceptly_breadcrumbs_style();  
}