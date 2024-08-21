<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Testimonials Section settings', 'rmbt_renoteck'),
		'id' => 'settings_testimonials-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-testimonials-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Testimonials Title', 'rmbt_renoteck'),
            'default'  => esc_html__('See what our customers have to say!','rmbt_renoteck'),
         ),
         array(
            'id'       => 'rmbt-testimonials-block_section-subtitle',
            'type'     => 'text',
            'title'    => esc_html__('Testimonials Subtitle', 'rmbt_renoteck'),
            'default'  => esc_html__('Video Testimonials','rmbt_renoteck'),
         ),
         

          
      ),
   )
);