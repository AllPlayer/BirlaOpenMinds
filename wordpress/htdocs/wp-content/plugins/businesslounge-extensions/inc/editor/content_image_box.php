<?php
/*
*
* Content Box With Images
* [content_image_box] 
*
*/ 

vc_map(
	array(
		'base'        => 'content_image_box',
		'name'        => _x( 'Content Box With Image', 'Admin Panel', 'businesslounge' ),
		'icon'        => 'rt_theme content_image_box',
		'category'    => array(_x( 'Content', 'Admin Panel', 'businesslounge' ), _x( 'Theme Addons', 'Admin Panel', 'businesslounge' )),
		'description' => _x( 'Creates a styled content box with an image', 'Admin Panel', 'businesslounge' ),
		'params'      => array(


							/* Image */
							array(
								'param_name'  => 'img',
								'heading'     => _x('Image', 'Admin Panel', 'businesslounge' ),
								'description' => _x('Select an image from your media library', 'Admin Panel', 'businesslounge' ),
								'type'        => 'attach_image',
								'holder'      => 'img',
								'value'       => '',							
							),
 

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
								'param_name'  => 'style',
								'heading'     => _x( 'Box Style', 'Admin Panel', 'businesslounge' ),
								'description' => _x( 'Select a box style', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Style One - Default layout", 'Admin Panel','businesslounge') => "style-1",
													_x("Style Two - Use the image as the background", 'Admin Panel','businesslounge') => "style-2",
												),
								'group'       => 'Box Style',
								'save_always' => true
							),

							array(
								'param_name'  => 'box_height',
								'heading'     => _x( 'Box Height', 'Admin Panel', 'businesslounge' ),
								'type'        => 'rt_number',
								'group'       => 'Box Style',
								'save_always' => true											
							),

							array(
								'param_name'  => 'heading_bottom_margin',
								'heading'     => _x( 'Heading Bottom Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								'type'        => 'rt_number',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),	
							),

							array(
								'param_name'  => 'text_align',
								'heading'     => _x( 'Text Align', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								'group'       => 'Box Style',
								"value"       => array(
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right", 
													_x("Center", 'Admin Panel','businesslounge') => "center", 
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("style-1","style-2")
								),	
								'save_always' => true							
							),

							array(
								'param_name'  => 'text_width',
								'heading'     => _x( 'Text Width (percent %)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								"dependency"  => array(
												"element" => "style",
												"value" => array("style-1")
								),									
								'type'        => 'rt_number'
							),

							array(
								'param_name'  => 'img_pos',
								'heading'     => _x( 'Image Position', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								'group'       => 'Box Style',
								"value"       => array(
													_x("Before the text", 'Admin Panel','businesslounge') => "before",
													_x("After the text", 'Admin Panel','businesslounge') => "after", 
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("style-1")
								),	
								'save_always' => true							
							),

							array(
								'param_name'  => 'img_align',
								'heading'     => _x( 'Image Align', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								'group'       => 'Box Style',
								"value"       => array(
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right", 
													_x("Center", 'Admin Panel','businesslounge') => "center", 
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("style-1")
								),	
								'save_always' => true							
							),

							array(
								'param_name'  => 'img_valign',
								'heading'     => _x( 'Image Vertical Align', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								'group'       => 'Box Style',
								"value"       => array(
													_x("Top", 'Admin Panel','businesslounge') => "top",
													_x("Middle", 'Admin Panel','businesslounge') => "middle", 
													_x("Bottom", 'Admin Panel','businesslounge') => "bottom", 
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("style-1")
								),	
								'save_always' => true							
							),

							array(
								'type' => 'checkbox',
								'heading' => '',
								'param_name' => 'retina_image',
								"value"       => array(
													_x("Retina Image?", 'Admin Panel','businesslounge') => "true",
												),
								'description' => _x("If the option checked, the selected image will be displayed 50% smaller than it's original size. Upload 2x bigger images to get a clear render on retina displays.", 'Admin Panel','businesslounge'),
								'save_always' => true								
							),


							array(
								'param_name'  => 'img_bottom_margin',
								'heading'     => _x( 'Image Bottom Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								'type'        => 'rt_number',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),	
							),

							array(
								'param_name'  => 'img_top_margin',
								'heading'     => _x( 'Image Top Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								'type'        => 'rt_number',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),	
							),

							array(
								'param_name'  => 'img_left_margin',
								'heading'     => _x( 'Image Left Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								'type'        => 'rt_number',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),	
							),

							array(
								'param_name'  => 'img_right_margin',
								'heading'     => _x( 'Image Right Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Box Style',
								'type'        => 'rt_number',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),								
							),

							array(
								'param_name'  => 'bg_image',
								'heading'     => _x( 'Background Image', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a background image', 'Admin Panel','businesslounge' ),
								'type'        => 'attach_image',	
								'group'       => 'Box Style',
								'value'	     => '',
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),											
							),

							array(
								'param_name'  => 'bg_color',
								'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a background color', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								'group'       => 'Box Style',
								'save_always' => true,
								"dependency"  => array(
															"element" => "style",
															"value" => array("style-1")
														),			
							),

							array(
								'param_name'  => 'text_color',
								'heading'     => _x( 'Text Color', 'Admin Panel', 'businesslounge' ),
								'type'        => 'colorpicker',
								'group'       => 'Box Style'									
							),

							array(
								'param_name'  => 'text_bg_color',
								'heading'     => _x( 'Text Background Color', 'Admin Panel', 'businesslounge' ),
								'type'        => 'colorpicker',
								'group'       => 'Box Style'										
							),

							array(
								'param_name'  => 'mobile_layout',
								'heading'     => _x('Mobile Layout', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled", 'Admin Panel','businesslounge') => "true",
													_x("Disabled", 'Admin Panel','businesslounge') => "false", 
												),
								'group'       => 'Box Style'	
							),			

							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Link'
							),

							array(
								'param_name'  => 'link_text',
								'heading'     => _x('Link Text', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Link'
							),

							array(
								'param_name'  => 'link_target',
								'heading'     => _x('Link Target', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => 'Link'
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
								'group'       => 'Link',
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
								'group'       => 'Link',
							),
							
							array(
								'param_name'  => 'padding_top',
								'heading'     => _x( 'Padding Top', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set padding top value (px,%) default: 0px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),							
							),

							array(
								'param_name'  => 'padding_bottom',
								'heading'     => _x( 'Padding Bottom', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set padding bottom value (px,%) default: 0px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),							
							),

							array(
								'param_name'  => 'padding_left',
								'heading'     => _x( 'Padding Left', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set padding left value (px,%) default: 0px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),							
							),

							array(
								'param_name'  => 'padding_right',
								'heading'     => _x( 'Padding Right', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set padding right value (px,%) default: 0px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),							
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