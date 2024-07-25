<?php 
defined( 'ABSPATH' ) || exit;


Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Our Projects settings', 'rmbt_renoteck'),
		'id' => 'settings_our-projects-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			
			array(
            'id'       => 'rmbt-our-projects_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Our Projects Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Our Projects','rmbt_renoteck'),
         ),
			array(
            'id'       => 'rmbt-our-projects_section-subtitle-1',
            'type'     => 'text',
            'title'    => esc_html__('Our Projects First Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('The best advertising for us is to show our Metal Roofs to you','rmbt_renoteck'),
         ),
			array(
            'id'       => 'rmbt-our-projects_section-subtitle-2',
            'type'     => 'text',
            'title'    => esc_html__('Our Projects Second Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('The best advertising for us is to show our Metal Roofs to you','rmbt_renoteck'),
         ),

         // array(
			// 	'id' => 'rmbt-our-projects_image-1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Our Projects Gallery First Image', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/our-projects-block/our-projects_1.jpg'
			// 	),
			// ),
         // array(
			// 	'id' => 'rmbt-our-projects_imag-1_alt',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Description for first picture', 'rmbt_renoteck'),
			// ),

         // array(
			// 	'id' => 'rmbt-our-projects_image-2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Our Projects Gallery Second Image', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/our-projects-block/our-projects_2.jpg'
			// 	),
			// ),
         // array(
			// 	'id' => 'rmbt-our-projects_imag-2_alt',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Description for second picture', 'rmbt_renoteck'),
			// ),


         // array(
			// 	'id' => 'rmbt-our-projects_image-3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Our Projects Gallery Third Image', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/our-projects-block/our-projects_3.jpg'
			// 	),
			// ),
         // array(
			// 	'id' => 'rmbt-our-projects_imag-3_alt',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Description for third picture', 'rmbt_renoteck'),
			// ),

      ),
   )
);