<?php
if( ! function_exists("rt_staff_carousel") ){
	function rt_staff_carousel( $atts, $content = null ) { 
	/**
	 * Staff Posts	
	 * @param  array $atts
	 * @param  string $content
	 * @return output
	 */

	//defaults
	extract(shortcode_atts(array(  
		"id"            => 'staff-'.rand(100000, 1000000), 
		"class"         => "", 
		"list_layout"   => "1/3",
		"tablet_layout" => "",
		"mobile_layout" => 1,		
		"nav"           => "true",
		"dots"          => "false",	 
		"list_orderby"  => "date",
		"list_order"    => "DESC",
		"ids"           => array(),
		"box_style"     => "",
		"autoplay"      => "false",
		"timeout"       => 5000,
		"padding"       => "",
		"loop"          => "false",
		"margin"        => "15",		 				
	), $atts));

	//item width percentage
	$list_layout = ! empty( $list_layout ) ? $list_layout : "1/3";
	$item_width = rtframework_column_count( $list_layout );

	//create a post status array
	$post_status = is_user_logged_in() ? array( 'private', 'publish' ) : "publish";

	//general query
	$args = array( 
		'post_status'    =>	$post_status,
		'post_type'      =>	'staff',
		'orderby'        =>	$list_orderby,
		'order'          =>	$list_order 			
	);

	if( ! empty ( $ids ) ){				
		$ids = ( ! empty( $ids ) && ! is_array( $ids) ) ? explode(",", trim( $ids ) ) : ( ! array( $ids ) ? array() : $ids ) ;
		$args = array_merge( $args, array( 'post__in' => $ids ) );
	}
	
	$wp_query  = new WP_Query($args); 
	$output = array();
 	if ( $wp_query->have_posts() ){ 
		while ( $wp_query->have_posts() ) : $wp_query->the_post();

			ob_start();
			$post_classes = get_post_class("loop") ;

			echo '<div id="'.get_the_ID().'" class="'.implode(" ", $post_classes ).'">'."\n" ;					
				get_template_part( 'staff-contents/loop','content');
			echo '</div>'."\n" ;

			$output[] .=  ob_get_contents();
			ob_end_clean();

		endwhile; 
	}

	//reset post data for the new query
	wp_reset_postdata(); 	


	//carousel atts
	$atts = array(  
		"id"                => sanitize_html_class($id), 
		"item_width"        => $item_width, 
		"mobile_item_width" => $mobile_layout, 
		"tablet_item_width" => $tablet_layout, 						
		"class"             => "team-carousel",
		"nav"               => $nav,
		"dots"              => $dots, 
		"autoplay"          => $autoplay,
		"timeout"           => $timeout,
		"boxed"             => ! empty( $box_style ) ? "true" : "",
		"margin"            => intval($margin),
		"padding"           => intval($padding),
		"loop"              => $loop,				
	);

	//create carousel 
	$output = rtframework_create_carousel( $output, $atts );
	$output = apply_filters( "rtframework_shortcode_output", $output );
	return $output;
	}
 }

add_shortcode('rt_staff_carousel', 'rt_staff_carousel'); 