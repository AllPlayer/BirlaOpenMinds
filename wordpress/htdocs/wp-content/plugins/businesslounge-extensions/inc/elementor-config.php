<?php
/**
 * Elementor Addons & Config
 * 
 * @author RT-Themes
 */


if( ! function_exists("rt_elementor_addons")){
	/**
	 * Includes
	 */	
	function rt_elementor_addons()
	{
		$module_list = array( 
			"heading", 
			"button", 
			"blog",
			"blog_carousel",
			"contact_form", 
			"counter",
			"latest_news",
			"quote",
			"image_carousel",
			"photo_gallery",
			"piechart",
			"progress-bar", 
			"countdown",
			"tabs",
			"accordions",
			"slider",
			"pricing_tables", 
			"timeline", 
			"map",
			"simple_table"
		);

		if ( class_exists( 'RT_Custom_Posts' ) ) {

			if( RT_Custom_Posts::is_testimonials_active() ){
				array_push($module_list, 'testimonial');
				array_push($module_list, 'testimonial_carousel');
			}

			if( RT_Custom_Posts::is_portfolio_active() ){
				array_push($module_list, 'portfolio');
				array_push($module_list, 'portfolio_carousel');
			}
			if( RT_Custom_Posts::is_team_active() ){
				array_push($module_list, 'staff');
				array_push($module_list, 'staff_carousel');
			}
		}

		//check woocommerce
		if ( class_exists( 'Woocommerce' ) ) {
			array_push($module_list, 'woocommerce_products');
			array_push($module_list, 'woocommerce_categories');
		}
	 
	 	//check CF7
		if ( class_exists( "WPCF7" ) ){
			array_push($module_list, 'contact_form_7');
		}

	 	//check revslider
		if ( class_exists( "RevSlider" ) ){
			array_push($module_list, 'rev_slider');
		}


		foreach ($module_list as $module_name) {
			include( RT_EXTENSIONS_PATH . "/inc/elementor-addons/".$module_name.".php" );
		}
 
	}
}
add_action( "elementor/widgets/widgets_registered", "rt_elementor_addons", 10, 1 );

if( ! function_exists("rt_elementor_icons")){
	/**
	 * Includes
	 */	
	function rt_elementor_icons()
	{
		//Controls
		include( RT_EXTENSIONS_PATH . "/inc/elementor-addons/icon-control.php" );

	}
}
add_action( "elementor/init", "rt_elementor_icons", 10, 1 );

if( ! function_exists("businesslounge_fix_elementor_imgurls") ){
	/**
	 *
	 * Fix Elementor Image URLs
	 * Replace all demo import image URLs with the local one
	 *
	 */
	function businesslounge_fix_elementor_imgurls(){
		global $post;

		$page_data = get_post_meta( $post->ID, '_elementor_data', true );  

		if( ! strpos( $page_data , "businesslounge") ){
			return;
		}

		$re = "/(\"bg_image\"|\"background_image\"\:|\"image\"\:)(.*?)(\})/i";
		preg_match_all($re, $page_data, $matches); 

		if( $matches ) {
			foreach ( $matches[0] as $value ) {

				$json_value = "[{".$value."}]";
				$json_obj = json_decode( $json_value );

			 	$img_variable = "bg_image";
				if( isset( $json_obj[0]->background_image ) ){

					$img_variable = "background_image";
				}elseif( isset( $json_obj[0]->image ) ){
					$img_variable = "image";
				}

				if( ! isset( $json_obj[0] ) &&  ! isset( $json_obj[0]->$img_variable ) ){	
					continue;
				}

				$img_url = $json_obj[0]->$img_variable->url;
				$file_name = basename($img_url);

				if( isset( $json_obj[0]->$img_variable->id ) ){
					$img_id = $json_obj[0]->$img_variable->id;
				}else{
					continue;
				}
				
				//local url
				$local_url = wp_get_attachment_url($img_id);

				if( basename( $local_url ) != basename( $img_url ) ){
					continue;
				}

				$new_image_obj = array( (object) [
					$img_variable => (object) [
									"url" => $local_url,
									"id" => $img_id
								]
				]);

				$brackets = array("[{","}]");
				$string = json_encode( $new_image_obj );
				$string = str_replace($brackets, "", $string );

				//replace
				$page_data = str_replace( str_replace($brackets, "", $json_value), str_replace($brackets, "", $string), $page_data );
			}
			//update
			update_post_meta( $post->ID, "_elementor_data", wp_slash($page_data) );
		}
	}
}
add_action( "elementor/editor/before_enqueue_scripts", "businesslounge_fix_elementor_imgurls", 10, 1 ); 

if( ! function_exists("rt_elementor_addons_category")){
	/**
	 * Addons Category
	 */	
	function rt_elementor_addons_category(){
		Elementor\Plugin::instance()->elements_manager->add_category(
			'rt-elementor-addons',
			[
				'title'  => RT_THEMENAME .' '. esc_html_x( 'Addons for Elementor', 'Adnin Panel', 'businesslounge' ),
				'icon' => 'font'
			],
			1
		);
	}
}
add_action('elementor/init','rt_elementor_addons_category');

if( ! function_exists("rt_elementor_addons_css")){
	/**
	 * CSS Files
	 */	
	function rt_elementor_addons_css(){
		wp_enqueue_style('theme-fonts', rtframework_locate_media_file( '/css/fontello/css/fontello.css' ));     
	}
}
add_action( "elementor/editor/after_enqueue_styles", "rt_elementor_addons_css", 10, 1 );

if( ! function_exists("rt_elementor_addons_js")){
	/**
	 * JS Files
	 */	
	function rt_elementor_addons_js(){

		//load google api
		$api_key = get_theme_mod(RT_THEMESLUG.'_google_api_key');

		if( ! empty( $api_key ) ){
			$googlemaps_url = add_query_arg( 'key', urlencode( $api_key ), "//maps.googleapis.com/maps/api/js" );
			wp_enqueue_script('googlemaps',$googlemaps_url,array(), '1.0.0'); 	
		}else{
			wp_enqueue_script('googlemaps','//maps.googleapis.com/maps/api/js'); 
		}

		wp_enqueue_script('rt-elementor-addons', RT_EXTENSIONS_URI. 'js/elementor-addons.js' , array('jquery'),'1.0', true);    

	}
}
add_action( "elementor/preview/enqueue_scripts", "rt_elementor_addons_js", 10, 1 );

if( ! function_exists("rtframework_elementor_parallax_effect") ){
	/**
	 * Parallax Effect
	 * Adds parallax effect settings to elementor
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_elementor_parallax_effect( $section, $args ) {

		  $section->add_control(
			'rt_parallax',
			[
				'label'              => esc_html_x("Parallax Background", 'Admin Panel','businesslounge'),
				'type'               => Elementor\Controls_Manager::SWITCHER,
				'default'            => '',
				'label_on'           => esc_html_x("ON", 'Admin Panel','businesslounge'),
				'label_off'          => esc_html_x("OFF", 'Admin Panel','businesslounge'),
				'return_value'       => 'rt-el-parallax-background',
				'frontend_available' => true,
				'prefix_class'       => ''                   
			]
		  ); 

		 $section->add_control(
			'rt_bg_parallax_warning' ,
			[
				'raw'             => esc_html_x('Note: The parallax effect won\'t work on the editor mode. Save and visit the page to see it.', 'Admin Panel','businesslounge' ), 
				'type'            => Elementor\Controls_Manager::RAW_HTML,
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
				'condition'       => [
									'rt_parallax'     => [ "rt-el-parallax-background" ],
									],
			]
		 );      

		 $section->add_control(
			'rt_bg_parallax_effect' ,
			[
				'label'        => esc_html_x( 'Parallax Effect', 'Admin Panel','businesslounge' ), 
				'description'  => esc_html_x('Select the parallax style set repeat mode direction for the background image.', 'Admin Panel','businesslounge' ), 
				'type'         => Elementor\Controls_Manager::SELECT,
				'default'      => '3',
				'options'      => array( 
									"1" => _x("Horizontally, from left to right",'Admin Panel','businesslounge'),
									"2" => _x("Horizontally, from right to left",'Admin Panel','businesslounge'),
									"3" => _x("Vertically, from top to bottom",'Admin Panel','businesslounge'),
									"4" => _x("Vertically, from bottom to top",'Admin Panel','businesslounge'),
								),
				'label_block'  => true,
				'frontend_available' => true,
				'condition' => [
					'rt_parallax' => [ "rt-el-parallax-background" ],
				],  

			]
		 );

		 $section->add_control(
			'rt_bg_parallax_speed' ,
			[
			   'label'        => esc_html_x( 'Parallax Speed', 'Admin Panel','businesslounge' ),  
			   'type'         => Elementor\Controls_Manager::SELECT,
			   'default'      => '1',
			   'options'      => array( 
										  "1" => "1",  
										  "2" => "2",  
										  "3" => "3",   
								),
			   'label_block'  => true,
			   'frontend_available' => true,
				'condition' => [
				  'rt_parallax' => [ "rt-el-parallax-background" ],
				],  

			]
		 );                
	}
}
add_action('elementor/element/section/section_background/before_section_end', 'rtframework_elementor_parallax_effect', 100, 3 );
add_action('elementor/element/column/section_style/before_section_end', 'rtframework_elementor_parallax_effect', 100, 3 );

if( ! function_exists("rtframework_section_snap") ){
	/**
	 * Snap section
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_section_snap( $section, $args ) {

		$section->start_controls_section(
		  'rt_align_section',
		  [
			'label' =>  esc_html_x( 'Align','Admin Panel','businesslounge' ),
			'tab' => Elementor\Controls_Manager::TAB_STYLE,
		  ]                      
		); 

		$section->add_control(
			'rt_align',
			[
				'label' => esc_html_x( 'Section Align', 'Admin Panel', 'businesslounge' ),
				'type' => Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html_x( 'Right', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-left',
					],
					'' => [
						'title' => esc_html_x( 'Center', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-center',
					],					
					'right' => [
						'title' => esc_html_x( 'Right', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} > .elementor-container' => 'margin-{{VALUE}}: 0;',
				],
			]
		);

		$section->end_controls_section();
	}
}
add_action('elementor/element/section/section_typo/after_section_end', 'rtframework_section_snap', 100, 3 );

if( ! function_exists("rtframework_elementor_color_set") ){
	/**
	 * Color Sets
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_elementor_color_set( $section, $args ) {

	  // Content Controls
		$section->start_controls_section(
		  'rt_section_color_set',
		  [
			'label' =>  esc_html_x( 'Color Set','Admin Panel','businesslounge' ),
			'tab' => Elementor\Controls_Manager::TAB_STYLE,
		  ]                      
		); 

		 $section->add_control(
			'rt_color_sets' ,
			[
			   'label'        => esc_html_x( 'Color Sets', 'Admin Panel','businesslounge' ), 
			   'type'         => Elementor\Controls_Manager::SELECT,
			   'default'      => 'default-style',
			   'options'      => array( 
									  ''              => esc_html_x('Global Colors', 'Admin Panel', 'businesslounge'),
									  'default-style' => esc_html_x('Color Set 1', 'Admin Panel', 'businesslounge'),
									  'alt-style-1'   => esc_html_x('Color Set 2', 'Admin Panel', 'businesslounge'),
									  'light-style'   => esc_html_x('Color Set 3', 'Admin Panel', 'businesslounge'),
								),
			   'prefix_class' => '',
			   'label_block'  => true,
			   'frontend_available' => true,
			]
		 );

		 $section->add_control(
			'rt_column_style' ,
			[
			   'label'        => esc_html_x( 'Column Style', 'Admin Panel','businesslounge' ), 
			   'type'         => Elementor\Controls_Manager::SELECT, 
			   'options'      => array( 
									  ''            => esc_html_x('Default', 'Admin Panel', 'businesslounge'),
									  'border_grid' => esc_html_x('Grid view', 'Admin Panel', 'businesslounge'),
								),
			   'prefix_class' => ''
			]
		 );                  


		$section->end_controls_section();
	}
}
add_action('elementor/element/section/section_background/before_section_start', 'rtframework_elementor_color_set', 100, 3 );

if( ! function_exists("rtframework_elementor_color_set_column") ){
	/**
	 * Color Sets
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_elementor_color_set_column( $section, $args ) {

	  // Content Controls
		$section->start_controls_section(
		  'rt_section_color_set',
		  [
			'label' =>  esc_html_x( 'Color Set','Admin Panel','businesslounge' ),
			'tab' => Elementor\Controls_Manager::TAB_STYLE,
		  ]                      
		); 

		 $section->add_control(
			'rt_color_sets' ,
			[
			   'label'        => esc_html_x( 'Color Sets', 'Admin Panel','businesslounge' ), 
			   'type'         => Elementor\Controls_Manager::SELECT,
			   'default'      => '',
			   'options'      => array( 
									  ''              => esc_html_x('Global Colors', 'Admin Panel', 'businesslounge'),
									  'default-style' => esc_html_x('Color Set 1', 'Admin Panel', 'businesslounge'),
									  'alt-style-1'   => esc_html_x('Color Set 2', 'Admin Panel', 'businesslounge'),
									  'light-style'   => esc_html_x('Color Set 3', 'Admin Panel', 'businesslounge'),
								),
			   'prefix_class' => ''
			]
		 );

		$section->end_controls_section();

	}
}
add_action('elementor/element/column/section_style/before_section_start', 'rtframework_elementor_color_set_column', 100, 3 );

if( ! function_exists("rtframework_elementor_disable_column_borders") ){
	/**
	 * Color Sets
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_elementor_disable_column_borders( $section, $args ) {

 
		 $section->add_responsive_control(
			'rt-border' ,
			[
				'label' => esc_html_x("Responsive Border Widths", 'Admin Panel','businesslounge'),
				'type' => Elementor\Controls_Manager::DIMENSIONS, 
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-column-wrap' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'condition' => [
									'border_border' => [ "solid", "double", "dotted", "dashed" ],
								],						
			]
		 );
 
	}
}
add_action('elementor/element/column/section_border/before_section_end', 'rtframework_elementor_disable_column_borders', 100, 3 );

if( ! function_exists("rtframework_elementor_icon_list_addons") ){
	/**
	 * Color Sets
	 *
	 * @since 1.0
	 *  
	 */
	function rtframework_elementor_icon_list_addons( $section, $args ) {
		$section->add_control(
			'rt_color_background' ,
			[
				'label' =>  esc_html_x( 'Background Color', 'Admin Panel','businesslounge' ),
				'type' => Elementor\Controls_Manager::COLOR, 
				'selectors' => [
					'{{WRAPPER}} .elementor-icon-list-icon i' => 'background-color: {{VALUE}};display:inline-block;',
				]
			]
		);

		$section->add_control(
			'rt_icon_padding',
			[
				'label' => esc_html__( 'Padding', 'Admin Panel', 'businesslounge' ),
				'type' => Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-icon-list-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};display:inline-block;',
				],
			]
		);  

		$section->add_control(
			'rt_box_size' ,
			[
				'label' =>  esc_html_x( 'Box Size', 'Admin Panel','businesslounge' ),
				'type' => Elementor\Controls_Manager::NUMBER, 
				'selectors' => [
					'{{WRAPPER}} .elementor-icon-list-icon i' => 'width: {{VALUE}}px;height: {{VALUE}}px;line-height: {{VALUE}}px;display:inline-block; text-align:center;',
				]
			]
		);		
	}
}		
add_action('elementor/element/icon-list/section_icon_style/before_section_end', 'rtframework_elementor_icon_list_addons', 100, 3 );


if( ! function_exists("rtframework_add_elementor_templates") ){
	/**
	 * Add Templates 
	 *  
	 */
	function rtframework_add_elementor_templates( $templates ) {  
		
		if( ! defined( "ELEMENTOR_VERSION" ) ){
			return;
		}

		if ( version_compare( ELEMENTOR_VERSION,"2.3","<") ){
			return;
		}

		require( RT_EXTENSIONS_PATH . "/inc/elementor-templates.php" );
		$source = new RTFramework_Templates_Source();
		$theme_templates = $source->get_items(); 

		$templates["templates"] = array_merge($theme_templates, $templates["templates"]);
 
		return $templates;
	}
}
add_filter( 'option_elementor_remote_info_library', 'rtframework_add_elementor_templates' ); 
add_filter( 'option_elementor_remote_info_templates_data', 'rtframework_add_elementor_templates' );


if( ! function_exists("rtframework_get_elementor_template_data") ){
	/**
	 * Get Template Data 
	 *  
	 */
	function rtframework_get_elementor_template_data() {  

		if ( version_compare( ELEMENTOR_VERSION,"2.3","<") ){
			return;
		}
		
		if ( ! isset( $_REQUEST['actions'] ) || empty( $_REQUEST['actions'] ) ) {
			return;
		}	

		$actions = json_decode( stripcslashes( $_REQUEST["actions"] ) ) ;
 
		if ( is_object( $actions ) ) {
			$actions = get_object_vars($actions);
			$actions = reset($actions); 
		}else{
			return;
		}

		if ( ! isset( $actions->data ) || ! is_object( $actions->data ) ) {
			return;
		}

		$template_data = $actions->data; 

		if ( strpos( $template_data->template_id , RT_THEMESLUG) === false ) {

			return;
		}

		if( ! class_exists("RTFramework_Templates_Source") ){
			require( RT_EXTENSIONS_PATH . "/inc/elementor-templates.php" );	
			$source = new RTFramework_Templates_Source();
		}   		
 
		wp_send_json_success( [
			'responses' => array(
				$template_data->template_id  => array(
						'success' => true,
						'code' => 200,
						'data' => $source->get_data( get_object_vars($template_data) )
					)
				)
		] );
	 
	}
}
add_action( 'elementor/template-library/after_get_source_data', 'rtframework_get_elementor_template_data', 0 ); 


if( ! function_exists("rtframework_get_elementor_editor_styles") ){
	/**
	 *
	 * Extra editor styles
	 *  
	 */
	function rtframework_get_elementor_editor_styles() {  
		
		wp_add_inline_style( 'elementor-editor', '
			.elementor-template-library-template:hover .elementor-template-library-template-screenshot {
				background-position: 0 100%;
				transition: all 1.5s;
			}
		');
 
	}
}
add_action( 'elementor/editor/after_enqueue_styles', 'rtframework_get_elementor_editor_styles', 0 );
