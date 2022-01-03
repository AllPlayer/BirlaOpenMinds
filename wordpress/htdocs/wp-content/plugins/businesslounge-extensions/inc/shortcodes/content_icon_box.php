<?php

if( ! function_exists("rt_content_icon_box") ){
	/**
	 * Content Box With Icon
	 * @param  array $atts
	 * @param  string $content
	 * @return html $output
	 */	
	function rt_content_icon_box( $atts, $content = null ) {

	//defaults
	extract(shortcode_atts(array(  
		"id"  => "", 
		"class" => "",
		"icon_name" => "",
		"icon_style" => "",
		"icon_position" => "left",//left right top
		"link" => "",
		"link_text" => "",
		"link_target" => "_self",
		"heading_size" => "h4",
		"heading" => "",	
		"heading_margin_top" => "",
		"heading_margin_bottom" => ""
	), $atts));
	

	//class
	$class .=' icon-content-box';

	//icon postion
	$class .=' icon-pos-'.$icon_position;

	//icon stlye
	$class .=' icon-'.$icon_style;

	//icon
	$icon = ! empty( $icon_name ) ? $icon_name : "";

	//link target
	$link_target = ! empty( $link_target ) ? $link_target : '_self';


	//icon output 
	$icon_output = $icon ? '<span class="'.$icon.'"></span>' : ""; 

	//icon output with link
	$icon_output = ! empty( $link ) ? '<a href="'.$link.'" title="'.$link_text.'" target="'.$link_target.'">'.$icon_output.'</a>' : $icon_output;

	//margins
	$css = $heading_margin_top != "" ? 'margin-top:'.rtframework_check_unit( $heading_margin_top ).'!important;': "";
	$css .= $heading_margin_bottom != "" ? 'margin-bottom:'.rtframework_check_unit( $heading_margin_bottom ).'!important;': "";
	$css = ! empty( $css ) ? ' style="'.$css.'"' : "";

	//heading
	$heading_output = ! empty( $heading ) ? sprintf('<%1$s class="heading"%3$s>%2$s</%1$s>', $heading_size, $heading, $css ) : "";	
	$heading_output = ! empty( $link ) && ! empty( $heading ) ? sprintf('
	<%1$s class="heading">
		<a href="%3$s" title="%4$s" target="%5$s">
			%2$s
		</a>
	</%1$s>', $heading_size, $heading, $link, sanitize_text_field($heading), $link_target ) : $heading_output ;	


	//text  
	$text = rt_visual_composer_content_fix(do_shortcode($content));	
 
	if( $icon_position == "top" ){ //centered paragraphs
		$changes = array ('<p>' => '<p class="aligncenter">');
		$text = strtr($text, $changes);
	}
 
	//link output
	$link_output = "";

	if ( ! empty( $link ) && ! empty( $link_text ) ) {
		if( $icon_position == "top" ){
			$link_output .= '<a class="read_more centered" href="'.$link.'" title="'.$link_text.'" target="'.$link_target.'">'.$link_text.'</a>';
		}else{
			$link_output .= '<a class="read_more" href="'.$link.'" title="'.$link_text.'" target="'.$link_target.'">'.$link_text.'</a>';
		}
	}

	//id attr
	$id = ! empty( $id ) ? 'id="'.sanitize_html_class($id).'"' : "";	 

	//class attr
	$class = ! empty( $class ) ? 'class="'.trim($class).'"' : "";	 


	//final output
	$output="";
	$output.='<article '.$id.' '.$class.'>';
	$output.= '<div class="icon-holder">'.$icon_output.'</div>';
	$output.= '<div class="text-holder">'.$heading_output.' '.$text.''.$link_output.'</div>';
	$output.='</article>'; 

	return $output;
	}
}
 
add_shortcode('content_icon_box', 'rt_content_icon_box');