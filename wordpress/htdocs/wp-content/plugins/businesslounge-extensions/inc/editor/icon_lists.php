<?php
/*
*
* RT Icon Lists
* [rt_icon_list]
*  [rt_icon_list_line][/rt_icon_list_line] 
*  [rt_icon_list_line][/rt_icon_list_line] 
*  [rt_icon_list_line][/rt_icon_list_line] 
* [/rt_icon_list]
*
*/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_icon_list extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_icon_list_line extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_icon_list',
		'name'        => _x( 'Icon Lists', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme icon_list',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Icon list holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_icon_list_line' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		'is_container' => true,
		"show_settings_on_create" => false,
		'default_content' => '
			[rt_icon_list_line icon_name="icon-home-1"]63739 street lorem ipsum City, Country[/rt_icon_list_line]
			[rt_icon_list_line icon_name="icon-phone"]+1 123 312 32 23[/rt_icon_list_line]
			[rt_icon_list_line icon_name="icon-mobile-1"]+1 123 312 32 24[/rt_icon_list_line]
			[rt_icon_list_line icon_name="icon-mail"]info@company.com[/rt_icon_list_line][/rt_icon_list]
		',		
		'params'      => array(

							array(
								'param_name'  => 'list_style',
								'heading'     => _x('List Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								'description' => _x('Select a list style', 'Admin Panel','businesslounge' ),
								"value"       => array(
													_x("Default Icons", 'Admin Panel','businesslounge') => "style-1", 
													_x("Light Icons", 'Admin Panel','businesslounge') => "style-2", 
													_x("Boxed Icons", 'Admin Panel','businesslounge') => "style-3", 
													_x("Big Icons", 'Admin Panel','businesslounge') => "style-4", 
												),
								'save_always' => true
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
		'base'        => 'rt_icon_list_line',
		'name'        => _x( 'List Item', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme list_line sub',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new item to the icon list', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_icon_list' ),
		'content_element' => true,
		'params'      => array(

							array(
								'param_name'  => 'icon_name',
								'heading'     => _x('Icon', 'Admin Panel','businesslounge' ),
								'description' => _x('Click inside the field to select an icon or type the icon name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'class'       => 'icon_selector',
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
								'save_always' => true
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