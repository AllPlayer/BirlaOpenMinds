<?php
/*
*
* Counter
*
*/ 

vc_map(
	array(
		'base'        => 'rt_counter',
		'name'        => _x( 'Animated Number', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_counter',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Displays an animated number', 'Admin Panel','businesslounge' ),
		'params'      => array(



										array(
											'param_name'  => 'number',
											'heading'     => _x('Number', 'Admin Panel','businesslounge' ),
											'type'        => 'rt_number',
											'value'       => '99',
											'holder'      => 'h2',
											'save_always' => true
										),

										array(
											'param_name'  => 'text',
											'heading'     => _x( 'Text', 'Admin Panel','businesslounge' ),
											'type'        => 'textfield',
											'holder'      => 'div',
											'description' => _x( 'Text after the number', 'Admin Panel','businesslounge' ), 
											'save_always' => true
										), 

										array(
											'param_name'  => 'content',
											'heading'     => _x( 'Description', 'Admin Panel','businesslounge' ),
											'type'        => 'textfield',
											'holder'      => 'div',
											'description' => _x( 'Number Description', 'Admin Panel','businesslounge' ),
											'holder'      => 'span',
											'save_always' => true
										), 


										array(
											'param_name'  => 'font',
											'heading'     => _x( 'Font Family', 'Admin Panel','businesslounge' ),
											'type'        => 'dropdown',
											"value"       => array(
																_x("Default", 'Admin Panel','businesslounge') => "", 
																_x("Heading Font", 'Admin Panel','businesslounge') => "heading-font", 
																_x("Body Font", 'Admin Panel','businesslounge') => "body-font", 
																_x("Secondary Font", 'Admin Panel','businesslounge') => "secondary-font", 
																_x("Menu Font", 'Admin Panel','businesslounge') => "menu-font"
															),
											'save_always' => true
										),
										
										array(
											'param_name'  => 'font_size',
											'heading'     => _x('Custom Font Size (px,em)', 'Admin Panel','businesslounge' ),
											'type'        => 'rt_number'
										),		


										array(
											'param_name'  => 'align',
											'heading'     => __( 'Text Align', 'businesslounge' ),
											'type'        => 'dropdown',
											"value"       => array(
																__("Default", "businesslounge") => "",
																__("Left", "businesslounge") => "left",
																__("Right", "businesslounge") => "right",
																__("Center", "businesslounge") => "center",													
															)	
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