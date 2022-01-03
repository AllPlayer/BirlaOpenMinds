<?php

extract(shortcode_atts(array(
	'font_color'                 => '',
	'el_class'                   => '',
	'css_animation'              => '',
	'width'                      => '1/1',
	'css'                        => '',	
	'offset'                     => '',	
	'id'                         => '',	
	'class'                      => '',	
	'rt_class'                   => '',
	'rt_font_color'              => '',	
	'rt_bg_color'                => '',
	'rt_bg_image'                => '',
	'rt_bg_effect'               => '',
	'rt_bg_parallax_effect'      => '1',
	'rt_bg_parallax_speed'       => '1',
	'rt_bg_image_repeat'         => '',
	'rt_bg_size'                 => '',
	'rt_bg_attachment'           => '',
	'rt_bg_position'             => '',
	
	'rt_margins'                 => '',
	'rt_paddings'                => '',
	'rt_wrapper_paddings'        => '',
	'rt_tablet_margins'          => '',
	'rt_tablet_paddings'         => '',
	'rt_tablet_wrapper_paddings' => '',
	'rt_sp_margins'              => '',
	'rt_sp_paddings'             => '',
	'rt_sp_wrapper_paddings'     => '',
	
	'rt_border_top'              => '',
	'rt_border_bottom'           => '',
	'rt_border_left'             => '',
	'rt_border_right'            => '',		
	
	'rt_border_top_mobile'       => '',
	'rt_border_bottom_mobile'    => '',
	'rt_border_left_mobile'      => '',
	'rt_border_right_mobile'     => '',		
	
	'rt_color_set'               => '', 
	'rt_bg_holder'               => '', 
	'rt_column_shadow'           => '', 
	'rt_column_boxed'            => '', 
	'rt_bg_overlay_color'        => '',
	'rt_min_height'              => '',
	'stretch_background'         => '', 
	'text_align'                 => '',
	'tablet_align'               => '',
	'mobile_align'               => ''	
), $atts));

	
$el_class = $this->getExtraClass($el_class) . $this->getCSSAnimation( $css_animation );
$width = wpb_translateColumnWidthToSpan($width);
$width = vc_column_offset_class_merge($offset, $width);
$el_class .= ' wpb_column vc_column_container';

$class .= " ".apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

//create shortcode
$create_shortcode = '[rt_column vc_base="'.$this->settings('base').'" width="'.$width.'" rt_class = "'.$rt_class.'"  rt_margins = "'. $rt_margins .'" rt_paddings = "'. $rt_paddings .'" rt_wrapper_paddings = "'. $rt_wrapper_paddings .'" rt_tablet_margins = "'. $rt_tablet_margins .'" rt_tablet_paddings = "'. $rt_tablet_paddings .'" rt_tablet_wrapper_paddings = "'. $rt_tablet_wrapper_paddings .'" rt_sp_margins = "'. $rt_sp_margins .'" rt_sp_paddings = "'. $rt_sp_paddings .'" rt_sp_wrapper_paddings = "'. $rt_sp_wrapper_paddings .'" rt_font_color="'.$font_color.'" id="'.$id.'" class="'.$class.'" rt_bg_color="'.$rt_bg_color.'" rt_bg_overlay_color="'.$rt_bg_overlay_color.'" stretch_background="'.$stretch_background.'" rt_bg_image="'.$rt_bg_image.'" rt_bg_effect="'.$rt_bg_effect.'" rt_bg_parallax_effect="'.$rt_bg_parallax_effect.'" rt_bg_parallax_speed="'.$rt_bg_parallax_speed.'" rt_bg_image_repeat="'.$rt_bg_image_repeat.'" rt_bg_size="'.$rt_bg_size.'" rt_bg_attachment="'.$rt_bg_attachment.'" rt_bg_position="'.$rt_bg_position.'" rt_border_left="'.$rt_border_left.'" rt_border_top="'.$rt_border_top.'" rt_border_bottom="'.$rt_border_bottom.'" rt_border_right="'.$rt_border_right.'" rt_border_bottom_mobile="'.$rt_border_bottom_mobile.'" rt_border_left_mobile="'.$rt_border_left_mobile.'" rt_border_top_mobile="'.$rt_border_top_mobile.'" rt_border_right_mobile="'.$rt_border_right_mobile.'" rt_color_set="'.$rt_color_set.'" rt_bg_holder="'.$rt_bg_holder.'" rt_min_height="'.$rt_min_height.'" rt_column_shadow="'.$rt_column_shadow.'" rt_column_boxed="'.$rt_column_boxed.'" text_align="'.$text_align.'" tablet_align="'.$tablet_align.'" mobile_align="'.$mobile_align.'"]'.$content.'[/rt_column]';

//run
echo do_shortcode( $create_shortcode );