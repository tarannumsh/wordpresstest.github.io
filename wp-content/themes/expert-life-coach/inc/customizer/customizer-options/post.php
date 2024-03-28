<?php
function expert_life_coach_post_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'expert_life_coach_post', array(
			'priority' => 31,
			'title' => esc_html__( 'Post Option', 'expert-life-coach' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_archive_post_setting', array(
			'title' => esc_html__( 'Archive Post', 'expert-life-coach' ),
			'priority' => 1,
			'panel' => 'expert_life_coach_post',
		)
	);
		
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
		'expert_life_coach_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_archive_post_setting',
			'settings'    => 'expert_life_coach_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	/*=========================================
	Single Post  Section
	=========================================*/
	$wp_customize->add_section(
		'expert_life_coach_single_post', array(
			'title' => esc_html__( 'Single Post', 'expert-life-coach' ),
			'priority' => 3,
			'panel' => 'expert_life_coach_post',
		)
	);
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_author_settings',
			'type'        => 'checkbox'
		) 
	);
	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_single_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_single_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_single_post',
			'settings'    => 'expert_life_coach_single_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);
}

add_action( 'customize_register', 'expert_life_coach_post_setting' );