<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Contact_Form extends Widget_Base {

	public function get_name() {
		return 'rt-contact-form';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Contact Form', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-mail';
	}
	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_cf_content',
  			[
  				'label' => esc_html_x( 'Contact Form','Admin Panel','businesslounge' )
  			]
  		); 

  		global $current_user;

		$this->add_control(
			'email',
			[
				'label' => esc_html_x("Email", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::TEXT,
				'default' =>  $current_user->user_email,
				'description' => esc_html_x('The contact form will be submited to this email.', 'Admin Panel','businesslounge' ),	
			]
		);  
  
		$this->add_control(
			'security',
			[
				'label' => esc_html_x("Security Question", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true', 
				'default' => 'true', 
				'description' => esc_html_x('Enable the security question to prevent spam messages.', 'Admin Panel','businesslounge' ),
			]
		); 

		$this->add_control(
			'confirmation',
			[
				'label' => esc_html_x("Confirmation Checkbox", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true', 
				'default' => '', 
				'description' => esc_html_x('Enable the confirmation checkbox for GDPR.', 'Admin Panel','businesslounge' ),
			]
		); 

		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 
		echo rt_shortcode_contact_form( $settings, "" );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Contact_Form() );

