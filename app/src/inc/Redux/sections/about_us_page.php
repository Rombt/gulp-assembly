<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('About Us Section settings', 'rmbt_renoteck'),
		'id' => 'settings_about_us-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-about-us_section-title',
            'type'     => 'text',
            'title'    => esc_html__('About Us Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Serving Calgary and surrounding communities for over 25 years','rmbt_renoteck'),
         ),
         
         array(
            'id'       => 'rmbt-about-us_section-text',
            'type'     => 'textarea',
            'title'    => esc_html__('About Us text', 'rmbt_renoteck'),
            'default'  => esc_html__('We`re the roofing contractors Calgary can count on doing the job right. RenoTeck has extensive experience in roofing and exteriors for single-family homes and commercial properties in Calgary, Alberta, including 24/7 emergency roofing services. We work closely with property owners like you to find a perfect solution for your roofing and exterior needs.','rmbt_renoteck'),
         ),

         array(
				'id' => 'rmbt-about-us-bg_image',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Block Background Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-bg_imag_alt',
				'type' => 'text',
				'title' => esc_html__('Description for background picture', 'rmbt_renoteck'),
			),
         array(
				'id' => 'rmbt-about-us-gallery_image-1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery First Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/photo_2023-11-23_06-31-31.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-1_alt',
				'type' => 'text',
				'title' => esc_html__('Description for first picture', 'rmbt_renoteck'),
			),


         array(
				'id' => 'rmbt-about-us-gallery_image-2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery Second Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/photo_2023-11-23_06-31-55.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-2_alt',
				'type' => 'text',
				'title' => esc_html__('Description for second picture', 'rmbt_renoteck'),
			),


         array(
				'id' => 'rmbt-about-us-gallery_image-3',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery Third Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/Frame 1000003714.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-3_alt',
				'type' => 'text',
				'title' => esc_html__('Description for third picture', 'rmbt_renoteck'),
			),


         array(
				'id' => 'rmbt-about-us-gallery_image-4',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery Forth Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/photo_2023-11-23_06-31-01.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-4_alt',
				'type' => 'text',
				'title' => esc_html__('Description for forth picture', 'rmbt_renoteck'),
			),


         array(
				'id' => 'rmbt-about-us-gallery_image-5',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery Fifth Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/photo_2023-11-23_06-31-03.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-5_alt',
				'type' => 'text',
				'title' => esc_html__('Description for fifth picture', 'rmbt_renoteck'),
			),


         array(
				'id' => 'rmbt-about-us-gallery_image-6',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('About Us Gallery Sixth Image', 'rmbt_renoteck'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about_us-block/Frame 1000003714.jpg'
				),
			),
         array(
				'id' => 'rmbt-about-us-gallery_imag-6_alt',
				'type' => 'text',
				'title' => esc_html__('Description for sixth picture', 'rmbt_renoteck'),
			),

          
      ),
   )
);