<?php
/*
*
* Rows
*
*/
vc_map_update( 'vc_row', array(
	'category'    => array(_x( 'Structure', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
));

//remove vc_row params
rt_vc_remove_param('vc_row', array('video_bg','video_bg_url','video_bg_parallax','full_width','bg_color','font_color','padding','margin_bottom','bg_image','bg_image_repeat','el_class','css','parallax','parallax_speed_video','parallax_speed_bg','parallax_image','el_id','gap','content_placement','columns_placement','equal_height','full_height'));

//remove vc_row_inner params
rt_vc_remove_param('vc_row_inner', array('video_bg','video_bg_url','video_bg_parallax','full_width','bg_color','font_color','padding','margin_bottom','bg_image','bg_image_repeat','el_class','css','parallax','parallax_speed_video','parallax_speed_bg','parallax_image','el_id','gap','content_placement','columns_placement','equal_height','full_height'));


rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_class',
	'type'        => 'rt_hidden', 
));	


//general options
rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_row_background_width',
	'heading'     => _x( 'Row Background Width', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a pre-defined width for the row background', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Full Width", 'Admin Panel','businesslounge') => "fullwidth",
						_x("Content Width", 'Admin Panel','businesslounge') => "default",						
					),				
	
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_row_content_width',
	'heading'     => _x( 'Row Content Width', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a pre-defined width for the row content', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Content Width", 'Admin Panel','businesslounge') => "default",
						_x("Full Width", 'Admin Panel','businesslounge') => "fullwidth",
					),				
	
	"dependency"  => array(
							"element" => "rt_row_background_width",
							"value" => array("fullwidth")
						),		
	'save_always' => true
));


rt_vc_add_param( array('vc_row'), array(
	'param_name'  => 'rt_row_style',
	'heading'     => _x( 'Row Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a color scheme for the row.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Color Set 1", 'Admin Panel','businesslounge') => "default-style",
						_x("Color Set 2", 'Admin Panel','businesslounge') => "alt-style-1", 
						_x("Color Set 3", 'Admin Panel','businesslounge') => "light-style",
						_x("Global", 'Admin Panel','businesslounge') => "global-style"
			 		),				
	'save_always' => true
));

rt_vc_add_param( array('vc_row_inner'), array(
	'param_name'  => 'rt_row_style',
	'heading'     => _x( 'Row Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a color scheme for the row.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Global", 'Admin Panel','businesslounge') => "global-style",
						_x("Color Set 1", 'Admin Panel','businesslounge') => "default-style",
						_x("Color Set 2", 'Admin Panel','businesslounge') => "alt-style-1", 
						_x("Color Set 3", 'Admin Panel','businesslounge') => "light-style",
					),				
	'save_always' => true
));

									
rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'type' => 'checkbox',
	'heading' => _x( 'Custom Row Height', 'Admin Panel','businesslounge' ),
	'param_name' => 'rt_row_height',
	'type'        => 'dropdown',
	"value"       => array(
						_x("Default", 'Admin Panel','businesslounge') => "",
						_x("Full Height", 'Admin Panel','businesslounge') => "full_height", 
						_x("Custom Min Height", 'Admin Panel','businesslounge') => "min_height", 
					),
	'save_always' => true								
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_min_row_height',
	'heading'     => _x( 'Minimum Row Height', 'Admin Panel','businesslounge' ),
	'description' => _x( 'You can set a minimum height for the row', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_number',
	"dependency"  => array(
							"element" => "rt_row_height",
							"value" => array("min_height")
						),
	'save_always' => true									
)); 

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'type' => 'dropdown',
	'heading' => _x( 'Content Holder position', 'Admin Panel','businesslounge' ),
	'param_name' => 'rt_holder_placement',
	'value' => array(
		_x( 'Middle', 'Admin Panel','businesslounge' ) => 'middle',
		_x( 'Top', 'Admin Panel','businesslounge' ) => 'top',
		_x( 'Bottom', 'Admin Panel','businesslounge' ) => 'bottom',
	),
	'description' => _x( 'Select the content holder position within the row.', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_row_height",
							"value" => array("full_height", "min_height")
						),
	'save_always' => true									
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'type' => 'dropdown',
	'heading' => _x( 'Content placement', 'Admin Panel','businesslounge' ),
	'param_name' => 'rt_column_placement',
	'value' => array(		
		_x( 'Top', 'Admin Panel','businesslounge' ) => 'top',
		_x( 'Middle', 'Admin Panel','businesslounge' ) => 'middle',
		_x( 'Bottom', 'Admin Panel','businesslounge' ) => 'bottom',
	),
	'description' => _x( 'Select the content position within the columns', 'Admin Panel','businesslounge' ),
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_column_view',
	'heading'     => _x( 'Column Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a column style for this row. Seperated column block option only works if the row has multiple columns.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Default", 'Admin Panel','businesslounge') => "",
						_x("Grid view", 'Admin Panel','businesslounge') => "grid",						
						_x("Equal Heights", 'Admin Panel','businesslounge') => "equal_heights",						
					),				
));


rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_column_gaps',
	'type'        => 'checkbox',
	"value"       => array(
						_x("Add Column Gaps", 'Admin Panel','businesslounge') => "top",
					),				
	'save_always' => true
));


vc_add_param( 'vc_row', array(
	'param_name'  => 'rt_row_shadows',
	'heading'     => _x( 'Row Shadows', 'Admin Panel','businesslounge' ),
	'type'        => 'checkbox',
	"value"       => array(
						_x("Top Shadow", 'Admin Panel','businesslounge') => "top",
						_x("Bottom Shadow", 'Admin Panel','businesslounge') => "bottom",
					),				
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_col_anim',
	'heading'     => __( 'Column Animations', 'rt_theme_admin' ),
	'type'        => 'checkbox',
	"value"       => array(
						__("Animate columns when first appeared", 'Admin Panel','businesslounge') => "true",
					),
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'id',
	'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
	'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
	'value'       => '',
));	

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'class',
	'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
	'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
));	


	
			rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
				'heading'     => _x( 'Desktop', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_1"
			));

					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("25px","25px","0px","0px"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("0","0","auto","auto"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  

					 
					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_content_margins',
						'heading'     => _x('Content Wrapper Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("0","0","auto","auto"),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  



			rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
				'heading'     => _x( 'Tablet', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_2"
			));

					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_tablet_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_tablet_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  

					 
					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_tablet_content_margins',
						'heading'     => _x('Content Wrapper Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  


			rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
				'heading'     => _x( 'Smartphone', 'Admin Panel','businesslounge' ),
				'type'        => 'rt_separator',
				'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),
				"param_name"  => "rt_vc_seperator_3"
			));

					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_sp_paddings',
						'heading'     => _x('Paddings', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	


					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_sp_margins',
						'heading'     => _x('Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  

					 
					rt_vc_add_param( array('vc_row','vc_row_inner'), array(
						'param_name'  => 'rt_sp_content_margins',
						'heading'     => _x('Content Wrapper Margins', 'Admin Panel','businesslounge' ),
						'type'        => 'rt_styling',  
						'group'       => _x( 'Spacing', 'Admin Panel','businesslounge' ),  
						'rt_input_defaults' => array("","","",""),
						'rt_input_headings' => array(_x('Top', 'Admin Panel','businesslounge' ),_x('Bottom', 'Admin Panel','businesslounge' ),_x('Left', 'Admin Panel','businesslounge' ),_x('Right', 'Admin Panel','businesslounge' )),
					));	  




//borders
rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_row_borders',
	'heading'     => _x( 'Row Borders', 'Admin Panel','businesslounge' ),
	'type'        => 'checkbox',
	'group'       => _x( 'Borders', 'Admin Panel','businesslounge' ),
	"value"       => array(
								_x("Top Border", 'Admin Panel','businesslounge') => "top",
								_x("Bottom Border", 'Admin Panel','businesslounge') => "bottom",
								_x("Left Border", 'Admin Panel','businesslounge') => "left",
								_x("Right Border", 'Admin Panel','businesslounge') => "right",
						),				
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
		'param_name'  => 'rt_border_size',
		'heading'     => _x('Border Size (px)', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Leave blank for the default value.', 'Admin Panel','businesslounge' ),
		'type'        => 'rt_number',
		'group'       => _x( 'Borders', 'Admin Panel','businesslounge' )
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
		'param_name'  => 'rt_border_color',
		'heading'     => _x('Border Color', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Leave blank for the default value.', 'Admin Panel','businesslounge' ),
		'type'        => 'colorpicker',
		'group'       => _x( 'Borders', 'Admin Panel','businesslounge' )
));


rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_row_border_width',
	'heading'     => _x( 'Border Width', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
								_x("Full Width", 'Admin Panel','businesslounge') => "fullwidth",	
								_x("Content Width", 'Admin Panel','businesslounge') => "default"
							),				
	'group'       => _x( 'Borders', 'Admin Panel','businesslounge' )
));


//background options
rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_effect',
	'heading'     => _x( 'Background Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select the background style.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Classic", 'Admin Panel','businesslounge') => "classic",
						_x("Parallax Image", 'Admin Panel','businesslounge') => "parallax",
						_x("Ken Burns Effect / Slider", 'Admin Panel','businesslounge') => "slider",
					),
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_image',
	'heading'     => _x( 'Background Image', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a background image', 'Admin Panel','businesslounge' ),
	'type'        => 'attach_image',	
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_effect",
							"value" => array("classic","parallax")
						),	
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_images',
	'heading'     => _x( 'Background Image(s)', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a single or multiple images.', 'Admin Panel','businesslounge' ),
	'type'        => 'attach_images',	
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_effect",
							"value" => array("slider")
						),	
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
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
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_effect",
							"value" => array("parallax")
						),											
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_parallax_speed',
	'heading'     => _x( 'Parallax Speed', 'Admin Panel','businesslounge' ), 
	'type'        => 'dropdown',
	"value"       => array(		
						"1" => "1",  
						"2" => "2",  
						"3" => "3",   											
					),
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_effect",
							"value" => array("parallax")
						),											
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_transparent_bg',
	'type'        => 'dropdown',
	'heading'     => _x( 'Transparent Background', 'Admin Panel','businesslounge' ),
	"value"       => array(		
						_x("Disabled",'Admin Panel','businesslounge') => "false",
						_x("Enabled",'Admin Panel','businesslounge') => "true" 
					),
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_color',
	'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a background color for the content row', 'Admin Panel','businesslounge' ),
	'type'        => 'colorpicker',
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_transparent_bg",
							"value" => array("false")
						),	
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_overlay_color',
	'heading'     => _x( 'Background Overlay Color', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a overlay color for the background. It is useful when you have a background image or background video. Select a low opacity color.', 'Admin Panel','businesslounge' ),
	'type'        => 'colorpicker',
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
));


rt_vc_add_param( array('vc_row','vc_row_inner'), array(
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
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_size',
	'heading'     => _x( 'Background Image Size', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select and set size / coverage behaviour for the background image.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown', 
	"value"       => array(		
						_x("Cover",'Admin Panel','businesslounge') => "cover",
						_x("Auto",'Admin Panel','businesslounge') => "auto auto",						
						_x("Contain",'Admin Panel','businesslounge') => "contain",
						_x("100%",'Admin Panel','businesslounge') => "100% auto",
						_x("50%",'Admin Panel','businesslounge') => "50% auto",
						_x("25%",'Admin Panel','businesslounge') => "25% auto",
					),	
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
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
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_attachment',
	'heading'     => _x( 'Background Attachment', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select and set fixed or scroll mode for the background image.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown', 
	"value"       => array(		
						_x("Scroll",'Admin Panel','businesslounge') => "scroll",
						_x("Fixed",'Admin Panel','businesslounge') => "fixed",  
					),	
	'group'       => _x( 'Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_effect",
							"value" => array("classic")
						),			
	'save_always' => true
));					


//background Layers
rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_layer',
	'heading'     => _x( 'Layer Style', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select the layer style.', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Select", 'Admin Panel','businesslounge') => "", 
						_x("Custom", 'Admin Panel','businesslounge') => "custom", 
						_x("Shape", 'Admin Panel','businesslounge') => "shape",
					),				
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_shape',
	'heading'     => _x( 'Shape Style', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown', 
	"value"       => array(		
							_x("Curv",'Admin Panel','businesslounge') => "curv",
							_x("Cross Left",'Admin Panel','businesslounge') => "cross-left",
							_x("Cross Right",'Admin Panel','businesslounge') => "cross-right"
						),	
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	'save_always' => true,
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("shape")
						),		
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_layer_color',
	'heading'     => _x( 'Layer Color', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Select a color for the layer.', 'Admin Panel','businesslounge' ),
	'type'        => 'colorpicker',
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("custom","shape")
						),		
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_custom_height',
	'heading'     => _x( 'Custom Height', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Give a height value for the background (px,%)', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("custom")
						),	
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_custom_width',
	'heading'     => _x( 'Custom Width', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Give a width value for the background (px,%)', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("custom")
						),	
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_v_align',
	'heading'     => _x( 'Layer Vertical Alignment', 'Admin Panel','businesslounge' ), 
	'type'        => 'dropdown', 
	"value"       => array(		
							_x("Top",'Admin Panel','businesslounge') => "top",
							_x("Bottom",'Admin Panel','businesslounge') => "bottom",
						),	
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	'save_always' => true,
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("custom","shape")
						),		
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(
	'param_name'  => 'rt_bg_h_align',
	'heading'     => _x( 'Layer Horizontal Alignment', 'Admin Panel','businesslounge' ), 
	'type'        => 'dropdown', 
	"value"       => array(		
							_x("Left",'Admin Panel','businesslounge') => "left",
							_x("Right",'Admin Panel','businesslounge') => "right",
						),	
	'group'       => _x( 'Background Layer', 'Admin Panel','businesslounge' ),
	'save_always' => true,
	"dependency"  => array(
							"element" => "rt_bg_layer",
							"value" => array("custom")
						),		
));


//video background options
rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
	'param_name'  => 'rt_bg_video_format',
	'heading'     => _x( 'Video Format', 'Admin Panel','businesslounge' ),
	'type'        => 'dropdown',
	"value"       => array(
						_x("Self Hosted HTML5 Video", 'Admin Panel','businesslounge') => "self-hosted",
						_x("YouTube", 'Admin Panel','businesslounge') => "youtube",						
					),				
	'group'       => _x( 'Video Background', 'Admin Panel','businesslounge' ),
	'save_always' => true
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
	'param_name'  => 'rt_bg_video_mp4',
	'heading'     => _x( 'MP4 File URL / ID', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Enter your video (.mp4) file URL or ID', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',	
	'group'       => _x( 'Video Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_video_format",
							"value" => array("self-hosted")
						),		
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
	'param_name'  => 'rt_bg_video_webm',
	'heading'     => _x( 'WEBM File URL / ID', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Enter your video (.webm) file URL or ID', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',	
	'group'       => _x( 'Video Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_video_format",
							"value" => array("self-hosted")
						),		
));

rt_vc_add_param( array('vc_row','vc_row_inner'), array(	
	'param_name'  => 'rt_bg_video_youtube',
	'heading'     => _x( 'Youtube Video URL', 'Admin Panel','businesslounge' ),
	'description' => _x( 'Enter your youtube video URL', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',	
	'group'       => _x( 'Video Background', 'Admin Panel','businesslounge' ),
	"dependency"  => array(
							"element" => "rt_bg_video_format",
							"value" => array("youtube")
						),		
));

?>