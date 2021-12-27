<?php
/*
*
* Column
* [Column] 
*
*/
vc_map_update( 'vc_column', array(
	'icon'        => 'content-band',
	'category'    => array(_x( 'Structure', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
));


rt_vc_add_param( array('vc_column','vc_column_inner'), array(
	'param_name'  => 'rt_color_set',
	'heading'     => _x( 'Column Color Scheme', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a color scheme for the column.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Global", 'Admin Panel','businesslounge') => "global-style",
						_x("Color Set 1", 'Admin Panel','businesslounge') => "default-style",
						_x("Color Set 2", 'Admin Panel','businesslounge') => "alt-style-1", 
						_x("Color Set 3", 'Admin Panel','businesslounge') => "light-style",
					)
));



//remove vc_column params
rt_vc_remove_param('vc_column', array('el_class','el_id','parallax','parallax_speed_bg','parallax_image','video_bg_url','video_bg','video_bg_parallax','parallax_speed_video'));
rt_vc_remove_param('vc_column_inner', array('el_class','el_id','parallax','parallax_speed_bg','parallax_image','video_bg_url','video_bg','video_bg_parallax','parallax_speed_video'));



			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_class',
				'type'        => 'rt_hidden', 
			));	

			//column general options	
			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'id',
				'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
				'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
				'type'        => 'textfield',
				'value'       => ''
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'class',
				'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
				'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
				'type'        => 'textfield'
			));			



			rt_vc_add_param( array('vc_column','vc_column_inner'), array(	
				'heading'     => _x( 'Desktop', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_1"
			));


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("0","0"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' )),
					));	  
 

					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("0","0","20px","20px"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_wrapper_paddings',
						'heading'     => _x('Wrapper Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("0","0","0","0"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	
  

  			rt_vc_add_param( array('vc_column','vc_column_inner'), array(	
				'heading'     => _x( 'Tablet', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_2"
			));


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_tablet_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' )),
					));	  
 

					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_tablet_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-","-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_tablet_wrapper_paddings',
						'heading'     => _x('Wrapper Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-","-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	
  

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(	
				'heading'     => _x( 'Smartphone', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_3"
			));


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_sp_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-","-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' )),
					));	  
 

					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_sp_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-","-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_column','vc_column_inner'), array(
						'param_name'  => 'rt_sp_wrapper_paddings',
						'heading'     => _x('Wrapper Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("-","-","-","-"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	
  



			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_min_height',
				'heading'     => _x( 'Minimum Height', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Set minimum height(px)', 'Admin Panel','businesslounge' ),
				'type'        => 'textfield',
			));
 

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'text_align',
				'heading'     => _x( 'Text Align', 'Admin Panel', 'businesslounge' ),
				"description" => __("Global text align for the column elements. Use it for basic content elements like headings, texts and buttons.",'Admin Panel','businesslounge'),
				'type'        => 'dropdown',
				"value"       => array(
										__("Default", "businesslounge") => "",
										_x("Left", 'Admin Panel','businesslounge') => "left",
										_x("Right", 'Admin Panel','businesslounge') => "right", 
										_x("Center", 'Admin Panel','businesslounge') => "center", 
									),
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'tablet_align',
				'heading'     => _x( 'Tablet Text Align', 'Admin Panel', 'businesslounge' ),
				"description" => __("Global text align for the column elements on tablets.",'Admin Panel','businesslounge'),
				'type'        => 'dropdown',
				"value"       => array(
										__("Default", "businesslounge") => "",
										_x("Center", 'Admin Panel','businesslounge') => "center", 
									),
			));


			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'mobile_align',
				'heading'     => _x( 'Mobile Text Align', 'Admin Panel', 'businesslounge' ),
				"description" => __("Global text align for the column elements on small screens.",'Admin Panel','businesslounge'),
				'type'        => 'dropdown',
				"value"       => array(
										__("Default", "businesslounge") => "",
										_x("Center", 'Admin Panel','businesslounge') => "center", 
									),
			));


			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_top',
				'heading'     => _x( 'Borders', 'Admin Panel','businesslounge' ),
				"value"       => array(
									_x("Border Top", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_bottom',
				"value"       => array(
									_x("Border Bottom", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_left',
				"value"       => array(
									_x("Border Left", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_right',
				"value"       => array(
									_x("Border Right", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));	


			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_top_mobile',
				'heading'     => _x( 'Mobile Borders', 'Admin Panel','businesslounge' ),
				"value"       => array(
									_x("Border Top", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_bottom_mobile',
				"value"       => array(
									_x("Border Bottom", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_left_mobile',
				"value"       => array(
									_x("Border Left", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_border_right_mobile',
				"value"       => array(
									_x("Border Right", 'Admin Panel','businesslounge') => "true"
								),							
				'type'        => 'checkbox',
			));	


			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_column_shadow',
				'heading'     => _x( 'Shadows', 'Admin Panel','businesslounge' ),
				'type'        => 'checkbox',
				"value"       => array(
									_x("Enable Shadows", 'Admin Panel','businesslounge') => "true"
								),	
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_column_boxed',
				'heading'     => _x( 'Boxed Column', 'Admin Panel','businesslounge' ),
				'type'        => 'checkbox',
				"value"       => array(
									_x("Enable Boxed Style", 'Admin Panel','businesslounge') => "true"
								),			
			));

			//column background options
			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_effect',
				'heading'     => _x( 'Background Style', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select the background style.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown',
				"value"       => array(
									_x("Classic", 'Admin Panel','businesslounge') => "classic",
									_x("Parallax Image", 'Admin Panel','businesslounge') => "parallax", 
								),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'save_always' => true
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_parallax_effect',
				'heading'     => _x( 'Parallax Effect', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select the parallax style set repeat mode direction for the background image.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown',
				"value"       => array(		
									_x("Horizontally, from left to right",'Admin Panel','businesslounge') => "1",  
									_x("Horizontally, from right to left",'Admin Panel','businesslounge') => "2",  
									_x("Vertically, from top to bottom",'Admin Panel','businesslounge') => "3",  
									_x("Vertically, from bottom to top",'Admin Panel','businesslounge') => "4",  																
								),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				"dependency"  => array(
										"element" => "rt_bg_effect",
										"value" => array("parallax")
									),											
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_parallax_speed',
				'heading'     => _x( 'Parallax Speed', 'Admin Panel','businesslounge' ), 
				'type'        => 'dropdown',
				"value"       => array(		
									"1" => "1",  
									"2" => "2",  
									"3" => "3",   											
								),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				"dependency"  => array(
										"element" => "rt_bg_effect",
										"value" => array("parallax")
									),											
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_holder',
				'heading'     => _x( 'Background Holder', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select a background holder layer that you want to apply the background styles. Use "Column Wrapper" when you select seperate column views for the row.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown',
				"value"       => array(		
									_x("Column Container",'Admin Panel','businesslounge') => "container",
									_x("Column Wrapper",'Admin Panel','businesslounge') => "wrapper",
								),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				"dependency"  => array(
										"element" => "rt_bg_effect",
										"value" => array("classic")
									),					
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'type' => 'checkbox',
				'heading' => _x( 'Stretch the Backgroud', 'Admin Panel','businesslounge' ),
				'param_name' => 'stretch_background',
				'description' => _x( 'If checked the background of the column will be stretch out to right or left edge of the row. Use it only for the left or right columns only within a "Content Width" row.', 'Admin Panel','businesslounge' ),
				'value' => array( _x( 'Yes', 'Admin Panel','businesslounge' ) => 'yes' ),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				"dependency"  => array(
										"element" => "rt_bg_effect",
										"value" => array("classic")
									),					
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_image',
				'heading'     => _x( 'Background Image', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select a background image', 'Admin Panel','businesslounge' ),
				'type'        => 'attach_image',	
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'value'	     => '',
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_color',
				'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select a background color for the content row', 'Admin Panel','businesslounge' ),
				'type'        => 'colorpicker',
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'save_always' => true		
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_overlay_color',
				'heading'     => _x( 'Background Overlay Color', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select a overlay color for the background. It is useful when you have a background image. Select a low opacity color.', 'Admin Panel','businesslounge' ),
				'type'        => 'colorpicker',
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'save_always' => true
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_image_repeat',
				'heading'     => _x( 'Background Repeat', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select and set repeat mode direction for the background image.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown',
				"value"       => array(		
									_x("Tile",'Admin Panel','businesslounge') => "repeat",
									_x("Tile Horizontally",'Admin Panel','businesslounge') => "repeat-x",
									_x("Tile Vertically",'Admin Panel','businesslounge') => "repeat-y",
									_x("No Repeat",'Admin Panel','businesslounge') => "no-repeat"
								),
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),	
				'save_always' => true		
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_size',
				'heading'     => _x( 'Background Image Size', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select and set size / coverage behaviour for the background image.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown', 
				"value"       => array(		
									_x("Auto",'Admin Panel','businesslounge') => "auto auto",
									_x("Cover",'Admin Panel','businesslounge') => "cover",
									_x("Contain",'Admin Panel','businesslounge') => "contain",
									_x("100%",'Admin Panel','businesslounge') => "100% auto",
									_x("50%",'Admin Panel','businesslounge') => "50% auto",
									_x("25%",'Admin Panel','businesslounge') => "25% auto",
								),	
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'save_always' => true
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_position',
				'heading'     => _x( 'Background Position', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select a positon for the background image.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown', 
				"value"       => array(		
									_x("Right Top",'Admin Panel','businesslounge') => "right top",
									_x("Right Center",'Admin Panel','businesslounge') => "right center",
									_x("Right Bottom",'Admin Panel','businesslounge') => "right bottom",
									_x("Left Top",'Admin Panel','businesslounge') => "left top",
									_x("Left Center",'Admin Panel','businesslounge') => "left center",
									_x("Left Bottom",'Admin Panel','businesslounge') => "left bottom",
									_x("Center Top",'Admin Panel','businesslounge') => "center top",
									_x("Center Center",'Admin Panel','businesslounge') => "center center",
									_x("Center Bottom",'Admin Panel','businesslounge') => "center bottom",
								),	
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
				'save_always' => true
			));

			rt_vc_add_param( array('vc_column','vc_column_inner'), array(
				'param_name'  => 'rt_bg_attachment',
				'heading'     => _x( 'Background Attachment', 'Admin Panel','businesslounge' ),
				'description' => _x( 'Select and set fixed or scroll mode for the background image.', 'Admin Panel','businesslounge' ),
				'type'        => 'dropdown', 
				"value"       => array(		
									_x("Scroll",'Admin Panel','businesslounge') => "scroll",
									_x("Fixed",'Admin Panel','businesslounge') => "fixed",  
								),	
				'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),	
				'save_always' => true
			));		


?>