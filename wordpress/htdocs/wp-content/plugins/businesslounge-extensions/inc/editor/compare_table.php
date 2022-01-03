<?php
/*
*
* 	RT Compare Tables
*
*	[rt_compare_table]
*		[rt_compare_table_column]
*		<ul>
*		<li></li>
*		</ul>
*		[/rt_compare_table_column]
*	
*		[rt_compare_table_column]
*		<ul>
*		<li></li>
*		</ul>
*		[/rt_compare_table_column]
*	[/rt_compare_table]
*
*/
 

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_rt_compare_table extends WPBakeryShortCodesContainer { }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_rt_compare_table_column extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'        => 'rt_compare_table',
		'name'        => _x( 'Compare Table', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme comp_table',
		'category'    => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description' => _x( 'Compare Table Holder', 'Admin Panel','businesslounge' ),
		'as_parent'    => array( 'only' => 'rt_compare_table_column' ),
		'js_view'       => 'VcColumnView',
		'content_element' => true,
		"show_settings_on_create" => false,
		"is_container"            => true,
		'default_content' => '

			[rt_compare_table_column style="features"]
			<ul>
			 	<li>Use Tooltips</li>
			 	<li>Use Icons</li>
			 	<li>CPU</li>
			 	<li>Memory</li>
			</ul>
			[/rt_compare_table_column][rt_compare_table_column style="" caption="BASIC PACKAGE" info="yearly plan" price="<sup>$</sup>19"]
			<ul>
			 	<li>[tooltip text="Tooltip Text"][rt_icon icon_name="icon-info-circled"][/tooltip]</li>
			 	<li>[rt_icon icon_name="icon-cancel"]</li>
			 	<li>[rt_icon icon_name="icon-cancel"]</li>
			 	<li>256 MB Memory</li>
			 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="black"]</li>
			</ul>
			[/rt_compare_table_column][rt_compare_table_column style="highlight" caption="START PACKAGE" info="yearly plan" price="<sup>$</sup>49"]
			<ul>
			 	<li>[tooltip text="Tooltip Text"][rt_icon icon_name="icon-info-circled"][/tooltip]</li>
			 	<li>[rt_icon icon_name="icon-ok"]</li>
			 	<li>[rt_icon icon_name="icon-ok"]</li>
			 	<li>512 MB Memory</li>
			 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="style-1"]</li>
			</ul>
			[/rt_compare_table_column][rt_compare_table_column style="" caption="PRO PACKAGE" info="monthly plan" price="<sup>$</sup>109"]
			<ul>
			 	<li>[tooltip text="Tooltip Text"][rt_icon icon_name="icon-info-circled"][/tooltip]</li>
			 	<li>[rt_icon icon_name="icon-ok"]</li>
			 	<li>[rt_icon icon_name="icon-ok"]</li>
			 	<li>1000 MB Memory</li>
			 	<li>[button button_link="#" button_text="BUY NOW" button_size="medium" button_rounded="true" button_style="black"]</li>
			</ul>
			[/rt_compare_table_column]

		',

		'params'      => array(
 
							array(
								'param_name'  => 'style',
								'heading'     => _x('Table Style', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Compare", 'Admin Panel','businesslounge') => "compare", 
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
		'base'        => 'rt_compare_table_column',
		'name'        => _x( 'Table Column', 'Admin Panel','businesslounge' ),
		'icon'        => 'rt_theme list_line sub',
		'category'    => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description' => _x( 'Adds a new tab to a tabular content.', 'Admin Panel','businesslounge' ),
		'as_child'    => array( 'only' => 'rt_compare_table' ),
		'content_element' => true,
		'params'      => array(


							array(
								'param_name'  => 'style',
								'heading'     => _x('Column Type', 'Admin Panel','businesslounge' ),
								'type'        => 'dropdown',
								"value"       => array(
													_x("Regular column", 'Admin Panel','businesslounge') => "",
													_x("Features column for compare tables", 'Admin Panel','businesslounge') => "features",
													_x("Highlighted column", 'Admin Panel','businesslounge') => "highlight",
												),
								'save_always' => true
							),

							array(
								'param_name'  => 'caption',
								'heading'     => _x('Caption', 'Admin Panel','businesslounge' ),
								'description' => _x('Column caption', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								'value'       => _x( 'Package Name', 'Admin Panel','businesslounge' ),
								"dependency"  => array(
														"element" => "style",
														"value" => array("","highlight")
													),
								'save_always' => true										
							),

							array(
								'param_name'  => 'info',
								'heading'     => _x('Info', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
														"element" => "style",
														"value" => array("","highlight")
													),
								'save_always' => true										
							),


							array(
								'param_name'  => 'price',
								'heading'     => _x('Price', 'Admin Panel','businesslounge' ),
								'type'        => 'textfield',
								"dependency"  => array(
														"element" => "style",
														"value" => array("","highlight")
													),										
							),

							array(
								'param_name'  => 'content',
								'heading'     => _x( 'Tab Content', 'Admin Panel','businesslounge' ),
								'description' => '',
								'type'        => 'textarea_html',
								'holder'      => 'div',
								'value'       => '		<ul>
															<li>[tooltip text="Tooltip Text"][rt_icon icon_name="icon-info-circled"][/tooltip]</li>
															<li>[rt_icon icon_name="icon-ok"]</li>
															<li>[rt_icon icon_name="icon-ok"]</li>
															<li>1000 MB Memory</li>
															<li>[button button_link="#" button_text="BUY NOW" button_size="small" button_icon="icon-basket"]</li>
														</ul>',
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