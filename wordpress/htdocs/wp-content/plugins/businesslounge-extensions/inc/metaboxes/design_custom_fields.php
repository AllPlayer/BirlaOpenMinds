<?php
#-----------------------------------------
#	RT-Theme design_custom_fields.php
#	version: 1.0
#-----------------------------------------

//get nav list
$rt_nav_menu_list =rt_get_nav_menus();
$rt_nav_menu_list[""] = _x("Default",'Admin Panel','businesslounge');
ksort($rt_nav_menu_list);


#
# 	Design Custom Fields
#

/**
* @var  array  $customFields  Defines the custom fields available
*/

$customFields = array(

	array(	 
		"type"    => "group_start",
		"name"    => "_design_tabs",
		"class"   => "rt_tabs left tab-position-2 style-2",
	),	


			array(	 
				"type"			 => "tab_titles",
				"tab_names"      => array(
											RT_COMMON_THEMESLUG."-topbar"=>array(__("TOP BAR","Admin Panel","businesslounge"),"icon-pencil"), 	
											RT_COMMON_THEMESLUG."-header"=>array(__("HEADER","Admin Panel","businesslounge"),"icon-info-circled"),
											RT_COMMON_THEMESLUG."-subheader"=>array(__("SUB HEADER","Admin Panel","businesslounge"),"icon-pencil"), 
											RT_COMMON_THEMESLUG."-sidebar"=>array(__("SIDEBAR","Admin Panel","businesslounge"),"icon-pencil"), 
											RT_COMMON_THEMESLUG."-body"=>array(__("BODY","Admin Panel","businesslounge"),"icon-pencil"), 
											RT_COMMON_THEMESLUG."-footer"=>array(__("FOOTER","Admin Panel","businesslounge"),"icon-pencil"), 
										),
			),


			array(	 
				"type"    => "group_start",
				"name"    => "-tab-contents",
				"class"   => "tab_contents",
			),	

						array(	 
							"type"    => "group_start",
							"name"    => "-header",
							"class"   => "tab_content_wrapper animation with_icon active",
						),	

								array(
									"description" => _x("Use these options to alter the global header options for this page. ",'Admin Panel','businesslounge'),					
									"type"        => "info_text_only"
								),


							/* ==========================================================================
							    CUSTOM PAGE MENU
							   ========================================================================== */
								array(
									"title" 		=> _x("CUSTOMIZE MENUS",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"name"        => "_design_options[custom_main_menu]",	
										"title"       => _x("Main Menu",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => $rt_nav_menu_list,  
										"description" 	=> _x('You can change the main navigation menu for this page only.','Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "select"
									), 


									array(
										"name"        => "_design_options[custom_fullscreen_menu]",	
										"title"       => _x("Side Panel Menu",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => $rt_nav_menu_list,  
										"description" 	=> _x('You can change the side panel menu for this page only.','Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "select"
									), 

									array(
										"name"        => "_design_options[display_main_menu]",	
										"title" 		  => esc_html_x("Display Main Menu",'Admin Panel','businesslounge'),
										"description" => esc_html_x("Control the visibility of the the main navigation menu.",'Admin Panel','businesslounge'), 
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[mobile_menu]",	
										"title" 		  => esc_html_x("Display Mobile Menu",'Admin Panel','businesslounge'),
										"description" => esc_html_x("Control the visibility of the the mobile menu for small screens. You may want to hide it when you have a fullscreen menu.",'Admin Panel','businesslounge'), 
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 


							/* ==========================================================================
							   HEADER STYLING
							   ========================================================================== */
								array(
									"title" 		=> _x("HEADER STYLING",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"name"        => "_design_options[display_header]",	
										"title"       => _x("Header Visibility",'Admin Panel','businesslounge'),
										"description" => _x('Control the visibility of the header.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""      => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Visible",'Admin Panel','businesslounge'),
																"false" => _x("Hidden",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[display_mobile_header]",	
										"title"       => _x("Mobile Header Visibility",'Admin Panel','businesslounge'),
										"description" => _x('Control the visibility of the mobile header.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""      => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Visible",'Admin Panel','businesslounge'),
																"false" => _x("Hidden",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 


									array(
										"name"        => "_design_options[header_width]",	
										"title"       => _x("Header Width",'Admin Panel','businesslounge'),
										"description" => _x('Control the width of the header content area.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""          => _x("Use the global value",'Admin Panel','businesslounge'),  
																"default"   => _x("Content Width",'Admin Panel','businesslounge'),
																"fullwidth" => _x("Full Width",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[overlapped_header]",	
										"title" 		  => _x("Overlapped Header",'Admin Panel','businesslounge'),
										"description" => _x('If checked the main header will stick to the top of the browser window while scrolling down through the page content.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 


									array(
										"name"        => "_design_options[header_style]",	
										"title"       => esc_html_x("Header Style",'Admin Panel', 'businesslounge'),
										"description" => "",												
										"options"     => array(		
																""   => _x("Use the global value",'Admin Panel','businesslounge'),  
																"1"  => esc_html_x("Style 1",'Admin Panel', 'businesslounge') ." - ". esc_html_x("Two Rows & Double Row Logo Box ",'Admin Panel', 'businesslounge'),
																"2"  => esc_html_x("Style 2",'Admin Panel', 'businesslounge') ." - ". esc_html_x("Two Rows & One Row Logo Box ",'Admin Panel', 'businesslounge'),
																"3"  => esc_html_x("Style 3",'Admin Panel', 'businesslounge') ." - ". esc_html_x("One Row, Left Logo Box ",'Admin Panel', 'businesslounge'),
																"4"  => esc_html_x("Style 4",'Admin Panel', 'businesslounge') ." - ". esc_html_x("One Row, Centered Logo Box ",'Admin Panel', 'businesslounge'),																
															),  
										"type"    => "select",  
									), 




							/* ==========================================================================
							   HEADER FIRST ROW
							   ========================================================================== */
								array(
									"title" 		=> _x("HEADER FIRST ROW",'Admin Panel','businesslounge'),
									"type" 			=> "heading"								
								),

									array(
										"name"        => "_design_options[header_first_color_skin]",	
										"title"       => esc_html_x("Header Skin",'Admin Panel', 'businesslounge'),
										"description" => "",												
										"options"     => array(		
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"dark"  => esc_html_x("Header Dark Skin",'Admin Panel', 'businesslounge'),
																"light" => esc_html_x("Header Light Skin",'Admin Panel', 'businesslounge'), 
															),  
										"type"    => "select", 
									), 


									array(
										"name"        => "_design_options[main_header_first_row_bg_color]",	
										"title"       => esc_html_x("Background Color",'Admin Panel','businesslounge'),
										"description" => "", 
										"default"     => "",															
										"type"        => "colorpicker",
										"rt_skin"     => true
									),

									array(
										"name"        => "_design_options[header_first_row_widgets_1]",	
										"title"       =>  esc_html_x("Left Widget Area ", 'Admin Panel', 'businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => array(		 
																""=> _x("Use the global value",'Admin Panel','businesslounge'), 
																"disabled"=> _x("Disabled",'Admin Panel','businesslounge'), 
																"custom"  => _x("Customize Widget Areas",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_first_row_custom_widgets_1][]",	
										"title"       => '<span class="dashicons dashicons-editor-break"></span>'._x("Select Widget Areas to Display",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => rtframework_get_sidebar_list(),  
										"description" => _x("You can customize the the widget areas to display and their order by using this select form.",'Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "selectmultiple",
										"dependency" => array(
																"element" => "rttheme_design_options_header_first_row_widgets_1",
																"value" => array("custom")
															),					
									), 

									array(
										"name"        => "_design_options[header_first_row_widgets_2]",	
										"title"       =>  esc_html_x("Right Widget Area ", 'Admin Panel', 'businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => array(		 
																""=> _x("Use the global value",'Admin Panel','businesslounge'), 
																"disabled"=> _x("Disabled",'Admin Panel','businesslounge'), 
																"custom"  => _x("Customize Widget Areas",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_first_row_custom_widgets_2][]",	
										"title"       => '<span class="dashicons dashicons-editor-break"></span>'._x("Select Widget Areas to Display",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => rtframework_get_sidebar_list(),  
										"description" => _x("You can customize the the widget areas to display and their order by using this select form.",'Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "selectmultiple",
										"dependency" => array(
																"element" => "rttheme_design_options_header_first_row_widgets_2",
																"value" => array("custom")
															),					
									), 


							/* ==========================================================================
							   HEADER SECOND ROW
							   ========================================================================== */
								array(
									"title" 		=> _x("HEADER SECOND ROW",'Admin Panel','businesslounge'),
									"type" 			=> "heading",
									"dependency" => array(
														"element" => "rttheme_design_options_header_style",
														"value" => array("","1","2")
													),										
								),

									array(
										"name"        => "_design_options[header_second_color_skin]",	
										"title"       => esc_html_x("Header Skin",'Admin Panel', 'businesslounge'),
										"description" => "",												
										"options"     => array(		
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"dark"  => esc_html_x("Header Dark Skin",'Admin Panel', 'businesslounge'),
																"light" => esc_html_x("Header Light Skin",'Admin Panel', 'businesslounge'), 
															),  
										"type"    => "select", 
										"dependency" => array(
															"element" => "rttheme_design_options_header_style",
															"value" => array("","1","2")
														),												
									), 


									array(
										"name"        => "_design_options[main_header_second_row_bg_color]",	
										"title"       => esc_html_x("Background Color",'Admin Panel','businesslounge'),
										"description" => "", 
										"default"     => "",															
										"type"        => "colorpicker",
										"dependency" => array(
															"element" => "rttheme_design_options_header_style",
															"value" => array("","1","2")
														)

									),

									array(
										"name"        => "_design_options[header_second_row_widgets_1]",	
										"title"       =>  esc_html_x("Left Widget Area ", 'Admin Panel', 'businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => array(		 
																""=> _x("Use the global value",'Admin Panel','businesslounge'), 
																"disabled"=> _x("Disabled",'Admin Panel','businesslounge'), 
																"custom"  => _x("Customize Widget Areas",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select",
										"dependency" => array(
															"element" => "rttheme_design_options_header_style",
															"value" => array("","1","2")
														)										
									), 

									array(
										"name"        => "_design_options[header_second_row_custom_widgets_1][]",	
										"title"       => '<span class="dashicons dashicons-editor-break"></span>'._x("Select Widget Areas to Display",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => rtframework_get_sidebar_list(),  
										"description" => _x("You can customize the the widget areas to display and their order by using this select form.",'Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "selectmultiple",
										"dependency" => array(
																"element" => "rttheme_design_options_header_second_row_widgets_1",
																"value" => array("custom")
															),					
									), 

									array(
										"name"        => "_design_options[header_second_row_widgets_2]",	
										"title"       =>  esc_html_x("Right Widget Area ", 'Admin Panel', 'businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => array(		 
																""=> _x("Use the global value",'Admin Panel','businesslounge'), 
																"disabled"=> _x("Disabled",'Admin Panel','businesslounge'), 
																"custom"  => _x("Customize Widget Areas",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select",
										"dependency" => array(
															"element" => "rttheme_design_options_header_style",
															"value" => array("","1","2")
														)										
									), 

									array(
										"name"        => "_design_options[header_second_row_custom_widgets_2][]",	
										"title"       => '<span class="dashicons dashicons-editor-break"></span>'._x("Select Widget Areas to Display",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => rtframework_get_sidebar_list(),  
										"description" => _x("You can customize the the widget areas to display and their order by using this select form.",'Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "selectmultiple",
										"dependency" => array(
																"element" => "rttheme_design_options_header_second_row_widgets_2",
																"value" => array("custom")
															),					
									), 

							/* ==========================================================================
							   HSTICKY HEADER
							   ========================================================================== */
								array(
									"title" 		=> _x("STICKY HEADER",'Admin Panel','businesslounge'),
									"type" 			=> "heading"							
								),

									array(
										"name"        => "_design_options[sticky_header]",	
										"title"       => _x("Sticky Header",'Admin Panel','businesslounge'),
										"description" => _x('If checked the main header will stick to the top of the browser window while scrolling down through the page content.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[sticky_header_style]",	
										"title"       => _x("Sticky Header Behaviour",'Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(	
																""  => _x("Use the global value",'Admin Panel','businesslounge'),  	 
																"1" => esc_html_x("Stick when scrolling up",'Admin Panel', 'businesslounge'),
																"2" => esc_html_x("Stick always",'Admin Panel', 'businesslounge'),
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_color_skin_sticky]",	
										"title"       => esc_html_x("Sticky Header Skin",'Admin Panel', 'businesslounge'),
										"description" => "",												
										"options"     => array(		
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"dark"  => esc_html_x("Header Dark Skin",'Admin Panel', 'businesslounge'),
																"light" => esc_html_x("Header Light Skin",'Admin Panel', 'businesslounge'), 
															),  
										"type"    => "select", 
									), 


									array(
										"name"        => "_design_options[main_header_row_bg_color_sticky]",	
										"title"       => _x("Sticky Header Background Color",'Admin Panel','businesslounge'),
										"description" => "", 
										"default"     => "",															
										"type"        => "colorpicker",
										"rt_skin"     => true
									),	


							/* ==========================================================================
							   HEADER FUNCTIONALITY
							   ========================================================================== */
								array(
									"title" 		=> _x("HEADER FUNCTIONALITY",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),


									array(
										"name"        => "_design_options[header_sidepanel]",	
										"title" 		  => esc_html_x("Display Side Panel Icon",'Admin Panel','businesslounge'),
										"description" => _x('Display the side panel icon on the header.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_wpml]",	
										"title" 		  => esc_html_x("Display Languages Menu Icon",'Admin Panel','businesslounge'),
										"description" => _x('Display the WPML plugins language menu on the header.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_search]",	
										"title" 		  => esc_html_x("Display Search Icon",'Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[header_cart]",	
										"title" 		  => esc_html_x("Display Cart Icon",'Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 


									array(
										"name"        => "_design_options[header_user]",	
										"title" 		  => esc_html_x("Display User Icon",'Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 


						
						array(	 
							"type"    => "group_end"
						),					

						array(	 
							"type"    => "group_start",
							"name"    => "-topbar",
							"class"   => "tab_content_wrapper animation with_icon",
						),	

							array(
								"description" => _x("Use these options to alter the global top bar options for this page. ",'Admin Panel','businesslounge'),					
								"type"        => "info_text_only"
							),

							/* ==========================================================================
							    TOPBAR STYLING
							   ========================================================================== */
								array(
									"title" 		=> _x("TOP BAR STYLING",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"name"        => "_design_options[display_topbar]",	
										"title" 		  => esc_html_x("Display Top Bar",'Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""     => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Enabled",'Admin Panel','businesslounge'),
																"false" => _x("Disabled",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

							 		array(
										"name"        => "_design_options[top_bar_content_width]",	
										"title"       => esc_html_x("Top Bar Content Width",'Admin Panel', 'businesslounge'), 
										"transport"   => "refresh",															
										"options"     => array(		 
																""          => _x("Use the global value",'Admin Panel','businesslounge'),  
																"default"   => _x("Content Width",'Admin Panel','businesslounge'),
																"fullwidth" => _x("Full Width",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

						array(	 
							"type"    => "group_end"
						),	

						array(	 
							"type"    => "group_start",
							"name"    => "-sidebar",
							"class"   => "tab_content_wrapper animation with_icon",
						),	

							array(
								"description" => _x("Use these options to alter the global sidebar options for this page. ",'Admin Panel','businesslounge'),					
								"type"        => "info_text_only"
							),

							/* ==========================================================================
							    SIDEBARS
							   ========================================================================== */
								array(
									"title" 		=> _x("SIDEBAR",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"name"        => "_design_options[sidebar_position]",	
										"title"       => _x("Sidebar Position",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => array(		 
																""=> _x("Use the global value",'Admin Panel','businesslounge'), 
																"fullwidth"=> _x("No Sidebar",'Admin Panel','businesslounge'), 
																"left"  => _x("Left",'Admin Panel','businesslounge'),
																"right" => _x("Right",'Admin Panel','businesslounge'), 
														),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[custom_sidebar_locations][]",	
										"title"       => '<span class="dashicons dashicons-editor-break"></span>'._x("Select Widget Areas to Display",'Admin Panel','businesslounge'),
										"description" => "",
										"transport"   => "refresh",															
										"options"     => rtframework_get_sidebar_list(),  
										"description" => _x("You can customize the the widget areas to display and their order by using this select form.",'Admin Panel','businesslounge'),
										"default"     => "",
										"type"        => "selectmultiple",
										"dependency" => array(
																"element" => "rttheme_design_options_sidebar_position",
																"value" => array("left","right")
															),					
									), 

						array(	 
							"type"    => "group_end"
						),	


						array(	 
							"type"    => "group_start",
							"name"    => "-subheader",
							"class"   => "tab_content_wrapper animation with_icon",
						),	

							array(
								"description" => _x("Use these options to alter the global sub header options for this page. ",'Admin Panel','businesslounge'),					
								"type"        => "info_text_only"
							),

							/* ==========================================================================
							   SUB HEADER BAR ELEMENTS
							   ========================================================================== */
								array(
									"title" 		=> _x("SUB HEADER ELEMENTS",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"description" => _x("Control the visibility of the subheader elements. If you hide the both elements, the bar won't be displayed.",'Admin Panel','businesslounge'),					
										"type"        => "info_text_only"
									),

									array(
										"title" 		=> _x("Hide The Page Title",'Admin Panel','businesslounge'),
										"name"			=> "_design_options[hide_page_title]",
										"description" 	=> _x('Control the visibility of the titles inside the page header bar.','Admin Panel','businesslounge'),
										"type" 			=> "checkbox"
									),	

									array(
										"title" 		=> _x("Hide The Breadcrumb Menu",'Admin Panel','businesslounge'),
										"name"			=> "_design_options[hide_breadcrumb_menu]",
										"description" 	=> _x('Control the visibility of the breadcrumb menu inside the page header bar.','Admin Panel','businesslounge'),
										"type" 			=> "checkbox"
									),	 

							/* ==========================================================================
							   SUB HEADER BAR STYLING
							   ========================================================================== */
								array(
									"title" 		=> _x("SUB HEADER STYLING",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),


									array(
										"name"        => "_design_options[sub_header_style]",	
										"title"       => _x("Style",'Admin Panel','businesslounge'),
										"description" => _x('Control the width of the header content area.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																"" => _x("Use the global value",'Admin Panel','businesslounge'),  
																"style-1"  => esc_html_x("Style 1",'Admin Panel','businesslounge') ."-". esc_html_x("Classic",'Admin Panel','businesslounge'), 
																"style-2"  => esc_html_x("Style 2",'Admin Panel','businesslounge') ."-". esc_html_x("Centered Title & Breadcrumb Menu",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"title"       => esc_html_x("Top Padding (px)",'Admin Panel','businesslounge'),
										"name"        => "_design_options[header_row_top_padding]",
										"description" => esc_html_x("Top padding of the sub header area.",'Admin Panel','businesslounge'),
										"type"        => "text"
									),  	

									array(
										"title"       => esc_html_x("Bottom Padding (px)",'Admin Panel','businesslounge'),
										"name"        => "_design_options[header_row_bottom_padding]",
										"description" => esc_html_x("Bottom padding of the sub header area.",'Admin Panel','businesslounge'),
										"type"        => "text"
									),  	

									array(
										"name"        => "_design_options[header_row_font_color]",	
										"title"       => _x("Page Title Font Color",'Admin Panel','businesslounge'),
										"description" => "", 
										"default"     => "",															
										"type"        => "colorpicker", 
									),			

									array(
										"name"        => "_design_options[page_heading_font_size]",	
										"title"       => esc_html_x("Page Heading Font Size",'Admin Panel','businesslounge'),
										"type"        => "text", 
									),		

									array(
										"name"        => "_design_options[header_row_bg_color]",	
										"title"       => _x("Background Color",'Admin Panel','businesslounge'),
										"description" => "",
										"type"        => "colorpicker", 
									),			

									array(
										"title"         => _x("Background Image",'Admin Panel','businesslounge'),
										"description"   => _x('You can customize the header background settings for this post only','Admin Panel','businesslounge'),
										"name"          =>  "_design_options[sub_header_bg_img_option]", 
										"options"       =>  array(
											"default"      => _x("Use the global settings",'Admin Panel','businesslounge'), 
											"none"         => _x("No Image",'Admin Panel','businesslounge'),
											"new"          => _x("Customize for this post",'Admin Panel','businesslounge'),
											), 
										"type"          => "select", 
										"class"         => "div_controller",
									),	 

										array( 
											"div_class"  => "hidden_options_set",
											"name"       => "_design_options[sub_header_bg_img_option_hidden]",
											"type"       => "div_start",
											"dependency" => array(
																"element" => "rttheme_design_options_sub_header_bg_img_option",
																"value" => array("new")
															),					
										),

													array(
														"name"        => "_design_options[header_row_bg_image]", 	
														"title"       => _x("Background Image",'Admin Panel','businesslounge'),
														"description" => "",									
														"type"        => "image_upload", 
													), 

													array(
														"name"        => "_design_options[header_row_bg_position]",	
														"title"       => _x("Position",'Admin Panel','businesslounge'),
														"description" => "",												
														"options"     => array(		
																			""       =>_x("Select",'Admin Panel','businesslounge'), 
																			"right top"     => _x("Right Top",'Admin Panel','businesslounge'),
																			"right center"  => _x("Right Center",'Admin Panel','businesslounge'),
																			"right bottom"  => _x("Right Bottom",'Admin Panel','businesslounge'),
																			"left top"      => _x("Left Top",'Admin Panel','businesslounge'),
																			"left center"   => _x("Left Center",'Admin Panel','businesslounge'),
																			"left bottom"   => _x("Left Bottom",'Admin Panel','businesslounge'),
																			"center top"    => _x("Center Top",'Admin Panel','businesslounge'),
																			"center center" => _x("Center Center",'Admin Panel','businesslounge'),
																			"center bottom" => _x("Center Bottom",'Admin Panel','businesslounge'),
																		),  
														"type"    => "select", 
													), 

												
													array(
														"name"        => "_design_options[header_row_bg_attachment]",	
														"title"       => _x("Attachment",'Admin Panel','businesslounge'),
														"description" => "",												
														"options"     => 	array(
																					""       =>_x("Select",'Admin Panel','businesslounge'), 
																					"scroll" =>_x("Scroll",'Admin Panel','businesslounge'), 
																					"fixed"  =>_x("Fixed",'Admin Panel','businesslounge')
																				),  
														"type"        => "select",
														"default" 	  => "",
													),


													array(
														"name"        => "_design_options[header_row_bg_image_repeat]",	
														"title"       => _x("Repeat",'Admin Panel','businesslounge'),
														"description" => "",										
														"options"     => 	array(		
																					""       =>_x("Select",'Admin Panel','businesslounge'), 
																					"repeat"       => _x("Tile",'Admin Panel','businesslounge'),
																					"repeat-x"     => _x("Tile Horizontally",'Admin Panel','businesslounge'),
																					"repeat-y"     => _x("Tile Vertically",'Admin Panel','businesslounge'),
																					"no-repeat"    => _x("No Repeat",'Admin Panel','businesslounge'),
																				),  
														"type"    => "select",
														"default" => "",
													),

													array(
														"name"        => "_design_options[header_row_bg_size]",	
														"title"       => _x("Background Size",'Admin Panel','businesslounge'),
														"description" => "",													
														"options"     => array(	
																		""       =>_x("Select",'Admin Panel','businesslounge'), 	
																		"auto auto" => _x("Auto",'Admin Panel','businesslounge'),
																		"cover" => _x("Cover",'Admin Panel','businesslounge'),
																		"contain" => _x("Contain",'Admin Panel','businesslounge'),
																		"100% auto" => _x("100%",'Admin Panel','businesslounge'),
																		"50% auto" => _x("50%",'Admin Panel','businesslounge'),
																		"25% auto" => _x("25%",'Admin Panel','businesslounge'),
																		),  
														"type"    => "select",
													),  

									array(	 
										"type" => "div_end"
									),		


							/* ==========================================================================
							    BREADCRUMB MENU STYLING
							   ========================================================================== */
								array(
									"title" 		=> _x("BREADCRUMB MENU STYLING",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),

									array(
										"title"       => _x("Breadcrumb Colors",'Admin Panel','businesslounge'),
										"description" => _x('You can customize the breadcrumbs styling for this post only.','Admin Panel','businesslounge'),
										"name"        =>  "_design_options[breadcrumb_styling]", 
										"options"       =>  array(
											"default"      => _x("Use the global settings",'Admin Panel','businesslounge'), 
											"new"          => _x("Customize for this post",'Admin Panel','businesslounge'),
											), 
										"type"          => "select", 
										"class"         => "div_controller",
									),	 

										array( 
											"div_class"  => "hidden_options_set",
											"name"       => "_design_options[breadcrumb_styling_hidden]",
											"type"       => "div_start",
											"dependency" => array(
																"element" => "rttheme_design_options_breadcrumb_styling",
																"value" => array("new")
															),					
										),
													array(
														"name"        => "_design_options[breadcrumb_font_color]",	
														"title"       => _x("Breadcrumb Font Color",'Admin Panel','businesslounge'),
														"description" => "",
														"type"        => "colorpicker",
													),

													array(
														"name"        => "_design_options[breadcrumb_link_color]",	
														"title"       => _x("Breadcrumb Link Color",'Admin Panel','businesslounge'),
														"description" => "",
														"type"        => "colorpicker",
													),

													array(
														"name"        => "_design_options[breadcrumb_bg_color]",	
														"title"       => _x("Breadcrumb Background Color",'Admin Panel','businesslounge'),
														"description" => "",													
														"type"        => "colorpicker",
													),

									array(	 
										"type" => "div_end"
									),		

						array(	 
							"type"    => "group_end"
						),	



						array(	 
							"type"    => "group_start",
							"name"    => "-body",
							"class"   => "tab_content_wrapper animation with_icon",
						),	

							array(
								"description" => _x("Use these options to alter the global body options for this page. ",'Admin Panel','businesslounge'),					
								"type"        => "info_text_only"
							),

							/* ==========================================================================
							    BODY
							   ========================================================================== */
								array(
									"title" 		=> _x("BODY",'Admin Panel','businesslounge'),
									"type" 		=> "heading"
								),

									array(
										"title"         => _x("Body Background",'Admin Panel','businesslounge'),
										"description"   => _x('You can customize the body background settings for this post only.','Admin Panel','businesslounge'),
										"name"          =>  "_design_options[body_background_options]", 
										"options"       =>  array(
											"default"      => _x("Use the global settings",'Admin Panel','businesslounge'), 
											"new"          => _x("Customize for this post",'Admin Panel','businesslounge'),
											), 
										"type"          => "select", 
										"class"         => "div_controller",
									),	 

										array( 
											"div_class"  => "hidden_options_set",
											"name"       => "_design_options[body_background_options_hidden]",
											"type"       => "div_start",
											"dependency" => array(
																"element" => "rttheme_design_options_body_background_options",
																"value" => array("new")
															),					
										),

													array(
													"title" => _x("Background Image",'Admin Panel','businesslounge'),
													"desc"  => "",
													"name"  => "_design_options[body_background_image_url]", 
													"type"  => "image_upload"),


													array(
													"title" => _x("Background Color",'Admin Panel','businesslounge'),
													"desc"  => "",
													"name"  => "_design_options[body_background_color]",
													"type"  => "colorpicker"
													),

													array(
													"title"   => _x("Position",'Admin Panel','businesslounge'),
													"desc"    => "",
													"name"    => "_design_options[body_background_position]",
													"options" => array(		
																		""       =>_x("Select",'Admin Panel','businesslounge'), 
																		"right top"     => _x("Right Top",'Admin Panel','businesslounge'),
																		"right center"  => _x("Right Center",'Admin Panel','businesslounge'),
																		"right bottom"  => _x("Right Bottom",'Admin Panel','businesslounge'),
																		"left top"      => _x("Left Top",'Admin Panel','businesslounge'),
																		"left center"   => _x("Left Center",'Admin Panel','businesslounge'),
																		"left bottom"   => _x("Left Bottom",'Admin Panel','businesslounge'),
																		"center top"    => _x("Center Top",'Admin Panel','businesslounge'),
																		"center center" => _x("Center Center",'Admin Panel','businesslounge'),
																		"center bottom" => _x("Center Bottom",'Admin Panel','businesslounge'),
																	),  
													"type" => "select"),

													array(
													"name"        => "_design_options[body_background_attachment]",	
													"title"       => _x("Attachment",'Admin Panel','businesslounge'), 								
													"options"     => 	array(
																				""       =>_x("Select",'Admin Panel','businesslounge'), 
																				"scroll" =>_x("Scroll",'Admin Panel','businesslounge'), 
																				"fixed"  =>_x("Fixed",'Admin Panel','businesslounge')
																			),  
													"type"        => "select",
													"default"     => "",
													),


													array(
													"title"   => _x("Repeat",'Admin Panel','businesslounge'),
													"desc"    => "",
													"name"    => "_design_options[body_background_repeat]",
													"options"     => 	array(		
																				""       =>_x("Select",'Admin Panel','businesslounge'), 
																				"repeat"       => _x("Tile",'Admin Panel','businesslounge'),
																				"repeat-x"     => _x("Tile Horizontally",'Admin Panel','businesslounge'),
																				"repeat-y"     => _x("Tile Vertically",'Admin Panel','businesslounge'),
																				"no-repeat"    => _x("No Repeat",'Admin Panel','businesslounge'),
																			),  
													"type"    => "select",
													"default" => ""
													),

													array(
													"title"   => _x("Background Size",'Admin Panel','businesslounge'),
													"desc"    => "",
													"name"    => "_design_options[body_background_size]",
													"options" => array(		
																	""       =>_x("Select",'Admin Panel','businesslounge'), 
																	"auto auto" => _x("Auto",'Admin Panel','businesslounge'),
																	"cover" => _x("Cover",'Admin Panel','businesslounge'),
																	"contain" => _x("Contain",'Admin Panel','businesslounge'),
																	"100% auto" => _x("100%",'Admin Panel','businesslounge'),
																	"50% auto" => _x("50%",'Admin Panel','businesslounge'),
																	"25% auto" => _x("25%",'Admin Panel','businesslounge'),
																	),  
													"default" => "",
													"type"    => "select"
													),  

									 
									array(	 
										"type" => "div_end"
									),			

						array(	 
							"type"    => "group_end"
						),	


						array(	 
							"type"    => "group_start",
							"name"    => "-footer",
							"class"   => "tab_content_wrapper animation with_icon",
						),	

							array(
								"description" => _x("Use these options to alter the global footer options for this page. ",'Admin Panel','businesslounge'),					
								"type"        => "info_text_only"
							),

							/* ==========================================================================
							   FOOTER STYLING
							   ========================================================================== */
								array(
									"title" 		=> _x("FOOTER OPTIONS",'Admin Panel','businesslounge'),
									"type" 			=> "heading"
								),


									array(
										"name"        => "_design_options[display_footer]",	
										"title"       => _x("Footer Visibility",'Admin Panel','businesslounge'),
										"description" => _x('Control the visibility of the footer','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""      => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Visible",'Admin Panel','businesslounge'),
																"false" => _x("Hidden",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[display_footer_widgets]",	
										"title"       => _x("Footer Widgets Visibility",'Admin Panel','businesslounge'),
										"description" => _x('Control the visibility of the widgets of the footer','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""      => _x("Use the global value",'Admin Panel','businesslounge'),  
																"true"  => _x("Visible",'Admin Panel','businesslounge'),
																"false" => _x("Hidden",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									), 

									array(
										"name"        => "_design_options[footer_width]",	
										"title"       => _x("Footer Width",'Admin Panel','businesslounge'),
										"description" => _x('Control the width of the footer content area.','Admin Panel','businesslounge'),
										"transport"   => "refresh",															
										"options"     => array(		 
																""          => _x("Use the global value",'Admin Panel','businesslounge'),  
																"default"   => _x("Content Width",'Admin Panel','businesslounge'),
																"fullwidth" => _x("Full Width",'Admin Panel','businesslounge'), 
															),  
										"default" => "",
										"type"    => "select"
									),  

						array(	 
							"type"    => "group_end"
						),	

			array(	 
				"type"    => "group_end"
			),	

	array(	 
		"type"    => "group_end"
	),				
);

$settings  = array( 
	"name"		 => _x("Design Options",'Admin Panel','businesslounge'),
	"scope"		 => array('page','post','portfolio','product'),
	"slug"		 => "rt_design_custom_fields",
	"array_names" => array("_design_options"),
	"capability" => "edit_page",
	"context"	 => "normal",
	"priority"	 => "default" 
);

$rt_design_custom_fields = new rt_meta_boxes($settings,$customFields);


?>