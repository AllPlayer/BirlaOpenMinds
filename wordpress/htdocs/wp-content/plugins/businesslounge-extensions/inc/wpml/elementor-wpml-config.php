<?php
/**
 * Elementor WPML Config
 * 
 * @author RT-Themes
 */

 if( ! function_exists("rtframework_wpml_required_files") ){
	/**
	 *
	 * Elements with repeater
	 *  
	 */
	function rtframework_wpml_required_files() {  
		
		$modules_with_items = array( 
			"tabs",
			"accordions",
			"slider",
			"pricing_tables", 
			"timeline", 
			"map",
			"simple_table"
		);
		
		foreach ($modules_with_items as $module_name) {
			include( RT_EXTENSIONS_PATH . "/inc/wpml/elementor-wpml-".$module_name.".php" );
		}
	}
}
add_action( 'wpml_load_page_builders_integration', 'rtframework_wpml_required_files', 105 );

if( ! function_exists("rtframework_wpml_compatibility_fields") ){
	/**
	 *
	 * Extra editor styles
	 *  
	 */
	function rtframework_wpml_compatibility_fields( $fields ) {  

		$fields['rt-heading']  = array(
										'conditions' => array( 'widgetType' => 'rt-heading' ),
										'fields'     => array(
											array(
												'field'       => 'heading_text',
												'type'        => esc_html_x("Heading Text", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINE'
											),
											array(
												'field'       => 'punchline',
												'type'        =>  esc_html_x("Punchline", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINE'
											),											
										),
									);

		$fields['rt-button']  = array(
										'conditions' => array( 'widgetType' => 'rt-button' ),
										'fields'     => array(
											array(
												'field'       => 'button_text',
												'type'        => esc_html_x("Button Text", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINE'
											),

											'link' => array(
												'field'       => 'url',
												'type'        => esc_html_x("Link", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINK'
											),

										),
 

									);
 
 		$fields['rt-counter']  = array(
										'conditions' => array( 'widgetType' => 'rt-counter' ),
										'fields'     => array(
											array(
												'field'       => 'number',
												'type'        =>  esc_html_x("Number", 'Admin Panel','businesslounge'),
												'editor_type' => 'NUMBER'
											), 
											array(
												'field'       => 'text',
												'type'        =>  esc_html_x( 'Text after the number', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 											
											array(
												'field'       => 'content',
												'type'        =>  esc_html_x("Description", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINE'
											), 											
										),
									);

 		$fields['rt-quote']  = array(
										'conditions' => array( 'widgetType' => 'rt-quote' ),
										'fields'     => array(
											array(
												'field'       => 'name',
												'type'        =>  esc_html_x( 'Name', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 				
											array(
												'field'       => 'position',
												'type'        =>  esc_html_x( 'Position', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 																							
											array(
												'field'       => 'content',
												'type'        =>  esc_html_x( 'Content', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 	
											array(
												'field'       => 'link',
												'type'        =>  esc_html_x( 'Link', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 	
											array(
												'field'       => 'link_title',
												'type'        => esc_html_x( 'Link Title', 'Admin Panel','businesslounge' ), 
												'editor_type' => 'LINE'
											), 																					
										),
									);

 		$fields['rt-progress-bar']  = array(
										'conditions' => array( 'widgetType' => 'rt-progress-bar' ),
										'fields'     => array(
											array(
												'field'       => 'heading',
												'type'        => esc_html_x( 'Heading', 'Admin Panel','businesslounge' ),
												'editor_type' => 'LINE'
											), 			 								
										),
									);

 		$fields['rt-countdown']  = array(
										'conditions' => array( 'widgetType' => 'rt-countdown' ),
										'fields'     => array(
											array(
												'field'       => 'content',
												'type'        => esc_html_x( 'Custom Output Format', 'Admin Panel','businesslounge' ),
												'editor_type' => 'TEXTAREA'
											), 														 								
										),
									);

 		$fields['rt-contact-form-7']  = array(
										'conditions' => array( 'widgetType' => 'rt-contact-form-7' ),
										'fields'     => array(
											array(
												'field'       => 'form',
												'type'        => esc_html_x("Form", 'Admin Panel','businesslounge'),
												'editor_type' => 'LINE'
											), 														 								
										),
									);

 		$fields['rt-tabs']  = array(
										'conditions' => array( 'widgetType' => 'rt-tabs' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Toggle',
									);

 		$fields['rt-accordions']  = array(
										'conditions' => array( 'widgetType' => 'rt-accordions' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Accordions',
									);

 		$fields['rt-slider']  = array(
										'conditions' => array( 'widgetType' => 'rt-slider' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Slider',
									);

 		$fields['rt-pricing-table']  = array(
										'conditions' => array( 'widgetType' => 'rt-pricing-table' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Pricing',
									);

 		$fields['rt-google-maps']  = array(
										'conditions' => array( 'widgetType' => 'rt-google-maps' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Maps',
									);

 		$fields['rt-timeline']  = array(
										'conditions' => array( 'widgetType' => 'rt-timeline' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_Timeline',
									);

 		$fields['rt-simple-table']  = array(
										'conditions' => array( 'widgetType' => 'rt-simple-table' ),
										'fields'     => array(),
										'integration-class' => 'RTFramework_WPML_Elementor_SimpleTables',
									);
		return $fields;
 
	}
}
add_filter( 'wpml_elementor_widgets_to_translate', 'rtframework_wpml_compatibility_fields', 10 );