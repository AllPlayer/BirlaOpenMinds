<?php
#-----------------------------------------
#	RT-Theme visual_composer_config.php
#-----------------------------------------


	#
	#  VC Templates Directory
	#
	add_action( 'vc_before_init', 'rt_vc_templates_dir' );
	function rt_vc_templates_dir() {
		vc_set_shortcodes_templates_dir( RT_EXTENSIONS_PATH . 'vc_templates' );
	}


	#
	#	Disable  VC FrontEnd Editor
	#
	add_action( 'vc_before_init', 'rt_vc_disable_frontend' );
	function rt_vc_disable_frontend() {
		vc_disable_frontend();
	}

	#
	#	Set as a theme bundle
	#
	add_action( 'vc_before_init', 'rt_set_as_theme' );
	function rt_set_as_theme() {
		vc_set_as_theme($disable_updater = true);
	}

	#
	#	Enable VC as default for post types in the array
	#
	function rt_vc_set_default_editor_post_types() {
		$list = array(
			'page',
			'portfolio',
		);
		vc_set_default_editor_post_types($list);
	}

	add_action( 'vc_before_init', 'rt_vc_set_default_editor_post_types' );

	#
	#	Remove VC Shortcodes
	#
	function rt_remove_vc_shortcodes() {

		//vc_remove_element( 'vc_column_text' );
		//vc_remove_element( 'vc_separator' );
		//vc_remove_element( 'vc_text_separator' );
		//vc_remove_element( 'vc_message' );
		//vc_remove_element( 'vc_facebook' );
		//vc_remove_element( 'vc_tweetmeme' );
		//vc_remove_element( 'vc_googleplus' );
		//vc_remove_element( 'vc_pinterest' );
		//vc_remove_element( 'vc_toggle' );
		//vc_remove_element( 'vc_single_image' );
		//vc_remove_element( 'vc_gallery' );
		//vc_remove_element( 'vc_images_carousel' );
		//vc_remove_element( 'vc_tabs' );
		//vc_remove_element( 'vc_tour' );
		//vc_remove_element( 'vc_accordion' );
		//vc_remove_element( 'vc_posts_grid' );
		//vc_remove_element( 'vc_carousel' );
		//vc_remove_element( 'vc_posts_slider' );
		//vc_remove_element( 'vc_widget_sidebar' );
		//vc_remove_element( 'vc_button' );
		//vc_remove_element( 'vc_cta_button' );
		//vc_remove_element( 'vc_video' );
		//vc_remove_element( 'vc_gmaps' );
		//vc_remove_element( 'vc_raw_html' );
		//vc_remove_element( 'vc_raw_js' );
		//vc_remove_element( 'vc_flickr' );
		//vc_remove_element( 'vc_progress_bar' );
		//vc_remove_element( 'vc_pie' );
		//vc_remove_element( 'contact-form-7' );
		//vc_remove_element( 'rev_slider_vc' );
		//vc_remove_element( 'vc_wp_search' );
		//vc_remove_element( 'vc_wp_meta' );
		//vc_remove_element( 'vc_wp_recentcomments' );
		//vc_remove_element( 'vc_wp_calendar' );
		//vc_remove_element( 'vc_wp_pages' );
		//vc_remove_element( 'vc_wp_tagcloud' );
		//vc_remove_element( 'vc_wp_custommenu' );
		//vc_remove_element( 'vc_wp_text' );
		//vc_remove_element( 'vc_wp_posts' );
		//vc_remove_element( 'vc_wp_links' );
		//vc_remove_element( 'vc_wp_categories' );
		//vc_remove_element( 'vc_wp_archives' );
		//vc_remove_element( 'vc_wp_rss' );
		//vc_remove_element( 'vc_button2' );
		//vc_remove_element( 'vc_cta_button2' );

	}

	add_action( 'vc_before_init', 'rt_remove_vc_shortcodes' );

	#
	#	Removes params from a Visual Composer Module
	#
	function rt_vc_remove_param( $module="", $params=array()) {

		foreach ($params as $param) {
			vc_remove_param($module, $param);
		}

		return true;
	}

	#
	#	Adds params to a Visual Composer Module
	#
	function rt_vc_add_param( $modules=array(), $params=array()) {

		foreach ($modules as $module) {
			vc_add_param($module, $params);
		}

	}

	#
	#	Add RT Shortcodes to VC
	#
	function rt_add_vc_shortcodes() {

		$module_list = array(
			"row",
			"column",
			"heading",
			"content_box",
			"content_image_box",
			"content_icon_box",
			"button",
			"divider",
			"blog",
			"blog_carousel",
			"contact_form",
			"info_box",
			"counter",
			"latest_news",
			"quote",
			"image_carousel",
			"photo_gallery",
			"pie-chart",
			"progress-bar",
			"icon",
			"retina_image",
			"countdown",
			"tab",
			"accordion",
			"slider",
			"pricing_table",
			"compare_table",
			"timeline",
			"icon_lists",
			"image_gallery",
			"google_maps",
		);

		if( ! class_exists( "Vc_Manager" ) ){
			return;
		}

		if ( class_exists( 'RT_Custom_Posts' ) ) {

			if( RT_Custom_Posts::is_testimonials_active() ){
				array_push($module_list, 'testimonials');
				array_push($module_list, 'testimonial_carousel');
			}

			if( RT_Custom_Posts::is_portfolio_active() ){
				array_push($module_list, 'portfolio');
				array_push($module_list, 'portfolio_carousel');
			}
			if( RT_Custom_Posts::is_team_active() ){
				array_push($module_list, 'staff_box');
				array_push($module_list, 'staff_carousel');
			}
		}

		//remove rt divider item from vc grid builder
		global $pagenow;
		if ( ( 'post.php' === $pagenow && isset($_GET['post'] ) && 'vc_grid_item' === get_post_type( esc_attr( $_GET['post'] ) ) ) || isset( $_POST['vc_grid_item_editor'] ) ){
        	unset($module_list[array_search("divider", $module_list)]);
		}

		foreach ($module_list as $module_name) {
			include(RT_EXTENSIONS_PATH . "/inc/editor/".$module_name.".php");
		}

	}

	add_action( 'init', 'rt_add_vc_shortcodes' );



 	#
	#	Add RT Shortcodes params
	#
	function rt_vc_add_shortcode_param() {

		if (version_compare(WPB_VC_VERSION,"5.0","<")){
			add_shortcode_param( 'rt_vc_description', 'rt_vc_description_function' );
			add_shortcode_param( 'dropdown_multi', 'rt_vc_multiple_select_forrms', plugins_url( 'editor/multiple-select.js', __FILE__ ) ) ;
			add_shortcode_param( 'rt_number', 'rt_vc_multiple_number_inputs', plugins_url( 'editor/numbers.js', __FILE__ ) ) ;
			add_shortcode_param( 'rt_separator', 'rt_vc_separator') ;
		}else{
			vc_add_shortcode_param( 'rt_vc_description', 'rt_vc_description_function' );
			vc_add_shortcode_param( 'dropdown_multi', 'rt_vc_multiple_select_forrms', plugins_url( 'editor/multiple-select.js', __FILE__ ) ) ;
			vc_add_shortcode_param( 'rt_number', 'rt_vc_multiple_number_inputs', plugins_url( 'editor/numbers.js', __FILE__ ) ) ;
			vc_add_shortcode_param( 'rt_separator', 'rt_vc_separator') ;

			vc_add_shortcode_param( 'rt_hidden', 'rt_vc_hidden') ;
			vc_add_shortcode_param( 'rt_styling', 'rt_vc_styling') ;
		}

	}
	add_action( 'vc_before_init', 'rt_vc_add_shortcode_param' );



	/**
	 * Creates a standalone description area that allows html
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_description_function( $settings, $value ) {
		$param_line = '<p>'.$settings["default"].'</p>';
		return $param_line;
	}


	/**
	 * Creates multiple select forms for VC
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_multiple_select_forrms( $param, $param_value ) {
		$css_option = vc_get_dropdown_option( $param, $param_value );

		$param_line = '<select multiple name="' . $param['param_name'] . '" class="wpb_vc_param_value wpb-input wpb-select rt-multi-select ' . $param['param_name'] . ' ' . $param['type'] . ' ' . $css_option . '" data-option="' . $css_option . '">';
		$selected_values = ! is_array( $param_value ) ? explode(",", $param_value ) : $param_value;

		foreach ( $param['value'] as $text_val => $val ) {
			if ( is_numeric( $text_val ) && ( is_string( $val ) || is_numeric( $val ) ) ) {
				$text_val = $val;
			}
			$selected = '';

			if ( in_array($val, $selected_values) ) {
				$selected = ' selected="selected"';
			}

			$param_line .= '<option class="' . $val . '" value="' . $val . '"' . $selected . '>' . htmlspecialchars( $text_val ) . '</option>';
		}
		$param_line .= '</select>';

		return $param_line;
	}


	/**
	 * Creates number input forms for VC
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_multiple_number_inputs( $param, $param_value ) {

		$param_value = htmlspecialchars( $param_value );
		$param_line = '<input name="' . $param['param_name'] . '" class="rt-number wpb_vc_param_value wpb-textinput ' . $param['param_name'] . ' ' . $param['type'] . '" type="text" value="' . $param_value . '"/>';

		return $param_line;
	}

	/**
	 * Creates separator for VC
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_separator( $param ) {

		$output = '<div class="rt-seperator">';
		$output .= '<h5 class="rt-vc-separator">'.$param['rt-heading'].'</h5>';
		$output .= '<p class="rt-vc-desc">'.$param['rt-desc'].'</p>';
		$output .= '</div>';

		return $output;
	}


	 /**
	 * Creates grouped fields for paddings - margins
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_styling( $param, $param_value ) {

		$input_values = explode(",", $param_value);

		$param_line .= '<div class="rt-vc-grouped">';
		for ( $i=0; $i < count($param["rt_input_headings"]); $i++ ) {
			$input_value = isset( $input_values[$i] ) ? $input_values[$i] : "";
			$param_line .= '<div><input name="' . $param['param_name'] . '-'.$i.'" placeholder="'.$param["rt_input_defaults"][$i].'"  data-rt-'.$param['param_name'].'="'.$param['param_name'].'" type="text" class="' . $param['param_name'] . '-'.$i.'"  value="' . $input_value . '"/><span>'.$param["rt_input_headings"][$i].'</span></div>';
		}

		$param_line .= '</div>';
		$param_line .= '<input name="' . $param['param_name'] . '"  data-rt-group="'.$param['param_name'].'"  type="hidden" class="wpb_vc_param_value ' . $param['param_name'] . ' ' . $param['type'] . '"  value="' . $param_value . '"/>';

		return $param_line;
	}


	 /**
	 * Creates hidden field for
	 * @param  [string] $param
	 * @param  [string] $param_value
	 * @return [html]  $param_line
	 */
	function rt_vc_hidden( $param ) {

		//$param_value = empty( $param_value ) ? 'rt-'.rand(1000000, 10000000) : $param_value;
		$param_value = 'rt-'.rand(1000000, 10000000);
		$param_line = '<input name="' . $param['param_name'] . '" type="hidden" class="rt-hidden wpb_vc_param_value ' . $param['param_name'] . ' ' . $param['type'] . '"  value="' . $param_value . '"/>';
		return $param_line;
	}
?>
