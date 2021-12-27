<?php
/*
*
* RT Image Gallery
* [rt_image_gallery]
*  [rt_gal_item][/rt_gal_item] 
*  [rt_gal_item][/rt_gal_item] 
*  [rt_gal_item][/rt_gal_item] 
* [/rt_image_gallery]
*
*/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_image_gallery extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_gal_item extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_image_gallery',
		'name'        => _x( 'Image Gallery Grid', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme img_gallery_grid',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Image gallery holder', 'Admin Panel','businesslounge' ),
		'as_parent'   => array( 'only' => 'rt_gal_item' ),
		'js_view'     => 'VcColumnView',
		'content_element' => true,
		"show_settings_on_create" => false,	
		"is_container"            => true,
		'params'      => array(

							array(
								'param_name'  => 'list_layout',
								'heading'     => _x( 'Layout', 'Admin Panel','businesslounge' ),
								"description" => _x("Column layout for the list",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													"1/6" => "1/6", 
													"1/4" => "1/4",
													"1/3" => "1/3",
													"1/2" => "1/2",
													"1/1" => "1/1"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'crop',
								'heading'     => _x('Crop', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Crop Images", 'Admin Panel','businesslounge') => "true",
												),
								'save_always' => true
							),
							
							array(
								'param_name'  => 'tooltips',
								'heading'     => _x('Tooltips', 'Admin Panel','businesslounge' ),
								"description" => _x('Note: Tooltips works only when the image has not been linked to the lighbox or custom link.','businesslounge'),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Enable Tooltips", 'Admin Panel','businesslounge') => "true",
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'frames',
								'heading'     => _x('Frames', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Add Frames", 'Admin Panel','businesslounge') => "true",
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
		'base'        => 'rt_gal_item',
		'name'        => _x( 'Image', 'Admin Panel','businesslounge' ),
		'icon'        => 'code',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new image', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_image_gallery' ),
		'content_element' => true,
		'params'      => array(

							array(
								'param_name'  => 'image_id',
								'heading'     => _x('Image', 'Admin Panel','businesslounge' ),
								'description' => _x('Select an image', 'Admin Panel','businesslounge' ),
								'type'        => 'attach_image',
								'holder'      => 'img',
							),
 
							array(
								'param_name'  => 'title',
								'heading'     => _x( 'Title', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textfield',
								'holder'      => 'h4',
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Caption', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( '<p>Optional caption text</p>', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
								'save_always' => true
							),
							

							//link
							array(
								'param_name'  => 'action',
								'heading'     => _x('Action', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								'value'       => array(
													_x("Open orginal image in a lightbox", 'Admin Panel','businesslounge') => "lightbox",
													_x("Link the thumbnail to the custom link", 'Admin Panel','businesslounge') => "custom_link", 
													_x("No link", 'Admin Panel','businesslounge') => "no_link", 
												), 
								'save_always' => true
							),


							//link
							array(
								'param_name'  => 'custom_link',
								'heading'     => _x('Custom Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								"dependency"  => array(
												"element" => "action",
												"value" => array("custom_link")
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
												"element" => "action",
												"value" => array("custom_link")	
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