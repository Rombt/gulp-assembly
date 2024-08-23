<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Our Services settings', 'rmbt_premium_theme_1' ),
		'id' => 'settings_our-services-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-our-services_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Ourservices Title', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'Serving Calgary and surrounding communities for over 25 years', 'rmbt_premium_theme_1' ),
			),

			// array(
			// 	'id' => 'rmbt-our-services-bg_image',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Our Services Block Background Image', 'rmbt_premium_theme_1'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/our-services-block/.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'rmbt-our-services-bg_imag_alt',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Description for background picture', 'rmbt_premium_theme_1'),
			// ),

			array(
				'id' => 'rmbt-our-services_image-1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Our Services Gallery First Image', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/our-services-block/our-services_1.jpg'
				),
			),
			array(
				'id' => 'rmbt-our-services_imag-1_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description for first picture', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-our-services_image-2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Our Services Gallery Second Image', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/our-services-block/our-services_2.jpg'
				),
			),
			array(
				'id' => 'rmbt-our-services_imag-2_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description for second picture', 'rmbt_premium_theme_1' ),
			),


			array(
				'id' => 'rmbt-our-services_image-3',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Our Services Gallery Third Image', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/our-services-block/our-services_3.jpg'
				),
			),
			array(
				'id' => 'rmbt-our-services_imag-3_alt',
				'type' => 'text',
				'title' => esc_html__( 'Description for third picture', 'rmbt_premium_theme_1' ),
			),

		),
	)
);