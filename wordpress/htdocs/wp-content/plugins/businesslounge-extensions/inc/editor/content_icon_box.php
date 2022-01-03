<?php
/*
*
* Content Box With Icons
* [content_icon_box] 
*
*/ 

vc_map(
	array(
		'base'        => 'content_icon_box',
		'name'        => _x( 'Content Box With Icon', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme content_box',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Add a content box with an icon', 'Admin Panel','businesslounge' ),
		'params'      => array(

							array(
								'param_name'  => 'heading',
								'heading'     => _x( 'Heading', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textfield',
								'holder'      => 'div',
								'value'       => _x( 'Box Heading', 'Admin Panel','businesslounge' ),
								'holder'      => 'div', 
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
													"p" => "p",
													"span" => "span"
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Text', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
								'save_always' => true
							),

							array(
								'param_name'  => 'heading_margin_top',
								'heading'     => _x( 'Heading Margin Top', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set margin top value (px,%)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number', 
							),

							array(
								'param_name'  => 'heading_margin_bottom',
								'heading'     => _x( 'Heading Margin Bottom', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Set margin bottom value (px,%)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number', 
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

							array(
								'param_name'  => 'icon_name',
								'heading'     => _x('Icon Name', 'Admin Panel','businesslounge' ),
								'description' => _x('Click inside the field to select an icon or type the icon name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'class'       => 'icon_selector',
								'group'       => 'Icon'
							),

							array(
								'param_name'  => 'icon_position',
								'heading'     => _x( 'Icon Position', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select an Icon Position', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right", 
													_x("Top", 'Admin Panel','businesslounge') => "top", 
												),
								'group'       => 'Icon',
								'save_always' => true,
							),

							array(
								'param_name'  => 'icon_style',
								'heading'     => _x( 'Icon Style', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select an Icon Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Style One", 'Admin Panel','businesslounge') => "style-1",
													_x("Style Two", 'Admin Panel','businesslounge') => "style-2", 
													_x("Style Three", 'Admin Panel','businesslounge') => "style-3", 
													_x("Style Four", 'Admin Panel','businesslounge') => "style-4", 
													_x("Style Five", 'Admin Panel','businesslounge') => "style-5", 
													_x("Style Six", 'Admin Panel','businesslounge') => "style-6"
												),
								'group'       => 'Icon',
								'save_always' => true,
							),

							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Link'
							),

							array(
								'param_name'  => 'link_text',
								'heading'     => _x('Link Text', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Link'
							),

							array(
								'param_name'  => 'link_target',
								'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => 'Link',
								'save_always' => true,
							),										



							)
	)
);
		

?>