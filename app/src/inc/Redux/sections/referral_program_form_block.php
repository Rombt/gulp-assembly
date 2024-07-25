<?php
defined('ABSPATH') || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Referral Program Form Block settings', 'rmbt_renoteck'),
		'id' => 'settings_referral-program-form-block',
		'desc' => esc_html__('Settings Referral Program Form Block setting', 'rmbt_renoteck'),
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(

         array(
            'id'       => 'rmbt-referral-program-form-block_title',
            'type'     => 'text',
            'title'    => esc_html__('Settings Referral Program Form Block Title', 'rmbt_renoteck'),
            'default'  => esc_html__('For referral program form','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-referral-program-form-block_subtitle-step-1',
            'type'     => 'text',
            'title'    => esc_html__('Settings Referral Program Form Block Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('Program Terms and Conditions','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-referral-program-form-block_subtitle-step-2',
            'type'     => 'text',
            'title'    => esc_html__('Settings Referral Program Form Block Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('Program Terms and Conditions','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-referral-program-form-block_button-title',
            'type'     => 'textarea',
            'title'    => esc_html__('Settings Referral Program Form Block Button Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Next: referal`s information','rmbt_renoteck'),
         ),

	
		)
	)
);