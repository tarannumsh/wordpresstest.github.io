<?php
function expert_life_coach_social_media_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/*=========================================
	Social Media
	=========================================*/
	$wp_customize->add_section(
        'expert_life_coach_social_media_header',
        array(
        	'priority'      => 3,
            'title' 		=> __('Social Media','expert-life-coach'),
			'panel'  		=> 'header_section',
		)
    );

   	$wp_customize->add_setting(
    	'expert_life_coach_social_media_facebook',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_social_media_facebook',
		array(
		    'label'   		=> __('Facebook URL','expert-life-coach'),
		    'section'		=> 'expert_life_coach_social_media_header',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_life_coach_social_media_twitter',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_social_media_twitter',
		array(
		    'label'   		=> __('Twitter URL','expert-life-coach'),
		    'section'		=> 'expert_life_coach_social_media_header',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)  
	);	

	$wp_customize->add_setting(
    	'expert_life_coach_social_media_instagram',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_social_media_instagram',
		array(
		    'label'   		=> __('Instagram URL','expert-life-coach'),
		    'section'		=> 'expert_life_coach_social_media_header',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_life_coach_social_media_linkedin',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_social_media_linkedin',
		array(
		    'label'   		=> __('Linkedin URL','expert-life-coach'),
		    'section'		=> 'expert_life_coach_social_media_header',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'expert_life_coach_social_media_youtube',
    	array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);	
	$wp_customize->add_control( 
		'expert_life_coach_social_media_youtube',
		array(
		    'label'   		=> __('Youtube URL','expert-life-coach'),
		    'section'		=> 'expert_life_coach_social_media_header',
			'type' 			=> 'url',
			'transport'         => $selective_refresh,
		)  
	);
}
add_action( 'customize_register', 'expert_life_coach_social_media_header_settings' );