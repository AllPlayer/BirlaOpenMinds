<?php
/*
*
* Testimonial Carousel 
*
*/ 

vc_map(
	array(
		'base'        => 'testimonial_carousel',
		'name'        => _x( 'Testimonial Carousel', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme carousel',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays testimonial posts within a carousel', 'Admin Panel','businesslounge' ),
		'params'      => array(

 
							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'list_layout',
								'heading'     => _x( 'Layout', 'Admin Panel','businesslounge' ),
								"description" => __("Visible item count for each slide on desktop screens.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown',
								"value"       => array(
														"1" => "1/1",
														"2" => "1/2",
														"3" => "1/3",
														"4" => "1/4",
														"5" => "1/5",
														"6" => "1/6"
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
								'param_name'  => 'box_style',
								'heading'     => _x( 'Box Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x('Default','Admin Panel','businesslounge') => '',
													_x('Boxed','Admin Panel','businesslounge') => 'boxed',
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
								'param_name'  => 'max_item',
								'heading'     => _x('Amount of item to display', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '10',
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
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"												
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
  
			
						)
	)
);	

?>