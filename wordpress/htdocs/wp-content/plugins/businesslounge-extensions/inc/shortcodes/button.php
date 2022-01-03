<?php
if( ! function_exists("rt_shortcode_button") ){
	/**
	 * Buttons Shortcode
	 * 
	 * @param  array $atts
	 * @param  string $content
	 * @return html $button
	 */			
	function rt_shortcode_button( $atts, $content = null ) {		

	//defaults
	extract(shortcode_atts(array(  
		"id"              => '',
		"class"           => '',
		"button_size"     => 'small',
		"button_text"     => '',
		"button_link"     => '',
		"button_icon"     => '',
		"button_align"    => '',
		"link_open"       => '_self', 
		"nofollow"        => '',
		"button_style"    => 'default',
		"href_title"      => '',			
		"font"            => "",
		"font_size"       => "",
		"bg_color"        => "",
		"text_color"      => "",
		"padding_v"       => "",
		"padding_h"       => "",
		"border_size"     => "",
		"border_color"    => "",
		"border_radius"   => "",
		"h_bg_color"      => "",
		"h_text_color"    => "",
		"h_border_size"   => "",
		"h_border_color"  => "",
		"h_border_radius" => "",
		"margin_top"      => '',
		"margin_bottom"   => '',
		"margin_left"     => '',
		"margin_right"    => '',		
		"button_rounded"  => '',
		"button_arrow"    => '',
		"rt_class"        => '',
		"lightbox"        => '',
		"e_bg_color"      => '',
	), $atts));

	$button = $css = $h_css = $wrapper_class = ""; 

	$href_title = ! empty( $href_title ) ? $href_title : $button_text;

	//icon output 
	$icon_output = $button_icon ? '<span class="button-icon '.$button_icon.'"></span>' : ""; 


	if( $button_style == "custom" ){

		//custom font color
		$css .= ! empty( $text_color ) ? "color:{$text_color}!important;" : "";
		$h_css .= ! empty( $h_text_color ) ? "color:{$h_text_color} !important;" : "";

		//custom bg color
		if( empty( $e_bg_color ) ){
			$css .= ! empty( $bg_color ) ? "background-color:{$bg_color};" : "background-color:transparent;";
		}

		$h_css .= ! empty( $h_bg_color ) ? "background-color:{$h_bg_color} !important;" : $bg_color;

		//custom border color
		$css .= ! empty( $border_color ) ? "border-color:{$border_color}!important;" : "";
		$h_css .= ! empty( $h_border_color ) ? "border-color:{$h_border_color} !important;" : "";

		//custom border-radius
		$css .= $border_radius != "" ? "border-radius:".rtframework_check_unit($border_radius)."!important;" : "";
		$h_css .= $h_border_radius != "" ? "border-radius:".rtframework_check_unit($h_border_radius)." !important;" : "";

		//custom border-size
		$css .= $border_size != "" ? "border-width:".rtframework_check_unit($border_size)."!important;" : "";
		$h_css .= $h_border_size != "" ? "border-width:".rtframework_check_unit($h_border_size)." !important;" : "";

	}

	//custom font size
	$css .= $font_size != "" ? "font-size:".rtframework_check_unit($font_size)."!important;" : "";

	//custom padding	
	$css  .= $padding_v != "" ? 'padding-top:'.rtframework_check_unit($padding_v ).'!important;padding-bottom:'.rtframework_check_unit($padding_v ).'!important;': "";
	$css  .= $padding_h != "" ? 'padding-left:'.rtframework_check_unit($padding_h ).'!important;padding-right:'.rtframework_check_unit($padding_h ).'!important;': "";

	//margins
	$css .= $margin_top != "" ? 'margin-top:'.rtframework_check_unit( $margin_top ).'!important;': "";
	$css .= $margin_bottom != "" ? 'margin-bottom:'.rtframework_check_unit( $margin_bottom ).'!important;': "";
	$css .= $margin_left != "" ? 'margin-left:'.rtframework_check_unit( $margin_left ).'!important;': "";
	$css .= $margin_right != "" ? 'margin-right:'.rtframework_check_unit( $margin_right ).'!important;': "";	
	
	//font fammily	
	$class .= ! empty( $font ) ? ' '.$font : "";

	//classes
	$class .= " ".$button_style;
	$class .= " ".$button_size;

	//lightbox
	$class .= $lightbox ? " rt_lightbox" : "";

	//id attr
	$id_attr = ! empty( $id ) ? ' id="'.$id.'"' : "";

	//hero button
	$wrapper_class .= $button_size == "hero" ? " hero" : "";

	//arrow
	$wrapper_class .= ! empty( $button_arrow ) ? " arrow" : "";

	//rounded
	$wrapper_class .= ! empty( $button_rounded ) ? " rounded" : "";

	//button align
	$button_align = ! empty( $button_align ) && $button_size != "hero" ? " align".$button_align : "";

	//link target
	$link_open = ! empty( $link_open ) ? $link_open : "_self";

	//style output
	if( ! empty( $rt_class )  && ! rtframework_is_vcfe() ){
		//global inline css output	
		
		$class .= " ".$rt_class;

		$desktop = ! empty( $css ) ?  '.'.$rt_class .'{'.$css.'}' : "";
		$desktop .= ! empty( $h_css ) ?  '.'.$rt_class .':hover{'.$h_css.'}' : "";

		rtframework_inline_css( array( "desktop" => $desktop, "tablet" => "", "smartphone" => "" ) );

		$css=$h_css = "";

	}else{
		//style output
		$css = ! empty( $css ) ? ' style="'.$css.'"' : "";

		//hover style output
		$h_css = ! empty( $h_css ) ? ' data-hover-style="'.$h_css.'"' : "";
	}


	$button_text = ! empty( $button_text ) ? '<span>'.$button_text.'</span>' : "";

	//nofollow
	$nofollow = ! empty( $nofollow ) ? ' rel="nofollow"' : "";

	//createa button formats
	if( $button_style != "text" ){

		//button format
		$button_format = '<div class="button_wrapper %8$s"><a%1$s href="%2$s" target="%3$s" title="%4$s" class="button_ %5$s"%9$s%10$s><span>%6$s%7$s</span></a></div>';

		$button = sprintf($button_format, $id_attr, $button_link, $link_open, sanitize_text_field( $href_title ), $class, $icon_output, $button_text, $button_align.$wrapper_class,$css.$h_css,$nofollow);
	}else{

		//flat text format
		$flat_text_format = '<a%1$s href="%2$s" target="%3$s" title="%4$s" class="%5$s"%7$s%8$s>%6$s</a>';

		$button = sprintf($flat_text_format, $id_attr, $button_link, $link_open, sanitize_text_field( $href_title ), trim("read_more ".$class.$button_align), $button_text,$css,$nofollow);
	}


	return $button;
	}
}

add_shortcode('button', 'rt_shortcode_button');	