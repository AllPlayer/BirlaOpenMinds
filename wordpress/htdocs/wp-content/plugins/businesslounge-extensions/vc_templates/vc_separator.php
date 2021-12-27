<?php

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

if( is_singular() ){

	extract(shortcode_atts(array(
		"id"            => '',
		"class"         => '',		
		"style"         => 'style-5',
		"margins"       => '', 
		"color"         => "",
		"border_width"  => "",
		"width"         => "",
		"height"        => "",
		"rt_class"      => "",
		"color_type"    => "",
	), $atts));

	$content = wpb_js_remove_wpautop($content,"true");

	//create rt_row shortcode
	$create_shortcode = '[rt_divider 
	id = "'.$id.'"
	class = "'.$class.'"
	style = "'.$style.'"
	margins = "'.$margins.'" 
	color = "'.$color.'"
	border_width = "'.$border_width.'"
	width = "'.$width.'"
	height = "'.$height.'"
	rt_class = "'.$rt_class.'"
	color_type = "'.$color_type.'"
	][/rt_divider]'; 

	//run
	echo do_shortcode($create_shortcode);

}else{
	/**
	 * Shortcode attributes
	 * @var $atts
	 * @var string $el_width
	 * @var string $style
	 * @var string $color
	 * @var string $border_width
	 * @var string $accent_color
	 * @var string $el_class
	 * @var string $align
	 * @var string $css
	 * @var string $css_animation
	 * Shortcode class
	 * @var $this WPBakeryShortCode_VC_Separator
	 */
	$el_width = $style = $color = $border_width = $accent_color = $el_class = $align = $css = $css_animation = '';
	$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
	extract( $atts );

	$class_to_filter = '';
	$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );
	$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

	$vc_text_separator = visual_composer()->getShortCode( 'vc_text_separator' );
	$atts['el_class'] = $css_class;
	$atts['layout'] = 'separator_no_text';
	if ( is_object( $vc_text_separator ) ) {
		echo $vc_text_separator->render( $atts );
	}	
}