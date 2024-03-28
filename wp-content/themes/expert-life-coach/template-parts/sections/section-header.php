<header class="main-header">
	<div class="<?php if( get_theme_mod( 'expert_life_coach_sticky_header', '1') != '') { ?>sticky-header<?php } else { ?>close-sticky<?php } ?>">
		<div class="middle-header-aera py-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3 align-self-center">
						<div class="logo text-center">
							<?php if(has_custom_logo()) {
								the_custom_logo();
							} else { 
									$expert_life_coach_site_title = get_theme_mod('expert_life_coach_site_title_setting','1');
									if($expert_life_coach_site_title == '1') { ?>
										<h1 class="site-title">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<?php 
													esc_html(bloginfo('name'));
												?>
											</a>
										</h1>
									<?php }
									$expert_life_coach_tagline = get_theme_mod('expert_life_coach_tagline_setting' );
									if($expert_life_coach_tagline  ) { ?>
								<?php
									$expert_life_coach_site_desc = get_bloginfo( 'description'); ?>
									<p class="site-description"><?php echo esc_html($expert_life_coach_site_desc); ?></p>
								<?php } ?>
							<?php }?>
						</div>
					</div>
					<div class="col-lg-5 col-md-3 align-self-center">
						<nav class="navbar navbar-expand-lg navbaroffcanvase">
				  			<div class="navbar-menubar responsive-menu">
				  				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php esc_attr('Toggle navigation','expert-life-coach'); ?>"> 
				      				<i class="fa fa-bars"></i>
				      			</button>
					          	<div class="collapse navbar-collapse navbar-menu">
					          		<button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu" aria-label="<?php esc_attr('Toggle navigation','expert-life-coach'); ?>"> 
					          			<i class="fa fa-times"></i>
					      			</button> 
									<?php
						                wp_nav_menu( array( 
						                  'theme_location' => 'primary',
						                  'container_class' => 'main-menu clearfix' ,
						                  'menu_class' => 'clearfix',
						                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
						                  'fallback_cb' => 'wp_page_menu',
						                ) );
					            	?>
					          	</div>
					        </div>
				    	</nav>
					</div>
					<div class="col-lg-3 col-md-3 align-self-center">
						<div class="searching-area">
							<?php get_search_form(); ?>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 text-md-end text-center align-self-center social-area">
		    			<?php
							$expert_life_coach_social_media_facebook = get_theme_mod('expert_life_coach_social_media_facebook');
							$expert_life_coach_social_media_twitter = get_theme_mod('expert_life_coach_social_media_twitter');
							$expert_life_coach_social_media_instagram = get_theme_mod('expert_life_coach_social_media_instagram');
							$expert_life_coach_social_media_linkedin = get_theme_mod('expert_life_coach_social_media_linkedin');
							$expert_life_coach_social_media_youtube = get_theme_mod('expert_life_coach_social_media_youtube');
						?>
						<?php if( $expert_life_coach_social_media_facebook != ''){?>
							<a class="me-2" href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_social_media_facebook)); ?>"><i class="fab fa-facebook-f"></i></a>
						<?php }?>
						<?php if( $expert_life_coach_social_media_twitter != ''){?>
							<a class="me-2" href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_social_media_twitter)); ?>"><i class="fab fa-twitter"></i></a>
						<?php }?>
						<?php if( $expert_life_coach_social_media_instagram != ''){?>
							<a class="me-2" href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_social_media_instagram)); ?>"><i class="fab fa-instagram"></i></a>
						<?php }?>
						<?php if( $expert_life_coach_social_media_linkedin != ''){?>
							<a class="me-2" href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_social_media_linkedin)); ?>"><i class="fab fa-linkedin-in"></i></a>
						<?php }?>
						<?php if( $expert_life_coach_social_media_youtube != ''){?>
							<a href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_social_media_youtube)); ?>"><i class="fab fa-youtube"></i></a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>		
</header>