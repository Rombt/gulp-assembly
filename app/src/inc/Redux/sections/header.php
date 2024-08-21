<?php
defined('ABSPATH') || exit;


// Header sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Header settings', 'rmbt_renoteck'),
		'id' => 'settings_header',
		'desc' => esc_html__('Settings header site', 'rmbt_renoteck'),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt-top_string_title',
            'type'     => 'text',
            'title'    => esc_html__('Top String Title', 'rmbt_renoteck'),
            'default'  => esc_html__('get a free estimate','rmbt_renoteck'),
         ),

         array(
            'id'       => 'rmbt-call-today_title',
            'type'     => 'text',
            'title'    => esc_html__('Call Today Title', 'rmbt_renoteck'),
            'default'  => esc_html__('call today','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-call-today_number',
            'type'     => 'text',
            'title'    => esc_html__('Input your phone number', 'rmbt_renoteck'),
         ),

         array(
            'id'       => 'rmbt-instagram_title',
            'type'     => 'text',
            'title'    => esc_html__('Instagram Title', 'rmbt_renoteck'),
            'default'  => esc_html__('instagram','rmbt_renoteck'),
         ),
         array(
				'id'       => 'rmbt-instagram_nick',
            'type'     => 'text',
            'title'    => esc_html__('Your Instagram NickName', 'rmbt_renoteck'),
				'default'  => '@RenoteckRoofing',
         ),

         array(
            'id'       => 'rmbt-facebook_title',
            'type'     => 'text',
            'title'    => esc_html__('Input Facebook Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Facebook','rmbt_renoteck'),
         ),
         array(
				'id'       => 'rmbt-facebook_nick',
            'type'     => 'text',
            'title'    => esc_html__('Your Facebook NickName', 'rmbt_renoteck'),
				'default'  => 'RenoteckRoofing',
         ),



			// array(
			// 	'id' => 'logo_site',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Site logo', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/logo.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'background-title-img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Background title image', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/background-title-page-block.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'search_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Search icon', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// ),
			// array(
			// 	'id' => 'icon_cart',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon cart', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// ),
			// array(
			// 	'id' => 'icon_button_book',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon button book', 'rmbt_renoteck'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_plate.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'modal_menu_location',
			// 	'type' => 'button_set',
			// 	'title' => esc_html__('Location for modal drop-down menu', 'rmbt_renoteck'),
			// 	//Must provide key => value pairs for options
			// 	'options' => array(
			// 		'1' => 'Viewport',
			// 		'2' => 'Heder menu'
			// 	),
			// 	'default' => '1',
			// ),
			// array(
			// 	'id' => 'modal_menu_side',
			// 	'type' => 'button_set',
			// 	'title' => __('Side for modal drop-down menu', 'rmbt_renoteck'),
			// 	'desc' => __('Your modal menu will be from the indicated side ', 'rmbt_renoteckr'),
			// 	//Must provide key => value pairs for options
			// 	'options' => array(
			// 		'1' => 'left',
			// 		'2' => 'right'
			// 	),
			// 	'default' => '1',
			// ),
		)
	)
);