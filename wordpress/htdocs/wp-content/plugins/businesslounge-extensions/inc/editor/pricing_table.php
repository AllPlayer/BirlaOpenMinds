<?php
/*
*
* 	RT Pricing Tables
*
*	[pricing_table]
*		[table_column]
*		<ul>
*		<li></li>
*		</ul>
*		[/table_column]
*	
*		[table_column]
*		<ul>
*		<li></li>
*		</ul>
*		[/table_column]
*	[/pricing_table]
*
*/
 

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_pricing_table extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_table_column extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_pricing_table',
		'name'        => _x( 'Pricing Table', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme pricing_table',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Pricing Table Holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_table_column' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		"show_settings_on_create" => false,
		"is_container"            => true,
		'default_content' => '

				[rt_table_column style="" caption="BASIC PACKAGE" price="<sup>$</sup>19" info="yearly plan"]
				<ul>
				 	<li>[tooltip text="Tooltip Text"]Description With Tooltip[/tooltip]</li>
				 	<li>10 MB Max File Size</li>
				 	<li>1 GHZ CPU</li>
				 	<li>256 MB Memory</li>
				 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="black"]</li>
				</ul>
				[/rt_table_column][rt_table_column style="highlight" caption="PRO PACKAGE" price="<sup>$</sup>49" info="yearly plan"]
				<ul>
				 	<li>[tooltip text="Tooltip Text"]Description With Tooltip[/tooltip]</li>
				 	<li>20 MB Max File Size</li>
				 	<li>2 GHZ CPU</li>
				 	<li>512 MB Memory</li>
				 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="style-1"]</li>
				</ul>
				[/rt_table_column][rt_table_column style="" caption="DEVELOPER PACKAGE" price="<sup>$</sup>109" info="monthly plan"]
				<ul>
				 	<li>[tooltip text="Tooltip Text"]Description With Tooltip[/tooltip]</li>
				 	<li>200 MB Max File Size</li>
				 	<li>3 GHZ CPU</li>
				 	<li>1000 MB Memory</li>
				 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="black"]</li>
				</ul>
				[/rt_table_column]
		',

		'params'      => array(
 

							array(
								'param_name'  => 'style',
								'heading'     => _x('Table Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Service", 'Admin Panel','businesslounge') => "service"
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
		'base'        => 'rt_table_column',
		'name'        => _x( 'Table Column', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme list_line sub',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new tab to a tabular content.', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_pricing_table' ),
		'content_element' => true,
		'params'      => array(


							array(
								'param_name'  => 'style',
								'heading'     => _x('Column Type', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Regular column", 'Admin Panel','businesslounge') => "",
													_x("Highlighted column", 'Admin Panel','businesslounge') => "highlight",
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'caption',
								'heading'     => _x('Caption', 'Admin Panel','businesslounge' ),
								'description' => _x('Column caption', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'save_always' => true		
							),

							array(
								'param_name'  => 'info',
								'heading'     => _x('Info', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'save_always' => true
							),


							array(
								'param_name'  => 'price',
								'heading'     => _x('Price', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield'						
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Tab Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => '
														<ul>
															<li>[tooltip text="Tooltip Text"]Description With Tooltip[/tooltip]</li>
															<li>200 MB Max File Size</li>
															<li>3 GHZ CPU</li>
															<li>1000 MB Memory</li>
															<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_icon="icon-basket"]</li>
														</ul>
														',
								'holder'      => 'div',
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


?>