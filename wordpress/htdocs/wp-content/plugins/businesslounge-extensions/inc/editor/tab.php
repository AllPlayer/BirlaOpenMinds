<?php
/*
*
* RT Tabs
* [rt_tabs]
*  [rt_tab][/rt_tab] 
*  [rt_tab][/rt_tab] 
*  [rt_tab][/rt_tab] 
* [/rt_tabs]
*
*/
 
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_tabs extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_tab extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_tabs',
		'name'        => _x( 'Tabs', 'Admin Panel','businesslounge' ),		
		'icon'        => 'rt_theme tab rt-backend-only',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Tabular content holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_tab' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		'is_container' => true,
		"show_settings_on_create" => false,
		'default_content' => '
			[rt_tab title="' . _x( 'Tab 1','Admin Panel','businesslounge' ) . '"]'._x('I am text block. Click edit button to change this text.','Admin Panel','businesslounge').'[/rt_tab]
			[rt_tab title="' . _x( 'Tab 2','Admin Panel','businesslounge' ) . '"]'._x('I am text block. Click edit button to change this text.','Admin Panel','businesslounge').'[/rt_tab]
		',

		'params'      => array(
 

							array(
								'param_name'  => 'tabs_style',
								'heading'     => _x('Tab Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														_x("Horizontal Tabs", 'Admin Panel','businesslounge') => "style-1",
														_x("Horizontal Big Tabs", 'Admin Panel','businesslounge') => "style-4",
														_x("Left Vertical Tabs", 'Admin Panel','businesslounge') => "style-2", 
														_x("Right Vertical Tabs", 'Admin Panel','businesslounge') => "style-3", 
												),
								'group'       => 'Link'
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
		'base'        => 'rt_tab',
		'name'        => _x( 'Tab', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme tab-content',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new tab to a tabular content.', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_tabs' ),
		'content_element' => true,
		'params'      => array(

							array(
								'param_name'  => 'title',
								'heading'     => _x('Title', 'Admin Panel','businesslounge' ),
								'description' => _x('Tab Title', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'holder'      => 'strong',
								'value'       => _x( 'Tab Title', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Tab Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
							),

							array(
								'param_name'  => 'icon_name',
								'heading'     => _x('Tab Icon', 'Admin Panel','businesslounge' ),
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