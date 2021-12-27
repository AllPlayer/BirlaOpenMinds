<?php
/*
*
* RT Accordions
* [rt_accordion]
*  [rt_accordion_content][/rt_accordion_content] 
*  [rt_accordion_content][/rt_accordion_content] 
*  [rt_accordion_content][/rt_accordion_content] 
* [/rt_accordion]
*
*/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_accordion extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_accordion_content extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_accordion',
		'name'        => _x( 'Accordion', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme accordion',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Accordion content holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_accordion_content' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		'is_container' => true,
		"show_settings_on_create" => false,
		'default_content' => '
			[rt_accordion_content title="' . _x( 'Content 1','Admin Panel','businesslounge' ) . '"]'._x('I am text block. Click edit button to change this text.','Admin Panel','businesslounge').'[/rt_accordion_content]
			[rt_accordion_content title="' . _x( 'Content 2','Admin Panel','businesslounge' ) . '"]'._x('I am text block. Click edit button to change this text.','Admin Panel','businesslounge').'[/rt_accordion_content]
		',		
		'params'      => array(

							array(
								'param_name'  => 'style',
								'heading'     => _x('Accordion Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								'description' => _x('Select an accordion content style', 'Admin Panel','businesslounge' ),
								"value"       => array(
													_x("Numbered", 'Admin Panel','businesslounge') => "numbered",
													_x("With Icons", 'Admin Panel','businesslounge') => "icons", 
													_x("Captions Only", 'Admin Panel','businesslounge') => "only_captions"
												),
							),										

							array(
								'param_name'  => 'first_one_open',
								'heading'     => _x('First content', 'Admin Panel','businesslounge' ),
								'description' => _x('Keep the first section opened when the page loaded.', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("First one open", 'Admin Panel','businesslounge') => "true",
												),
							),

							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							),


						)
	)
);
 
vc_map(
	array(
		'base'        => 'rt_accordion_content',
		'name'        => _x( 'Accordion Content', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme accordion-content',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new section to a accordion content.', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_accordion' ),
		'content_element' => true,
		'params'      => array(

							array(
								'param_name'  => 'title',
								'heading'     => _x('Title', 'Admin Panel','businesslounge' ),
								'description' => _x('Accordion Title', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => _x( 'Accordion Title', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Accordion Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
							),

							array(
								'param_name'  => 'icon_name',
								'heading'     => _x('Accordion Icon', 'Admin Panel','businesslounge' ),
								'description' => _x('Click inside the field to select an icon or type the icon name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'class'       => 'icon_selector',
							),

							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							),

						)
	)
);		
?>