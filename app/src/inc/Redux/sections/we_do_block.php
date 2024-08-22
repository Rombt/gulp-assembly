<?php
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'We Do Block Section settings', 'rmbt_premium_theme_1k' ),
		'id' => 'settings_we-do-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


			array(
				'id' => 'rmbt-we-do-block_section-title',
				'type' => 'text',
				'title' => esc_html__( 'We Do Block Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'See what our customers have to say!', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_section-subtitle',
				'type' => 'text',
				'title' => esc_html__( 'We Do Block Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Video We Do Block', 'rmbt_premium_theme_1k' ),
			),



			/*------------------  the start of first article block-----------------*/
			array(
				'id' => 'rmbt-we-do-block_article-title-1',
				'type' => 'text',
				'title' => esc_html__( 'Title of first article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'We Do METAL ROOFING', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-text-1',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of first article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'premium_theme_1`s specialty is lifetime warranty metal roofing. We offer full installation service in Calgary, Edmonton, Red Deer, Lethbridge, Medicine Hat and surrounding communities. Metal roofing is a trademark of premium_theme_1k and we believe it is the best material to use in Alberta’s harsh climate, where heat, hail, snow and high winds are common place. With the superior coating used on steel roofing products you can rest assured that your roof with look the same in 50 years. Metal roofs are very affordable, they are ¼ the cost of real clay roofing tiles or genuine slate roofs. Read more', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-id-1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of first article', 'rmbt_premium_theme_1k' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/we-do-block/we-do-block_1.jpg'
				),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-alt-1',
				'type' => 'text',
				'title' => esc_html__( 'Image description of first article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'picture of first article', 'rmbt_premium_theme_1k' ),
			),
			/*------------------  the end of first article block -----------------*/


			/*------------------  the start of second article block-----------------*/
			array(
				'id' => 'rmbt-we-do-block_article-title-2',
				'type' => 'text',
				'title' => esc_html__( 'Title of second article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'We Do ASPHALT SHINGLES', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-text-2',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of second article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Asphalt shingles come in different styles, colours and profiles. premium_theme_1k has the necessary experience to help you select the asphalt shingle to best meet your requirements. At premium_theme_1k, we understand which roofing products will meet Alberta’s weather requirements. We make sure our customers have a proper underlay. We also change flashings and add metal valleys so that our customers have a waterproof roof with proper run-off. Read more', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-id-2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of second article', 'rmbt_premium_theme_1k' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/we-do-block/we-do-block_2.jpg'
				),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-alt-2',
				'type' => 'text',
				'title' => esc_html__( 'Image description of second article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'picture of second article', 'rmbt_premium_theme_1k' ),
			),
			/*------------------  the end of second article block -----------------*/


			/*------------------  the start of third article block-----------------*/
			array(
				'id' => 'rmbt-we-do-block_article-title-3',
				'type' => 'text',
				'title' => esc_html__( 'Title of third article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'We Do CUSTOM ROOFING', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-text-3',
				'type' => 'textarea',
				'title' => esc_html__( 'Text of third article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Copper is beautiful, durable and very workable. Copper roofing never goes out of style. This roof installed by the experts from premium_theme_1k will last for centuries, 100% maintenance free. Copper only becomes more beautiful and valuable with time. Turrets, gables, dormers, we’ve custom-made a beautiful roofing solution for anything our clients build. We cut, bend and shape any type of metal. Our finished product is both beautiful and durable. Read more', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-id-3',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'Picture of third article', 'rmbt_premium_theme_1k' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/we-do-block/we-do-block_3.jpg'
				),
			),
			array(
				'id' => 'rmbt-we-do-block_article-img-alt-3',
				'type' => 'text',
				'title' => esc_html__( 'Image description of third article', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'picture of third article', 'rmbt_premium_theme_1k' ),
			),
			/*------------------  the end of third article block -----------------*/








		),
	)
);