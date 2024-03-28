<?php
function expert_life_coach_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_life_coach_general', array(
			'priority' => 31,
			'title' => esc_html__( 'General', 'expert-life-coach' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Section', 'expert-life-coach' ),
			'priority' => 1,
			'panel' => 'expert_life_coach_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'expert_life_coach_breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_life_coach_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'expert_life_coach_breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','expert-life-coach'),
			'section' => 'expert_life_coach_breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_breadcrumb_setting',
			'settings'    => 'expert_life_coach_hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_preloader_section_setting', array(
			'title' => esc_html__( 'Preloader', 'expert-life-coach' ),
			'priority' => 3,
			'panel' => 'expert_life_coach_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_preloader_setting' , 
			array(
			'default' => '',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_preloader_section_setting',
			'settings'    => 'expert_life_coach_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top', 'expert-life-coach' ),
			'priority' => 3,
			'panel' => 'expert_life_coach_general',
		)
	);

	// Scroll To Top Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_scroll_top_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_scroll_to_top_section_setting',
			'settings'    => 'expert_life_coach_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Woocommerce Section
	=========================================*/
	$wp_customize->add_section(
		'woocommerce_section_setting', array(
			'title' => esc_html__( 'Woocommerce Settings', 'expert-life-coach' ),
			'priority' => 3,
			'panel' => 'expert_life_coach_general',
		)
	);

	$wp_customize->add_setting(
    	'expert_life_coach_custom_shop_per_columns',
    	array(
			'default' => '3',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_custom_shop_per_columns',
		array(
		    'label'   		=> __('Product Per Columns','expert-life-coach'),
		    'section'		=> 'woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_life_coach_custom_shop_product_per_page',
    	array(
			'default' => '9',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_custom_shop_product_per_page',
		array(
		    'label'   		=> __('Product Per Page','expert-life-coach'),
		    'section'		=> 'woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	// Woocommerce Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_wocommerce_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_wocommerce_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Woocommerce Sidebar', 'expert-life-coach' ),
			'section'     => 'woocommerce_section_setting',
			'settings'    => 'expert_life_coach_wocommerce_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
		'sticky_header_section_setting', array(
			'title' => esc_html__( 'Sticky Header Settings', 'expert-life-coach' ),
			'priority' => 3,
			'panel' => 'expert_life_coach_general',
		)
	);

	// Sticky Header Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_sticky_header' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_sticky_header', 
		array(
			'label'	      => esc_html__( 'Hide / Show Sticky Header', 'expert-life-coach' ),
			'section'     => 'sticky_header_section_setting',
			'settings'    => 'expert_life_coach_sticky_header',
			'type'        => 'checkbox'
		) 
	);
}

add_action( 'customize_register', 'expert_life_coach_general_setting' );