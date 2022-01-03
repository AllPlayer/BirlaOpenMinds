<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Slider extends Widget_Base {

	public function get_name() {
		return 'rt-slider';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Slider', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}

	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_slider_content',
  			[
  				'label' => esc_html_x( 'Slider','Admin Panel','businesslounge' )
  			]
  		); 
 
		$this->add_control(
			'min_height',
			[
				'label' => esc_html_x( 'Minimum Slider Height (px)', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::TEXT,
				'default' => 400
			]		
		);
 
 		$this->add_control(
			'mobile_min_height',
			[	
				'label' => esc_html_x( 'Minimum Slider Height for Mobile (px)', 'Admin Panel', 'businesslounge' ),
				'description' => esc_html_x('Slider minimum height value to be applied for small screens only (< 768px).', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::TEXT,
				'default' => 300
			]		
		);

 		$this->add_control(
			'timeout',
			[	
				'label' => esc_html_x( 'Timeout', 'Admin Panel', 'businesslounge' ),
				'description' => esc_html_x('Timeout value for each slide. Default is 5000 (equal 5sec)', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::TEXT,
				'default' => 5000
			]		
		); 


		$this->add_control(
			'text_nav',
			[
				'label' => esc_html_x("Text Navigation", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'dots',
			[
				'label' => esc_html_x("Navigation Dots", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'nav',
			[
				'label' => esc_html_x("Navigation Arrows", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'autoplay',
			[
				'label' => esc_html_x("Autoplay", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'description' => esc_html_x('Start sliding automatically', 'Admin Panel','businesslounge' ),
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'parallax',
			[
				'label' => esc_html_x("Parallax Effect", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'description' => esc_html_x('Enable parallax effect for this slider', 'Admin Panel','businesslounge' ),
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 		





			$this->add_control(
				'slides',
				[
					'label' => esc_html_x( 'Slides','Admin Panel','businesslounge' ),
					'type' => Controls_Manager::REPEATER,

					'fields' => [
						[
							'name' => 'heading',
							'label' => esc_html_x( 'Title & Content', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::TEXT,
							'default' => esc_html_x( 'Tab Title', 'Admin Panel', 'businesslounge' ),
							'placeholder' => esc_html_x( 'Tab Title', 'Admin Panel', 'businesslounge' ),
							'label_block' => true,
						],
						[
							'name' => 'nav_text',
							'label' => esc_html_x('Navigation Text', 'Admin Panel','businesslounge' ),
							'type' => Controls_Manager::TEXT,
							'placeholder' => esc_html_x('Navigation Text', 'Admin Panel','businesslounge' ),
							'label_block' => true,
							'description' => esc_html_x('The text will be displayed as a navigation item if the "Text Navigation" has been enabled for the slider.', 'Admin Panel','businesslounge' ),
						],					
						[
							'name' => 'content',
							'label' => esc_html_x( 'Slide Content', 'Admin Panel', 'businesslounge' ), 
							'type' => Controls_Manager::TEXTAREA,
							'show_label' => false,
						],
	
						[
							'name' =>'heading_max_font_size',
							'label' => esc_html_x( 'Heading Max Font Size (px)', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::TEXT
						],
			 			[
							'name' =>'heading_min_font_size',
							'label' => esc_html_x( 'Heading Min Font Size (px)', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::TEXT
						],
			 			[
							'name' =>'content_font_size',
							'label' => esc_html_x( 'Content Font Size (px)', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::TEXT
						],
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'content_color_schema',
							'label' => esc_html_x( 'Content Color Set', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Width of the content block. For mobile device screens, this value will be calculated automatically depends the screen width.', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												''              => esc_html_x('Global Colors', 'Admin Panel', 'businesslounge'),
												'default-style' => esc_html_x('Color Set 1', 'Admin Panel', 'businesslounge'),
												'alt-style-1'   => esc_html_x('Color Set 2', 'Admin Panel', 'businesslounge'),
												'light-style'   => esc_html_x('Color Set 3', 'Admin Panel', 'businesslounge'),
											),
							'separator' => 'default'
						],
						[
							'name' =>'content_width',
							'label' => esc_html_x( 'Content Width (percent)', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x('Width of the content block. For mobile device screens, this value will be calculated automatically depends the screen width.', 'Admin Panel','businesslounge' ),
							'default' =>'40',
							'type' => Controls_Manager::TEXT
						],
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'content_align',
							'label' => esc_html_x( 'Content Align', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Select a position for the content block. For mobile device screens, the content block will be aligned to the center automatically', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												"right" => esc_html_x("Right",'Admin Panel','businesslounge'),
												"left" => esc_html_x("Left",'Admin Panel','businesslounge'),
												"center" => esc_html_x("Center",'Admin Panel','businesslounge'),
											),
						],
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'text_align',
							'label' => esc_html_x( 'Text Align', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Align the text within the content block.', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												"right" => esc_html_x("Right",'Admin Panel','businesslounge'),
												"left" => esc_html_x("Left",'Admin Panel','businesslounge'),
												"center" => esc_html_x("Center",'Admin Panel','businesslounge'),
											),
						],
						[
							'name' =>  'link',
							'label' => esc_html_x("Slide Link", 'Admin Panel','businesslounge'),
							'type' => Controls_Manager::URL,
							'placeholder' => 'http://your-link.com',
							'default' => [
								'url' => '',
							],
						],
						[
							'name' =>  'button_text',
							'label' => esc_html_x("Button Text", 'Admin Panel','businesslounge'),
							'type' => Controls_Manager::TEXT, 
						],
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'button_style',
							'label' => esc_html_x( 'Button Style', 'Admin Panel', 'businesslounge' ),
							'options'      => array( 
													"style-1" => esc_html_x("Style 1", 'Admin Panel','businesslounge'),
													"style-2" => esc_html_x("Style 2", 'Admin Panel','businesslounge'),
													"style-3" => esc_html_x("Style 3", 'Admin Panel','businesslounge'),
													"black"   => esc_html_x("Black", 'Admin Panel','businesslounge'),
													"white"   => esc_html_x("White", 'Admin Panel','businesslounge'),
													"text"    => esc_html_x("Flat Text", 'Admin Panel','businesslounge'), 
											),
						],
						[
							'name' =>  'button_link',
							'label' => esc_html_x("Button Link", 'Admin Panel','businesslounge'),
							'type' => Controls_Manager::URL,
							'placeholder' => 'http://your-link.com',
							'default' => [
								'url' => '',
							],
						],
 						[
 							'name' => 'bg_image',
							'label' => esc_html_x( 'Background Image', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::MEDIA,
							'default' => [
								'url' => Utils::get_placeholder_image_src(),
							],
						],
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'bg_size',
							'label' => esc_html_x( 'Background Image Size', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Select and set size / coverage behaviour for the background image.', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												"cover" => esc_html_x("Cover",'Admin Panel','businesslounge'),
												"auto auto" => esc_html_x("Auto",'Admin Panel','businesslounge'),
												"contain" => esc_html_x("Contain",'Admin Panel','businesslounge'),
												"100% auto" => esc_html_x("100%",'Admin Panel','businesslounge'),
												"50% auto" => esc_html_x("50%",'Admin Panel','businesslounge'),
												"25% auto" => esc_html_x("25%",'Admin Panel','businesslounge'),
											),
						],	
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'bg_position',
							'label' => esc_html_x( 'Background Position', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Select a positon for the background image.', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												"right top" => esc_html_x("Right Top",'Admin Panel','businesslounge'),
												"right center" => esc_html_x("Right Center",'Admin Panel','businesslounge'),
												"right bottom" => esc_html_x("Right Bottom",'Admin Panel','businesslounge'),
												"left top" => esc_html_x("Left Top",'Admin Panel','businesslounge'),
												"left center" => esc_html_x("Left Center",'Admin Panel','businesslounge'),
												"left bottom" => esc_html_x("Left Bottom",'Admin Panel','businesslounge'),
												"center top" => esc_html_x("Center Top",'Admin Panel','businesslounge'),
												"center center" => esc_html_x("Center Center",'Admin Panel','businesslounge'),
												"center bottom" => esc_html_x("Center Bottom",'Admin Panel','businesslounge'),
											),
						],	
			 			[	
			 				'type' => Controls_Manager::SELECT,
							'name' =>'bg_color_tone',
							'label' => esc_html_x( 'Background Color Tone', 'Admin Panel', 'businesslounge' ),
							'description' => esc_html_x( 'Specify the background color tone to match the related color set with the overlapped header (if active), arrows and navigation buttons.', 'Admin Panel','businesslounge' ),
							'options'      => array( 
												'dark'  => esc_html_x('Dark', 'Admin Panel', 'businesslounge'),
												'light' => esc_html_x('Light', 'Admin Panel', 'businesslounge'),
											),
						],	



					],
					'title_field' => '{{{ heading }}}',
				]
		);

		$this->end_controls_section();  
	}


	protected function render( ) {

			$settings = $this->get_settings(); 

			$slides = "";
			$nav_items = "";
			$slide_counter = 1;

			foreach ( $settings["slides"] as $slide ) {

				$slide["bg_image"] = isset( $slide["bg_image"]["id"] ) ? $slide["bg_image"]["id"] : "";
				$slide["min_height"] = $settings["min_height"];


				$slide_link = $slide["link"];
				$slide["link"] = $slide_link['url'];
				$slide["link_target"] = $slide_link['is_external'] ? '_blank' : '_self';

				$slide_button_link = $slide["button_link"];
				$slide["button_link"] = $slide_button_link['url'];
				$slide["button_link_target"] = $slide_button_link['is_external'] ? '_blank' : '_self';

				$slide["button_rounded"] = "true";
				$slide["button_arrow"] = "true";



				$slides .= rt_slide( $slide, $slide["content"] );

				$nav_items .= sprintf('<a class="url" data-href="%s" href="javascript:void(0);"><span>%s</span>%s</a>', $slide_counter -1, "0".$slide_counter, $slide["nav_text"]);

				$slide_counter++;
			}

			$settings["nav_items_"] = $nav_items;
			$settings["slide_count_"] = $slide_counter - 1;
				
			echo rt_slider( $settings, $slides );
	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Slider() );
