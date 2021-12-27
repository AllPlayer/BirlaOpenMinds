<?php
/*
*
* Info Box
*
*/ 

vc_map(
	array(
		'base'        => 'info_box',
		'name'        => _x( 'Info Box', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme info_box',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Adds a info box', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Text', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'span',
								'save_always' => true
							),
 
							array(
								'param_name'  => 'style',
								'heading'     => _x( 'Button Size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Announcement",'Admin Panel','businesslounge')=>"announcement",
													_x("Ok",'Admin Panel','businesslounge')=>"ok",
													_x("Attention",'Admin Panel','businesslounge')=>"attention",
													_x("Info",'Admin Panel','businesslounge')=>"info",
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