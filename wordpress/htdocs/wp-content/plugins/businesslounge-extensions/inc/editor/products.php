<?php
/*
*
* Product Showcase
* [product_box]
*
*/ 

vc_map(
	array(
		'base'        => 'product_box',
		'name'        => _x( 'Product Showcase', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme product_box',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays product showcase posts with selected parameters', 'Admin Panel','businesslounge' ),
		'params'      => array(

 
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
								'param_name'  => 'layout_style',
								'heading'     => _x( 'Layout Style', 'Admin Panel','businesslounge' ),
								"description" => _x("Design of the layout",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default",'Admin Panel','businesslounge') => "",
													_x("Masonry",'Admin Panel','businesslounge') => "masonry" 
												),
								'save_always' => true
							),
 
							array(
								'param_name'  => 'pagination',
								'heading'     => _x( 'Pagination', 'Admin Panel','businesslounge' ),
								"description" => _x("Splits the list into pages",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													"False" => "false", 
													"True" => "true"													
												),
								'save_always' => true						
							),

							array(
								'param_name'  => 'ajax_pagination',
								'description' => _x( 'Works with Masonry layout only', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Enable ajax pagination (load more)", 'Admin Panel','businesslounge') => "true",
												),	
								"dependency"  => array(
													"element" => "pagination",
													"value" => array("true")
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'list_orderby',
								'heading'     => _x( 'List Order By', 'Admin Panel','businesslounge' ),
								"description" => _x("Sorts the posts by this parameter",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Date','Admin Panel','businesslounge') => 'date',
													_x('Author','Admin Panel','businesslounge') => 'author',
													_x('Title','Admin Panel','businesslounge') => 'title',
													_x('Modified','Admin Panel','businesslounge') => 'modified',
													_x('ID','Admin Panel','businesslounge') => 'ID',
													_x('Randomized','Admin Panel','businesslounge') => 'rand',
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'list_order',
								'heading'     => _x( 'List Order', 'Admin Panel','businesslounge' ),
								"description" => _x("Designates the ascending or descending order of the list_orderby parameter",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Descending','Admin Panel','businesslounge') => 'DESC',
													_x('Ascending','Admin Panel','businesslounge') => 'ASC',
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'item_per_page',
								'heading'     => _x('Amount of post per page', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							),


							array(
								'param_name'  => 'categories',
								'heading'     => _x( 'Categories', 'Admin Panel','businesslounge' ),
								"description" => _x("Filter the posts by selected categories.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown_multi',
								"value"       => array_merge(array(_x('All Categories','Admin Panel','businesslounge')=>""),array_flip(rt_get_product_categories())),
								'save_always' => true
							),



							array(
								'param_name'  => 'display_titles',
								'heading'     => _x("Display titles", 'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Yes','Admin Panel','businesslounge') => 'true',
													_x('No','Admin Panel','businesslounge') => 'false',
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'display_descriptions',
								'heading'     => _x("Display short descriptions", 'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Yes','Admin Panel','businesslounge') => 'true',
													_x('No','Admin Panel','businesslounge') => 'false',
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'display_price',
								'heading'     => _x("Display prices", 'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Yes','Admin Panel','businesslounge') => 'true',
													_x('No','Admin Panel','businesslounge') => 'false',
												),
								'save_always' => true
							),


							/* Featured Images */
							array(
								'param_name'  => 'featured_image_resize',
								'heading'     => _x( 'Resize Featured Images', 'Admin Panel','businesslounge' ),
								'description' => _x('Enable the "Image Resize" to resize or crop the featured images automatically. These settings will be overwrite the global settings. Please note, since the theme is reponsive the images cannot be wider than the column they are in. Leave values "0" to use theme defaults.', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true",
													_x("Disabled",'Admin Panel','businesslounge') => "false"
												),
								'group' => _x('Featured Images', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'featured_image_max_width',
								'heading'     => _x('Featured Image Max Width', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => 0,
								"dependency"  => array(
													"element" => "featured_image_resize",
													"value" => array("true")
												),
								'group' => _x('Featured Images', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'featured_image_max_height',
								'heading'     => _x('Featured Image Max Height', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => 0,
								"dependency"  => array(
													"element" => "featured_image_resize",
													"value" => array("true")
												),
								'group' => _x('Featured Images', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'featured_image_crop',
								'heading'     => _x( 'Crop Featured Images', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												),
								"dependency"  => array(
													"element" => "featured_image_resize",
													"value" => array("true")
												),								
								'group' => _x('Featured Images', 'Admin Panel','businesslounge'),
								'save_always' => true
							),
			
						)
	)
);	

?>