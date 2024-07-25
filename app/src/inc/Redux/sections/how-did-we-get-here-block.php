<?php 
defined( 'ABSPATH' ) || exit;


// Menu section sections start
Redux::set_section(
   $opt_name,
		array(
		'title' => esc_html__('How Did We Get Here Section settings', 'rmbt_renoteck'),
		'id' => 'settings_how-did-we-get-here-block-section',
		'customizer_width' => '450',
		'subsections' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(


         array(
            'id'       => 'rmbt-how-did-we-get-here-block_section-title',
            'type'     => 'text',
            'title'    => esc_html__('How Did We Get Here Title', 'rmbt_renoteck'),
            'default'  => esc_html__('How Did We Get Here','rmbt_renoteck'),
         ),


         
         /*------------------  the start of first article block-----------------*/
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-year-1',
            'type' => 'text',
            'title' => esc_html__('Year for the first article','rmbt_renoteck'),
            'default' => esc_html__('2019', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-title-1',
            'type' => 'text',
            'title' => esc_html__('Title of first article','rmbt_renoteck'),
            'default' => esc_html__('GROWTH CONTINUES', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-text-1',
            'type' => 'textarea',
            'title' => esc_html__('Text of first article', 'rmbt_renoteck'), 
            'default' => esc_html__('Continuous development of noise control for drilling rigs, MERLIN solidifies leadership position. MERLIN further grows client base and industry focus to include BASF in Saskatoon and Trans Canada throughout Alberta and BC.', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-id-1',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of first article', 'rmbt_renoteck'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
            'url' => '/assets/img/how-did-we-get-here-block/how-did-we-get-here-block_1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-alt-1',
            'type' => 'text',
            'title' => esc_html__('Image description of first article', 'rmbt_renoteck'),
            'default' => esc_html__('picture of first article', 'rmbt_renoteck'),
         ),
         /*------------------  the end of first article block -----------------*/

         

         
         /*------------------  the start of second article block-----------------*/
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-year-2',
            'type' => 'text',
            'title' => esc_html__('Year for the second article','rmbt_renoteck'),
            'default' => esc_html__('2019', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-title-2',
            'type' => 'text',
            'title' => esc_html__('Title of second article','rmbt_renoteck'),
            'default' => esc_html__('GROWTH CONTINUES', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-text-2',
            'type' => 'textarea',
            'title' => esc_html__('Text of second article', 'rmbt_renoteck'), 
            'default' => esc_html__('Continuous development of noise control for drilling rigs, MERLIN solidifies leadership position. MERLIN further grows client base and industry focus to include BASF in Saskatoon and Trans Canada throughout Alberta and BC.', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-id-2',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of second article', 'rmbt_renoteck'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
            'url' => '/assets/img/how-did-we-get-here-block/how-did-we-get-here-block_1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-alt-2',
            'type' => 'text',
            'title' => esc_html__('Image description of second article', 'rmbt_renoteck'),
            'default' => esc_html__('picture of second article', 'rmbt_renoteck'),
         ),
         /*------------------  the end of second article block -----------------*/
         

         
         /*------------------  the start of third article block-----------------*/
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-year-3',
            'type' => 'text',
            'title' => esc_html__('Year for the third article','rmbt_renoteck'),
            'default' => esc_html__('2019', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-title-3',
            'type' => 'text',
            'title' => esc_html__('Title of third article','rmbt_renoteck'),
            'default' => esc_html__('GROWTH CONTINUES', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-text-3',
            'type' => 'textarea',
            'title' => esc_html__('Text of third article', 'rmbt_renoteck'), 
            'default' => esc_html__('Continuous development of noise control for drilling rigs, MERLIN solidifies leadership position. MERLIN further grows client base and industry focus to include BASF in Saskatoon and Trans Canada throughout Alberta and BC.', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-id-3',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of third article', 'rmbt_renoteck'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
            'url' => '/assets/img/how-did-we-get-here-block/how-did-we-get-here-block_1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-alt-3',
            'type' => 'text',
            'title' => esc_html__('Image description of third article', 'rmbt_renoteck'),
            'default' => esc_html__('picture of third article', 'rmbt_renoteck'),
         ),
         /*------------------  the end of third article block -----------------*/

                  

         
         /*------------------  the start of fourth article block-----------------*/
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-year-4',
            'type' => 'text',
            'title' => esc_html__('Year for the fourth article','rmbt_renoteck'),
            'default' => esc_html__('2019', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-title-4',
            'type' => 'text',
            'title' => esc_html__('Title of fourth article','rmbt_renoteck'),
            'default' => esc_html__('GROWTH CONTINUES', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-text-4',
            'type' => 'textarea',
            'title' => esc_html__('Text of fourth article', 'rmbt_renoteck'), 
            'default' => esc_html__('Continuous development of noise control for drilling rigs, MERLIN solidifies leadership position. MERLIN further grows client base and industry focus to include BASF in Saskatoon and Trans Canada throughout Alberta and BC.', 'rmbt_renoteck'),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-id-4',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of fourth article', 'rmbt_renoteck'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
            'url' => '/assets/img/how-did-we-get-here-block/how-did-we-get-here-block_1.jpg'
            ),
         ),
         array(
            'id' => 'rmbt-how-did-we-get-here-block_article-img-alt-4',
            'type' => 'text',
            'title' => esc_html__('Image description of fourth article', 'rmbt_renoteck'),
            'default' => esc_html__('picture of fourth article', 'rmbt_renoteck'),
         ),
         /*------------------  the end of fourth article block -----------------*/

         





          
      ),
   )
);