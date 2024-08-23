<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Service Areas  settings', 'rmbt_premium_theme_1' ),
		'id' => 'settings_service-areas-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-service-areas-block_section-title',
				'type' => 'text',
				'title' => esc_html__( 'Service Areas Title', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'premium_theme_1 roofing service areas', 'rmbt_premium_theme_1' ),
			),



			array(
				'id' => 'rmbt-service-areas-block_section-title_2',
				'type' => 'text',
				'title' => esc_html__( 'Service Areas second Title', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'TOP QUALITY ROOFING CONTRACTORS FOR HOMES AND COMMERCIAL Properties', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-service-areas-block_section-text_2',
				'type' => 'textarea',
				'title' => esc_html__( 'Service Areas text', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( 'For questions regarding your home roof or commereial project, please contact us. We encourage our customers to connect with, work with us, and let us know what we can do to serve you to the best of our abilities. You can reach us by phone 1-877-285-9224, email info@premium_theme_1.ca, or by filling out a Request here on our website.', 'rmbt_premium_theme_1' ),
			),



		),
	)
);