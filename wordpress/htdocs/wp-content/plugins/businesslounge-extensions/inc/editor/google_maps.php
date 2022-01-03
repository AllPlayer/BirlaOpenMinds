<?php
/*
*
* RT Google Maps
*
*/
if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_google_maps extends WPBakeryShortCodesContainer { 
	}
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
	class WPBakeryShortCode_location extends WPBakeryShortCode { }
}

vc_map(
	array(
		'base'                    => 'google_maps',
		'name'                    => _x( 'Google Maps', 'Admin Panel','businesslounge' ),
		'icon'                    => 'rt_theme rt_maps',
		'category'    				  => array(_x( 'Content', 'Admin Panel','businesslounge' ), _x( 'Theme Addons', 'Admin Panel','businesslounge' )),
		'description'             => _x( 'Google Maps Holder Shortcode', 'Admin Panel','businesslounge' ),
		'as_parent'               => array( 'only' => 'location' ),
		'js_view'                 => 'VcColumnView',
		'content_element'         => true,
		"show_settings_on_create" => false,
		"is_container"            => true,
		'default_content'         => '[location title="' . _x( 'Location Title','Admin Panel','businesslounge' ) . '"][/location] ',
		'params'                  => array(
					
											array(
												'param_name'  => 'map_id',
												'heading'     => _x('ID', 'Admin Panel','businesslounge' ),
												'description' => _x('Unique ID', 'Admin Panel','businesslounge' ),
												'type'        => 'textfield',
												'value'       => ''
											),

											array(
												'param_name'  => 'height',
												'heading'     => _x('Height', 'Admin Panel','businesslounge' ),
												'description' => _x('Map Height', 'Admin Panel','businesslounge' ),
												'type'        => 'rt_number'
											),

											array(
												'param_name'  => 'zoom',
												'heading'     => _x('Zoom Level', 'Admin Panel','businesslounge' ),
												'type'        => 'rt_number',
												'description' => _x('Zoom level. Works only with single map location. Enter a zoom level between 1 and 19','Admin Panel','businesslounge'),
												'value'       => 10,
												'save_always' => true
											),

											array(
												'param_name'  => 'bwcolor',
												'heading'     => _x('Black & White Map', 'Admin Panel','businesslounge' ),
												'type'        => 'checkbox', 
												'save_always' => true,
												'value' => array( _x( 'Make the map only black and white', 'Admin Panel','businesslounge' ) => 'yes' ),
											),


											array(
												'param_name'  => 'class',
												'heading'     => _x('Class', 'Admin Panel','businesslounge' ),
												'description' => _x('CSS Class Name', 'Admin Panel','businesslounge' ),
												'type'        => 'textfield',
											)

									)
	)
);
 


$params = array();

$params[] = array(
	'default'       => sprintf(_x('%1$sPlease note:%2$s Google Maps require an API key that provided by Google. Enter the key to the field inside the %1$sCustomize > General Options > Google Maps%2$s. If you have not created an API key yet, refer the online documentation of the theme to learn how to create one.', 'Admin Panel','businesslounge' ),"<strong>",'</strong>'),
	'param_name'  => 'rt_desc',
	'type'        => 'rt_vc_description'
);

$params[] = array(
	'param_name'  => 'title',
	'heading'     => _x('Location Title', 'Admin Panel','businesslounge' ),
	'type'        => 'textfield',
	'holder'      => 'span',
);

$params[] = array(
	'param_name'  => 'content',
	'heading'     => _x( 'Location Description', 'Admin Panel','businesslounge' ),
	'description' => '',
	'type'        => 'textarea'
);

$api_key = get_theme_mod(RT_THEMESLUG.'_google_api_key');

if(  ! empty( $api_key ) ){
	$params[] = array(
		'default'       => sprintf(_x('%sClick here%s to open the location finder to find Latitude and Longitude values easily.', 'Admin Panel','businesslounge' ),'<a class="open-rt-location-finder" href="#">','</a>'),
		'param_name'  => 'rt_desc',
		'type'        => 'rt_vc_description',
		'save_always' => false
	);
}

$params[] = array(
	'param_name'  => 'lat',
	'heading'     => _x('Latitude', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_number',
	'class'       => 'geo_selection',
	'edit_field_class' => 'vc_col-sm-12 vc_column wpb_el_type_textfield vc_shortcode-param rt_geo_selection'
);

$params[] = array(
	'param_name'  => 'lon',
	'heading'     => _x('Longitude', 'Admin Panel','businesslounge' ),
	'type'        => 'rt_number',
	'class'       => 'geo_selection',
	'edit_field_class' => 'vc_col-sm-12 vc_column wpb_el_type_textfield vc_shortcode-param rt_geo_selection'
); 

vc_map(
	array(
		'base'                    => 'location',
		'name'                    => _x( 'Google Map Location', 'Admin Panel','businesslounge' ),
		'icon'                    => 'rt_theme rt_location sub',
		'category'                => _x( 'Contents', 'Admin Panel','businesslounge' ),
		'description'             => _x( 'Adds a new location to the map', 'Admin Panel','businesslounge' ),
		'as_child'                => array( 'only' => 'google_maps' ),
		"show_settings_on_create" => true,
		'content_element'         => true,
		'params'                  => $params
	)
);		


?>