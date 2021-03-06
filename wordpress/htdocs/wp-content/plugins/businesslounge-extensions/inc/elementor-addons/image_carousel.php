<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Image_Carousel extends Widget_Base {

	public function get_name() {
		return 'rt-image-carousel';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Image Carousel', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-slider-push';
	}

	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_img_carousel_content',
  			[
  				'label' => esc_html_x( 'Image Carousel','Admin Panel','businesslounge' )
  			]
  		); 
  
  		$this->add_control(
			'wp_gallery',
			[
				'label' => esc_html_x( 'Add Images','Admin Panel','businesslounge' ),
				'type' => Controls_Manager::GALLERY,
			]
		);

		$this->add_control(
			'carousel_layout',
			[
				'label'     => esc_html_x( 'Carousel Layout', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Visible item count for each slide on desktop screens.', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "4",
				"options"    => array(
									"1" => "1",
									"2" => "2",													
									"3" => "3",													
									"4" => "4",													
									"5" => "5",													
									"6" => "6",													
									"7" => "7",													
									"8" => "8",													
									"9" => "9", 
									"10" => "10"
								),				
			]
		 
		);

		$this->add_control(
			'tablet_layout',
			[
				'label'     => esc_html_x( 'Carousel Layout (Tablet)', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Visible item count for each slide on medium screens', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "",
				"options"    => array(
									"" => esc_html_x( 'Default', 'Admin Panel','businesslounge' ),
									"1" => "1",
									"2" => "2",													
									"3" => "3",													
									"4" => "4",													
									"5" => "5",													
									"6" => "6",			 
								),				
			]
		 
		);

		$this->add_control(
			'mobile_layout',
			[
				'label'     => esc_html_x( 'Carousel Layout (Mobile)', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Visible item count for each slide on small screens', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "",
				"options"    => array(
									"" => esc_html_x( 'Default', 'Admin Panel','businesslounge' ),
									"1" => "1",
									"2" => "2",													
									"3" => "3",													
									"4" => "4",		 	 
								),				
			]
		 
		);

		$image_sizes = array_merge(array("Custom","full"),get_intermediate_image_sizes());

		foreach ($image_sizes as $key => $value) {
			$image_sizes_array[$value] = $value;
		}

		$this->add_control(
			'image_size',
			[
				'label'   => esc_html_x("Image size", 'Admin Panel','businesslounge'),
				'type'    =>  Controls_Manager::SELECT,
				"options" => array_merge( array(""=>esc_html_x("Select", 'Admin Panel','businesslounge')), $image_sizes_array )

			]
		); 


		$this->add_control(
			'img_width',
			[
				'label'   => esc_html_x("Image Width", 'Admin Panel','businesslounge'),
				'type'    =>  Controls_Manager::NUMBER,
				'condition' => [
									'image_size' => [ "Custom" ],
								],
				'default' => 1000,
				'min'     => 10,
				'max'     => 2000, 	
				'description' => esc_html_x('Set a width value for the carousel images. Note: Remember that the images width will be resoponsive. Leave blank for auto width.', 'Admin Panel','businesslounge' ),					

			]
		); 

 		$this->add_control(
			'img_height',
			[
				'label'   => esc_html_x("Image Height", 'Admin Panel','businesslounge'),
				'type'    =>  Controls_Manager::NUMBER,
				'condition' => [
									'image_size' => [ "Custom" ],
								],
				'default' => 1000,
				'min'     => 10,
				'max'     => 2000, 		
				'description' => esc_html_x('Set a height value for the images. Remember that the image heights will be resoponsive. Leave blank for auto height.', 'Admin Panel','businesslounge' ),

			]
		); 

		$this->add_control(
			'crop',
			[
				'label' => esc_html_x("Crop Images", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
				'condition' => [
									'image_size' => [ "Custom" ],
								],				
			]
		); 


		$this->add_control(
			'dots',
			[
				'label' => esc_html_x("Navigation Dots", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'true',
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
			'captions',
			[
				'label' => esc_html_x("Captions", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 


		$this->add_control(
			'loop',
			[
				'label' => esc_html_x("Loop", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'boxed',
			[
				'label' => esc_html_x("Boxed Style", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'shadows',
			[
				'label' => esc_html_x("Shadows", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
				'timeout',
				[
					'label' => esc_html_x( 'Auto Play Speed (ms)', 'Admin Panel', 'businesslounge' ),
					'description' => esc_html_x('Auto play speed value in milliseconds. For example; set 5000 for 5 seconds', 'Admin Panel','businesslounge' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 100,
					'max' => 10000,  	
					'size_units' => ['px'],
				]
		);  

		$this->add_control(
				'margin',
				[
					'label' => esc_html_x( 'Item Margin (px)', 'Admin Panel', 'businesslounge' ),
					'description' => esc_html_x('Set a value for the margin between carousel items. Default is 15px', 'Admin Panel','businesslounge' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 200, 
					'size_units' => ['px'],
				]
		);  

		$this->add_control(
				'padding',
				[
					'label' => esc_html_x( 'Stage Padding (px)', 'Admin Panel', 'businesslounge' ),
					'description' => esc_html_x('Set a value for the padding of the carousel stage. This will cut first and last visible items', 'Admin Panel','businesslounge' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 0,
					'max' => 500, 
					'size_units' => ['px'],
				]
		);  

 		$this->add_control(
			'links',
			[
				'label'     => esc_html_x( 'Item Links', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
									"false" => esc_html_x("Disabled",'Admin Panel','businesslounge'),
									"lightbox" => esc_html_x("Open Orginal Images in Lightbox",'Admin Panel','businesslounge'),
									"custom" => esc_html_x("Custom Links",'Admin Panel','businesslounge'),
								),
			]
		 
		);

 		$this->add_control(
			'custom_links',
			[
				'label'     => esc_html_x( 'Custom Links', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::TEXTAREA,
				'description' => esc_html_x('Enter links for each image. The links must be separated by comma. ( http://link1.com, http://link2.com, http://link3.com ) ', 'Admin Panel','businesslounge' ),	
				'condition' => [
									'links' => [ "custom" ],
								],						
			]
		 
		);

		$this->add_control(
			'link_target',
			[
				'label'     => esc_html_x( 'Link Target', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
									"_self" => esc_html_x("Same Tab", 'Admin Panel','businesslounge'),
									"_blank"  => esc_html_x("New Tab", 'Admin Panel','businesslounge'),
								), 
				'condition' => [
									'links' => [ "custom" ],
								],					
			]
		 
		);
   
		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 


			$images = array();

			foreach ($settings['wp_gallery'] as $key => $value) {
				$images[] = $value["id"];
			}

			$settings["images"] = implode(",", $images);

			echo rt_image_carousel( $settings, "" );

	}
	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Image_Carousel() );
