<?php
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Financing Section settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_financing-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


			array(
				'id' => 'rmbt-financing-block_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Financing Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Financing', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-financing-block_section-text',
				'type' => 'textarea',
				'title' => esc_html__( 'Financing text', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'At premium_theme_1k our goal is to help you get the most comfort and energy savings you need. When buying metal roof with us, you have an opportunity to choose one of three payment plan options available from FinanceIt. Our sales consultant will explain how the financing payment plans work during your initial consultation. Start with the Pre-approval application. It only takes a few minutes.', 'rmbt_premium_theme_1k' ),
			),


		),
	)
);