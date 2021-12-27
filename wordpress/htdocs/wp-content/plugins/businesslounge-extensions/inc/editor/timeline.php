<?php
/*
*
* RT Timeline
* [rt_timeline]
*  [rt_tl_event][/rt_tl_event] 
*  [rt_tl_event][/rt_tl_event] 
*  [rt_tl_event][/rt_tl_event] 
* [/rt_timeline]
*
*/

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_timeline extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_tl_event extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_timeline',
		'name'        => _x( 'Timeline Events', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme timeline',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Timeline holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_tl_event' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		"show_settings_on_create" => false,
		"is_container"            => true,
		'default_content' => '
			[rt_tl_event day="01" month="January" year="2015" title="Title"]<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non dolor ultricies, porttitor justo non, pretium mi.</p>[/rt_tl_event]
			[rt_tl_event day="01" month="February" year="2015" title="Title"]<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non dolor ultricies, porttitor justo non, pretium mi.</p>[/rt_tl_event]
			[rt_tl_event day="01" month="March" year="2015" title="Title"]<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non dolor ultricies, porttitor justo non, pretium mi.</p>[/rt_tl_event]
		',		
		'params'      => array(


							array(
								'param_name'  => 'style',
								'heading'     => __( 'Style', 'businesslounge' ),
								'description' => __( 'Select a style', 'businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													__("Chained Timeline", "businesslounge") => "style-1",
													__("List", "businesslounge") => "style-2",
												),
								'save_always' => true
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
 
vc_map(
	array(
		'base'        => 'rt_tl_event',
		'name'        => _x( 'Event', 'Admin Panel','businesslounge' ),
		'icon'        => 'code',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new event to the timeline', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_timeline' ),
		'content_element' => true,
		'params'      => array(
							
							array(
								'param_name'  => 'title',
								'heading'     => _x( 'Title', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textfield',
								'holder'      => 'h4',
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => _x( 'I am text block. Click edit button to change this text.', 'Admin Panel','businesslounge' ),
								'holder'      => 'div',
								'save_always' => true
							),

							array(
								'param_name'  => 'day',
								'heading'     => _x('Event Day', 'Admin Panel','businesslounge' ),
								'description' => _x('Day', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"holder"      => "span",
								'class'       => 'icon_selector',
							),

							array(
								'param_name'  => 'month',
								'heading'     => _x('Event Month', 'Admin Panel','businesslounge' ),
								'description' => _x('Month', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"holder"      => "span",
								'class'       => 'icon_selector',
							),

							array(
								'param_name'  => 'year',
								'heading'     => _x('Event Year', 'Admin Panel','businesslounge' ),
								'description' => _x('Year', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"holder"      => "span",
								'class'       => 'icon_selector',
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