<?php
if( ! function_exists("rt_column_text") ){

	/**
	 * rt_column_text shortcode
	 * 
	 * creates a holder for contents
	 * 
	 * @param  [array] $atts    
	 * @param  [string] $content  
	 */
	function rt_column_text( $atts, $content = null ) { 

	extract(shortcode_atts(array(
		'el_class' => '',	
		'id' => '',	 
	), $atts));
 

	$output = "\n\t".'<div id="'.$id.'" class="rt_text_column rt_content_element '.$el_class.'">';
	$output .= "\n\t\t".do_shortcode($content);
	$output .= "\n\t".'</div>'."\n";

	return $output;

	}

}
add_shortcode('rt_column_text', 'rt_column_text'); 

if ( ! class_exists( "Vc_Manager" ) ) {
	add_shortcode('vc_column_text', 'rt_column_text'); 
}