<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_RevSlider extends Widget_Base {

	public function get_name() {
		return 'rt-rev-slider';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Revolution Slider', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-slider-full-screen';
	}
	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_cf_content',
  			[
  				'label' => esc_html_x( 'Revolution Slider','Admin Panel','businesslounge' )
  			]
  		); 

		//get sliders
		$rev_slider_version = "";

		if( defined("RS_REVISION") ){
			$rev_slider_version = RS_REVISION;
		}else{
			global $revSliderVersion;			
			$rev_slider_version = $revSliderVersion;
		}
		
		if( version_compare ( 6, $rev_slider_version, '<=' ) ){//revslider 6+

			$revslider = new \RevSlider();
			$get_rev_sliders = $revslider->get_sliders(); 

			
			$sliderArray = array();

			$r_sldier_counter = 0;
			foreach ($get_rev_sliders as $slide) {
				$sliderArray[$slide->alias] = $slide->title;
				
				$default = $r_sldier_counter == 0 ? $slide->alias: $default;

				$r_sldier_counter++;
			}
		}else{
			$slider = new \RevSlider();
			$alias_array = $slider->getAllSliderAliases();
			$title_array = $slider->getArrSlidersShort();
			$sliderArray = array();
			$default = "";
			
			$r_sldier_counter = 0;
			if(is_array($title_array)){
				foreach ($title_array as $key => $slider_title ) {
					$sliderArray[$alias_array[$r_sldier_counter]] = $slider_title;
					$default = $r_sldier_counter == 0 ? $alias_array[$r_sldier_counter]: $default;
					$r_sldier_counter++;
				}
			}
		}
		
		$this->add_control(
			'slider',
			[
				'label' => esc_html_x("Slider", 'Admin Panel','businesslounge'),
				'type' => Controls_Manager::SELECT,
				'options' => $sliderArray, 
				'default' => $default
			]
		);  
  
		
		$this->end_controls_section();
	}

	protected function render( ) {
		$settings = $this->get_settings(); 

		if( defined("RS_REVISION") ){
			$rev_slider_version = RS_REVISION;
		}else{
			global $revSliderVersion;			
			$rev_slider_version = $revSliderVersion;
		}

		if( version_compare ( 6, $rev_slider_version, '<=' ) ){//revslider 6+
			$RevSliderOutput = new \RevSliderOutput();
			$RevSliderOutput->add_slider_to_stage($settings["slider"]);						
		}else{
			\RevSliderOutput::putSlider($settings["slider"]);
		}

	}

	protected function content_template() {
	}

}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_RevSlider() );

