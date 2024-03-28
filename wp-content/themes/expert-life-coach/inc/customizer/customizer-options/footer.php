<?php

function expert_life_coach_footer( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'expert_life_coach_footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'expert-life-coach'),
		) 
	);

	// Footer Widgets // 
	$wp_customize->add_section(
        'footer_top',
        array(
            'title' 		=> __('Footer Widgets','expert-life-coach'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );

    // Footer Widgets Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_footer_widgets_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_footer_widgets_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Widgets', 'expert-life-coach' ),
			'section'     => 'footer_top',
			'settings'    => 'expert_life_coach_footer_widgets_setting',
			'type'        => 'checkbox'
		) 
	);

	// Footer Bottom // 
	$wp_customize->add_section(
        'expert_life_coach_footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','expert-life-coach'),
			'panel'  		=> 'expert_life_coach_footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'expert_life_coach_footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'expert_life_coach_sanitize_text',
			'priority'  => 3,
		)
	);

	// Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'expert_life_coach_footer_copyright_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'expert_life_coach_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'expert_life_coach_footer_copyright_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Copytight', 'expert-life-coach' ),
			'section'     => 'expert_life_coach_footer_bottom',
			'settings'    => 'expert_life_coach_footer_copyright_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Footer Copyright 
	$wp_customize->add_setting(
    	'expert_life_coach_footer_copyright',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);

	$wp_customize->add_control( 
		'expert_life_coach_footer_copyright',
		array(
		    'label'   		=> __('Copytight','expert-life-coach'),
		    'section'		=> 'expert_life_coach_footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);
}
add_action( 'customize_register', 'expert_life_coach_footer' );

// Footer selective refresh
function expert_life_coach_footer_partials( $wp_customize ){
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'expert_life_coach_footer_copyright_render_callback',
	) );
}
add_action( 'customize_register', 'expert_life_coach_footer_partials' );

// copyright_content
function expert_life_coach_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}