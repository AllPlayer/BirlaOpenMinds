<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Tabs extends Widget_Base {

	public function get_name() {
		return 'rt-tabs';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Tabs', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-tabs';
	}

	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_tab_content',
  			[
  				'label' => esc_html_x( 'Tabs','Admin Panel','businesslounge' )
  			]
  		); 
  
		$this->add_control(
			'tabs_style',
				[	
					'type'    => Controls_Manager::SELECT,
					'label'   => esc_html_x( 'Tab Style', 'Admin Panel', 'businesslounge' ),
					'default' => 'style-1',
					'options' => array( 
									"style-1" => esc_html_x("Horizontal Tabs", 'Admin Panel','businesslounge'),
									"style-4" => esc_html_x("Horizontal Big Tabs", 'Admin Panel','businesslounge'),
									"style-2" => esc_html_x("Left Vertical Tabs", 'Admin Panel','businesslounge'), 
									"style-3" => esc_html_x("Right Vertical Tabs", 'Admin Panel','businesslounge'), 
								),
			]
		); 


			$this->add_control(
				'tabs',
				[
					'label' => esc_html_x( 'Tabs','Admin Panel','businesslounge' ),
					'type' => Controls_Manager::REPEATER,
					'default' => [
						[
							'title' => esc_html_x( 'Title', 'Admin Panel', 'businesslounge' ),
							'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
						],
						[
							'title' => esc_html_x( 'Title', 'Admin Panel', 'businesslounge' ),
							'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
						],
						[
							'title' => esc_html_x( 'Title', 'Admin Panel', 'businesslounge' ),
							'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
						]	
					],					
					'fields' => [
						[
							'name' => 'title',
							'label' => esc_html_x( 'Tab Title', 'Admin Panel', 'businesslounge' ),
							'type' => Controls_Manager::TEXT,
							'default' => esc_html_x( 'Tab Title', 'Admin Panel', 'businesslounge' ),
							'placeholder' => esc_html_x( 'Tab Title', 'Admin Panel', 'businesslounge' ),
							'label_block' => true,
						],
						[
							'name' => 'content',
							'label' => esc_html_x( 'Tab Content', 'Admin Panel', 'businesslounge' ), 
							'type' => Controls_Manager::WYSIWYG,
							'show_label' => false,
						],
						[	
							'name' => version_compare ( 2.6, ELEMENTOR_VERSION, '<=' ) ? 'icon_name__' : 'icon_name',
							'label' => esc_html_x("Icon", 'Admin Panel','businesslounge'),
							'type' => version_compare ( 2.6, ELEMENTOR_VERSION, '<=' ) ? Controls_Manager::ICONS : Controls_Manager::ICON,
							'return_value' => 'true',			
						]

					],
					'title_field' => '{{{ title }}}',
				]
		);

		$this->end_controls_section();  
	}


	protected function render( ) {

			$settings = $this->get_settings(); 

			$tabs = $tab_contents = $tab_titles = ""; 
			$tabs_counter = 1;

			foreach ( $settings["tabs"] as $tab ) {

			 		if( version_compare ( 2.6, ELEMENTOR_VERSION, '<=' ) ){//elementor 2.6+	 							 	
			 			if( ! empty( $tab["icon_name__"]["value"] ) ){
				 			$tab["icon_name"] = $tab["icon_name__"]["value"];
				 		}else{
				 			$tab["icon_name"] = "";
				 		}
			 		}		

					extract($tab);

					//id
					$id =  'tab-'.$tabs_counter;

					//active tabs
					$class = $tabs_counter == 1 ? " active" : "";

					//icon
					$icon = ! empty( $icon_name ) ? '<span class="'.$icon_name.'"></span>' : "";
					$class .= ! empty( $icon_name ) ? ' with_icon' : "";

					//tab contents
					$tab_contents .= sprintf(
								'<div class="tab_content_wrapper animation %2$s" id="%1$s" data-tab-content="%6$s">
									<div id="%1$s-inline-title" class="tab_title visible-xs" data-tab-number="%6$s">%5$s%3$s</div>
									<div class="tab_content">%4$s</div>
								</div>',	
								$id, trim($class), $title, apply_filters("rtframework_the_content_filters",$content), $icon, $tabs_counter );
	

					//tab titles
					$tab_titles .= sprintf(
								'<li class="tab_title %2$s" id="%1$s-title" data-tab-number="%5$s">%4$s%3$s</li>',
								$id, $class, $title, $icon, $tabs_counter );

				$tabs_counter++;
			}

			$output = '<ul class="tab_nav hidden-xs">'.$tab_titles.'</ul>';
			$output .= '<div class="tab_contents">'. $tab_contents .'</div>';

			$settings["tab_count_"] = $tabs_counter - 1;
 
			echo rt_shortcode_tabs( $settings, $output );
	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Tabs() );
