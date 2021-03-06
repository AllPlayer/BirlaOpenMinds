<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Counter extends Widget_Base {

	public function get_name() {
		return 'rt-counter';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Counter', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-counter';
	}
	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_pie_content',
  			[
  				'label' => esc_html_x( 'Counter','Admin Panel','businesslounge' )
  			]
  		); 
 

		$this->add_control(
			'number',
			[
				'label' => esc_html_x("Number", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::NUMBER,
				'default' => 500,
			]
		);  
 
		$this->add_control(
			'text',
			[
				'label' => esc_html_x("Text", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html_x( 'Text after the number', 'Admin Panel','businesslounge' ), 
				'return_value' => 'true',			
			]
		);  
 
 		$this->add_control(
			'content',
			[
				'label' => esc_html_x("Description", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html_x( 'Number Description', 'Admin Panel','businesslounge' ), 
				'default' => esc_html_x( 'Number Description', 'Admin Panel','businesslounge' ), 
				'return_value' => 'true',			
			]
		);  

		$this->add_control(
			'font',
			[
				'label'     => esc_html_x( 'Global Font Family', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				'default'   => '',
				"options"   => array(
										""               => esc_html_x("Default", 'Admin Panel','businesslounge'),                                          
										"heading-font"   => esc_html_x("Heading Font", 'Admin Panel','businesslounge'),        
										"body-font"      => esc_html_x("Body Font", 'Admin Panel','businesslounge'),                    
										"secondary-font" => esc_html_x("Secondary Font", 'Admin Panel','businesslounge'),
										"menu-font"      => esc_html_x("Menu Font", 'Admin Panel','businesslounge'),                      
								),			
			]
		); 

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .rt_counter .number i, {{WRAPPER}} .rt_counter .number',
			]
		);		
		
 		$this->add_control(
			'color',
			[
				'label' =>  esc_html_x( 'Custom Color', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::COLOR, 
				'selectors' => [
					'{{WRAPPER}} .rt_counter .number' => 'color: {{VALUE}};',
				],	
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html_x( 'Alignment', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'center',
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
			]
		);

		$this->add_control(
			'line',
			[
				'label' => esc_html_x("Hide the Separator Line", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
				'selectors' => [
					'{{WRAPPER}} .rt_counter .number:after' => 'content: none;',
				],	
			]
		); 

		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 	
		
		//class 
		$classes[] =array();
		$classes[] = ! empty( $settings["align"] ) ? 'text-'.trim($settings["align"]) : "";
		$classes[] = ! empty( $settings["align_tablet"] ) ? 'tablet-text-'.trim($settings["align_tablet"]) : "";
		$classes[] = ! empty( $settings["align_mobile"] ) ? 'mobile-text-'.trim($settings["align_mobile"]) : "";
		$settings["class"] = implode(" ", array_filter($classes) );

		echo rt_counter_function( $settings, $settings["content"] );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Counter() );

