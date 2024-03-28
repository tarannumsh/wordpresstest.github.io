<?php
function expert_life_coach_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_life_coach_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'expert-life-coach' ),
		)
	);
	
	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_slider_section', array(
			'title' => esc_html__( 'Slider Section', 'expert-life-coach' ),
			'priority' => 13,
			'panel' => 'expert_life_coach_frontpage_sections',
		)
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_slider_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_slider_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_slider_section',
			'settings'    => 'expert_life_coach_slider_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Slider 1
	$wp_customize->add_setting( 
    	'expert_life_coach_slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'expert_life_coach_slider1',
		array(
		    'label'   		=> __('Slider 1','expert-life-coach'),
		    'section'		=> 'expert_life_coach_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Slider 2
	$wp_customize->add_setting(
    	'expert_life_coach_slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'expert_life_coach_slider2',
		array(
		    'label'   		=> __('Slider 2','expert-life-coach'),
		    'section'		=> 'expert_life_coach_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'expert_life_coach_slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'expert_life_coach_slider3',
		array(
		    'label'   		=> __('Slider 3','expert-life-coach'),
		    'section'		=> 'expert_life_coach_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// Slider Text
	$wp_customize->add_setting( 
    	'expert_life_coach_slider_text',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'expert_life_coach_slider_text',
		array(
		    'label'   		=> __('Slider Text','expert-life-coach'),
		    'section'		=> 'expert_life_coach_slider_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);


	/*=========================================
	About Us Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_aboutus_section', array(
			'title' => esc_html__( 'About Us Section', 'expert-life-coach' ),
			'priority' => 13,
			'panel' => 'expert_life_coach_frontpage_sections',
		)
	);

	// About Us Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_aboutus_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_aboutus_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_aboutus_section',
			'settings'    => 'expert_life_coach_aboutus_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
		'expert_life_coach_aboutus_section_image',
		array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'expert_life_coach_aboutus_section_image',
			array(
				'label' => __('About Us Image','expert-life-coach'),
				'section' => 'expert_life_coach_aboutus_section',
			)
		)
	);

	// About Heading
	$wp_customize->add_setting( 
    	'expert_life_coach_aboutus_section_heading',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);	

	$wp_customize->add_control( 
		'expert_life_coach_aboutus_section_heading',
		array(
		    'label'   		=> __('About Heading','expert-life-coach'),
		    'section'		=> 'expert_life_coach_aboutus_section',
			'type' 			=> 'text',
		)
	);

	// About Text
	$wp_customize->add_setting( 
    	'expert_life_coach_aboutus_section_content',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control( 
		'expert_life_coach_aboutus_section_content',
		array(
		    'label'   		=> __('About Content','expert-life-coach'),
		    'section'		=> 'expert_life_coach_aboutus_section',
			'type' 			=> 'text',
		)
	);

	$categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting(
    	'expert_life_coach_offer_section_category',
    	array(
	        'default'   => 'select',
	        'sanitize_callback' => 'expert_life_coach_sanitize_choices',
    	)
    );
    $wp_customize->add_control(
    	'expert_life_coach_offer_section_category',
    	array(
	        'type'    => 'select',
	        'choices' => $offer_cat,
	        'label' => __('Select Category','expert-life-coach'),
	        'section' => 'expert_life_coach_aboutus_section',
    	)
    );

	// About Button Text
	$wp_customize->add_setting( 
    	'expert_life_coach_aboutus_btn_text',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control( 
		'expert_life_coach_aboutus_btn_text',
		array(
		    'label'   		=> __('About Button Text','expert-life-coach'),
		    'section'		=> 'expert_life_coach_aboutus_section',
			'type' 			=> 'text',
		)
	);

	// About Button Link
	$wp_customize->add_setting( 
    	'expert_life_coach_aboutus_btn_link',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control( 
		'expert_life_coach_aboutus_btn_link',
		array(
		    'label'   		=> __('About Button Link','expert-life-coach'),
		    'section'		=> 'expert_life_coach_aboutus_section',
			'type' 			=> 'text',
		)
	);

}

add_action( 'customize_register', 'expert_life_coach_blog_setting' );

// service selective refresh
function expert_life_coach_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'expert_life_coach_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'expert_life_coach_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'expert_life_coach_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'expert_life_coach_blog_section_partials' );

// blog_title
function expert_life_coach_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function expert_life_coach_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function expert_life_coach_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}