<?php
/*
*
* Product Categories
*
*/ 

vc_map(
	array(
		'base'        => 'rt_product_categories',
		'name'        => _x( 'Product Showcase Categories', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme product_box',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays product showcase categories with selected parameters', 'Admin Panel','businesslounge' ),
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
								'param_name'  => 'orderby',
								'heading'     => _x( 'Order By', 'Admin Panel','businesslounge' ),
								"description" => _x("Sorts the categories by this parameter",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
														_x('ID','Admin Panel','businesslounge') => 'id',
														_x('Name','Admin Panel','businesslounge') => 'name',
														_x('Slug','Admin Panel','businesslounge') => 'slug', 
														_x('Count','Admin Panel','businesslounge') => 'count',
													),
								'save_always' => true
							),

							array(
								'param_name'  => 'list_order',
								'heading'     => _x( 'List Order', 'Admin Panel','businesslounge' ),
								"description" => _x("Designates the ascending or descending order of the orderby parameter",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
														_x('Descending','Admin Panel','businesslounge') => 'DESC',
														_x('Ascending','Admin Panel','businesslounge') => 'ASC',
													),
								'save_always' => true
							),


							array(
								'param_name'  => 'parent',
								'heading'     => _x( 'Parent Category', 'Admin Panel','businesslounge' ),
								"description" => _x("(Optional) Select a parent category to list only the subcategories of the category.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array_merge(array(_x('All Categories','Admin Panel','businesslounge')=>""),array_flip(rt_get_product_categories())),
								'save_always' => true
							),

							array(
								'param_name'  => 'ids',
								'heading'     => _x( 'Select Product Categories', 'Admin Panel','businesslounge' ),
								"description" => _x("(Optional) List only selected categories",'Admin Panel','businesslounge'),
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
								'param_name'  => 'display_thumbnails',
								'heading'     => _x("Display thumbnails", 'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Yes','Admin Panel','businesslounge') => 'true',
													_x('No','Admin Panel','businesslounge') => 'false',
												),
								'save_always' => true
							),
 

							/* Featured Images */
							array(
								'param_name'  => 'crop',
								'heading'     => _x( 'Crop Featured Images', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',	
								"description" => _x("If enabled the category thumbnails will be cropped according the 'Maximum Thumbnail Height' value.",'Admin Panel','businesslounge'),
								"value"       => array(
													_x("Disabled",'Admin Panel','businesslounge') => "false",
													_x("Enabled",'Admin Panel','businesslounge') => "true"
												), 
								'save_always' => true
							),

							array(
								'param_name'  => 'image_max_height',
								'heading'     => _x('Featured Image Max Height', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"description" => _x("Maximum image height for the category thumbnails. 'Crop Thumbnails' option must be checked in order to use this option.",'Admin Panel','businesslounge'),
								'value'       => "", 
								'save_always' => true
							),


			
						)
	)
);	

?>