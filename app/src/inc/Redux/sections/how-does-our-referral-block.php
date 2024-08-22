<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'How Does Our Referral Block settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_how-does-our-referral-block',
		'desc' => esc_html__( 'Settings How Does Our Referral Block setting', 'rmbt_premium_theme_1k' ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-how-does-our-referral-block_title',
				'type' => 'text',
				'title' => esc_html__( 'Settings How Does Our Referral Block Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'How Does Our Referral Reward Program Work?', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-how-does-our-referral-block_text',
				'type' => 'textarea',
				'title' => esc_html__( 'Settings How Does Our Referral Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'You can begin referring qualified individuals to our local roofing company for a new or replacement roof. Schroeder Roofing’s Referral Program allows you to submit a referral form through our website, where our representative will reach out to your referral and schedule a free roofing inspection. This no-obligation service is offered to ensure that the roof is in good condition and ready for Colorado’s extreme weather conditions.', 'rmbt_premium_theme_1k' ),
			),


		)
	)
);