<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Heading extends Widget_Base {

	public function get_name() {
		return 'rt-heading';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Heading', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-type-tool';
	}
	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_heading_content',
  			[
  				'label' => esc_html_x( 'Heading','Admin Panel','businesslounge' )
  			]
  		); 
 

		$this->add_control(
			'heading_text',
			[
				'label' => esc_html_x("Heading Text", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html_x("Heading Text", 'Admin Panel','businesslounge'),			
			]
		);  

		$this->add_control(
			'punchline',
			[
				'label' => esc_html_x("Punchline", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html_x("Optional puchline text", 'Admin Panel','businesslounge'),		
				'condition' => [
									'style' => [ "","style-1","style-2","style-4","style-5" ],
								],						
			]
		);  


		$this->add_control(
			'style',
			[
				'label'     => esc_html_x( 'Style', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
									"" => esc_html_x("No-Style", 'Admin Panel', "businesslounge") ,
									"style-1" => esc_html_x("Style One - ( w/ a short thin line before )", 'Admin Panel', "businesslounge") ,
									"style-2" => esc_html_x("Style Two - ( w/ a short thin line after )", 'Admin Panel', "businesslounge") ,
									"style-3" => esc_html_x("Style Three - ( w/ lines before and after )", 'Admin Panel', "businesslounge") ,
									"style-4" => esc_html_x("Style Four - ( w/ a thin line below - centered ) ", 'Admin Panel', "businesslounge") ,
									"style-5" => esc_html_x("Style Five - ( w/ a thin line below - left aligned ) ", 'Admin Panel', "businesslounge") ,
									"style-6" => esc_html_x("Style Six - ( w/ a long line after - left aligned )  ", 'Admin Panel', "businesslounge") ,
								),			
			]
		);  


		$this->add_control(
			'size',
			[
				'label'     => esc_html_x( 'Tag', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				'default'   => "h4",
				"options"   => array(
										"H1" => "h1",
										"H2" => "h2",
										"H3" => "h3",
										"H4" => "h4",
										"H5" => "h5",
										"H6" => "h6",
										"p" => "p",
										"span" => "span"
								),			
				'description' => esc_html_x( 'Select the tag of the heading', 'Admin Panel','businesslounge' ),
			]
		);  



 		if( version_compare ( 2.6, ELEMENTOR_VERSION, '<=' ) ){
			$this->add_control(
				'icon_name__',
				[
					'label' => esc_html_x("Icon", 'Admin Panel','businesslounge'),
					'type' => Controls_Manager::ICONS,
					'return_value' => 'true',			
				]
			); 
		}else{
			$this->add_control(
				'icon_name',
				[
					'label' => esc_html_x("Icon", 'Admin Panel','businesslounge'),
					'type' => Controls_Manager::ICON,
					'return_value' => 'true',			
				]
			); 			
		} 

		$this->add_control(
				'icon_size_elementor',
				[
					'label' => esc_html_x( 'Icon Size (px)', 'Admin Panel', 'businesslounge' ),
					'type' => Controls_Manager::SLIDER,
					'range' => [
					    'px' => [
					        'min' => 0,
					        'max' => 300,
					        'step' => 1,
					    ]
					],			
					'size_units' => [ 'px'],
					'selectors' => [
						'{{WRAPPER}} .heading_icon:before' => 'font-size: {{SIZE}}{{UNIT}}',
					],
				]
		);  


		$this->end_controls_section();


		$this->start_controls_section(
			'rt_heading_typography',
			[
				'label' => esc_html_x( 'Style &amp; Typography', 'Admin Panel', 'businesslounge' ),
				'tab' => Controls_Manager::TAB_STYLE
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
					'justify' => [
						'title' => esc_html_x( 'Justified', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .rt-heading-wrapper' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'rt_heading_padding',
			[
				'label' => esc_html_x( 'Heading Padding', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .rt-heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'rt_heading_margin',
			[
				'label' => esc_html_x( 'Heading Margin', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				
				'selectors' => [
					'{{WRAPPER}} .rt-heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'font_color_type',
			[
				'label'     => esc_html_x( 'Font Color', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
									"" => esc_html_x("Default Heading Color", 'Admin Panel','businesslounge'),
									"custom" => esc_html_x("Custom Color", 'Admin Panel','businesslounge'),
									"primary" => esc_html_x("Primary Color", 'Admin Panel','businesslounge'),
								),			
			]
		);  

		$this->add_control(
			'title_color',
			[
				'label' =>  esc_html_x( 'Custom Color', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::COLOR, 
				'selectors' => [
					'{{WRAPPER}} .rt-heading' => 'color: {{VALUE}};',
				],
				'condition' => [
									'font_color_type' => [ "custom" ],
								],					
			]
		);

		$this->add_control(
			'el_bg_color',
			[
				'label' =>  esc_html_x( 'Heading Background Color', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::COLOR,  
				'selectors' => [
					'{{WRAPPER}} .rt-heading' => 'background-color: {{VALUE}};',
				]						
			]
		);


		$this->add_control(
			'font',
			[
				'label'     => esc_html_x( 'Global Font Family', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
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
				'selector' => '{{WRAPPER}} .rt-heading',
			]
		);		

		$this->add_responsive_control(
			'writing_mode',
			[
				'label'     => esc_html_x( 'Writing Mode', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
										""            => esc_html_x("Default", 'Admin Panel','businesslounge'),      
										"horizontal-tb" => esc_html_x("Horizontal Top to Bottom", 'Admin Panel','businesslounge'),                                        
										"vertical-lr" => esc_html_x("Vertical Left to Right", 'Admin Panel','businesslounge'),                                        
										"vertical-rl" => esc_html_x("Vertical Right to Left", 'Admin Panel','businesslounge'),        
								),			
				'selectors' => [
					'{{WRAPPER}} .rt-heading' => 'writing-mode: {{VALUE}};',
				]					
			]
		);  

		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 

	 	if( version_compare ( 2.6, ELEMENTOR_VERSION, '<=' ) ){//elementor 2.6+	 			
 			if( ! empty( $settings["icon_name__"]["value"] ) ){
	 			$settings["icon_name"] = $settings["icon_name__"]["value"];
	 		}
 		}		

		echo rt_heading_function( $settings, $settings["heading_text"] );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Heading() );

