<?php
/*
*
* Icons 
*
*/

vc_map(
	array(
	  'base'        => 'rt_icon',
	  'name'        => __( 'Icon', 'businesslounge' ),
	  'icon'        => 'rt_theme rt_icon',
	  'category'    => array(__( 'Content', 'businesslounge' ), __( 'Theme Addons', 'businesslounge' )),
	  'description' => __( 'Add a theme icon.', 'businesslounge' ),
	  'params'      => array(


								array(
									'param_name'  => 'icon_name',
									'heading'     => __('Icon Name', 'businesslounge' ),
									'description' => __('Click inside the field to select an icon or type the icon name', 'businesslounge' ),
									'type'        => 'textfield',
									'class'       => 'icon_selector'
								),


								array(
									'param_name'  => 'align',
									'heading'     => __( 'Text Align', 'businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														__("Default", "businesslounge") => "",
														__("Left", "businesslounge") => "left",
														__("Right", "businesslounge") => "right",
														__("Center", "businesslounge") => "center",													
													),
									'save_always' => true
								),

								array(
									'param_name'  => 'color_type',
									'heading'     => _x( 'Icon Color', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														_x("Text Color", 'Admin Panel','businesslounge') => "text", 
														_x("Primary Color", 'Admin Panel','businesslounge') => "primary", 
														_x("Custom Color", 'Admin Panel','businesslounge') => "custom", 
													),
									'save_always' => true
								),

								array(
									'param_name'  => 'color',
									'heading'     => _x('Custom Icon Color', 'Admin Panel','businesslounge' ),
									'type'        => 'colorpicker',
									"dependency"  => array(
													"element" => "color_type",
													"value" => array("custom")
									),											
								),

								array(
									'param_name'  => 'background_color',
									'heading'     => _x('Custom Background Color', 'Admin Panel','businesslounge' ),
									'type'        => 'colorpicker',
									"dependency"  => array(
													"element" => "color_type",
													"value" => array("custom")
									),											
								),

								array(
									'param_name'  => 'font_size',
									'heading'     => _x('Custom Icon Size (px)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number'								
								),

								array(
									'param_name'  => 'border_color',
									'heading'     => _x('Border Color', 'Admin Panel','businesslounge' ),
									'type'        => 'colorpicker'				
								),

								array(
									'param_name'  => 'border_width',
									'heading'     => _x('Border Width (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number'							
								),

								array(
									'param_name'  => 'border_radius',
									'heading'     => _x('Border Radius (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number'							
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


								array(
									'param_name'  => 'margin_top',
									'heading'     => _x( 'Margin Top', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin top value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_bottom',
									'heading'     => _x( 'Margin Bottom', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin bottom value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_left',
									'heading'     => _x( 'Margin Left', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin left value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_right',
									'heading'     => _x( 'Margin Right', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin right value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),	


								array(
									'param_name'  => 'padding_top',
									'heading'     => _x( 'Padding Top', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding top value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_bottom',
									'heading'     => _x( 'Padding Bottom', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding bottom value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_left',
									'heading'     => _x( 'Padding Left', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding left value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_right',
									'heading'     => _x( 'Padding Right', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding right value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),	

							)
	)
);				

?>