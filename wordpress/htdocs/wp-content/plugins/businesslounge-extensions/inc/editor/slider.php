<?php
/*
*
* RT Slider
* [rt_slider]
*  [rt_slide][/rt_slide]  
* [/rt_slider]
*
*/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_slider extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_slide extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_slider',
		'name'        => _x( 'Content Slider', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme slider',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Content slider holder', 'Admin Panel','businesslounge' ),
		'as_parent'   => array( 'only' => 'rt_slide' ),
		'js_view'     => 'VcColumnView',
		'content_element' => true,
		"show_settings_on_create" => false,	
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
								'param_name'  => 'min_height',
								'heading'     => _x('Minimum Slider Height (px)', 'Admin Panel','businesslounge' ),
								'description' => _x('Slider minimum height value. ', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => 400,
								'save_always' => true
							),

							array(
								'param_name'  => 'mobile_min_height',
								'heading'     => _x('Minimum Slider Height for Mobile (px)', 'Admin Panel','businesslounge' ),
								'description' => _x('Slider minimum height value to be applied for small screens only (< 768px).', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => 400,
								'save_always' => true
							),

							array(
								'param_name'  => 'autoplay',
								'heading'     => _x('Autoplay', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								'save_always' => true,
								"value"       => array(
													_x("Start sliding automatically", 'Admin Panel','businesslounge') => "true",
												),
							),

							array(
								'param_name'  => 'fullheight',
								'heading'     => _x('Full Height', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								'save_always' => true,
								"value"       => array(
													_x("Full-Height Carousel", 'Admin Panel','businesslounge') => "true",
												),
							),

							array(
								'param_name'  => 'parallax',
								'heading'     => _x('Parallax Effect', 'Admin Panel','businesslounge' ),
								'type'        => 'checkbox',
								'save_always' => true,
								"value"       => array(
													_x("Enable parallax effect for this slider", 'Admin Panel','businesslounge') => "true",
												),
							),

							array(
								'param_name'  => 'timeout',
								'heading'     => _x('Timeout', 'Admin Panel','businesslounge' ),
								'description' => _x('Timeout value for each slide. Default is 5000 (equal 5sec)', 'Admin Panel','businesslounge' ),
								'value'       => '5000',
								'type'        => 'rt_number',
								'save_always' => true
							),


							array(
								'param_name'  => 'text_nav',
								'heading'     => _x( 'Text Navigation', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"												
												),
								'save_always' => true						
							),

							array(
								'param_name'  => 'dots',
								'heading'     => _x( 'Navigation Dots', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"												
												),
								"dependency"  => array(
												"element" => "text_nav",
												"value" => array("false")
								),										
								'save_always' => true						
							),

							array(
								'param_name'  => 'nav',
								'heading'     => _x( 'Navigation Arrows', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Enabled",'Admin Panel','businesslounge') => "true", 
													_x("Disabled",'Admin Panel','businesslounge') => "false"													
												),
								'save_always' => true						
							),


						),
	)
);
 

vc_map(
	array(
		'base'        => 'rt_slide',
		'name'        => _x( 'Slide', 'Admin Panel','businesslounge' ),
		'icon'        => 'code',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a slide to the Content Slider', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_slider' ),
		'content_element' => true,
		'params'      => array(


							/**
							 * Slide Content Options
							 */
 							array(
								'param_name'  => 'heading',
								'heading'     => _x('Heading', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'group'       => _x('Slide Content', 'Admin Panel','businesslounge')
							), 

 							array(
								'param_name'  => 'nav_text',
								'heading'     => _x('Navigation Text', 'Admin Panel','businesslounge' ),
								'description' => _x('The text will be displayed as a navigation item if the "Text Navigation" has been enabled for the slider.', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'group'       => _x('Slide Content', 'Admin Panel','businesslounge')
							), 


							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Text', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'group'       => _x('Slide Content', 'Admin Panel','businesslounge')
							), 


							/**
							 *  Styling Options
							 */
							array(
								'param_name'  => 'heading_max_font_size',
								'heading'     => _x('Heading Max Font Size (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x('Styling', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'heading_min_font_size',
								'heading'     => _x('Heading Min Font Size (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',	
								'group'       => _x('Styling', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'content_font_size',
								'heading'     => _x('Content Font Size (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'group'       => _x('Styling', 'Admin Panel','businesslounge')
							),

 							array(
								'param_name'  => 'class',
								'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
								'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'group' => _x('Styling', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'content_color_schema',
								'heading'     => _x( 'Content Color Set', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a color set for the column. Please note the background color of the set will not be applied.', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Global", 'Admin Panel','businesslounge') => "global-style",
													_x("Color Set 1", 'Admin Panel','businesslounge') => "default-style",
													_x("Color Set 2", 'Admin Panel','businesslounge') => "alt-style-1", 
													_x("Color Set 3", 'Admin Panel','businesslounge') => "light-style",
												),
								'save_always' => true,
								'group' => _x('Styling', 'Admin Panel','businesslounge')

							),

							array(
								'param_name'  => 'content_wrapper_width',
								'heading'     => _x('Content Wrapper Width', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select a pre-defined width for the row content', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Default Width", 'Admin Panel','businesslounge') => "default",
													_x("Full Width", 'Admin Panel','businesslounge') => "fullwidth",
												),	
								'save_always' => true,
								'group'       => _x('Styling', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'content_width',
								'heading'     => _x('Content Width (percent)', 'Admin Panel','businesslounge' ),
								'description' => _x('Width of the content block. For mobile device screens, this value will be calculated automatically depends the screen width.', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'value'       => '40',
								'save_always' => true,
								'group'       => _x('Styling', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'content_align',
								'heading'     => _x('Content Align', 'Admin Panel','businesslounge' ),
								'description' => _x('Select a position for the content block. For mobile device screens, the content block will be aligned to the center automatically', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(		
													_x("Right",'Admin Panel','businesslounge') => "right",
													_x("Left",'Admin Panel','businesslounge') => "left",
													_x("Center",'Admin Panel','businesslounge') => "center", 
												),
								'group' => _x('Styling', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'text_align',
								'heading'     => _x('Text Align', 'Admin Panel','businesslounge' ),
								'description' => _x('Align the text within the content block.', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(		
													_x("Left",'Admin Panel','businesslounge') => "left",
													_x("Right",'Admin Panel','businesslounge') => "right",													
													_x("Center",'Admin Panel','businesslounge') => "center", 
												),
								'group' => _x('Styling', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'content_bg_color',
								'heading'     => __( 'Content Background Color', 'businesslounge' ),
								'description' => '',
								'type'        => 'colorpicker',
								'group' 		  => __('Styling', 'businesslounge')
							),


							/**
							 * Mobile Styling Options
							 */
 							array(
								'param_name'  => 'mobile_heading_font_size',
								'heading'     => _x('Heading Font Size for Mobile (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'description' => _x('Default 28px', 'Admin Panel','businesslounge'),
								'group' => _x('Mobile Styling', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

 							array(
								'param_name'  => 'mobile_content_font_size',
								'heading'     => _x('Content Font Size for Mobile (px)', 'Admin Panel','businesslounge' ),
								'type'        => 'rt_number',
								'description' => _x('Default 18px', 'Admin Panel','businesslounge'),
								'group' => _x('Mobile Styling', 'Admin Panel','businesslounge'),
								'save_always' => true
							),


							/**
							 * Link Options
							 */
							array(
								'param_name'  => 'link',
								'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => _x('Link', 'Admin Panel','businesslounge')
							),

							array(
								'param_name'  => 'link_target',
								'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => _x('Link', 'Admin Panel','businesslounge')
							),		

 							array(
								'param_name'  => 'link_title',
								'heading'     => _x('Link Title', 'Admin Panel','businesslounge' ),
								'description' => _x('Text for the title attribute', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'group'       => _x('Link', 'Admin Panel','businesslounge')
							),


							/**
							 * Background Options
							 */
							array(
								'param_name'  => 'bg_color_tone',
								'heading'     => _x( 'Background Color Tone', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Specify the background color tone to match the related color set with the overlapped header (if active), arrows and navigation buttons.', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(		
															_x("Dark",'Admin Panel','businesslounge') => "dark",
															_x("Light",'Admin Panel','businesslounge') => "light",
														),
								'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
								'save_always' => true
							),

							
							array(
								'param_name'  => 'bg_color',
								'heading'     => _x( 'Background Color', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'colorpicker',
								'group'       => _x('Background Options', 'Admin Panel','businesslounge'),
								'save_always' => true
							),


							array(
								'param_name'  => 'bg_image',
								'heading'     => _x('Background Image', 'Admin Panel','businesslounge' ),
								'description' => _x('Select an image for the slider background', 'Admin Panel','businesslounge' ),
								'type'        => 'attach_image',
								'group'       => _x('Background Options', 'Admin Panel','businesslounge'),
								'save_always' => true
							),

							array(
								'param_name'  => 'bg_image_repeat',
								'heading'     => _x( 'Background Repeat', 'Admin Panel','businesslounge' ),
								'description' => _x( 'Select and set repeat mode direction for the background image.', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(		
													_x("No Repeat",'Admin Panel','businesslounge') => "no-repeat",
													_x("Tile",'Admin Panel','businesslounge') => "repeat",
													_x("Tile Horizontally",'Admin Panel','businesslounge') => "repeat-x",
													_x("Tile Vertically",'Admin Panel','businesslounge') => "repeat-y"
												),
								'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
								'save_always' => true
							),

							array(
								'param_name'  => 'bg_size',
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
								'group'       => _x( 'Background Options', 'Admin Panel','businesslounge' ),
								'save_always' => true
							),

							array(
								'param_name'  => 'bg_position',
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
							),



							/* button */

							array(
								'param_name'  => 'button_text',
								'heading'     => _x('Button Text', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons'
							),

							array(
								'param_name'  => 'button_size',
								'heading'     => _x( 'Button Size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Small", 'Admin Panel','businesslounge') => "small",
													_x("Medium", 'Admin Panel','businesslounge') => "medium",
													_x("Big", 'Admin Panel','businesslounge') => "big",
												),
								'group'       => 'Buttons'
							),

							array(
								'param_name'  => 'button_style',
								'heading'     => _x( 'Button Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														_x("Flat Text", 'Admin Panel','businesslounge') => "text",
														_x("Style 1", 'Admin Panel','businesslounge')   => "style-1",
														_x("Style 2", 'Admin Panel','businesslounge')   => "style-2",
														_x("Style 3", 'Admin Panel','businesslounge')   => "style-3", 
														_x("Black", 'Admin Panel','businesslounge')     => "black", 
														_x("White", 'Admin Panel','businesslounge')     => "white"
													),
								'group'       => 'Buttons',
								'save_always' => true,
							),
								
							array(
								'param_name'  => 'button_icon',
								'heading'     => _x('Icon', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons'
							),

							array(
								'param_name'  => 'button_link',
								'heading'     => _x('Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons'
							),


							array(
								'param_name'  => 'button_arrow',
								'type'        => 'checkbox',
								'group'       => 'Buttons',
								'value'       => array(
														_x("Button Arrow", 'Admin Panel','businesslounge') => "true"
													 )
							),

							array(
								'param_name'  => 'button_rounded',
								'type'        => 'checkbox',
								'group'       => 'Buttons',
								'value'       => array(
														_x("Rounded Button", 'Admin Panel','businesslounge') => "true"
													 )
							),

							array(
								'param_name'  => 'button_link_target',
								'heading'     => _x('Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => 'Buttons',

							),										

							array(
								'param_name'  => 'button_href_title',
								'heading'     => _x('Link Title', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								'type'        => 'textfield',
								'group'       => 'Buttons'
							),		



						/* button 2 */

							array(
								'param_name'  => 'button2_text',
								'heading'     => _x('Button 2 Text', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons' 
							),

							array(
								'param_name'  => 'button2_size',
								'heading'     => _x( 'Button 2 Size', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Small", 'Admin Panel','businesslounge') => "small",
													_x("Medium", 'Admin Panel','businesslounge') => "medium",
													_x("Big", 'Admin Panel','businesslounge') => "big",
												),
								'group'       => 'Buttons' 
							),

							array(
								'param_name'  => 'button2_style',
								'heading'     => _x( 'Button 2 Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
														_x("Flat Text", 'Admin Panel','businesslounge') => "text",
														_x("Style 1", 'Admin Panel','businesslounge')   => "style-1",
														_x("Style 2", 'Admin Panel','businesslounge')   => "style-2",
														_x("Style 3", 'Admin Panel','businesslounge')   => "style-3", 
														_x("Black", 'Admin Panel','businesslounge')     => "black", 
														_x("White", 'Admin Panel','businesslounge')     => "white"
												),
								'group'       => 'Buttons',
								'save_always' => true, 
							),
							
							array(
								'param_name'  => 'button2_arrow',
								'type'        => 'checkbox',
								'group'       => 'Buttons',
								'value'       => array(
														_x("Button Arrow", 'Admin Panel','businesslounge') => "true"
													 )
							),

							array(
								'param_name'  => 'button2_rounded',
								'type'        => 'checkbox',
								'group'       => 'Buttons',
								'value'       => array(
														_x("Rounded Button", 'Admin Panel','businesslounge') => "true"
													 )
							),

							array(
								'param_name'  => 'button2_icon',
								'heading'     => _x('Button 2 Icon', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons' 
							),

							array(
								'param_name'  => 'button2_link',
								'heading'     => _x('Button 2 Link', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => '',
								'group'       => 'Buttons' 
							),

							array(
								'param_name'  => 'button2_link_target',
								'heading'     => _x('Button 2 Link Target', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Same Tab", 'Admin Panel','businesslounge') => "_self",
													_x("New Tab", 'Admin Panel','businesslounge') => "_blank", 
												),
								'group'       => 'Buttons' 
							),										

							array(
								'param_name'  => 'button2_href_title',
								'heading'     => _x('Button 2 Link Title', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								'type'        => 'textfield',
								'group'       => 'Buttons' 
							),									  

						)
	)
);		


?>