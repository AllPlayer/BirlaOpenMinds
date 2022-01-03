<?php
/*
*
* Quote 
*
*/ 

vc_map(
	array(
		'base'        => 'rt_quote',
		'name'        => _x( 'Quote', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme quote',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a quote', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Text', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
							),

							array(
								'param_name'  => 'name',
								'heading'     => _x('Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'position',
								'heading'     => _x('Position', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => ''
							),

							array(
								'param_name'  => 'link_title',
								'heading'     => _x('Link Title', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
							),		

							array(
								'param_name'  => 'style',
								'heading'     => _x( 'Style', 'Admin Panel','businesslounge' ), 
								'type'        => 'dropdown',
								"value"       => array( 
													_x("Style One", 'Admin Panel','businesslounge') => "style-1", 
													_x("Style Two", 'Admin Panel','businesslounge') => "style-2", 
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