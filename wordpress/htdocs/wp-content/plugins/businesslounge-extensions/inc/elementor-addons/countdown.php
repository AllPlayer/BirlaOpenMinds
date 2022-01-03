<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; 

class Widget_RT_Countdown extends Widget_Base {

	public function get_name() {
		return 'rt-countdown';
	}

	public function get_title() {
		return "[RT] ".esc_html_x( 'Countdown', 'Adnin Panel', 'businesslounge' );
	}

	public function get_categories() {
		return [ 'rt-elementor-addons' ];
	}

	public function get_icon() {
		return 'eicon-countdown';
	}
	protected function _register_controls() {

		// Content Controls
  		$this->start_controls_section(
  			'RT_countdown_content',
  			[
  				'label' => esc_html_x( 'Countdown','Admin Panel','businesslounge' )
  			]
  		); 
 

		$this->add_control(
			'date',
			[
				'label' =>  esc_html_x( 'Date', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::TEXT,  	
				'description' => esc_html_x('Use only this format: year/month/day hour:minutes - example:', 'Admin Panel','businesslounge' ).'<code>2018/01/01 22:39</code>',
				'placeholder' => esc_html_x( 'year/month/day', 'Admin Panel','businesslounge' ),
			]
		);

		$this->add_control(
			'content',
			[
				'label' =>  esc_html_x( 'Custom Output Format', 'Admin Panel','businesslounge' ),
				'type' => Controls_Manager::TEXTAREA,  	
				'description' => 
				esc_html_x('Leave blank for the default output. To customize the output you can use these available special codes;', 'Admin Panel','businesslounge' ).
					'<br/><br/><code>%Y</code> '._x('for years', 'Admin Panel','businesslounge' ).
					'<br/><code>%m</code> '._x('for monts', 'Admin Panel','businesslounge' ). 
					'<br/><code>%n</code> '._x('for days of the month', 'Admin Panel','businesslounge' ).
					'<br/><code>%D</code> '._x('for total days', 'Admin Panel','businesslounge' ).
					'<br/><code>%H</code> '._x('for hours', 'Admin Panel','businesslounge' ).
					'<br/><code>%I</code> '._x('for total hours', 'Admin Panel','businesslounge' ).
					'<br/><code>%M</code> '._x('for minutes', 'Admin Panel','businesslounge' ).
					'<br/><code>%S</code> '._x('for seconds', 'Admin Panel','businesslounge' ).
					'<br /><br /><b>'._x('Example', 'Admin Panel','businesslounge' ).
					'<br/><code>&lt;i&gt;&lt;b&gt;%D&lt;/b&gt;DAYS&lt;/i&gt; &lt;i&gt;&lt;b&gt;%H&lt;/b&gt;HOURS&lt;/i&gt; &lt;i&gt;&lt;b&gt;%M&lt;/b&gt;MINUTES&lt;/i&gt; &lt;i&gt;&lt;b&gt;%S&lt;/b&gt;SECONDS&lt;/i&gt;</code>'
				, 
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html_x( 'Alignment', 'Admin Panel', 'businesslounge' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html_x( 'Left', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html_x( 'Center', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html_x( 'Right', 'Admin Panel', 'businesslounge' ),
						'icon' => 'fa fa-align-right',
					], 
				],
				'prefix_class' => 'elementor%s-align-'
			]
		);
		
		$this->end_controls_section();
	}


	protected function render( ) {

		$settings = $this->get_settings(); 
		echo rt_countdown_function( $settings, $settings["content"] );

	}

	protected function content_template() {
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_RT_Countdown() );

