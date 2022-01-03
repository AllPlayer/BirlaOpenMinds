<?php
/*
*
* Counter
*
*/ 

vc_map(
	array(
		'base'        => 'rt_progress_bar',
		'name'        => _x( 'Progress Bar', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_progress_bar',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a single progress bar.', 'Admin Panel','businesslounge' ),
		'params'      => array(


							array(
								'param_name'  => 'heading',
								'heading'     => _x('Heading', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								'holder'      => 'h5',
								'save_always' => true
							),

							array(
								'param_name'  => 'percent',
								'heading'     => _x('Percent', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								'holder'      => 'p',
								'save_always' => true
							),

							array(
								'param_name'  => 'base_color',
								'heading'     => _x( 'Base Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Leave blank for the default value.', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								'save_always' => true		
							),

							array(
								'param_name'  => 'bar_color',
								'heading'     => _x( 'Bar Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Leave blank for the default value.', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker',
								'save_always' => true		
							),

							array(
								'param_name'  => 'id',
								'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
								'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'
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