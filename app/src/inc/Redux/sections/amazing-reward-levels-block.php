<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Amazing Reward Levels Block settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_amazing-reward-levels-block',
		'desc' => esc_html__( 'Settings Amazing Reward Levels Block setting', 'rmbt_premium_theme_1k' ),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

			array(
				'id' => 'rmbt-amazing-reward-levels-block_title',
				'type' => 'text',
				'title' => esc_html__( 'Settings Amazing Reward Levels Block Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'For amazing reward levels', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-amazing-reward-levels-block_subtitle',
				'type' => 'text',
				'title' => esc_html__( 'Settings Amazing Reward Levels Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Program Terms and Conditions', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-amazing-reward-levels-block_text',
				'type' => 'textarea',
				'title' => esc_html__( 'Settings How Does Our Referral Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'A valid referral consists of a home or business owner who works with Schroeder Roofing for a roof replacement service (minimum project size of 1,500 square feet). Home and business owners with insurance claims are welcome to work with our roofing company through this program. You may not refer your own residence or business roof if it is your first roof with Schroeder Roofing. However,  you can refer second homes or investment properties after we complete your first project. Every referral may have only 1 referrer. Every qualified referral submitted through the Referral Form Button is worth a $250 gift card (from the choices below). A referral becomes qualified after completion of their roof and payment in full has been collected (the project must be 1,500 square feet or larger). If in a 365 day period from your first referral submission, you refer 10 qualified Schroeder Roofing customers, you will receive a bonus gift. Schroeder Roofing will change the 10th referral gift card from $250 to $2,000 (must be one of the gift cards below). After 365 days from your first submission the referral count starts over. If you didn`t hit the 10th referral the first 365 days, you can start again to try for the big bonus. You will still receive $250 for every qualified referral with another chance for the Bonus Gift of $2,000. This process will continue in perpetuity. Rewards are limited to the below gift cards. The value of the reward cannot be used toward payment to Schroeder Roofing for our roofing, gutter, or insulation services. It is the responsibility of the referee to make sure that the Referral Form is filled out for their referral. Schroeder Roofing representatives are not responsible for entering the referral in the form. ', 'rmbt_premium_theme_1k' ),
			),


		)
	)
);