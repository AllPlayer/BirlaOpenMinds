<?php
/*
*
* Content Box With Images
* [content_box] 
*
*/ 

vc_map(
	array(
		'base'        => 'content_box',
		'name'        => _x( 'Content Box', 'Admin Panel', 'businesslounge' ),
		'icon'        => 'rt_theme content_box',
		'category'    => array(_x( 'Content', 'Admin Panel', 'businesslounge' ), _x( 'Theme Addons', 'Admin Panel', 'businesslounge' )),
		'description' => _x( 'Creates a styled content box', 'Admin Panel', 'businesslounge' ),
		'params'      => array(


							array(
								'param_name'  => 'heading',
								'heading'     => _x( 'Heading', 'Admin Panel', 'businesslounge' ),
								'description' => '',
								'type'        => 'textfield',
								'holder'      => 'div',
								'value'       => _x( 'Box Heading', 'Admin Panel', 'businesslounge' ),
								'holder'      => 'h4',
								'save_always' => true
							), 

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Text', 'Admin Panel', 'businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel', 'businesslounge' ),
								'holder'      => 'div',
								'save_always' => true
							), 

							array(
								'param_name'  => 'heading_size',
								'heading'     => _x( 'Heading Size', 'Admin Panel', 'businesslounge' ),
								'description' => _x( 'Select the size of the heading tag', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													"H1" => "h1", 
													"H2" => "h2", 
													"H3" => "h3", 
													"H4" => "h4", 
													"H5" => "h5", 
													"H6" => "h6", 
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'heading_style',
								'heading'     => __( 'Heading Style', 'businesslounge' ),
								'description' => __( 'Select a style', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														__("No-Style", "businesslounge") => "", 
														__("Style One - ( w/ a short thin line before )", "businesslounge") => "style-1",
														__("Style Two - ( w/ a short thin line after )", "businesslounge") => "style-2", 
														__("Style Three - ( w/ lines before and after )", "businesslounge") => "style-3", 
														__("Style Four - ( w/ a thin line below - centered ) ", "businesslounge") => "style-4", 
														__("Style Five - ( w/ a thin line below - left aligned ) ", "businesslounge") => "style-5", 
														__("Style Six - ( w/ a long line after - left aligned )  ", "businesslounge") => "style-6", 										
												),
								'save_always' => true
							),
		
							array(
									'param_name'  => 'punchline',
									'heading'     => __('Punchline', 'businesslounge' ),
									'description' => __('Optional puchline text', 'businesslounge' ),
									'type'        => 'textfield',
									"dependency"  => array(
													"element" => "heading_style",
													"value" => array("","style-1","style-2","style-4","style-5")
									),	
									'save_always' => true									
							),

							array(
									'param_name'  => 'h_margin_bottom',
									'heading'     => _x( 'Heading Bottom Margin', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin bottom value to the heading (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
							),

							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => _x('Button & Link','Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'link_text',
								'heading'     => _x('Link Text', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => _x('Button & Link','Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'link_target',
								'heading'     => _x('Link Target', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => _x('Button & Link','Admin Panel','businesslounge')
							),										


							array(
								'param_name'  => 'button_style',
								'heading'     => _x( 'Button Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Flat Text", 'Admin Panel','businesslounge') => "text",
													_x("Style 1", 'Admin Panel','businesslounge')   => "style-1",
													_x("Style 2", 'Admin Panel','businesslounge')   => "style-2",
													_x("Style 3", 'Admin Panel','businesslounge')   => "style-3", 
													_x("Black", 'Admin Panel','businesslounge')     => "black", 
													_x("White", 'Admin Panel','businesslounge')     => "white"
												),
								'save_always' => true,
								'group'       => _x('Button & Link','Admin Panel','businesslounge')
							),

							array(
										'param_name'  => 'button_arrow',
										'type'        => 'checkbox',
										'value'       => array(
																_x("Button Arrow", 'Admin Panel','businesslounge') => "true"
															 ),
										'group'       => _x('Button & Link','Admin Panel','businesslounge')
									),

							array(
										'param_name'  => 'button_rounded',
										'type'        => 'checkbox',
										'value'       => array(
																_x("Rounded Button", 'Admin Panel','businesslounge') => "true"
															 ),
										'group'       => _x('Button & Link','Admin Panel','businesslounge')
									),

							array(
								'param_name'  => 'button_icon',
								'heading'     => _x('Button Icon', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'save_always' => true,
								'group'       => _x('Button & Link','Admin Panel','businesslounge'),
								"dependency"  => array(
									"element" => "button_style",
									"value" => array("style-1","style-2","style-3","black","white","custom")
								),											
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
								'group'       => _x('Button & Link','Admin Panel','businesslounge')
							),
							

							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel', 'businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel', 'businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield'
							),


						)
	)
);	

?>