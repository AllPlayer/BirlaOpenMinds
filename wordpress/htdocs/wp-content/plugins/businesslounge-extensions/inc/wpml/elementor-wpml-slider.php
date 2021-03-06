<?php
/**
 * @author RT-Themes
 */

if( ! class_exists("RTFramework_WPML_Elementor_Slider") ){
	class RTFramework_WPML_Elementor_Slider extends WPML_Elementor_Module_With_Items  {

		/**
		 * @return string
		 */
		public function get_items_field() { 
			return 'slides';
		}

		/**
		 * @return array
		 */
		public function get_fields() {
			return array( 'heading','nav_text','content','link' => array( 'url' ),'button_text','button_link' => array( 'url' ) );
		}

		/**
		 * @param string $field
		 *
		 * @return string
		 */
		protected function get_title( $field ) {
			switch( $field ) {
				case 'heading':
					return esc_html_x( 'Title', 'Admin Panel', 'businesslounge' );

				case 'nav_text':
					return  esc_html_x('Navigation Text', 'Admin Panel','businesslounge' );

				case 'content':
					return esc_html_x( 'Content', 'Admin Panel', 'businesslounge' );

				case 'link':
					return esc_html_x("Slide Link", 'Admin Panel','businesslounge');

				case 'button_text':
					return esc_html_x("Button Text", 'Admin Panel','businesslounge');

				case 'button_link':
					return esc_html_x("Button Link", 'Admin Panel','businesslounge'); 

				case 'url':
					return esc_html_x("URL", 'Admin Panel','businesslounge'); 
					
				default:
					return '';
			}
		}

		/**
		 * @param string $field
		 *
		 * @return string
		 */
		protected function get_editor_type( $field ) {
			switch( $field ) {
				case 'heading':
					return 'LINE';

				case 'nav_text':
					return 'LINE';

				case 'content':
					return 'TEXTAREA';

				case 'link':
					return 'LINK';

				case 'button_text':
					return 'LINE';

				case 'button_link':
					return 'LINK';

				case 'url':
					return 'LINK';

				default:
					return '';
			}
		}
	}
}