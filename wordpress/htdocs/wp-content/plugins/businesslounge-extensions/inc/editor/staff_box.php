<?php
/*
*
* Team
*
*/ 

vc_map(
	array(
		'base'        => 'staff_box',
		'name'        => _x( 'Team', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_team',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays team members', 'Admin Panel','businesslounge' ),
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
								'param_name'  => 'ids',
								'heading'     => _x( 'Select Members', 'Admin Panel','businesslounge' ),
								"description" => _x("List posts of selected members only.",'Admin Panel','businesslounge'),
								'type'        => 'dropdown_multi',
								"value"       => array_merge(array(_x('All Members','Admin Panel','businesslounge')=>""),array_flip(rt_get_staff_list())),
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