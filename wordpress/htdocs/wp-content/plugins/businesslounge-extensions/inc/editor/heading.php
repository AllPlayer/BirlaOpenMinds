<?php
/*
*
* Headings
* [rt_heading]
*
*/

vc_map(
	array(
	  'base'        => 'rt_heading',
	  'name'        => _x( 'Heading', 'Admin Panel','businesslounge' ),
	  'icon'        => 'rt_theme rt_heading',
	  'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
	  'description' => _x( 'Add a styled heading', 'Admin Panel','businesslounge' ),
	  'params'      => array(

							   array(
									'param_name'  => 'rt_class',
									'type'        => 'rt_hidden',
								),

								array(
									'param_name'  => 'content',
									'heading'     => _x( 'Heading Text', 'Admin Panel','businesslounge' ),
									'description' => '',
									'type'        => 'textfield',
									'holder'      => 'div',
									'value'       => _x( 'Heading Text', 'Admin Panel','businesslounge' ),
									'save_always' => true
								),

								array(
									'param_name'  => 'style',
									'heading'     => _x( 'Style', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Select a style', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														_x("No-Style", 'Admin Panel','businesslounge') => "",
														_x("Style One - ( w/ a short thin line before )", 'Admin Panel','businesslounge') => "style-1",
														_x("Style Two - ( w/ a short thin line after )", 'Admin Panel','businesslounge') => "style-2",
														_x("Style Three - ( w/ lines before and after )", 'Admin Panel','businesslounge') => "style-3",
														_x("Style Four - ( w/ a thin line below - centered ) ", 'Admin Panel','businesslounge') => "style-4",
														_x("Style Five - ( w/ a thin line below - left aligned ) ", 'Admin Panel','businesslounge') => "style-5",
														_x("Style Six - ( w/ a long line after - left aligned )  ", 'Admin Panel','businesslounge') => "style-6",
													),
									'save_always' => true
								),


							array(
								'param_name'  => 'align',
								'heading'     => _x( 'Text Align', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default", 'Admin Panel','businesslounge') => "",
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right",
													_x("Center", 'Admin Panel','businesslounge') => "center",
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("")
								),
								'save_always' => true
							),

							array(
								'param_name'  => 'mobile_align',
								'heading'     => _x( 'Mobile Text Align', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Tablet portrait or smaller', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default", 'Admin Panel','businesslounge') => "",
													_x("Left", 'Admin Panel','businesslounge') => "left",
													_x("Right", 'Admin Panel','businesslounge') => "right",
													_x("Center", 'Admin Panel','businesslounge') => "center",
												),
								"dependency"  => array(
												"element" => "style",
												"value" => array("")
								),
								'save_always' => true
							),

								array(
									'param_name'  => 'punchline',
									'heading'     => _x('Punchline', 'Admin Panel','businesslounge' ),
									'description' => _x('Optional puchline text', 'Admin Panel','businesslounge' ),
									'type'        => 'textfield',
									"dependency"  => array(
													"element" => "style",
													"value" => array("","style-1","style-2","style-4","style-5")
									),
									'save_always' => true
								),


								array(
									'param_name'  => 'size',
									'heading'     => _x( 'Tag', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Select the tag of the heading', 'Admin Panel','businesslounge' ),
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
									'param_name'  => 'icon_name',
									'heading'     => _x('Icon Name', 'Admin Panel','businesslounge' ),
									'description' => _x('Click inside the field to select an icon or type the icon name', 'Admin Panel','businesslounge' ),
									'type'        => 'textfield',
									'class'       => 'icon_selector'
								),

								array(
									'param_name'  => 'icon_size',
									'heading'     => _x('Icon Size (px)', 'Admin Panel','businesslounge' ),
									'type'        => 'textfield',
									'class'       => 'rt_number',
									"dependency"  => array(
													"element" => "style",
													"value" => array("")
									),									
								),

								array(
									'param_name'  => 'font_color_type',
									'heading'     => _x( 'Font Color', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														_x("Default Heading Color", 'Admin Panel','businesslounge') => "",
														_x("Custom Color", 'Admin Panel','businesslounge') => "custom",
														_x("Primary Color", 'Admin Panel','businesslounge') => "primary",
													),
									'save_always' => true
								),

								array(
									'param_name'  => 'font_color',
									'heading'     => _x('Custom Font Color', 'Admin Panel','businesslounge' ),
									'type'        => 'colorpicker',
									"dependency"  => array(
													"element" => "font_color_type",
													"value" => array("custom")
									),
								),


								array(
									'param_name'  => 'background_color',
									'heading'     => _x('Custom Background Color', 'Admin Panel','businesslounge' ),
									'type'        => 'colorpicker',
									"dependency"  => array(
													"element" => "font_color_type",
													"value" => array("custom")
									),
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
									'param_name'  => 'custom_font_size',
									'heading'     => _x('Font Size', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														_x("Default Size", 'Admin Panel','businesslounge') => "",
														_x("Custom Size", 'Admin Panel','businesslounge') => "custom",
														_x("Responsive Size", 'Admin Panel','businesslounge') => "responsive",
													),
									'save_always' => true
								),


								array(
									'param_name'  => 'font_size',
									'heading'     => _x('Custom Font Size (px,em)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									"dependency"  => array(
													"element" => "custom_font_size",
													"value" => array("custom")
									),
								),

								array(
									'param_name'  => 'max_font_size',
									'heading'     => _x('Max Font Size (px)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									"dependency"  => array(
													"element" => "custom_font_size",
													"value" => array("responsive")
									),
								),

								array(
									'param_name'  => 'min_font_size',
									'heading'     => _x('Min Font Size (px)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									"dependency"  => array(
													"element" => "custom_font_size",
													"value" => array("responsive")
									),
								),

								array(
									'param_name'  => 'line_height',
									'heading'     => _x('Custom Line Height (px, %)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number'
								),

								array(
									'param_name'  => 'letter_spacing',
									'heading'     => _x('Custom Letter Spacing (px)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number'
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
									'param_name'  => 'link',
									'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
									'type'        => 'textfield',
									'value'       => '',
									'save_always' => true,
									'group'       => 'Link'
								),

								array(
									'param_name'  => 'link_open',
									'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									"value"       => array(
														_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
														_x("New Tab", 'Admin Panel','businesslounge') => "_blank",
													),
									'save_always' => true,
									'group'       => 'Link'
								),

								array(
									'param_name'  => 'href_title',
									'heading'     => _x('Link Title', 'Admin Panel','businesslounge' ),
									'type'        => 'dropdown',
									'type'        => 'textfield',
									'group'       => 'Link'
								),


								array(
									'param_name'  => 'margin_top',
									'heading'     => _x( 'Margin Top', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin top value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_bottom',
									'heading'     => _x( 'Margin Bottom', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin bottom value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_left',
									'heading'     => _x( 'Margin Left', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin left value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'margin_right',
									'heading'     => _x( 'Margin Right', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set margin right value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Margins', 'Admin Panel','businesslounge' ),
								),


								array(
									'param_name'  => 'padding_top',
									'heading'     => _x( 'Padding Top', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding top value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_bottom',
									'heading'     => _x( 'Padding Bottom', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding bottom value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_left',
									'heading'     => _x( 'Padding Left', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding left value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

								array(
									'param_name'  => 'padding_right',
									'heading'     => _x( 'Padding Right', 'Admin Panel','businesslounge' ),
									'description' => _x( 'Set padding right value (px,%)', 'Admin Panel','businesslounge' ),
									'type'        => 'rt_number',
									'group'       => _x( 'Paddings', 'Admin Panel','businesslounge' ),
								),

							)
	)
);
?>