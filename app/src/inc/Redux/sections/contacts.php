<?php
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'id' => 'settings_contacts',
		'title' => esc_html__( 'Contacts settings', 'rmbt_premium_theme_1k' ),
		'desc' => esc_html__( 'Contacts', 'rmbt_premium_theme_1k' ),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'rmbt-address',
				'type' => 'textarea',
				'title' => esc_html__( 'Enter Your Address', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( '', 'rmbt_premium_theme_1k' ),
			),


			//contacts page section start -----------------------------------
			array(
				'id' => 'rmbt-contacts-page-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Contacts Page settings', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-contacts-page-title',
				'type' => 'text',
				'title' => esc_html__( 'Contacts Page Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Let`s Chat', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-contacts-page-map-iframe',
				'type' => 'textarea',
				'title' => esc_html__( 'Contacts Page Link to Map', 'rmbt_premium_theme_1k' ),
				'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18078360.375675336!2d-106.2465356!3d56.4189742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537170039f843fd5%3A0x266d3bb1b652b63a!2z0JrQsNC70LPQsNGA0LgsINCQ0LvRjNCx0LXRgNGC0LAsINCa0LDQvdCw0LTQsA!5e0!3m2!1sru!2sua!4v1721896138138!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
			),

			array(
				'id' => 'rmbt-contacts-page-title-2',
				'type' => 'text',
				'title' => esc_html__( 'Contacts Page Second Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Get in Touch', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-contacts-page-subtitle-2',
				'type' => 'text',
				'title' => esc_html__( 'Contacts Page Second Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'We guarantee to get back to you within 24 hours', 'rmbt_premium_theme_1k' ),
			),


			array(
				'id' => 'rmbt-contacts-form-title',
				'type' => 'text',
				'title' => esc_html__( 'Contacts Form Title', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Get in Touch', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-contacts-form-subtitle',
				'type' => 'text',
				'title' => esc_html__( 'Contacts Form Subtitle', 'rmbt_premium_theme_1k' ),
				'default' => esc_html__( 'Fill out the form below and our team will get back to you in less than 24 hours.', 'rmbt_premium_theme_1k' ),
			),


			array(
				'id' => 'rmbt-manager-1-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//contacts page section end	-----------------------------------





			//First Manager section start -----------------------------------
			array(
				'id' => 'rmbt-manager-1-section-start',
				'type' => 'section',
				'title' => esc_html__( 'First Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-manager-1-name',
				'type' => 'text',
				'title' => esc_html__( 'Add first manager name ', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-1-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add first manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-1-email',
				'type' => 'text',
				'title' => esc_html__( 'Add first manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-1-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//First Manager section end	-----------------------------------
			// 
			//Second  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-2-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Second  Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-2-name',
				'type' => 'text',
				'title' => esc_html__( 'Add second manager name', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-2-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add second manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-2-email',
				'type' => 'text',
				'title' => esc_html__( 'Add second manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-2-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//Second  Manager section end
			//
			//Third  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-3-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Third  Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-3-name',
				'type' => 'text',
				'title' => esc_html__( 'Add third manager name', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-3-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add third manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-3-email',
				'type' => 'text',
				'title' => esc_html__( 'AAdd third manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-3-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//Third  Manager section end		-----------------------------------
			//
			//Fourth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-4-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Fourth  Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-4-name',
				'type' => 'text',
				'title' => esc_html__( 'Add fourth manager name', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-4-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add fourth manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-4-email',
				'type' => 'text',
				'title' => esc_html__( 'Add fourth manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-4-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//Fourth  Manager section end		-----------------------------------
			//
			//
			//Fifth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-5-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Fifth  Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-5-name',
				'type' => 'text',
				'title' => esc_html__( 'Add fifth manager name', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-5-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add fifth manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-5-email',
				'type' => 'text',
				'title' => esc_html__( 'Add fifth manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-5-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//Fifth  Manager section end		-----------------------------------
			//
			//
			//Sixth  Manager section start	-----------------------------------
			array(
				'id' => 'rmbt-manager-6-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Sixth  Manager contacts', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),
			array(
				'id' => 'rmbt-manager-6-name',
				'type' => 'text',
				'title' => esc_html__( 'Add sixth manager name', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-6-phone',
				'type' => 'text',
				'title' => esc_html__( 'Add sixth manager phone number', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-manager-6-email',
				'type' => 'text',
				'title' => esc_html__( 'Add sixth manager email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-manager-6-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//Sixth  Manager section end		-----------------------------------
			//

			array(
				'id' => 'rmbt-name-email-1-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Email 1', 'rmbt_premium_theme_1k' ),
				'subtitle' => esc_html__( 'Enter email and set his name', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-1',
				'type' => 'text',
				'title' => esc_html__( 'Add name of your first email', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-email-1',
				'type' => 'text',
				'title' => esc_html__( 'Add your first email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-email-1-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//email_numbers 1 section end
			//email 2 section start
			array(
				'id' => 'rmbt-name-email-2-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Email 2', 'rmbt_premium_theme_1k' ),
				'subtitle' => esc_html__( 'Enter email and set his name', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-2',
				'type' => 'text',
				'title' => esc_html__( 'Add name of your second email', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-email-2',
				'type' => 'text',
				'title' => esc_html__( 'Add your second email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-email-2-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//email_numbers 2 section end
			//email 3 section start
			array(
				'id' => 'rmbt-name-email-3-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Email 3', 'rmbt_premium_theme_1k' ),
				'subtitle' => esc_html__( 'Enter email and set his name', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-3',
				'type' => 'text',
				'title' => esc_html__( 'Add name of your third email', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-email-3',
				'type' => 'text',
				'title' => esc_html__( 'Add your third email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-email-3-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//email_numbers 3 section end
			//email 4 section start
			array(
				'id' => 'rmbt-name-email-4-section-start',
				'type' => 'section',
				'title' => esc_html__( 'Email 4', 'rmbt_premium_theme_1k' ),
				'subtitle' => esc_html__( 'Enter email and set his name', 'rmbt_premium_theme_1k' ),
				'indent' => true
			),

			array(
				'id' => 'rmbt-name-email-4',
				'type' => 'text',
				'title' => esc_html__( 'Add name of your fourth email', 'rmbt_premium_theme_1k' ),
			),
			array(
				'id' => 'rmbt-email-4',
				'type' => 'text',
				'title' => esc_html__( 'Add your fourth email', 'rmbt_premium_theme_1k' ),
			),

			array(
				'id' => 'rmbt-email-4-section-end',
				'type' => 'section',
				'indent' => false,
			),
			//email_numbers 4 section end


		),
	)
);