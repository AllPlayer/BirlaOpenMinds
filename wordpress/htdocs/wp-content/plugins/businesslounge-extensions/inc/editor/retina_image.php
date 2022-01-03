<?php
/*
*
* Retina Image
*
*/ 

vc_map(
	array(
		'base'        => 'rt_retina_image',
		'name'        => _x( 'Retina Image', 'Admin Panel', 'businesslounge' ),
		'icon'        => 'rt_theme rt_retina_image',
		'category'    => array(_x( 'Content', 'Admin Panel', 'businesslounge' ), _x( 'Theme Addons', 'Admin Panel', 'businesslounge' )),
		'description' => _x( 'Add an image with retina support', 'Admin Panel', 'businesslounge' ),
		'params'      => array(

        
							array(
								'param_name'  => 'auto_resize',
								'heading'     => _x( 'Auto Resize', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enable", 'Admin Panel','businesslounge') => "true", 
													_x("Disabled", 'Admin Panel','businesslounge') => "false", 
												),
								'save_always' => true							
							),


							/* Image */
							array(
								'param_name'  => 'img_1x',
								'heading'     => _x('Image 1x', 'Admin Panel', 'businesslounge' ),
								'description' => _x("Select an image from your media library. The selected image will be displayed on standard displays.", 'Admin Panel', 'businesslounge' ),
								'type'        => 'attach_image',
								'holder'      => '',
								'value'       => '',
								"dependency"  => array(
												"element" => "auto_resize",
												"value" => array("false")
								),																		
							),

							array(
								'param_name'  => 'img',
								'heading'     => _x('Image 2x', 'Admin Panel', 'businesslounge' ),
								'description' => _x("Select an image from your media library. If auto resize is enabled, the 1x version will be created automatically. Upload 2x bigger images to get a clear render on retina displays.", 'Admin Panel', 'businesslounge' ),
								'type'        => 'attach_image',
								'holder'      => 'img',
								'value'       => '',						
							),
        
							array(
								'param_name'  => 'img_align',
								'heading'     => _x( 'Image Align', 'Admin Panel', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Select", 'Admin Panel','businesslounge') => "",
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right", 
													_x("Center", 'Admin Panel','businesslounge') => "center", 
												),
								'save_always' => true							
							),

							array(
								'param_name'  => 'img_bottom_margin',
								'heading'     => _x( 'Image Bottom Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Margins',
								'type'        => 'rt_number'
							),

							array(
								'param_name'  => 'img_top_margin',
								'heading'     => _x( 'Image Top Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Margins',
								'type'        => 'rt_number'
							),

							array(
								'param_name'  => 'img_left_margin',
								'heading'     => _x( 'Image Left Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Margins',
								'type'        => 'rt_number'
							),

							array(
								'param_name'  => 'img_right_margin',
								'heading'     => _x( 'Image Right Margin (px)', 'Admin Panel', 'businesslounge' ),
								'group'       => 'Margins',
								'type'        => 'rt_number'						
							),
 

							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel', 'businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Link'
							),

							array(
								'param_name'  => 'link_title',
								'heading'     => _x('Link Title', 'Admin Panel', 'businesslounge' ),
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