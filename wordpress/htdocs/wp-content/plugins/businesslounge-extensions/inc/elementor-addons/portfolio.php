<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Portfolio extends Widget_Base {

	public function get_name() {
		return 'rt-portfolio';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Portfolio List', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_pportfolio_content',
  			[
  				'label' => esc_html_x( 'Portfolio List','Admin Panel','businesslounge' )
  			]
  		); 


 		$this->add_control(
			'layout_style',
			[
				'label'     => esc_html_x( 'Layout Style', 'Admin Panel','businesslounge' ), 
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "grid",
				"options"    => array(
									"grid" => esc_html_x( 'Grid', 'Admin Panel','businesslounge' ),
									"masonry" => esc_html_x( 'Masonry', 'Admin Panel','businesslounge' ),
								 	"metro" => esc_html_x("Metro",'Admin Panel','businesslounge')
								),								
			]
		 
		); 

		$this->add_control(
			'list_layout',
			[
				'label'     => esc_html_x( 'Layout', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Column layout for the list"', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "1/3",
				"options"    => array(
									"1/6" => "1/6", 
									"1/4" => "1/4",
									"1/3" => "1/3",
									"1/2" => "1/2",
									"1/1" => "1/1"
								),		
				'condition' => [
									'layout_style' => [ "grid", "masonry" ],
								],												
			]
		 
		);

 
 		$this->add_control(
			'metro_layout',
			[
				'label'     => esc_html_x( 'Metro Layout', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Select a pre-defined layout for the metro gallery', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "1",
				"options"    => array(
									"1" => esc_html_x( 'Layout 1', 'Admin Panel', 'businesslounge' ), 
									"2" => esc_html_x( 'Layout 2', 'Admin Panel', 'businesslounge' ), 
									"3" => esc_html_x( 'Layout 3', 'Admin Panel', 'businesslounge' ), 
								),			
				'condition' => [
									'layout_style' => [ "metro" ],
								],											
			]
		 
		);

		$this->add_control(
			'nogaps',
			[
				'label' => esc_html_x("Remove Gaps", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

 		$this->add_control(
			'item_style',
			[
				'label'     => esc_html_x( 'Item Style', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Select a style for the portfolio items', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "style-2",
				"options"    => array(
									"style-1" => esc_html_x( 'Style 1 - Info under the featured image', 'Admin Panel','businesslounge' ),
									"style-2" => esc_html_x( 'Style 2 - Info embedded to the featured image ', 'Admin Panel','businesslounge' ),
								 
								),				
			]
		 
		); 

 		$this->add_control(
			'hover_style',
			[
				'label'     => esc_html_x( 'Hover Style', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Select an overlay text style.', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "hover-1",
				"options"    => array(
									"hover-1" => esc_html_x( 'Style 1', 'Admin Panel','businesslounge' ),
									"hover-2" => esc_html_x( 'Style 2', 'Admin Panel','businesslounge' ),								 
								),		

				'condition' => [
									'item_style' => [ "style-2"],
								],										
			]
		 
		); 


 		$this->add_control(
			'box_style',
			[
				'label'     => esc_html_x( 'Box Style', 'Admin Panel','businesslounge' ), 
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "",
				"options"    => array(
									"" => esc_html_x( 'Default', 'Admin Panel','businesslounge' ),
									"boxed" => esc_html_x( 'Boxed', 'Admin Panel','businesslounge' ),
								 
								),								
			]
		 
		); 

		$this->add_control(
			'filterable',
			[
				'label' => esc_html_x("Filter Navigation", 'Admin Panel','businesslounge'),
				"description" => esc_html_x("Displays a filter navigation that contains categories of the posts of the list.",'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER, 
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
				'condition' => [
									'layout_style' => [ "metro","masonry"],
								],					
			]
		); 


 		$this->add_control(
				'item_per_page',
				[
					'label'   => esc_html_x( 'Amount of item to display', 'Admin Panel', 'businesslounge' ),
					'type'    => Controls_Manager::NUMBER,
					'default' =>  "10"
				]
		);  

 
 		$this->add_control(
			'pagination',
			[
				'label' => esc_html_x("Pagination", 'Admin Panel','businesslounge'),
				"description" => esc_html_x("Splits the list into pages",'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

 		$this->add_control(
			'ajax_pagination',
			[
				'label' => esc_html_x("Ajax Pagination", 'Admin Panel','businesslounge'),
				"description" => esc_html_x("Works with Masonry layout only",'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
				'condition' => [
									'pagination' => [ "true" ],
								],						
			]
		); 


 		$this->add_control(
			'list_orderby',
			[
				'label'     => esc_html_x( 'List Order By', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Sorts the posts by this parameter', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "date",
				"options"    => array(
									'date' => esc_html_x('Date',"Admin Panel","businesslounge"),
									'author' => esc_html_x('Author',"Admin Panel","businesslounge"),
									'title' => esc_html_x('Title',"Admin Panel","businesslounge"),
									'modified' => esc_html_x('Modified',"Admin Panel","businesslounge"),
									'ID' => esc_html_x('ID',"Admin Panel","businesslounge"),
									'rand' => esc_html_x('Randomized',"Admin Panel","businesslounge"),
								)							
			]
		 
		); 

 		$this->add_control(
			'list_order',
			[
				'label'     => esc_html_x( 'List Order', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Designates the ascending or descending order of the list_orderby parameter', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT,
				'default'    =>  "DESC",
				"options"    => array(
									"DESC" => esc_html_x('Descending',"Admin Panel","businesslounge"),
									"ASC" => esc_html_x('Ascending',"Admin Panel","businesslounge"),
								)							
			]
		 
		); 


 		$this->add_control(
			'categories',
			[
				'label'     => esc_html_x( 'Categories', 'Admin Panel','businesslounge' ),
				'description' => esc_html_x('Filter the posts by selected categories.', 'Admin Panel','businesslounge' ),	
				'type'      =>  Controls_Manager::SELECT2,
				'default'    =>  "",
				'multiple' => true,
				"options"    => rt_get_portfolio_categories(),					
			]
		 
		); 

		$this->add_control(
			'display_categories',
			[
				'label' => esc_html_x("Display Categories", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => "true",
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

		$this->add_control(
			'display_excerpts',
			[
				'label' => esc_html_x("Display Excerpts", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SWITCHER,
				'default' => "true",
				'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value' => 'true',
			]
		); 

 

		$this->end_controls_section();


		/* Featured Images */
  		$this->start_controls_section(
  			'RT_Featured_Images',
  			[
  				'label' => esc_html_x( 'Featured Images','Admin Panel','businesslounge' )
  			]
  		); 

			$this->add_control(
				'metro_resize',
				[
					'label' => esc_html_x("Resize and Crop Metro Gallery Images?", 'Admin Panel','businesslounge'),
					'type' => Controls_Manager::SWITCHER,
					'desctiption' => esc_html_x( 'Do not upload small or landscape/portrait sized photos to get correct layout.', 'Admin Panel', 'businesslounge'),
					'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
					'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
					'return_value' => 'true',
					'default' => 'true',
					'condition' => [
										'layout_style' => [ "metro"],
									],							
				]
			); 

			$this->add_control(
				'featured_image_resize',
				[
					'label' => esc_html_x("Resize Featured Images", 'Admin Panel','businesslounge'),
					'type' => Controls_Manager::SWITCHER,
					'desctiption' => esc_html_x( 'Enable the "Image Resize" to resize or crop the featured images automatically. These settings will be overwrite the global settings. Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave values "0" to use theme defaults.', 'Admin Panel', 'businesslounge'),
					'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
					'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
					'return_value' => 'true',
					'condition' => [
										'layout_style' => [ "grid","masonry"],
									],							
				]
			); 

			$this->add_control(
				'featured_image_max_width',
				[
					'label'   => esc_html_x("Image Width", 'Admin Panel','businesslounge'),
					'type'    =>  Controls_Manager::NUMBER,
					'condition' => [
										'featured_image_resize' => [ "true" ],
									],
					'default' => 1000,
					'min'     => 10,
					'max'     => 2000, 	
					'description' => esc_html_x('Set a width value for the carousel images. Note: Remember that the images width will be resoponsive. Leave blank for auto width.', 'Admin Panel','businesslounge' ),					

				]
			); 

	 		$this->add_control(
				'featured_image_max_height',
				[
					'label'   => esc_html_x("Image Height", 'Admin Panel','businesslounge'),
					'type'    =>  Controls_Manager::NUMBER,
					'condition' => [
										'featured_image_resize' => [ "true" ],
									],
					'default' => 1000,
					'min'     => 10,
					'max'     => 2000, 		
					'description' => esc_html_x('Set a height value for the images. Remember that the image heights will be resoponsive. Leave blank for auto height.', 'Admin Panel','businesslounge' ),

				]
			); 

			$this->add_control(
				'featured_image_crop',
				[
					'label' => esc_html_x("Crop Images", 'Admin Panel','businesslounge'),
					'type' => Controls_Manager::SWITCHER,
					'default' => '',
					'label_on' => esc_html_x("ON", 'Admin Panel','businesslounge'),
					'label_off' => esc_html_x("OFF", 'Admin Panel','businesslounge'),
					'return_value' => 'true',
					'condition' => [
										'featured_image_resize' => [ "true" ],
									],				
				]
			); 

 	
		$this->end_controls_section();		
	}


	protected function render( ) {

		$settings = $this->get_settings(); 

 
 		if( ! $settings["featured_image_resize"] ){
			$settings["featured_image_max_width"] = "";
			$settings["featured_image_max_height"] = "";
			$settings["featured_image_crop"] = ""; 			
 		}		
 

		$settings["display_categories"] = rtframework_convert_bool( $settings["display_categories"] );
 		$settings["display_excerpts"] = rtframework_convert_bool( $settings["display_excerpts"] );
		$settings["filterable"] = rtframework_convert_bool( $settings["filterable"] );
		$settings["pagination"] = rtframework_convert_bool( $settings["pagination"] );
		$settings["ajax_pagination"] = rtframework_convert_bool( $settings["ajax_pagination"] );
		$settings["metro_resize"] = rtframework_convert_bool( $settings["metro_resize"] );
		$settings["featured_image_resize"] = rtframework_convert_bool( $settings["featured_image_resize"] );
 
		rt_portfolio_post_loop( "", $settings );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Portfolio() );
