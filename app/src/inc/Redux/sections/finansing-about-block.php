<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Finansing About Section settings', 'rmbt_renoteck'),
		'id' => 'settings_finansing-about-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-finansing-about-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Finansing About Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Financing a new  Renoteck metal roof in Edmonton, Calgary, Alberta  can provide several benefits, including:','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-finansing-about-block_section-subtitle',
            'type'     => 'text',
            'title'    => esc_html__('Finansing About Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('','rmbt_renoteck'),
         ),
         

          
      ),
   )
);