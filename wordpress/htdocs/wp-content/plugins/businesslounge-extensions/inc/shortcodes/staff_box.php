<?php
if( ! function_exists("rt_staff") ){
	function rt_staff( $atts, $content = null ) { 
	/**
	 * Staff Posts	
	 * @param  array $atts
	 * @param  string $content
	 * @return output
	 */
	global $rt_item_width, $wp_query;

	//counter
	$counter = 1;	

	//defaults
	extract(shortcode_atts(array(  
		"id"           => 'staff-'.rand(100000, 1000000), 
		"class"        => "", 
		"list_layout"  => "1/1", 
		"list_orderby" => "date",
		"list_order"   => "DESC",
		"ids"          => array(),
		"box_style"    => ""		
	), $atts));


	//product id numbders
	$ids = ! empty( $ids ) ? explode(",", trim( $ids ) ) : array();


	//item width percentage
	$list_layout = ! empty( $list_layout ) ? $list_layout : "1/3";
	$rt_item_width = $list_layout;

	//item width number
	$item_width_number = str_replace("1/", "", $list_layout);

	//row count
	$column_count = rtframework_column_count( $list_layout );

	//general query
	$args=array( 
		'post_status'    =>	'publish',
		'post_type'      =>	'staff',
		'orderby'        =>	$list_orderby,
		'order'          =>	$list_order,
		'showposts' 	 =>	1000															
	);


	if( ! empty ( $ids ) ){
		$args = array_merge($args, array( 'post__in'  => $ids) );
	}
	 
	ob_start();

	$theQuery = query_posts($args);

	//column class
	$add_column_class = rtframework_column_class( $list_layout );

	//get page & post counts
	$page_count = rtframework_get_page_count();
	$post_count = $page_count['post_count']; 

	echo '<section id="'.$id.'" class="team clearfix fixed_heights rt-flex-wrapper '.$class.'">';

		while ( have_posts() ) : the_post();

			//open row block
			if( $counter % $column_count == 1 || $column_count == 1 ){
				echo '<div class="row clearfix">';
			}			

			$post_classes = get_post_class("loop {$box_style} ".$add_column_class, get_the_ID() ) ;

			printf('<div class="col %s">'."\n",$add_column_class);
			echo '<div id="'.get_the_ID().'" class="'.implode(" ", $post_classes ).'">'."\n";
				get_template_part( 'staff-contents/loop','content');
			echo '</div>'."\n";
			echo '</div>'."\n";

			//close row block
			if( $counter % $column_count == 0 || $post_count == $counter ){
				echo '</div>';				
			}			
 
			$counter++;

		endwhile; 

	echo '</section>';
	
	rtframework_get_pagination( $wp_query );
	wp_reset_query(); 
		
	$output_string = ob_get_contents();

	ob_end_clean(); 

	return $output_string;
	}
 }

add_shortcode('staff_box', 'rt_staff'); 