<?php
/*
*
* Pie Chart
*
*/ 

vc_map(
	array(
		'base'        => 'rt_pie_chart',
		'name'        => _x( 'Pie Chart', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme rt_pie_chart',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a single animated pie chart.', 'Admin Panel','businesslounge' ),
		'params'      => array(


							array(
								'param_name'  => 'percent',
								'heading'     => _x('Percent', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '',
								'holder'      => 'h2',
								'save_always' => true
							),

							array(
								'param_name'  => 'icon_name',
								'heading'     => _x('Icon Name', 'Admin Panel', 'businesslounge' ),
								'description' => __('Click inside the field to select an icon or type the icon name.', 'businesslounge' ),
								'type'        => 'textfield',
								'class'       => 'icon_selector'
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
								'param_name'  => 'size',
								'heading'     => _x( 'Bar Size', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Leave blank for the default value. Default value is 180px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'save_always' => true		
							),

							array(
								'param_name'  => 'linewidth',
								'heading'     => _x( 'Line Width', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Leave blank for the default value. Default value is 15px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'save_always' => true		
							),


							array(
								'param_name'  => 'font_size',
								'heading'     => _x( 'Font Size', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Leave blank for the default value. Default value is 30px', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'save_always' => true		
							),

							array(
								'param_name'  => 'font_color',
								'heading'     => _x( 'Font Color', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a color for the icon or percent value', 'Admin Panel','businesslounge' ),
								'type'        => 'colorpicker'
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