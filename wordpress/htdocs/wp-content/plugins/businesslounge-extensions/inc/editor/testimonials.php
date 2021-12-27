<?php
/*
*
* Testimonials
*
*/ 

vc_map(
	array(
		'base'        => 'testimonial_box',
		'name'        => _x( 'Testimonials', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme testimonial',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays testimonial posts', 'Admin Panel','businesslounge' ),
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
													"1/1" => "1/1",
													"1/2" => "1/2",
													"1/3" => "1/3",
													"1/4" => "1/4",
													"1/6" => "1/6", 
												),
								'save_always' => true
							),
 
 							array(
								'param_name'  => 'style',
								'heading'     => _x( 'Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Left Aligned Text",'Admin Panel','businesslounge') => "left",
													_x("Centered Small Text ",'Admin Panel','businesslounge') => "center",
													_x("Centered Big Text ",'Admin Panel','businesslounge') => "center big"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'headings',
								'heading'     => _x( 'Display Headings', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"													
												),
								'save_always' => true										
							),						

							array(
								'param_name'  => 'client_images',
								'heading'     => _x( 'Display Client Images', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"													
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
								'param_name'  => 'categories',
								'heading'     => _x( 'Categories', 'Admin Panel','businesslounge' ),
								"description" => _x("Filter the posts by selected categories.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown_multi',
								"value"       => array_merge(array(_x('All Categories','Admin Panel','businesslounge')=>""),array_flip(rt_get_testimonial_categories())),
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
 
			
						)
	)
);	

?>