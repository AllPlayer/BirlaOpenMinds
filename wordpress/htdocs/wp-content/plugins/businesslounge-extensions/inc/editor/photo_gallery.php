<?php
/*
*
* Image Carousel
* [rt_photo_gallery] 
*
*/ 

vc_map(
	array(
		'base'        => 'rt_photo_gallery',
		'name'        => _x( 'Photo Gallery', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme slider',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a photo gallery', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'image_ids',
								'heading'     => _x('Photos', 'Admin Panel','businesslounge' ),
								'description' => _x('Select photos for the gallery', 'Admin Panel','businesslounge' ),
								'type'        => 'attach_images',
								'value'	     => '',
							),


							array(
								'param_name'  => 'layout_style',
								'heading'     => _x( 'Layout Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
															_x("Grid",'Admin Panel','businesslounge') => "grid",
															_x("Masonry",'Admin Panel','businesslounge') => "masonry",
															_x("Metro",'Admin Panel','businesslounge') => "metro"
														),
								'save_always' => true
							),

							array(
								'param_name'  => 'image_size',
								'heading'     => __( 'Image size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array_merge(array("Custom","full"),get_intermediate_image_sizes()),
								"dependency"  => array(
															"element" => "layout_style",
															"value" => array("grid","masonry")
														),										
								'save_always' => true
							),


							array(
								'param_name'  => 'w',
								'heading'     => _x('Image Width', 'Admin Panel','businesslounge' ),
								'description' => _x('Set a width value for the carousel images. Note: Remember that the images width will be resoponsive. Leave blank for auto width.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								"save_always" => true,
								"dependency"  => array(
															"element" => "image_size",
															"value" => array("Custom")
														),
								'save_always' => true
							),

							array(
								'param_name'  => 'h',
								'heading'     => _x('Image Height', 'Admin Panel','businesslounge' ),
								'description' => _x('Set a height value for the images. Remember that the image heights will be resoponsive. Leave blank for auto height.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								"save_always" => true,
								"dependency"  => array(
														"element" => "image_size",
														"value" => array("Custom")
														),
								'save_always' => true								
							),

							array(
								'param_name'  => 'crop',
								'heading'     => _x( 'Crop Images', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
															_x("Disabled",'Admin Panel','businesslounge') => "false",
															_x("Enabled",'Admin Panel','businesslounge') => "true"
														),
								'save_always' => true,
								"dependency"  => array(
														"element" => "image_size",
														"value" => array("Custom")
													),
								'save_always' => true								
							),
 
							array(
								'param_name'  => 'metro_resize',
								'heading'     => _x('Resize and Crop Metro Gallery Images?', 'Admin Panel','businesslounge' ),
								"description" => _x("Do not upload small or landscape/portrait sized photos to get correct layout.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
															_x("Disabled",'Admin Panel','businesslounge') => "false",
															_x("Enabled",'Admin Panel','businesslounge') => "true"
														),
								"dependency"  => array(
													"element" => "layout_style",
													"value" => array("metro")
												),								
								'save_always' => true
							),


							array(
								'param_name'  => 'layout',
								'heading'     => _x('Metro Layout', 'Admin Panel','businesslounge' ),
								"description" => _x("Pre defined layouts",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
															_x("Style 1",'Admin Panel','businesslounge') => "1",
															_x("Style 2",'Admin Panel','businesslounge') => "2",
															_x("Style 3",'Admin Panel','businesslounge') => "3"
														),
								"dependency"  => array(
													"element" => "layout_style",
													"value" => array("metro")
												),								
								'save_always' => true
							),


 							array(
								'param_name'  => 'item_width',
								'heading'     => _x('Gallery Layout', 'Admin Panel','businesslounge' ),
								"description" => _x("Image per row",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													"1/12" => "1/12", 
													"1/6" => "1/6", 
													"1/4" => "1/4",
													"1/3" => "1/3",
													"1/2" => "1/2",
													"1/1" => "1/1"
												),
								"dependency"  => array(
													"element" => "layout_style",
													"value" => array("grid","masonry")
												),								
								'save_always' => true
							),
 
				 			array(
								'param_name'  => 'nogaps', 
								"value"       => array(
													_x("Remove column gaps", 'Admin Panel','businesslounge') => "true"
												),							
								'type'        => 'checkbox',
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