<?php
/*
*
* Button
*
*/ 
 
vc_map(
	array(
		'base'        => 'button',
		'name'        => _x( 'Button', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_button',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a button', 'Admin Panel','businesslounge' ),
		'params'      => array(


							/* button */
						   array(
								'param_name'  => 'rt_class',
								'type'        => 'rt_hidden', 
							),

							array(
								'param_name'  => 'button_text',
								'heading'     => _x('Button Text', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'holder'      => 'span',
								'save_always' => true
							),

							array(
								'param_name'  => 'button_style',
								'heading'     => _x( 'Button Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														_x("Style 1", 'Admin Panel','businesslounge')   => "style-1",
														_x("Style 2", 'Admin Panel','businesslounge')   => "style-2",
														_x("Style 3", 'Admin Panel','businesslounge')   => "style-3", 
														_x("Black", 'Admin Panel','businesslounge')     => "black", 
														_x("White", 'Admin Panel','businesslounge')     => "white", 
														_x("Flat Text", 'Admin Panel','businesslounge') => "text",
														_x("Custom", 'Admin Panel','businesslounge')    => "custom",
													),
								'save_always' => true
							),

							array(
										'param_name'  => 'button_arrow',
										'type'        => 'checkbox',
										'value'       => array(
																_x("Button Arrow", 'Admin Panel','businesslounge') => "true"
															 )
									),

							array(
										'param_name'  => 'button_rounded',
										'type'        => 'checkbox',
										'value'       => array(
																_x("Rounded Button", 'Admin Panel','businesslounge') => "true"
															 )
									),

							array(
								'param_name'  => 'font',
								'heading'     => _x( 'Font Family', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default", 'Admin Panel','businesslounge') => "", 
													_x("Heading Font", 'Admin Panel','businesslounge') => "heading-font", 
													_x("Body Font", 'Admin Panel','businesslounge') => "body-font", 
													_x("Secondary Font", 'Admin Panel','businesslounge') => "secondary-font", 
												),
								'save_always' => true
							),
							

							array(
								'param_name'  => 'button_size',
								'heading'     => _x( 'Button Size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Small", 'Admin Panel','businesslounge') => "small",
													_x("Medium", 'Admin Panel','businesslounge') => "medium",
													_x("Big", 'Admin Panel','businesslounge') => "big",
													_x("Hero", 'Admin Panel','businesslounge') => "hero",
												),
								'save_always' => true,
								"dependency"  => array(
									"element" => "button_style",
									"value" => array("style-1","style-2","style-3","black","white","custom")
								),											
							),

							array(
								'param_name'  => 'font_size',
								'heading'     => _x('Custom Font Size (px,em)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number'
							),

							array(
								'param_name'  => 'button_icon',
								'heading'     => _x('Button Icon', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'save_always' => true,
								"dependency"  => array(
									"element" => "button_style",
									"value" => array("style-1","style-2","style-3","black","white","custom")
								),											
							),

							array(
								'param_name'  => 'button_align',
								'heading'     => _x( 'Button Align', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default", 'Admin Panel','businesslounge') => "",
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right",
													_x("Center", 'Admin Panel','businesslounge') => "center",													
												),
								'save_always' => true
							),


							array(
								'param_name'  => 'padding_v',
								'heading'     => _x( 'Custom Vertical Padding (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
							),


							array(
								'param_name'  => 'padding_h',
								'heading'     => _x( 'Custom Horizontal Padding (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
							),

							array(
								'param_name'  => 'button_link',
								'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'save_always' => true
							),

							array(
								'param_name'  => 'link_open',
								'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'href_title',
								'heading'     => _x('Link Title', 'Admin Panel','businesslounge' ), 
								'type'        => 'textfield',
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
								'param_name'  => 'bg_color',
								'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a background color for the button', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),	
								'group'       => _x( 'Button Style', 'Admin Panel','businesslounge' ),							
							),

							array(
								'param_name'  => 'text_color',
								'heading'     => _x( 'Text Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a text color for the button', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'border_size',
								'heading'     => _x( 'Border Thickness (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'border_color',
								'heading'     => _x( 'Border Color', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'border_radius',
								'heading'     => _x( 'Border Radius (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style', 'Admin Panel','businesslounge' ),
							),


							array(
								'param_name'  => 'h_bg_color',
								'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a background color for the button', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),	
								'group'       => _x( 'Button Style (Hover)', 'Admin Panel','businesslounge' ),							
							),

							array(
								'param_name'  => 'h_text_color',
								'heading'     => _x( 'Text Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a text color for the button', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style (Hover)', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'h_border_size',
								'heading'     => _x( 'Border Thickness (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style (Hover)', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'h_border_color',
								'heading'     => _x( 'Border Color', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style (Hover)', 'Admin Panel','businesslounge' ),
							),

							array(
								'param_name'  => 'h_border_radius',
								'heading'     => _x( 'Border Radius (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
													"element" => "button_style",
													"value" => array("custom")
								),
								'group'       => _x( 'Button Style (Hover)', 'Admin Panel','businesslounge' ),
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


						)
	)
);	

?>