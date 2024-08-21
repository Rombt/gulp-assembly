<?php
defined('ABSPATH') || exit;


// Header sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Hero Block settings', 'rmbt_renoteck'),
		'id' => 'settings_hero-block',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt-capture-form_title',
            'type'     => 'text',
            'title'    => esc_html__('Capture Form Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Speak with an expert today','rmbt_renoteck'),
         ),

			array(
            'id'       => 'rmbt-hero-block-title',
            'type'     => 'text',
            'title'    => esc_html__('Hero Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('WE DON`T JUST INSTALL ROOFING','rmbt_renoteck'),
         ),

         array(
            'id'       => 'rmbt-hero-block-subtitle',
            'type'     => 'text',
            'title'    => esc_html__('Hero Block Subtitle', 'rmbt_renoteck'),
            'default'  => 'WE PROTECT HOMES </br> FOR OVER 25 YEARS WE`VE PUT ROOFS OVER FAMILY HOMES',
         ),

		)
	)
);