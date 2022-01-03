<?php
if( ! function_exists("rt_columns") ){

	/**
	 * rt_columns shortcode
	 * 
	 * holder shortcode for columns
	 * 
	 * @param  [array] $atts    
	 * @param  [string] $content  
	 */
	function rt_columns( $atts, $content = null ) { 

	extract(shortcode_atts(array(
		'class' => '',	
		'id' => '',	 
	), $atts));
 
	//id attr
	$id = ! empty( $id ) ? 'id="'.sanitize_html_class($id).'"' : "";
 
	$output = "\n\t".'<div '.$id.' class="row '.$class.'">';
	$output .= "\n\t\t".do_shortcode($content);
	$output .= "\n\t".'</div>'."\n";

	return $output;

	}

}
add_shortcode('rt_cols', 'rt_columns'); 