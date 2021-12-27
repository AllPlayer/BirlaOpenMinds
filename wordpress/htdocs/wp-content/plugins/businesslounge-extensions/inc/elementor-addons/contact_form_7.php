<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Contact_Form_7 extends Widget_Base {

	public function get_name() {
		return 'rt-contact-form-7';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Contact Form 7', 'Adnin Panel', 'businesslounge' );
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
  				'label' => esc_html_x( 'Contact Form 7','Admin Panel','businesslounge' )
  			]
  		); 

  		//get forms
		$forms = query_posts('posts_per_page=-1&post_type=wpcf7_contact_form&orderby=title&order=ASC');
		$form_array = array();

		if(is_array($forms)){
			foreach ($forms as $form ) {
				$form_array[$form->post_title] = $form->post_title;
			}
		}

		wp_reset_query();
 
  		$first_one = ! empty( $forms ) && isset( $forms[0]->post_title ) ? $forms[0]->post_title : "";


		$this->add_control(
			'form',
			[
				'label' => esc_html_x("Form", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SELECT,
				'options' => $form_array, 
				'default' => $first_one
			]
		);  

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html_x( 'Alignment', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html_x( 'Left', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html_x( 'Center', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html_x( 'Right', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-right',
					], 
				],
				'prefix_class' => 'elementor%s-align-'
			]
		);
		
		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 


		echo do_shortcode(sprintf('[contact-form-7 title="%s"]', $settings["form"]));

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Contact_Form_7() );

