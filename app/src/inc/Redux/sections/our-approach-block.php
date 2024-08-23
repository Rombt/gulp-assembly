<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Our-approach-block settings', 'rmbt_premium_theme_1' ),
		'id' => 'settings_our-approach-block',
		'desc' => esc_html__( 'Settings Our Approach Block setting', 'rmbt_premium_theme_1' ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-our-approach-block_title',
				'type' => 'text',
				'title' => esc_html__( 'Settings Our Approach Block Title', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'Our Approach', 'rmbt_premium_theme_1' ),
			),
			array(
				'id' => 'rmbt-our-approach-block_text',
				'type' => 'textarea',
				'title' => esc_html__( 'Settings Our Approach Block Subtitle', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'What sets River City Custom Homes apart is our dedication to detail. We have created a streamlined system that has proven to be less stressful, more efficient, and truly enjoyable for our clients. Our process takes every aspect of building your home into consideration including YOU. We value quality over quantity and take on a limited number of homes each year so that we can give you the best building experience possible. We don’t strive to be the biggest home builder - we strive to be the best.', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'our-approach-block_img_1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Settings Our Approach Block Image', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/our-approach-block/our-approach-block_1.jpg'
				),
			),


		)
	)
);