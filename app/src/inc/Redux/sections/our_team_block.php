<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Our team block settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_our-team-block',
		'desc' => esc_html__( 'Settings Our Team Block setting', 'rmbt_premium_theme_1k' ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-our-team-block_title',
				'type' => 'text',
				'title' => esc_html__( 'Settings Our Team Block Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Our Team', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-our-team-block_text',
				'type' => 'textarea',
				'title' => esc_html__( 'Settings Our Team Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Meet the amazing people behind the Nelson Homes brand! This team of passionate home building enthusiasts has helped customers across North America find the perfect home! Click our staff photos below to find out how long each team member has been working in the home building industry and their favorite Nelson house plan!', 'rmbt_premium_theme_1k' ),
			),


		)
	)
);