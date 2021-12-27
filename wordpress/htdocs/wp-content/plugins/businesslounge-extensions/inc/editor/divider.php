<?php
/*
*
* Seperator
*
*/
vc_map_update( 'vc_separator', array(
	'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
));

//remove vc_row params
rt_vc_remove_param('vc_separator', array('color','el_width','el_class','style','accent_color','css','align','border_width'));


rt_vc_add_param( array('vc_separator'), array(
	'param_name'  => 'rt_class',
	'type'        => 'rt_hidden', 
));	


vc_add_param( 'vc_separator',array(
	'param_name'  => 'style',
	'heading'     => _x( 'Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a style', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
	 						_x("Style One - Classical Line", "businesslounge") => "style-1", 
							_x("Style Two - Short Horizontal Line", "businesslounge") => "style-2",  
							_x("Style Two - Short Vertical Line", "businesslounge") => "style-3"
						),
	'save_always' => true
));


vc_add_param( 'vc_separator', array(
	'param_name'  => 'color_type',
	'heading'     => _x( 'Color', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Default Border Color", 'Admin Panel','businesslounge') => "", 						
						_x("Primary Color", 'Admin Panel','businesslounge') => "primary", 
						_x("Custom Color", 'Admin Panel','businesslounge') => "custom", 
					),
));

vc_add_param( 'vc_separator', array(
	'param_name'  => 'color',
	'heading'     => _x( 'Custom Color', 'Admin Panel','businesslounge' ), 
	'type'        => 'colorpicker',
	"dependency"  => array(
								"element" => "color_type",
								"value" => array("custom")
							),	
));


vc_add_param( 'vc_separator', array(
	'param_name'  => 'width',
	'heading'     => _x( 'Custom Width', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Set a custom width value (px,%)', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_number', 
));


vc_add_param( 'vc_separator', array(
	'param_name'  => 'height',
	'heading'     => _x( 'Custom Height', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Set a custom height value (px)', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_number'
));


rt_vc_add_param( array('vc_separator'), array(
	'param_name'  => 'margins',
	'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_styling',  
	'rt_input_defaults' => array("20px","20px","auto","auto"),
	'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
));	

vc_add_param( 'vc_separator',array(
	'param_name'  => 'id',
	'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
	'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
	'value'       => ''
));

vc_add_param( 'vc_separator',array(
	'param_name'  => 'class',
	'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
	'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield'
));

?>