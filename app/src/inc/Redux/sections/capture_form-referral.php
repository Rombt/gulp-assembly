<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Capture Form Block settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_capture-form-block',
		'desc' => esc_html__( 'Settings Capture Form Block setting', 'rmbt_premium_theme_1k' ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-capture-form-block_title',
				'type' => 'text',
				'title' => esc_html__( 'Settings Capture Form Block Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Remedy Roofing Referral Program', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-capture-form-block_subtitle-you',
				'type' => 'text',
				'title' => esc_html__( 'Settings Capture Form Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => '<span>Referrer (Your) Information</span> Information of the person making the referral.',
			),
			array(
				'id' => 'rmbt-capture-form-block_subtitle-their',
				'type' => 'text',
				'title' => esc_html__( 'Settings Capture Form Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => '<span>Referral (Their) Information</span> Information of the person you referred to Remedy Roofing.',
			),

		)
	)
);