<?php

function theme_scripts($wp_customize)
{

	$wp_customize->add_panel('panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'witch'),
	));

	// sections

	$wp_customize->add_section(
		'scripts',
		array(
			'title'    => __('Header/Footer Scripts', 'witch'),
			'panel'  => 'panel_id',
		)
	);

	//Setting
	$wp_customize->add_setting('header-scripts-settings', array('default' => ''));
	// Сontrol
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'header-scripts',
			array(
				'label'       => __('Header Scripts', 'witch'),
				'section' => 'scripts',
				'description' => sprintf(__('This code will output immediately before the closing %s tag in the document source.', 'witch'), esc_html('</head>')),
				'type'        => 'textarea',
				'settings' => 'header-scripts-settings'
			)
		)
	);

	//Setting
	$wp_customize->add_setting('footer-scripts-settings', array('default' => ''));
	// Сontrol
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'footer-scripts',
			array(
				'label'       => __('Footer Scripts', 'witch'),
				'section' => 'scripts',
				'description' => sprintf(__('This code will output immediately before the closing %s tag in the document source.', 'witch'), esc_html('</body>')),
				'type'        => 'textarea',
				'settings' => 'footer-scripts-settings'
			)
		)
	);

	//Setting
	$wp_customize->add_setting('custom_logo_site', array('default' => ''));
	// Сontrol
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'custom-logo',
			array(
				'label'       => __('Custom Logo Site', 'witch'),
				'section' => 'title_tagline',
				'type'        => 'media',
				'settings' => 'custom_logo_site',
				'priority' => 10,
			)
		)
	);
}
add_action('customize_register', 'theme_scripts');
