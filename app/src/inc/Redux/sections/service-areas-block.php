<?php 
defined( 'ABSPATH' ) || exit;


Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('Service Areas  settings', 'rmbt_renoteck'),
		'id' => 'settings_service-areas-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			
			array(
            'id'       => 'rmbt-service-areas-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('Service Areas Title', 'rmbt_renoteck'),
            'default'  => esc_html__('Renoteck roofing service areas','rmbt_renoteck'),
         ),



         array(
            'id'       => 'rmbt-service-areas-block_section-title_2',
            'type'     => 'text',
            'title'    => esc_html__('Service Areas second Title', 'rmbt_renoteck'),
            'default'  => esc_html__('TOP QUALITY ROOFING CONTRACTORS FOR HOMES AND COMMERCIAL Properties','rmbt_renoteck'),
         ),
         
         array(
            'id'       => 'rmbt-service-areas-block_section-text_2',
            'type'     => 'textarea',
            'title'    => esc_html__('Service Areas text', 'rmbt_renoteck'),
            'default'  => esc_html__('For questions regarding your home roof or commereial project, please contact us. We encourage our customers to connect with, work with us, and let us know what we can do to serve you to the best of our abilities. You can reach us by phone 1-877-285-9224, email info@renoteck.ca, or by filling out a Request here on our website.','rmbt_renoteck'),
         ),

 

      ),
   )
);