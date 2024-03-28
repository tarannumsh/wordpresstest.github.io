<?php
function expert_life_coach_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    // Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_site_title_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_site_title_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Site Title', 'expert-life-coach' ),
			'section'     => 'title_tagline',
			'settings'    => 'expert_life_coach_site_title_setting',
			'type'        => 'checkbox'
		) 
	);

	// Tagline Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_tagline_setting' , 
			array(
			'default' => '',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_tagline_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Tagline', 'expert-life-coach' ),
			'section'     => 'title_tagline',
			'settings'    => 'expert_life_coach_tagline_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'expert-life-coach'),
		) 
	);

	/*=========================================
	Expert Life Coach Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','expert-life-coach'),
			'panel'  		=> 'header_section',
		)
    );

	$wp_customize->register_panel_type( 'Expert_Life_Coach_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'Expert_Life_Coach_WP_Customize_Section' );

}
add_action( 'customize_register', 'expert_life_coach_header_settings' );


if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class Expert_Life_Coach_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'expert_life_coach_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class Expert_Life_Coach_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'expert_life_coach_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}