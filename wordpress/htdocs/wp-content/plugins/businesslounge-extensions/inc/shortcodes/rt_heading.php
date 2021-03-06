<?php
if( ! function_exists("rt_heading_function") ){
	/**
	 * Heading Shortcode
	 *
	 * @param  array $atts
	 * @param  string $content
	 * @return html $heading_output
	 */
	function rt_heading_function( $atts, $content = null ) {

	//defaults
	extract(shortcode_atts(array(
		"id"               => '',
		"class"            => '',
		"style"            => '',
		"icon_name"        => '',
		"icon_size"        => '',
		"punchline"        => '',
		"size"             => 'h1',
		"font_size"        => '',
		"custom_font_size" => '',
		"max_font_size"    => '',
		"min_font_size"    => '',
		"font_color"       => '',
		"background_color" => '',
		"line_height"      => '',
		"letter_spacing"   => '',
		"font_color_type"  => '',
		"link"             => '',
		"link_open"        => '_self',
		"href_title"       => '',
		"margin_top"       => '',
		"margin_bottom"    => '',
		"margin_left"      => '',
		"margin_right"     => '',
		"padding_top"      => '',
		"padding_bottom"   => '',
		"padding_left"     => '',
		"padding_right"    => '',
		"font"             => '',
		"align"            => '',
		"mobile_align"     => '',
		"rt_class"         => ""
	), $atts));

	$css = $wrapper_css = $data = "";

	//id attr
	$id = ! empty( $id ) ? 'id="'.sanitize_html_class($id).'"' : "";

	//class
	$class_names = array();
	$class_names[] = $class;
	$class_names[] = 'rt-heading';
	$class_names[] = $style;

	//add class
	$class_names[] = ! empty( $punchline ) ? 'with_punchline' : "";

	//style 7 - centered
	$class_names[] = $style == "style-7" ? 'aligncenter' : "";

	//wrapper classs
	$wrapper_class = array();
	$wrapper_class[] = "rt-heading-wrapper";
	$wrapper_class[] = $style;

	//align
	if( empty( $style ) ){
		$wrapper_class[] = ! empty( $align ) ? 'text-'.$align : "";
		$wrapper_class[] = ! empty( $mobile_align ) ? 'mobile-text-'.$mobile_align : "";
	}

	//link target
	$link_open = ! empty( $link_open ) ? $link_open : "_self";	

	//custom font size
	$css .= ! empty( $font_size ) && $custom_font_size == "custom" ? "font-size:".rtframework_check_unit($font_size).";" : "";

	//responsive font size
	$data .= ! empty( $max_font_size ) && $custom_font_size == "responsive" ? ' data-maxfont-size="'.str_replace("px","",$max_font_size).'"' : "";
	$css .= ! empty( $max_font_size ) && $custom_font_size == "responsive" ? "font-size:".rtframework_check_unit($max_font_size).";" : "";
	$data .= ! empty( $min_font_size ) && $custom_font_size == "responsive" ? ' data-minfont-size="'.str_replace("px","",$min_font_size).'"' : "";

	//custom font color
	$css .= ! empty( $font_color ) ? "color:{$font_color}!important;" : "";

	//custom background color
	$css .= ! empty( $background_color ) ? "background-color:{$background_color}!important;" : "";

	//primary font color
	$class_names[] .= $font_color_type == "primary" ? 'primary-color' : "";

	//font fammily
	$class_names[] .= ! empty( $font ) ? $font : "";


	//custom line-height
	$css .= ! empty( $line_height ) ? "line-height:".rtframework_check_unit($line_height)."!important;" : "";

	//custom letter-spacing
	$css .= ! empty( $letter_spacing ) ? "letter-spacing:".rtframework_check_unit($letter_spacing)."!important;" : "";

	//margins
	$css .= $margin_top != "" ? 'margin-top:'.rtframework_check_unit( $margin_top ).'!important;': "";
	$css .= $margin_bottom != "" ? 'margin-bottom:'.rtframework_check_unit( $margin_bottom ).'!important;': "";
	$css .= $margin_left != "" ? 'margin-left:'.rtframework_check_unit( $margin_left ).'!important;': "";
	$css .= $margin_right != "" ? 'margin-right:'.rtframework_check_unit( $margin_right ).'!important;': "";

	//paddings
	$css .= $padding_top != "" ? 'padding-top:'.rtframework_check_unit( $padding_top ).'!important;': "";
	$css .= $padding_bottom != "" ? 'padding-bottom:'.rtframework_check_unit( $padding_bottom ).'!important;': "";
	$css .= $padding_left != "" ? 'padding-left:'.rtframework_check_unit( $padding_left ).'!important;': "";
	$css .= $padding_right != "" ? 'padding-right:'.rtframework_check_unit( $padding_right ).'!important;': "";


	//style output
	if( ! empty( $rt_class ) && ! rtframework_is_vcfe() ){
		//global inline css output

		$wrapper_class[] = $rt_class;

		$desktop = ! empty( $wrapper_css ) ?  '.'.$rt_class .'{'.$wrapper_css.'}' : "";
		$desktop .= ! empty( $css ) ?  '.'.$rt_class .' .rt-heading{'.$css.'}' : "";

		rtframework_inline_css( array( "desktop" => $desktop, "tablet" => "", "smartphone" => "" ) );

		$css = $wrapper_css = "";
	}else{
		$css = ! empty( $css ) ? ' style="'.$css.'"' : "";
		$wrapper_css = ! empty( $wrapper_css ) ? ' style="'.$wrapper_css.'"' : "";
	}


	//icon
	$icon_style = ! empty( $icon_size ) ? ' style="font-size:'.$icon_size.';line-height:'.$icon_size.';height:'.$icon_size.';"' : "";
	$icon_output = ! empty( $icon_name ) ? sprintf('<span class="%s heading_icon"%s></span>', $icon_name, $icon_style) : "";


	//hidden link output
	$link_start = ! empty( $link ) ? sprintf('<a href="%1$s" target="%2$s" title="%3$s">', $link, $link_open, $href_title) : "";
	$link_end = ! empty( $link ) ? "</a>" : "";

	//punchline
	$punchline_style = ! empty( $font_color ) ? ' style="color:'.$font_color.';"' : "";
	$punchline = ! empty( $punchline ) && ( $style == "" || $style == "style-1" || $style == "style-2" || $style == "style-4" || $style == "style-5" ) ? sprintf('<span class="punchline"'.$punchline_style.'>%s</span>', $punchline) : "";

	//content
	$content = do_shortcode($content);  

	//output
	$heading_output = sprintf(
					'<div class="%3$s"%12$s>
						%7$s%9$s<%1$s class="%2$s" %4$s%8$s%11$s>%5$s%6$s</%1$s>%10$s
					</div>',
					$size, implode(" ", array_filter($class_names) ), implode(" ", array_filter($wrapper_class) ), $id, $icon_output, $content, $punchline, $css, $link_start, $link_end, $data, $wrapper_css);

	return $heading_output;

	}
}

add_shortcode('rt_heading', 'rt_heading_function');
