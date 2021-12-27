<?php
#-----------------------------------------
#	RT-Theme portfolio_custom_fields.php
#	version: 1.0
#-----------------------------------------

#
# 	Portfolio Custom Fields
#

/**
* @var  array  $customFields  Defines the custom fields available
*/

$customFields = array(
 
	array(
		"description" => _x("Control the layout of the single project page. You can use the 'Default Layout' option to get the pre-styled layout. Select the 'Custom Layout' option to hide the project info fields and create any layout you want.",'Admin Panel','businesslounge'),											
		"type"        => "info_text_only",
		"hr"          => "true",
	),

	array(
		"title"         => _x("Single Project Layout",'Admin Panel','businesslounge'),
		"name"          =>  "_page_layout", 
		"options"       =>  array(
									"default" => _x("Default Layout",'Admin Panel','businesslounge'), 
									"custom"  => _x("Custom Layout",'Admin Panel','businesslounge'),
									), 
		"type"          => "select", 
		"class"         => "div_controller",
	),	 

	array(
		"name"        => "_key_details",
		"title"       => _x("Project Key Details",'Admin Panel','businesslounge'),
		"type"        => "textarea", 
		"dependency"  => array(
										"element" => "rttheme_page_layout",
										"value" => array("default")
									),								
	), 


);


$settings  = array( 
	"name"       => _x("Project Info",'Admin Panel','businesslounge'),
	"scope"      => "portfolio",
	"slug"       => "portfolio_project_details",
	"capability" => "edit_post",
	"context"    => "normal",
	"priority"   => "default" 
);

$rt_post_custom_fields = new rt_meta_boxes($settings,$customFields);


$customFields = array(

				array(
					"title"       => _x("Portfolio Format",'Admin Panel','businesslounge'),  
					"description" => _x('The Portfolio Format Option','Admin Panel','businesslounge'),				
					"name"        => "_portfolio_post_format",
					"options"     =>  array(
												"image" => "Image / Gallery",
												"video" => "Video",
											),
					"type"       => "radio" 
				), 


  				array(
					"name" => "_image_format_options",
					"type" => "group_start"
				),


					array(
						"title" => _x("SINGLE PAGE - IMAGE / GALLERY FORMAT OPTIONS",'Admin Panel','businesslounge'),
						"type"  => "heading"
					),


	 				array(
						"description" => _x('Control the layout of the portfolio image(s) of the single project page.','Admin Panel','businesslounge'),
						"type"        => "info_text_only",
						"hr"          => "true",
					), 

							array(
								"title"       => _x("Usage of the Featured Image & Image Gallery",'Admin Panel','businesslounge'),
								"description" => _x('This option can be set to alter the behaviour of the featured image and gallery images in the Single Portfolio Item.','Admin Panel','businesslounge'),
								"name"        => "_portfolio_options[gallery_usage]",
								"options"     =>  array(
														"grid"    => _x("Display the Gallery Images as a Grid Gallery",'Admin Panel','businesslounge'),
														"slider"  => _x("Display the Gallery Images as a Slideshow",'Admin Panel','businesslounge'), 														
														"masonry" => _x("Display the Gallery Images as a Masonry Gallery",'Admin Panel','businesslounge'),
														"metro"   => _x("Display the Gallery Images as a Metro Gallery",'Admin Panel','businesslounge'),
														"hidden"  => _x("Do not display",'Admin Panel','businesslounge'),
												),
								"type"        => "select", 
							),	 


					 					/**
					 					 * Grid Gallery
					 					 */
										array(
											"title"      => _x("Grid Gallery Layout",'Admin Panel','businesslounge'),
											"desc"       => _x("Select a layout for the grid gallery",'Admin Panel','businesslounge'),
											"name"       => "_portfolio_options[grid_layout]",
											"options"    =>  array(
																	"1/6" => "1/6", 
																	"1/4" => "1/4",
																	"1/3" => "1/3",
																	"1/2" => "1/2",
																	"1/1" => "1/1"
													  			),			
											"default"    => "1/1",  
											"type"       => "select",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("grid")
															),								
											),

										/**
										 * Masonry Gallery
										 */
										array(
											"title"      => _x("Masonry Gallery Layout",'Admin Panel','businesslounge'),
											"desc"       => _x("Select a layout for the masonry gallery",'Admin Panel','businesslounge'),
											"name"       => "_portfolio_options[masonry_layout]",
											"options"    =>  array(
																	"1/6" => "1/6", 
																	"1/4" => "1/4",
																	"1/3" => "1/3",
																	"1/2" => "1/2",
																	"1/1" => "1/1"
													  			),			
											"default"    => "1/4",  
											"type"       => "select",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("masonry")
															),								
											),

										/**
										 * Metro Gallery
										 */
										array(
											"title"      => _x("Metro Gallery Layout",'Admin Panel','businesslounge'),
											"desc"       => _x("Select a layout for the masonry gallery",'Admin Panel','businesslounge'),
											"name"       => "_portfolio_options[metro_layout]",
											"options"    =>  array(
																	"1" => _x('Layout 1','Admin Panel','businesslounge'),
																	"2" => _x('Layout 2','Admin Panel','businesslounge'),
																	"3" => _x('Layout 3','Admin Panel','businesslounge'),
													  			),			
											"default"    => "1",  
											"type"       => "select",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("metro")
															),								
											),

 
 										array(
											"title"       => _x("Resize & Crop Gallery Images",'Admin Panel','businesslounge'),
											"name"        => "_portfolio_options[metro_resize]",
											"description" => _x('If this option checked, gallery image will automatically resized and cropped.','Admin Panel','businesslounge'),
											"default"     => "",
											"type"        => "checkbox",
											"dependency" => array(
																	"element" => "rttheme_portfolio_options_gallery_usage",
																	"value" => array("metro")
																),														
										),		

										/**
										 * Common Image Gallery Options
										 */
										array(
											"title"       => _x("Enable Captions",'Admin Panel','businesslounge'),
											"name"        => "_portfolio_options[captions]",
											"description" => _x('Check to enable the photo captions.','Admin Panel','businesslounge'),
											"default"     => "",
											"type"        => "checkbox",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("grid","masonry","metro")
															),														
										),		

										array(
											"title"       => _x("Remove Gaps",'Admin Panel','businesslounge'),
											"name"        => "_portfolio_options[nogaps]",
											"description" => _x('Remove the gaps between items.','Admin Panel','businesslounge'),
											"default"     => "",
											"type"        => "checkbox",
											"dependency" => array(
																	"element" => "rttheme_portfolio_options_gallery_usage",
																	"value" => array("grid","masonry","metro")
																),														
										),				

										array(
											"title"       => _x("Enable Lightbox",'Admin Panel','businesslounge'),
											"name"        => "_portfolio_options[lightbox]",
											"description" => _x('Check to enable lighbox link for the orginal versions of the gallery images.','Admin Panel','businesslounge'),
											"default"     => "",
											"type"        => "checkbox",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("grid","masonry","metro")
															),														
										),					


 										array(
											"title"       => _x("Resize Gallery Images",'Admin Panel','businesslounge'),
											"name"        => "_portfolio_options[resize]",
											"description" => _x('If this option checked, gallery image will automatically resized and cropped.','Admin Panel','businesslounge'),
											"default"     => "",
											"type"        => "select",
											"options"    =>  array(
																	"true" => _x('Enabled','Admin Panel','businesslounge'),
																	"false" => _x('Disabled','Admin Panel','businesslounge'), 
													  			),														
											"dependency" => array(
																	"element" => "rttheme_portfolio_options_gallery_usage",
																	"value" => array("grid","masonry")
																),														
										),		

										array( 
											"div_class"  => "",
											"name"       => "_portfolio_options[image_dimensions]",
											"type"       => "div_start",
											"dependency" => array(
																"element" => "rttheme_portfolio_options_gallery_usage",
																"value" => array("grid","masonry")
															),					
										),

												array(
													"title"       => _x("Image Width",'Admin Panel','businesslounge'),
													"description" => _x('Set image width','Admin Panel','businesslounge'),
													"name"        => "_portfolio_options[portfolio_image_width]",
													"type"        => "text",
													"dependency" => array(
																		"element" => "rttheme_portfolio_options_resize",
																		"value" => array("true")
																	),														
												),

												array(
													"title"       => _x("Image Height",'Admin Panel','businesslounge'),
													"description" => _x('Set image height','Admin Panel','businesslounge'),
													"name"        => "_portfolio_options[portfolio_image_height]",
													"type"        => "text",
													"dependency" => array(
																		"element" => "rttheme_portfolio_options_resize",
																		"value" => array("true")
																	),														
												),			

												array(
													"title"       => _x("Crop Gallery Images",'Admin Panel','businesslounge'),
													"name"        => "_portfolio_options[image_crop]",
													"description" => _x('Check to crop the images. If this option checked, Images will automatically cropped in the slideshow or the gallery to be displaying at the same height.','Admin Panel','businesslounge'),
													"default"     => "",
													"type"        => "checkbox",
													"dependency" => array(
																			"element" => "rttheme_portfolio_options_resize",
																			"value" => array("true")
																		),														
												),							

										array(
											"type" => "group_end"
										),


									array(
										"title"       => _x("Exclude the Featured Image",'Admin Panel','businesslounge'),
										"name"        => "_portfolio_options[exclude_featured_image]",
										"description" => _x('By default the featured image will be displayed as a first item of the gallery in a single portfolio page. You can remove it be checking this option.','Admin Panel','businesslounge'),
										"default"     => "", 
										"type"        => "checkbox",
										"dependency" => array(
															"element" => "rttheme_portfolio_options_gallery_usage",
															"value" => array("grid","masonry","slider","metro")
														),													
									),	

				array(
					"type" => "group_end"
				),




  				array(
					"name" => "_video_format_options",
					"type" => "group_start"
				),

					array(
						"title" => _x("SINGLE PAGE - VIDEO FORMAT OPTIONS",'Admin Panel','businesslounge'), 
						"type"  => "heading"
					),
	
					array(
						"description" => _x("Attach an image to the 'Image Gallery' box or 'Featured Image' to act as a placeholder / poster image for this video item.",'Admin Panel','businesslounge'),											
						"type"        => "info_text_only",
						"hr"          => "true",
					),

					array(
						"name"        => "_portfolio_video_m4v",
						"title"       => _x("MP4 File URL",'Admin Panel','businesslounge'), 
						"description" => _x("MP4 File URL : Supply a correct full URL to the mp4 video file. Example : http://yourwebsite.com/uploads/video/the-video-file.mp4",'Admin Panel','businesslounge'),											
						"type"        => "upload", 
					),

					array(
						"name"        => "_portfolio_video_webm",
						"title"       => _x("WEBM File URL",'Admin Panel','businesslounge'),
						"description" => _x("WEBM File URL : Supply a correct full URL to the WEBM video file. Example : http://yourwebsite.com/uploads/video/the-video-file.webm Note: The WEBM file will act as a fallback video when the mp4 format is not supported, which can happen in some browsers. The file must be uploaded and located in the same folder with the same name as the mp4 file but with its own file extention (.webm).",'Admin Panel','businesslounge'),											
						"type"        => "upload", 
					),

					array(
						"title" => _x("OR",'Admin Panel','businesslounge'), 
						"type"  => "heading"
					),

					array(
						"name"        => "_portfolio_video",
						"title"       => _x("External Video URL | YouTube or Vimeo",'Admin Panel','businesslounge'),
						"description" => _x("External Video URL | YouTube or Vimeo : Supply a correct full URL to the video file. Example : http://www.youtube.com/watch?v=odBffheAoyc",'Admin Panel','businesslounge'),																	
						"type"        => "text", 
					),


  				array(
					"type" => "group_end"
				),


  				array(
					"title" => _x("LISTING PAGE / CATEGORY RELATED OPTIONS",'Admin Panel','businesslounge'), 
					"type"  => "heading"
				),


				array(
					"title"       => __("Masonry View",'Admin Panel','businesslounge'), 
					"description" => __('Set the column width of the element when displaying in a masonry layout','Admin Panel','businesslounge'),
					"name"        => "_masonry_view",
					"options"     =>  array(
											"same"   => __("Same Width",'Admin Panel','businesslounge'), 
											"double" => __("Double Width",'Admin Panel','businesslounge'), 
									),
					"type"        => "select", 
				),

				array(
					"name"        => "_portf_no_detail",
					"title"       => _x("Remove link(s) to Post Details",'Admin Panel','businesslounge'),
					"description" => _x("Check this option to disable the linking to the Single Portfolio Item in the Portfolio Listing Pages.",'Admin Panel','businesslounge'),
					"type"        => "checkbox",
					"hr"          => true,
				),

				array(
					"name"        => "_external_link",
					"title"       => _x("External Link",'Admin Panel','businesslounge'),
					"description" => _x("Set a (external) link in order to link the thumbnail image to that URL in the Portfolio Listing Pages.",'Admin Panel','businesslounge'),
					"type"        => "text"
				),

				array(
					"name"        => "_open_in_new_tab",
					"title"       => _x("Open External Link in a New Tab",'Admin Panel','businesslounge'),
					"description" => _x("If this option is set, the (external) link (URL) as set in the previous option will open in a new browser tab.",'Admin Panel','businesslounge'),
					"type"        => "checkbox" 
				),
);


$settings  = array( 
	"name"       => _x("Portfolio Options",'Admin Panel','businesslounge'),
	"scope"      => "portfolio",
	"slug"       => "portfolio_custom_fields",
	"array_names" => array("_portfolio_options"),
	"capability" => "edit_post",
	"context"    => "normal",
	"priority"   => "default" 
);

$rt_post_custom_fields = new rt_meta_boxes($settings,$customFields);