<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Social Networks Settings', 'rmbt_premium_theme_1' ),
		'id' => 'settings_social-networks',
		'customizer_width' => '400px',
		// 'icon'             => 'el el-network',
		'fields' => array(

			array(
				'id' => 'rmbt-social-networks_fb-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Facebook section', 'rmbt_premium_theme_1' ),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_premium_theme_1'),
				'indent' => true
			),
			array(
				'id' => 'rmbt-social-networks_fb-link',
				'type' => 'text',
				'title' => esc_html__( 'Facebook link', 'rmbt_premium_theme_1' ),
				'default' => esc_url( 'https://www.facebook.com/' ),
			),
			array(
				'id' => 'rmbt-social-networks_fb_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Facebook icon', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icons/sprite.svg#facebook_1'
				// ),
			),

			array(
				'id' => 'rmbt-social-networks-fb_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for FaceBook icon', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1' ),
			),


			array(
				'id' => 'rmbt-social-networks_fb-section-end',
				'type' => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_instagram-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Instagram section', 'rmbt_premium_theme_1' ),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_premium_theme_1'),
				'indent' => true
			),


			array(
				'id' => 'rmbt-social-networks_instagram-link',
				'type' => 'text',
				'title' => esc_html__( 'Instagram link', 'rmbt_premium_theme_1' ),
				'default' => 'https://www.instagram.com/',
			),
			array(
				'id' => 'rmbt-social-networks_instagram_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Instagram icon', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_instagram.png'
				// ),
			),

			array(
				'id' => 'rmbt-social-networks_instagram_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for instagram icon', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-social-networks_instagram-section-end',
				'type' => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_youtube-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Youtube section', 'rmbt_premium_theme_1' ),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_premium_theme_1'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-social-networks_youtube-link',
				'type' => 'text',
				'title' => esc_html__( 'Youtube link', 'rmbt_premium_theme_1' ),
				'default' => esc_url( 'https://youtube.com/' ),
			),
			array(
				'id' => 'rmbt-social-networks-youtube_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Youtube icon', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_youtube.png'
				// ),
			),
			array(
				'id' => 'rmbt-social-networks-youtube_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for youtube icon', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-social-networks_youtube-section-end',
				'type' => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_twitter-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Twitter section', 'rmbt_premium_theme_1' ),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_premium_theme_1'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-social-networks_twitter-link',
				'type' => 'text',
				'title' => esc_html__( 'Twitter link', 'rmbt_premium_theme_1' ),
				'default' => esc_url( 'https://twitter.com/' ),
			),
			array(
				'id' => 'rmbt-social-networks-twitter_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Twitter icon', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_twitter.png'
				// ),
			),
			array(
				'id' => 'rmbt-social-networks-twitter_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for twitter icon', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-social-networks_twitter-section-end',
				'type' => 'section',
				'indent' => false,
			),

			array(
				'id' => 'rmbt-social-networks_linkedin-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Linkedin section', 'rmbt_premium_theme_1' ),
				// 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_premium_theme_1'),
				'indent' => true
			),

			array(
				'id' => 'rmbt-social-networks_linkedin-link',
				'type' => 'text',
				'title' => esc_html__( 'Linkedin link', 'rmbt_premium_theme_1' ),
				'default' => esc_url( 'https://linkedin.com/' ),
			),
			array(
				'id' => 'rmbt-social-networks-linkedin_img-id',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Linkedin icon', 'rmbt_premium_theme_1' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_linkedin.png'
				// ),
			),
			array(
				'id' => 'rmbt-social-networks-linkedin_img-alt',
				'type' => 'text',
				'title' => esc_html__( 'Image description for linkedin icon', 'rmbt_premium_theme_1' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1' ),
			),

			array(
				'id' => 'rmbt-social-networks_linkedin-section-end',
				'type' => 'section',
				'indent' => false,
			),

		),
	)

);