<?php
defined('ABSPATH') || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('About Us Hero Block settings', 'rmbt_renoteck'),
		'id' => 'settings_about us hero block',
		'desc' => esc_html__('Settings about us hero block site', 'rmbt_renoteck'),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(



         array(
            'id'       => 'rmbt-about_us_hero_block_title',
            'type'     => 'text',
            'title'    => esc_html__('About Us Hero Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Meet the Founder','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-about_us_hero_block_subtitle',
            'type'     => 'text',
            'title'    => esc_html__('About Us Hero Block Subtitle', 'rmbt_renoteck'),
            'default'  => '<span> Pedro Ocana </span> PRESIDENT ',
         ),


         array(
            'id'       => 'rmbt-about_us_hero_block_text',
            'type'     => 'text',
            'title'    => esc_html__('About Us Hero Block Text', 'rmbt_renoteck'),
            'default'  => esc_html__('Sunset Homes’ founder and President has brought a rich cultural influence and flavour to our custom building projects. Pedro has spent time all over Canada, the United States, and South America. Pedro has a Masters in Sciences, a degree in Engineering with a minor in Architecture, and has been a practicing engineer in Canada for over ten years. He completed the Project Management program with the University of Calgary in 2015, and has been instrumental in making Sunset Homes Calgary’s bespoke home builder.','rmbt_renoteck'),
         ),
 


			array(
				'id' => 'about_us_hero_block_img_1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Hero Block Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us_hero_block/about_us_hero_block_img_1.jpg'
				),
			),

			   array(
            'id'       => 'about_us_hero_block_img_1-alt',
            'type'     => 'text',
            'title'    => esc_html__('About Us Hero Block Alt Image', 'rmbt_renoteck'),
            'default'  => esc_html__('','rmbt_renoteck'),
         ),
	
		)
	)
);