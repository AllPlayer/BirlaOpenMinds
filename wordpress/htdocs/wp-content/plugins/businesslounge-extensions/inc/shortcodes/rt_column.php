<?php

if( ! function_exists("rt_column") ){

	/**
	 * rt_column shortcode
	 * 
	 * creates a holder for contents with several background effects and layouts
	 * 
	 * @param  [array] $atts    
	 * @param  [string] $content  
	 */
	function rt_column( $atts, $content = null ) { 

	extract(shortcode_atts(array(
	'width'                      => '1/1',
	'offset'                     => '',	
	'id'                         => '',	
	'class'                      => '',	
	'rt_class'                   => '',
	'rt_font_color'              => '',
	'rt_bg_holder'               => '',
	'rt_bg_color'                => '',
	'rt_bg_image'                => '',
	'rt_bg_effect'               => '',
	'rt_bg_parallax_effect'      => '1',    
	'rt_bg_parallax_speed'       => '1',
	'rt_bg_image_repeat'         => '',
	'rt_bg_size'                 => '',
	'rt_bg_attachment'           => '',
	'rt_bg_position'             => '',
	'rt_col_paddings'            => '',
	'rt_padding_top'             => '',
	'rt_padding_bottom'          => '',
	'rt_padding_left'            => '',
	'rt_padding_right'           => '',
	'rt_wrp_col_paddings'        => '',
	'rt_wrp_padding_top'         => '',
	'rt_wrp_padding_bottom'      => '',
	'rt_wrp_padding_left'        => '',
	'rt_wrp_padding_right'       => '',			
	'rt_margin_top'              => '',
	'rt_margin_bottom'           => '',			
	'rt_border_top'              => '',
	'rt_border_bottom'           => '',
	'rt_border_left'             => '',
	'rt_border_right'            => '',	
	'rt_border_top_mobile'       => '',
	'rt_border_bottom_mobile'    => '',
	'rt_border_left_mobile'      => '',
	'rt_border_right_mobile'     => '',	
	'rt_color_set'               => '',
	'vc_base'                    => '',	
	'rt_column_shadow'           => '',
	'rt_column_boxed'            => '',
	'rt_bg_overlay_color'        => '',
	'rt_min_height'              => '',
	'stretch_background'         => '', 	
	'text_align'                 => '',
	'tablet_align'               => '',
	'mobile_align'               => '',	
	'rt_margins'                 => '',
	'rt_paddings'                => '',
	'rt_wrapper_paddings'        => '',
	'rt_tablet_margins'          => '',
	'rt_tablet_paddings'         => '',
	'rt_tablet_wrapper_paddings' => '',
	'rt_sp_margins'              => '',
	'rt_sp_paddings'             => '',
	'rt_sp_wrapper_paddings'     => '',
	), $atts));


	$output = $attr = $bg_style = "" ;
	$style = $col_inner_style = $tablet_col_inner_style = $sp_col_inner_style = $wrapper_style = $tablet_wrapper_style = $sp_wrapper_style = $tablet_style = $sp_style = "";

	//id attr
	$id = ! empty( $id ) ? 'id="'.sanitize_html_class($id).'"' : "";

	//row style
	$class .= ! empty( $rt_color_set ) ? " ".$rt_color_set : "";

	$class .= ! empty( $rt_class ) ? " ". $rt_class : "";


	/*
	 * Column Inner Paddings 
	 */
		//desktop
		$rt_paddings = strpos( $rt_paddings, "," ) !== false ? explode(",", $rt_paddings) : "";

		if(is_array( $rt_paddings ) ){
			$col_inner_style .= $rt_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_paddings[0] ).'!important;': "";
			$col_inner_style .= $rt_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_paddings[1] ).'!important;': "";
			$col_inner_style .= $rt_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_paddings[2] ).'!important;': "";
			$col_inner_style .= $rt_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_paddings[3] ).'!important;': "";	
		}

		//tablet
		$rt_tablet_paddings = strpos( $rt_tablet_paddings, "," ) !== false ? explode(",", $rt_tablet_paddings) : "";

		if(is_array( $rt_tablet_paddings ) ){
			$tablet_col_inner_style .= $rt_tablet_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_tablet_paddings[0] ).'!important;': "";
			$tablet_col_inner_style .= $rt_tablet_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_tablet_paddings[1] ).'!important;': "";
			$tablet_col_inner_style .= $rt_tablet_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_tablet_paddings[2] ).'!important;': "";
			$tablet_col_inner_style .= $rt_tablet_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_tablet_paddings[3] ).'!important;': "";	
		}

		//smartphone
		$rt_sp_paddings = strpos( $rt_sp_paddings, "," ) !== false ? explode(",", $rt_sp_paddings) : "";

		if(is_array( $rt_sp_paddings ) ){
			$sp_col_inner_style .= $rt_sp_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_sp_paddings[0] ).'!important;': "";
			$sp_col_inner_style .= $rt_sp_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_sp_paddings[1] ).'!important;': "";
			$sp_col_inner_style .= $rt_sp_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_sp_paddings[2] ).'!important;': "";
			$sp_col_inner_style .= $rt_sp_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_sp_paddings[3] ).'!important;': "";	
		}

	/*
	 * Column Wrapper Paddings 
	 */

		//desktop
		$rt_wrapper_paddings = strpos( $rt_wrapper_paddings, "," ) !== false ? explode(",", $rt_wrapper_paddings) : "";

		if(is_array( $rt_wrapper_paddings ) ){
			$wrapper_style .= $rt_wrapper_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_wrapper_paddings[0] ).'!important;': "";
			$wrapper_style .= $rt_wrapper_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_wrapper_paddings[1] ).'!important;': "";
			$wrapper_style .= $rt_wrapper_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_wrapper_paddings[2] ).'!important;': "";
			$wrapper_style .= $rt_wrapper_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_wrapper_paddings[3] ).'!important;': "";	
		}

		//tablet
		$rt_tablet_wrapper_paddings = strpos( $rt_tablet_wrapper_paddings, "," ) !== false ? explode(",", $rt_tablet_wrapper_paddings) : "";

		if(is_array( $rt_tablet_wrapper_paddings ) ){
			$tablet_wrapper_style .= $rt_tablet_wrapper_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_tablet_wrapper_paddings[0] ).'!important;': "";
			$tablet_wrapper_style .= $rt_tablet_wrapper_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_tablet_wrapper_paddings[1] ).'!important;': "";
			$tablet_wrapper_style .= $rt_tablet_wrapper_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_tablet_wrapper_paddings[2] ).'!important;': "";
			$tablet_wrapper_style .= $rt_tablet_wrapper_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_tablet_wrapper_paddings[3] ).'!important;': "";	
		}

		//smartphone
		$rt_sp_wrapper_paddings = strpos( $rt_sp_wrapper_paddings, "," ) !== false ? explode(",", $rt_sp_wrapper_paddings) : "";

		if(is_array( $rt_sp_wrapper_paddings ) ){
			$sp_wrapper_style .= $rt_sp_wrapper_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_sp_wrapper_paddings[0] ).'!important;': "";
			$sp_wrapper_style .= $rt_sp_wrapper_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_sp_wrapper_paddings[1] ).'!important;': "";
			$sp_wrapper_style .= $rt_sp_wrapper_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_sp_wrapper_paddings[2] ).'!important;': "";
			$sp_wrapper_style .= $rt_sp_wrapper_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_sp_wrapper_paddings[3] ).'!important;': "";	
		}


	/*
	 * Column Margins
	 */

		//desktop
		$rt_margins = strpos( $rt_margins, "," ) !== false ? explode(",", $rt_margins) : "";

		if(is_array( $rt_margins ) ){
			$style .= $rt_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_margins[0] ).'!important;': "";
			$style .= $rt_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_margins[1] ).'!important;': ""; 

			$class  .= ! empty( $rt_margins[0] ) || ! empty( $rt_margins[1] ) ? " has-custom-margin": "";
			$class  .= intval( $rt_margins[0]) < 0  ? " has-nmargin": "";//nagative margin
		}

		//tablet
		$rt_tablet_margins = strpos( $rt_tablet_margins, "," ) !== false ? explode(",", $rt_tablet_margins) : "";

		if(is_array( $rt_tablet_margins ) ){
			$tablet_style .= $rt_tablet_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_tablet_margins[0] ).'!important;': "";
			$tablet_style .= $rt_tablet_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_tablet_margins[1] ).'!important;': "";  
		}

		//smartphone
		$rt_sp_margins = strpos( $rt_sp_margins, "," ) !== false ? explode(",", $rt_sp_margins) : "";

		if(is_array( $rt_sp_margins ) ){
			$sp_style .= $rt_sp_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_sp_margins[0] ).'!important;': "";
			$sp_style .= $rt_sp_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_sp_margins[1] ).'!important;': "";  
		}
 
	
	//column borders 
	$class  .= ! empty( $rt_border_top ) ? ' border-top' : '';
	$class  .= ! empty( $rt_border_bottom ) ? ' border-bottom' : '';
	$class  .= ! empty( $rt_border_left ) ? ' border-left' : '';
	$class  .= ! empty( $rt_border_right ) ? ' border-right' : '';

	//aligns
 	$class .= ! empty( $text_align ) ? ' text-'.$text_align : "";	
	$class .= ! empty( $tablet_align ) ? ' tablet-text-'.$tablet_align : "";	
	$class .= ! empty( $mobile_align ) ? ' mobile-text-'.$mobile_align : "";	

	//column borders mobile
	$class  .= ! empty( $rt_border_top_mobile ) ? ' mobile-border-top' : '';
	$class  .= ! empty( $rt_border_bottom_mobile ) ? ' mobile-border-bottom' : '';
	$class  .= ! empty( $rt_border_left_mobile ) ? ' mobile-border-left' : '';
	$class  .= ! empty( $rt_border_right_mobile ) ? ' mobile-border-right' : '';

	//stretch background
	$class  .= ! empty( $stretch_background ) ? ' stretch-background' : ''; 

	//min height
	$min_height_style = ! empty( $rt_min_height ) != "" ? 'min-height:'.rtframework_check_unit($rt_min_height).'!important;': ""; 
	$class  .= ! empty( $rt_min_height ) ? " custom-min-height" : "";
	$attr   .= ! empty( $rt_min_height ) ? ' data-custom-min-height="'.intval($rt_min_height).'"' : "";

	//background settings
	if( ! empty( $rt_bg_image ) ){
		$bg_image_url =  wp_get_attachment_image_src($rt_bg_image,"full"); 
		$bg_image_url = is_array( $bg_image_url ) ? $bg_image_url[0] : "";	
	 
		//background image
		$bg_style  .= ! empty( $bg_image_url ) ? 'background-image: url('.$bg_image_url.');': "";

		//background repeat
		$bg_style  .= ! empty( $rt_bg_image_repeat ) ? 'background-repeat: '.$rt_bg_image_repeat.'!important;': "";

		//background size
		$bg_style  .= ! empty( $rt_bg_size ) ? 'background-size: '.$rt_bg_size.'!important;': "";

		//background attachment
		$bg_style  .= ! empty( $rt_bg_attachment ) ? 'background-attachment: '.$rt_bg_attachment.'!important;': "";	

		//background position
		$bg_style  .= ! empty( $rt_bg_position ) ? 'background-position: '.$rt_bg_position.'!important;': "";		

		//preload the bg image
		$class  .= " has-bg-image";
	}


	/**
	 * Parallax Background
	 */
	$parallax = "";
	if( $rt_bg_effect == "parallax" && ! empty( $bg_image_url )){

		//parallax settings
		$parallax_settings = array(
					"1"=> array( "effect" => "horizontal", "direction" => -1),
					"2"=> array( "effect" => "horizontal", "direction" => 1),
					"3"=> array( "effect" => "vertical", "direction" => -1),
					"4"=> array( "effect" => "vertical", "direction" => 1),
					);		

		$parallax = ! empty( $bg_image_url ) && $rt_bg_effect == "parallax" ? '<div class="rt-parallax-background has-bg-image" data-rt-parallax-direction="'. $parallax_settings[$rt_bg_parallax_effect]["direction"] .'" data-rt-parallax-effect="'.$parallax_settings[$rt_bg_parallax_effect]["effect"].'" data-rt-parallax-speed="'.$rt_bg_parallax_speed.'" style="'.$bg_style.'"></div>':"";		

		$bg_style     = "";
		$style        .= "position:relative;overflow:hidden;";
		$class        .= " has-custom-bg";
		$rt_bg_holder == "wrapper";
	}


	//background color
	$rt_bg_color =  $rt_bg_color == "rgba(0,0,0,0.01)" ? "transparent" : $rt_bg_color; //fix bg color VC doesn't support full transparent RGBA colors
	$bg_style  .= ! empty( $rt_bg_color ) ? 'background-color: '.$rt_bg_color.'!important;': "";

	//is background customized
	$class  .= ! empty( $rt_bg_color ) || ! empty( $rt_bg_image ) ? " custom_bg": "";

	//shadows
	$class  .= ! empty( $rt_column_shadow ) || ! empty( $rt_column_shadow ) ? " shadow": "";

	//boxed
	$class  .= ! empty( $rt_column_boxed ) || ! empty( $rt_column_boxed ) ? " boxed-column": "";	

	//font color
	$col_inner_style  .= ! empty( $rt_font_color ) ? 'color: '.$rt_font_color.'!important;': "";



	//background for
	if( $rt_bg_holder == "wrapper" ){
		$wrapper_style .= $bg_style.$min_height_style;
	}else{
		$col_inner_style .= $bg_style.$min_height_style;
	}


	/**
	 * BG Overlay
	 */

	$overlay = "";
	if( ! empty( $rt_bg_overlay_color ) ){

		//color overlay layer
		$overlay = '<div class="content-column-overlay" style="background-color:'. $rt_bg_overlay_color .'"></div>'."\n";

		$class .= " has-bg-overlay";
	}


	//visual composer active?
	if( empty( $vc_base ) ){
		$class .= " col col-xs-12 ".rtframework_column_class($width)." ".str_replace("vc_", "", $offset)."";	
		$col_inner = '<div class="rt-column-inner">';
		$col_wrapper = '<div class="rt-wrapper">';
		$rt_class =  $rt_class.".col"; //add wpb_column to overwrite 
	}else{
		$col_inner = '<div class="vc_column-inner rt-column-inner">';
		$col_wrapper = '<div class="wpb_wrapper rt-wrapper">';
		$rt_class =  $rt_class.".wpb_column"; //add wpb_column to overwrite 
	}

	$class .= " rt-column-container";

	$output .= "\n\t".'<div class="'.trim($class).'"'.$attr.'>';
	$output .= $parallax.$overlay;
	$output .= "\n\t". $col_inner;
	$output .= "\n\t\t".  $col_wrapper;
	$output .= "\n\t\t\t".do_shortcode($content);
	$output .= "\n\t\t".'</div>';
	$output .= "\n\t".'</div>';
	$output .= "\n\t".'</div>'."\n";


	//inline css output	
	$desktop = ! empty( $style ) ?  '.'.$rt_class .'{'.$style.'}' : "";
	$desktop .= ! empty( $col_inner_style ) ?  '.'.$rt_class.' > .rt-column-inner{'.$col_inner_style.'}' : "";
	$desktop .= ! empty( $wrapper_style ) ?  '.'.$rt_class.' > .rt-column-inner > .rt-wrapper{'.$wrapper_style.'}' : "";

	$tablet = ! empty( $tablet_style ) ?  '.'.$rt_class .'{'.$tablet_style.'}' : "";
	$tablet .= ! empty( $tablet_col_inner_style ) ?  '.'.$rt_class.' > .rt-column-inner{'.$tablet_col_inner_style.'}' : "";
	$tablet .= ! empty( $tablet_wrapper_style ) ?  '.'.$rt_class.' > .rt-column-inner > .rt-wrapper{'.$tablet_wrapper_style.'}' : "";

	$smartphone = ! empty( $sp_style ) ?  '.'.$rt_class .'{'.$sp_style.'}' : "";
	$smartphone .= ! empty( $sp_col_inner_style ) ?  '.'.$rt_class.' > .rt-column-inner{'.$sp_col_inner_style.'}' : "";
	$smartphone .= ! empty( $sp_wrapper_style ) ?  '.'.$rt_class.' > .rt-column-inner > .rt-wrapper{'.$sp_wrapper_style.'}' : "";	

	rtframework_inline_css( array( "desktop" => $desktop, "tablet" => $tablet, "smartphone" => $smartphone ) );

	$output = apply_filters( "rtframework_shortcode_output", $output );
	
	return $output;
 

	}

}
add_shortcode('rt_column', 'rt_column'); 
add_shortcode('rt_col', 'rt_column');

if ( ! class_exists( "Vc_Manager" ) ) {
	add_shortcode('vc_column', 'rt_column'); 
	add_shortcode('vc_column_inner', 'rt_column'); 
}