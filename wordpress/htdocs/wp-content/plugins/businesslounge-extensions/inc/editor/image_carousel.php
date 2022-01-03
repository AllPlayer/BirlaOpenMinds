<?php
/*
*
* Image Carousel
* [rt_image_carousel] 
*
*/ 

vc_map(
	array(
		'base'        => 'rt_image_carousel',
		'name'        => _x( 'Image Carousel', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme carousel',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays selected images as a carousel', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'images',
								'heading'     => _x('Images', 'Admin Panel','businesslounge' ),
								'description' => _x('Select images for the carousel', 'Admin Panel','businesslounge' ),
								'type'        => 'attach_images',
								'value'	     => '',
							),

							array(
								'param_name'  => 'carousel_layout',
								'heading'     => _x( 'Carousel Layout', 'Admin Panel','businesslounge' ),
								"description" => _x("Visible item count for each slide on desktop screens.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													"1" => "1",
													"2" => "2",													
													"3" => "3",													
													"4" => "4",													
													"5" => "5",													
													"6" => "6",													
													"7" => "7",													
													"8" => "8",													
													"9" => "9", 
													"10" => "10"
												),
								'save_always' => true
							),


  							array(
								'param_name'  => 'tablet_layout',
								'heading'     => __( 'Carousel Layout (Tablet)', 'Admin Panel','businesslounge' ),
								"description" => __("Visible item count for each slide on medium screens.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													__("Default",'Admin Panel',"businesslounge") => "",
													"1" => "1",
													"2" => "2",													
													"3" => "3",													
													"4" => "4",													
													"5" => "5",													
													"6" => "6"
													),
								'save_always' => true
							),

							array(
								'param_name'  => 'mobile_layout',
								'heading'     => __( 'Carousel Layout (Mobile)', 'Admin Panel','businesslounge' ),
								"description" => __("Visible item count for each slide on small screens.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													__("Default",'Admin Panel',"businesslounge") => "",
													"1" => "1",
													"2" => "2",													
													"3" => "3",													
													"4" => "4"		 
													),
								'save_always' => true
							),


							array(
								'param_name'  => 'image_size',
								'heading'     => __( 'Image size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array_merge(array("Custom","full"),get_intermediate_image_sizes()),
								'save_always' => true
							),


							array(
								'param_name'  => 'img_width',
								'heading'     => _x('Max Image Width', 'Admin Panel','businesslounge' ),
								'description' => _x('Set an maximum width value for the carousel images. Note: Remember that the carousel width will be fluid.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								"dependency"  => array(
													"element" => "image_size",
													"value" => array("Custom")
												),
							),

							array(
								'param_name'  => 'img_height',
								'heading'     => _x('Max Image Height', 'Admin Panel','businesslounge' ),
								'description' => _x('Set an maximum height value for the carousel images.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								"dependency"  => array(
													"element" => "image_size",
													"value" => array("Custom")
												),
							),

							array(
								'param_name'  => 'crop',
								'heading'     => _x( 'Crop Images', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								"dependency"  => array(
													"element" => "image_size",
													"value" => array("Custom")
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'nav',
								'heading'     => _x( 'Navigation Arrows', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"													
												),
								'save_always' => true						
							),

							array(
								'param_name'  => 'dots',
								'heading'     => _x( 'Navigation Dots', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",	
													_x("Enabled",'Admin Panel','businesslounge') => "true"							
												),
								'save_always' => true						
							),

							array(
								'param_name'  => 'autoplay',
								'heading'     => _x( 'Auto Play', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(												
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								'save_always' => true						
							),

							array(
								'param_name'  => 'timeout',
								'heading'     => _x('Auto Play Speed (ms)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => "",
								"description" => _x("Auto play speed value in milliseconds. For example; set 5000 for 5 seconds",'Admin Panel','businesslounge'),
								"dependency"  => array(
													"element" => "autoplay",
													"value" => array("true")
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'links',
								'heading'     => _x( 'Item Links', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Open Orginal Images in Lightbox",'Admin Panel','businesslounge') => "lightbox",
													_x("Custom Links",'Admin Panel','businesslounge') => "custom"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'custom_links',
								'heading'     => _x( 'Custom Links', 'Admin Panel','businesslounge' ),
								'description' => _x("Enter links for each image. The links must be entered line by line. ( enter ) ",'Admin Panel','businesslounge'),
								'type'        => 'exploded_textarea',
								"dependency"  => array(
														"element" => "links",
														"value" => array("custom")
													),								
							),

							array(
								'param_name'  => 'link_target',
								'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								"dependency"  => array(
														"element" => "links",
														"value" => array("custom")
													),											
								'save_always' => true
							),

							array(
								'param_name'  => 'captions',
								'heading'     => _x('Image Captions', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'margin',
								'heading'     => _x('Item Margin', 'Admin Panel','businesslounge' ),
								'description' => _x('Set a value for the margin between carousel items. Default is 15px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => ''
							),

							array(
								'param_name'  => 'padding',
								'heading'     => _x('Stage Padding', 'Admin Panel','businesslounge' ),
								'description' => _x('Set a value for the padding of the carousel stage. This will cut first and last visible items.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => ''
							),

							array(
								'param_name'  => 'loop',
								'heading'     => _x( 'Loop Items', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'boxed',
								'heading'     => _x( 'Boxed Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								'save_always' => true
							),


							array(
								'param_name'  => 'shadows',
								'heading'     => _x( 'Item Shadows', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
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

?>