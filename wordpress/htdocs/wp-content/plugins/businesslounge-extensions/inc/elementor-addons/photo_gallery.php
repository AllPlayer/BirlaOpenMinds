<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_PhotoGallery extends Widget_Base {

	public function get_name() {
		return 'rt-photo-gallery';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Image Gallery', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	protected function _register_controls() {

		// Content Controls
		$this->start_controls_section(
			'RT_PhotoGallery_content',
			[
				'label' => esc_html_x( 'RT Photo Gallery','Admin Panel','businesslounge' )
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
			'layout_style',
			[
				'label'     => esc_html_x( 'Layout Style', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				'default'   =>  "grid",
				"options"    => array(
									""        => esc_html_x("Select", 'Admin Panel','businesslounge'),
									"grid"    => esc_html_x("Grid",'Admin Panel','businesslounge'),
									"masonry" => esc_html_x("Masonry",'Admin Panel','businesslounge'),
									"metro"   => esc_html_x("Metro",'Admin Panel','businesslounge'),
								),
			]
		 
		);

		$this->add_control(
			'item_width',
			[
				'label'     => esc_html_x( 'Gallery Layout', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				'default'   =>  "1/3",
				"options"   => array(
									"1/12" => "1/12", 
									"1/6" => "1/6", 
									"1/4" => "1/4",
									"1/3" => "1/3",
									"1/2" => "1/2",
									"1/1" => "1/1"
								),
				'description' => esc_html_x('Image per row', 'Admin Panel','businesslounge' ),	
				'condition' => [
									'layout_style' => [ "grid","masonry" ],
								],					
			]
		 
		);


		$this->add_control(
			'nogaps',
			[
				'label' => esc_html_x("Remove column gaps", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
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
				"options" => array_merge( array(""=>esc_html_x("Select", 'Admin Panel','businesslounge')), $image_sizes_array ),
				'condition' => [
									'layout_style' => [ "grid","masonry" ],
								],

			]
		); 


		$this->add_control(
			'w',
			[
				'label'   => esc_html_x("Image Width", 'Admin Panel','businesslounge'),
				'type'    =>  Controls_Manager::NUMBER,
				'condition' => [
									'image_size' => [ "Custom" ],
								],
				'default' => 100,
				'min'     => 20,
				'max'     => 2000,
				'step'    => 5,			
				'description' => esc_html_x('Set a width value for the images. Note: Remember that the images width will be resoponsive. Leave blank for auto width.', 'Admin Panel','businesslounge' ),					

			]
		); 

 		$this->add_control(
			'h',
			[
				'label'   => esc_html_x("Image Height", 'Admin Panel','businesslounge'),
				'type'    =>  Controls_Manager::NUMBER,
				'condition' => [
									'image_size' => [ "Custom" ],
								],
				'default' => 100,
				'min'     => 20,
				'max'     => 2000,
				'step'    => 5,			
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
			'metro_resize',
			[
				'label' => esc_html_x("Resize and Crop Metro Gallery Images?", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
				'condition' => [
									'layout_style' => [ "metro" ],
								],			
				'description' => esc_html_x('Do not upload small or landscape/portrait sized photos to get correct layout.', 'Admin Panel','businesslounge' ),									
			]
		); 


		$this->add_control(
			'layout',
			[
				'label'     => esc_html_x( 'Metro Layout', 'Admin Panel','businesslounge' ),
				'type'      =>  Controls_Manager::SELECT,
				"options"    => array(
									"1" => esc_html_x("Style 1",'Admin Panel','businesslounge'),
									"2" => esc_html_x("Style 2",'Admin Panel','businesslounge'),
									"3" => esc_html_x("Style 3",'Admin Panel','businesslounge'),
								),
				'description' => esc_html_x('Pre defined layouts', 'Admin Panel','businesslounge' ),	
				'condition' => [
									'layout_style' => [ "metro" ],
								],					
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
   

		$this->add_control(
			'captions',
			[
				'label' => esc_html_x("Image Captions", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',							
			]
		);  	


		$this->end_controls_section();
		
	}


	protected function render( ) {
		
      $settings = $this->get_settings();

		$image_ids = array();

		foreach ($settings['wp_gallery'] as $key => $value) {
			$settings["image_ids"][] = $value["id"];
		}

		$settings["image_ids"] = implode(",", $settings["image_ids"]);

		echo rt_photo_gallery( $settings );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_PhotoGallery() );

