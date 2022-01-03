<?php
/*
*
* Latest News
*
*/ 

vc_map(
	array(
		'base'        => 'rt_latest_news',
		'name'        => _x( 'Latest News', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme latest_news',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays blog posts with latest news style', 'Admin Panel','businesslounge' ),
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
								'param_name'  => 'style',
								'heading'     => _x( 'Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														_x("Style 1", 'Admin Panel','businesslounge')   => "style-1",
														_x("Style 2", 'Admin Panel','businesslounge')   => "style-2", 
													),
								'save_always' => true
							),

							array(
								'param_name'  => 'heading_size',
								'heading'     => _x( 'Heading Size', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select the size of the heading tag', 'Admin Panel','businesslounge' ),
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
								'param_name'  => 'max_item',
								'heading'     => _x('Amount of item to display', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '10',
								'save_always' => true
							),


							array(
								'param_name'  => 'excerpt_length',
								'heading'     => _x('Excerpt Length', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '100',
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
								'param_name'  => 'categories',
								'heading'     => _x( 'Categories', 'Admin Panel','businesslounge' ),
								"description" => _x("Filter the posts by selected categories.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown_multi',
								"value"       => array_merge(array(_x('All Categories','Admin Panel','businesslounge')=>""),array_flip(rt_get_categories())),
								'save_always' => true
							),


							array(
								'param_name'  => 'show_categories',
								'heading'     => _x('Display Post Categories', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Yes", 'Admin Panel','businesslounge') => "true"
								),
								'save_always' => true								
							),

							array(
								'param_name'  => 'show_dates',
								'heading'     => _x('Display Post Dates', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Yes", 'Admin Panel','businesslounge') => "true"
								),
								'save_always' => true								
							),

							array(
								'param_name'  => 'show_button',
								'heading'     => _x('Display Read More Button', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Yes", 'Admin Panel','businesslounge') => "true"
								),
								'save_always' => true								
							),

							array(
								'param_name'  => 'thumbnails',
								'heading'     => _x('Display Post Thumbnails', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								"value"       => array(
													_x("Yes", 'Admin Panel','businesslounge') => "true"
								),
								'save_always' => true								
							),


							/* Featured Images */
							array(
								'param_name'  => 'image_width',
								'heading'     => _x('Featured Image Max Width', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => 50,
								'save_always' => true,
								"dependency"  => array(
													"element" => "thumbnails",
													"value" => array("true")
												),								
							),

							array(
								'param_name'  => 'image_height',
								'heading'     => _x('Featured Image Max Height', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => 50,
								'save_always' => true,
								"dependency"  => array(
													"element" => "thumbnails",
													"value" => array("true")
												),								
							),


			
						)
	)
);	

?>