<?php
if( ! function_exists("rt_row") ){

	/**
	 * rt_row shortcode
	 * 
	 * creates a holder for contents with several background effects and layouts
	 * 
	 * @param  [array] $atts    
	 * @param  [string] $content  
	 */
	function rt_row( $atts, $content = null, $tag = "" ) { 

	extract(shortcode_atts(array(
		'rt_row_background_width' => '',
		'rt_row_content_width' => '', 
		'rt_row_style' => '',
		'rt_bg_color' => '',
		'rt_transparent_bg' => '',
		'rt_bg_image' => '',
		'rt_bg_images' => '',
		'rt_bg_effect' => '',
		'rt_bg_parallax_effect' => '1',    
		'rt_bg_parallax_speed' => '1',
		'rt_bg_image_repeat' => '',
		'rt_bg_position' => '',
		'rt_bg_size' => '',
		'rt_bg_attachment' => '',
		'rt_column_gaps' => '',   
		
		'rt_paddings' => '',
		'rt_margins' => '',
		'rt_content_margins' => '',
		'rt_tablet_paddings' => '',
		'rt_tablet_margins' => '',
		'rt_tablet_content_margins' => '',
		'rt_sp_paddings' => '',
		'rt_sp_margins' => '',
		'rt_sp_content_margins' => '',

		'rt_column_view' => "",  
		'rt_overlap' => "",   
		'rt_row_borders' => "",
		'rt_border_size' => '',
		'rt_border_color' => '',	
		'rt_row_border_width' => '',
		'rt_row_shadows' => "",
		'el_class' => '',
		'rt_class' => '',
		'vc_base' => '',
		'class' => '',
		'id' => '',
		'rt_row_height' => '',
		'rt_min_row_height' => '',
		'rt_holder_placement' => '',
		'rt_column_placement' => '',
		'rt_bg_overlay_color' => '',
		'rt_bg_video_mp4' => '',
		'rt_bg_video_webm' => '',		
		'rt_bg_video_youtube' => '',
		'rt_bg_layer' => '',
		'rt_bg_custom_width' => '',
		'rt_bg_custom_height' => '',
		'rt_bg_shape' => '',
		'rt_layer_color' => '',
		'rt_bg_v_align' => '',
		'rt_bg_h_align' => '',
		'disable_element'=>'',
		'rt_col_anim' => ''
	), $atts));


	if( $disable_element == "yes" ){
		return false;
	}


	$style = $bg_style = $output = $wrapper_style = $wrapper_class = $attr = $tablet_wrapper_css = $smartphone_wrapper_css  = $tablet_css = $smartphone_css  = "";

	//image id attr
	$id = ! empty( $id ) ? 'id="'.sanitize_html_class($id).'"' : "";

	//el_class
	$class .= ! empty( $el_class ) ? " ".$el_class : "";	

	//row style
	$class .= ! empty( $rt_row_style ) ? " ".$rt_row_style : "";	

	//row background width
	$class .= ! empty( $rt_row_background_width ) ? " ".$rt_row_background_width : "";

	//border grid
	$class .= $rt_column_view == "grid" ? " border_grid fixed_heights rt-flex-wrapper" : "";
 
	//equal heights
	$class .= $rt_column_view == "equal_heights" ? " fixed_heights rt-flex-wrapper" : "";

	//overlap
	$class .= ! empty( $rt_overlap ) && $rt_overlap == "true" ? " overlap" : "";

	//column aniimations
	$class .= ! empty( $rt_col_anim ) && $rt_col_anim == "true" ? " animate-cols" : "";

	/**
	 * Full | Min Height Row
	 */

	if ( ! empty( $rt_row_height ) ) {		
		$class .= ' rt-flex-wrapper';		

		//row full height
		if( $rt_row_height == "full_height" ){
			$class .= ' full-height-row';		
		}

		//row min height
		if( $rt_row_height == "min_height" && ! empty( $rt_min_row_height ) ){
			$class .= ' min-height-row';		
			$style .= 'min-height:'.rtframework_check_unit( $rt_min_row_height ).'!important;';
		}

		//holder placement
		$rt_holder_placement = empty( $rt_holder_placement ) ? "center" : $rt_holder_placement;

		if( $rt_holder_placement != "top" ){
			$class .= ' align-columns';			
			$class .= ' column-align-' . $rt_holder_placement;					
		}

	}
	
	/**
	 * Column content vertical aligments
	 */
	if ( ! empty( $rt_column_placement ) && $rt_column_placement != "top"  ) { 
		$class .= ' rt-flex-wrapper';		
		$wrapper_class .= ' align-contents content-align-' . $rt_column_placement;
	}


	/**
	 * Column gaps
	 */
	if ( ! empty( $rt_column_gaps ) ) { 
		$class .= ' rt-column-gaps';		
	}


	/*
	*	Background options  
	*/
	//background image
	$bg_image_url = "";

	if( $rt_bg_image ){
		$bg_image_url = rtframework_get_attachment_image_src($rt_bg_image); 		
	}


	/*
	 * Paddings 
	 */

		//desktop
		$rt_paddings = strpos( $rt_paddings, "," ) !== false ? explode(",", $rt_paddings) : "";

		if(is_array( $rt_paddings ) ){
			$wrapper_style .= $rt_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_paddings[0] ).'!important;': "";
			$wrapper_style .= $rt_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_paddings[1] ).'!important;': "";
			$wrapper_style .= $rt_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_paddings[2] ).'!important;': "";
			$wrapper_style .= $rt_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_paddings[3] ).'!important;': "";	
		}

		//tablet
		$rt_tablet_paddings = strpos( $rt_tablet_paddings, "," ) !== false ? explode(",", $rt_tablet_paddings) : "";

		if(is_array( $rt_tablet_paddings )){
			$tablet_wrapper_css .= $rt_tablet_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_tablet_paddings[0] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_tablet_paddings[1] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_tablet_paddings[2] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_tablet_paddings[3] ).'!important;': "";	
		}

		//smartphone
		$rt_sp_paddings = strpos( $rt_sp_paddings, "," ) !== false ? explode(",", $rt_sp_paddings) : "";

		if(is_array( $rt_sp_paddings )){
			$smartphone_wrapper_css .= $rt_sp_paddings[0] != "" ? 'padding-top:'.rtframework_check_unit( $rt_sp_paddings[0] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_paddings[1] != "" ? 'padding-bottom:'.rtframework_check_unit( $rt_sp_paddings[1] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_paddings[2] != "" ? 'padding-left:'.rtframework_check_unit( $rt_sp_paddings[2] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_paddings[3] != "" ? 'padding-right:'.rtframework_check_unit( $rt_sp_paddings[3] ).'!important;': "";	
		}


	/*
	 * Row Margins 
	 */

		//desktop
		$rt_margins = strpos( $rt_margins, "," ) !== false ? explode(",", $rt_margins) : "";

		if(is_array( $rt_margins ) ){
			$style .= $rt_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_margins[0] ).'!important;': "";
			$style .= $rt_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_margins[1] ).'!important;': "";
			$style .= $rt_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_margins[2] ).'!important;': "";
			$style .= $rt_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_margins[3] ).'!important;': "";	

			$class  .= intval( $rt_margins[0] ) < 0  ? " has-nmargin": "";//nagative margin

		}

		//tablet
		$rt_tablet_margins = strpos( $rt_tablet_margins, "," ) !== false ? explode(",", $rt_tablet_margins) : "";

		if(is_array( $rt_tablet_margins )){
			$tablet_css .= $rt_tablet_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_tablet_margins[0] ).'!important;': "";
			$tablet_css .= $rt_tablet_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_tablet_margins[1] ).'!important;': "";
			$tablet_css .= $rt_tablet_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_tablet_margins[2] ).'!important;': "";
			$tablet_css .= $rt_tablet_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_tablet_margins[3] ).'!important;': "";	
		}

		//smartphone
		$rt_sp_margins = strpos( $rt_sp_margins, "," ) !== false ? explode(",", $rt_sp_margins) : "";

		if(is_array( $rt_sp_margins )){
			$smartphone_css .= $rt_sp_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_sp_margins[0] ).'!important;': "";
			$smartphone_css .= $rt_sp_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_sp_margins[1] ).'!important;': "";
			$smartphone_css .= $rt_sp_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_sp_margins[2] ).'!important;': "";
			$smartphone_css .= $rt_sp_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_sp_margins[3] ).'!important;': "";	
		}


	/*
	 * Row Wrapper Margins 
	 */

		//desktop
		$rt_content_margins = strpos( $rt_content_margins, "," ) !== false ? explode(",", $rt_content_margins) : "";

		if(is_array( $rt_content_margins ) ){
			$wrapper_style .= $rt_content_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_content_margins[0] ).'!important;': "";
			$wrapper_style .= $rt_content_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_content_margins[1] ).'!important;': "";
			$wrapper_style .= $rt_content_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_content_margins[2] ).'!important;': "";
			$wrapper_style .= $rt_content_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_content_margins[3] ).'!important;': "";	

			$class  .= intval( $rt_content_margins[0] ) < 0  ? " has-nmargin": "";//nagative margin

		}

		//tablet
		$rt_tablet_content_margins = strpos( $rt_tablet_content_margins, "," ) !== false ? explode(",", $rt_tablet_content_margins) : "";

		if(is_array( $rt_tablet_content_margins )){
			$tablet_wrapper_css .= $rt_tablet_content_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_tablet_content_margins[0] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_content_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_tablet_content_margins[1] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_content_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_tablet_content_margins[2] ).'!important;': "";
			$tablet_wrapper_css .= $rt_tablet_content_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_tablet_content_margins[3] ).'!important;': "";	
		}

		//smartphone
		$rt_sp_content_margins = strpos( $rt_sp_content_margins, "," ) !== false ? explode(",", $rt_sp_content_margins) : "";

		if(is_array( $rt_sp_content_margins )){
			$smartphone_wrapper_css .= $rt_sp_content_margins[0] != "" ? 'margin-top:'.rtframework_check_unit( $rt_sp_content_margins[0] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_content_margins[1] != "" ? 'margin-bottom:'.rtframework_check_unit( $rt_sp_content_margins[1] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_content_margins[2] != "" ? 'margin-left:'.rtframework_check_unit( $rt_sp_content_margins[2] ).'!important;': "";
			$smartphone_wrapper_css .= $rt_sp_content_margins[3] != "" ? 'margin-right:'.rtframework_check_unit( $rt_sp_content_margins[3] ).'!important;': "";	
		}


	/**
	 * Borders
	 */
	$rt_row_borders = ! empty( $rt_row_borders ) ? explode(",", $rt_row_borders) : array();

	foreach ($rt_row_borders as $v) {
		
		if($rt_row_border_width != "default" ){ 
			$class .= " border-".$v;
			$style .= $rt_border_size != "" ? 'border-'.$v.'-width:'. rtframework_check_unit($rt_border_size) .'!important;': "";	
		}else{
			$wrapper_class .= " border-".$v;
			$wrapper_style .= $rt_border_size != "" ? 'border-'.$v.'-width:'. rtframework_check_unit($rt_border_size) .'!important;': "";	
		}		
	}	

	if( $rt_row_border_width != "default" ){ 
		$style .= $rt_border_color != "" ? 'border-color:'. $rt_border_color .'!important;': "";	
	}else{
		$wrapper_style .= $rt_border_color != "" ? 'border-color:'. $rt_border_color .'!important;': "";	
	}

	/**
	 * Shadows
	 */
	$rt_row_shadows = ! empty( $rt_row_shadows ) ? explode(",", $rt_row_shadows) : array();

	foreach ($rt_row_shadows as $c) {
		$class .= " shadow-".$c;
	}	

	//parallax settings 
	$parallax = "";
	

	/**
	 * classic bg values
	 */
	
	if( ! empty( $bg_image_url ) ){
		//background image
		$bg_style  .= 'background-image: url('.$bg_image_url.');';
		
		//background repeat
		$bg_style  .= ! empty( $rt_bg_image_repeat ) ? 'background-repeat: '.$rt_bg_image_repeat.'!important;': "";

		//background size
		$bg_style  .= ! empty( $rt_bg_size ) ? 'background-size: '.$rt_bg_size.'!important;': "";

		//background attachment
		$rt_bg_attachment = $rt_bg_effect != "parallax" ? $rt_bg_attachment : "";
		$bg_style  .= ! empty( $rt_bg_attachment ) ? 'background-attachment: '.$rt_bg_attachment.'!important;': "";

		//background position 
		$bg_style  .= ! empty( $rt_bg_position ) ? 'background-position: '.$rt_bg_position.'!important;': "";		
	}	

	//transparent background 
	$class .= $rt_transparent_bg == "true" ? " transparent-bg" : "";

	/**
	 * Parallax Background
	 */
	if( $rt_bg_effect == "parallax" && ! empty( $bg_image_url ) && empty( $rt_bg_video_mp4 ) ){

		//parallax settings
		$parallax_settings = array(
					"1"=> array( "effect" => "horizontal", "direction" => -1),
					"2"=> array( "effect" => "horizontal", "direction" => 1),
					"3"=> array( "effect" => "vertical", "direction" => -1),
					"4"=> array( "effect" => "vertical", "direction" => 1),
					);		

		$parallax = ! empty( $bg_image_url ) && $rt_bg_effect == "parallax" ? '<div class="rt-parallax-background has-bg-image" data-rt-parallax-direction="'. $parallax_settings[$rt_bg_parallax_effect]["direction"] .'" data-rt-parallax-effect="'.$parallax_settings[$rt_bg_parallax_effect]["effect"].'" data-rt-parallax-speed="'.$rt_bg_parallax_speed.'" style="'.$bg_style.'"></div>':"";		

		$bg_style = "";
		$style .= "position:relative;overflow:hidden;";
		$class .= " has-custom-bg";
	}

	//background color	
	$bg_style  .= ! empty( $rt_bg_color ) ? 'background-color: '.$rt_bg_color.'!important;': "";
	
	/**
	 * Ken Burn Slider
	 */
	$background_slider = "";
	if( $rt_bg_effect == "slider" && ! empty( $rt_bg_images ) && empty( $rt_bg_video_mp4 ) ){

		//get image urls
		$bg_slider_img_urls = array();
		foreach (explode(',', $rt_bg_images) as $bg_slider_img_id ) {
			$bg_slider_img_urls[] = rtframework_get_attachment_image_src($bg_slider_img_id); 		
		}

		$background_slider = '<div class="rt-background-slider has-bg-image" data-timeout="'.apply_filters("businesslounge-bgslider-timeout", 10 ).'" data-imgs="'.implode(",", $bg_slider_img_urls).'" style="background-image: url('.$bg_slider_img_urls[0].')"></div>';
		$class .= " has-custom-bg";
	}


	/**
	 * SVG Backgrounds
	 */
	$svg_background = "";
	if( $rt_bg_layer == "shape" ){


		//svg's
		$svg_array = array(
						"curv" => array(
									"top" => '<svg class="%1$s" xmlns="http://www.w3.org/2000/svg"x="0px" y="0px" viewBox="0 0 1000 120" enable-background="new 0 0 1000 120" xml:space="preserve" preserveAspectRatio="xMinYMin">
													<path fill="%2$s" stroke="0" stroke-miterlimit="0" d="M1120.185-20.087C939.412,160.686,90.013,159.231-92.12-22.901 L1120.185-20.087z"></path>
													</svg>',
									"bottom" => '<svg class="%1$s" width="1000" height="120" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 120" enable-background="new 0 0 1000 120" xml:space="preserve" preserveAspectRatio="xMinYMin">
												<path fill="%2$s" stroke="0" stroke-miterlimit="0" d="M-92.12,135.087C88.652-45.686,938.051-44.23,1120.184,137.901 L-92.12,135.087z"></path>
												</svg>'								
									),


						"cross-left" => array(
									"top" => '<svg class="%1$s" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 180" enable-background="new 0 0 1000 180" xml:space="preserve" preserveAspectRatio="xMinYMin">
												<polygon fill="%2$s" stroke="0" stroke-miterlimit="10" points="-80,-80 -80, 80 1040,180 1080, 0 "/>
												</svg>',
									"bottom" => '<svg class="%1$s" width="1000" height="180" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 180" enable-background="new 0 0 1000 180" xml:space="preserve" preserveAspectRatio="xMinYMin">
													<polygon fill="%2$s" stroke="0" stroke-miterlimit="10" points="0,0 0, 180 1080 , 180 1080, 80"/>
													</svg>'								
									),


						"cross-right" => array(
									"top" => '<svg class="%1$s" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  viewBox="0 0 1000 180" enable-background="new 0 0 1000 180" xml:space="preserve" preserveAspectRatio="xMinYMin">
												<polygon fill="%2$s" stroke="0" stroke-miterlimit="10" points="0, 180 1080, 80 1040, -80 -80, -80"/>
												</svg>',
									"bottom" => '<svg class="%1$s" width="1000" height="180" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1000 180" enable-background="new 0 0 1000 180" xml:space="preserve" preserveAspectRatio="xMinYMin">
													<polygon fill="%2$s" stroke="0" stroke-miterlimit="10" points="-80,80 -80, 180 1080 , 180 1080, 0"/>
													</svg>'								
									)
 
		);


  
		//layer
		$svg_background .= sprintf( $svg_array[$rt_bg_shape][$rt_bg_v_align], 
			"rt-svg-background ".($rt_bg_v_align == "top" ? "top" : "bottom"), 
			$rt_layer_color
			);		
	} 

	/**
	 * Stand Alone Background / custom height
	*/

	$sa_background = "";
	if( $rt_bg_layer == "custom" ){

		//alignment of the sa background 
		$layer_style = empty( $rt_bg_v_align ) || $rt_bg_v_align  == "top" ? "top:0;" : "bottom:0;";
		$layer_style .= empty( $rt_bg_h_align ) || $rt_bg_h_align  == "left" ? "left:0;" : "right:0;left:auto;";

		//dimension
		$layer_style .= empty( $rt_bg_custom_height ) ? 'height:100%;' : 'height:'.rtframework_check_unit( $rt_bg_custom_height ).'!important;';
		$layer_style .= empty( $rt_bg_custom_width ) ? 'width:100%;' : 'width:'.rtframework_check_unit( $rt_bg_custom_width ).'!important;';

		//background color	
		$layer_style  .= ! empty( $rt_layer_color ) ? 'background-color: '.$rt_layer_color.'!important;': "";

		//color overlay layer
		$sa_background .= '<div class="rt-sa-background has-bg-image" style="'. $layer_style .'"></div>'."\n";

		$class .= " has-custom-bg";
	}
	 

	/**
	 * HTML5 Video BG
	 */

	$video_bg = "";
	if( ! empty( $rt_bg_video_mp4 ) ){


		//the video output
		$mp4_url = is_numeric( $rt_bg_video_mp4 ) ?  wp_get_attachment_url( $rt_bg_video_mp4 ) : $rt_bg_video_mp4;
		$webm_url = is_numeric( $rt_bg_video_webm ) ?  wp_get_attachment_url( $rt_bg_video_webm ) : $rt_bg_video_webm;

		$video_bg .= '<video class="content-row-video" autoplay preload loop>'."\n";
		$video_bg .= '<source src=" '.$mp4_url.'" type="video/mp4">'."\n";
		$video_bg .= ! empty( $webm_url ) ? '<source src=" '.$webm_url.'" type="video/webm">'."\n" : "";
		$video_bg .= '</video>'."\n";

		$class .= " has-video-bg";
	}


	/**
	 * Youtube Video BG
	 */

	if( ! empty( $rt_bg_video_youtube ) ){

		$video_bg = "";

		//the video output
		$attr .=' data-vc-video-bg="'.$rt_bg_video_youtube.'"';
		$class .= " has-video-bg vc_video-bg-container";
		
	}


	/**
	 * BG Overlay
	 */

	$overlay = "";
	if( ! empty( $rt_bg_overlay_color ) ){

		//color overlay layer
		$overlay = '<div class="content-row-video-overlay" style="background-color:'. $rt_bg_overlay_color .'"></div>'."\n";

		$class .= " has-bg-overlay";
	}



	/**
	 * BG Image Preloading
	 */
	$class .= ! empty( $bg_image_url ) && $rt_bg_effect != "parallax" ? " has-bg-image" : "";


	//create styles
	$style .= $bg_style;
 

	//content output
	$content_output ='<div class="content_row_wrapper '. trim($wrapper_class) .' '. $rt_row_content_width .'">'.do_shortcode($content).'</div>';

	$class .= " ". $rt_class;

	$output .= "\n".'<div '.$id.' class="content_row row '.trim($class).'"'.$attr.'>';
	$output .= "\n\t".$video_bg.$parallax.$sa_background.$svg_background.$background_slider.$overlay;
	$output .= "\n\t".$content_output;
	$output .= "\n".'</div>'."\n";


	//inline css output	
	$desktop = ! empty( $style ) ?  '.content_row.'.$rt_class .'{'.$style.'}' : "";
	$desktop .= ! empty( $wrapper_style ) ?  '.'.$rt_class.' > .content_row_wrapper{'.$wrapper_style.'}' : "";

	$tablet = ! empty( $tablet_css ) ?  '.content_row.'.$rt_class .'{'.$tablet_css.'}' : "";
	$tablet .= ! empty( $tablet_wrapper_css ) ?  '.'.$rt_class.' > .content_row_wrapper{'.$tablet_wrapper_css.'}' : "";

	$smartphone = ! empty( $smartphone_css ) ? '.content_row.'.$rt_class .'{'.$smartphone_css.'}' : "";
	$smartphone .= ! empty( $smartphone_wrapper_css ) ? '.'.$rt_class.' > .content_row_wrapper{'.$smartphone_wrapper_css.'}' : "";	

	rtframework_inline_css( array( "desktop" => $desktop, "tablet" => $tablet, "smartphone" => $smartphone ) );


	$output = apply_filters( "rtframework_shortcode_output", $output );

	return $output;

	}

}
add_shortcode('rt_row', 'rt_row'); 


if ( ! class_exists( "Vc_Manager" ) ) {
	add_shortcode('vc_row', 'rt_row'); 
	add_shortcode('vc_row_inner', 'rt_row'); 
}