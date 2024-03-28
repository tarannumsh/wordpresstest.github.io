<?php 
  $expert_life_coach_aboutus = get_theme_mod('expert_life_coach_aboutus_setting','1');
  
  if($expert_life_coach_aboutus == '1') {
?>
<section id="aboutus-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 align-self-center">
        <?php
          $expert_life_coach_aboutus_section_image = get_theme_mod('expert_life_coach_aboutus_section_image');
        ?>   
        <?php if( $expert_life_coach_aboutus_section_image != ''){?>
          <img src="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_aboutus_section_image)); ?>">
        <?php }?>
      </div>
      <div class="col-lg-6 col-md-6 align-self-center">
        <?php
          $expert_life_coach_aboutus_section_heading = get_theme_mod( 'expert_life_coach_aboutus_section_heading' );

          $expert_life_coach_aboutus_section_content = get_theme_mod( 'expert_life_coach_aboutus_section_content' );
        ?>
        <?php
          if( $expert_life_coach_aboutus_section_heading != ''){?>
          <h3><?php echo esc_html( apply_filters('expert_life_coach_topheader', $expert_life_coach_aboutus_section_heading)); ?></h3>
        <?php } ?>
        <?php
          if( $expert_life_coach_aboutus_section_content != ''){?>
          <p class="main-content"><?php echo esc_html( apply_filters('expert_life_coach_topheader', $expert_life_coach_aboutus_section_content)); ?></p>
        <?php } ?>
        <div class="aboutus-box">
          <?php
            $expert_life_coach_post_category = get_theme_mod('expert_life_coach_offer_section_category');
            if($expert_life_coach_post_category){
              $expert_life_coach_page_query = new WP_Query(array( 'category_name' => esc_html( $expert_life_coach_post_category ,'expert-life-coach')));?>
              <?php while( $expert_life_coach_page_query->have_posts() ) : $expert_life_coach_page_query->the_post(); ?>
                  <div class="cat-inner-box mb-4">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 col-4 align-self-center">
                        <?php the_post_thumbnail(); ?>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 col-8 align-self-center">
                        <div class="offer-box">
                          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                          <p><?php echo wp_trim_words( get_the_content(),12 );?></p>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              wp_reset_postdata();
            }?>
        </div>
        <div class="offer-box-btn mt-5">
          <?php
            $expert_life_coach_aboutus_btn_link = get_theme_mod( 'expert_life_coach_aboutus_btn_link' );
            $expert_life_coach_aboutus_btn_text = get_theme_mod( 'expert_life_coach_aboutus_btn_text' );
            if( $expert_life_coach_aboutus_btn_link != ''|| $expert_life_coach_aboutus_btn_text != ''){?>
            <a href="<?php echo esc_url( apply_filters('expert_life_coach_topheader', $expert_life_coach_aboutus_btn_link)); ?>"><?php echo esc_html( apply_filters('expert_life_coach_topheader', $expert_life_coach_aboutus_btn_text)); ?></h3>
          <?php } ?>          
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>