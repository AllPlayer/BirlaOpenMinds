<?php
/**
 * @author RT-Themes
 */

if( ! class_exists("RTFramework_WPML_Elementor_Timeline") ){
	class RTFramework_WPML_Elementor_Timeline extends WPML_Elementor_Module_With_Items  {

		/**
		 * @return string
		 */
		public function get_items_field() { 
			return 'events';
		}

		/**
		 * @return array
		 */
		public function get_fields() {
			return array('title','content','day','month','year');
		}

		/**
		 * @param string $field
		 *
		 * @return string
		 */
		protected function get_title( $field ) {
			switch( $field ) {
				case 'title':
					return esc_html_x( 'Title', 'Admin Panel', 'businesslounge' );
				case 'content':
					return esc_html_x( 'Content', 'Admin Panel', 'businesslounge' );
				case 'day':
					return esc_html_x( 'Event Day', 'Admin Panel', 'businesslounge' );
				case 'month':
					return esc_html_x( 'Event Month', 'Admin Panel', 'businesslounge' );
				case 'year':
					return esc_html_x( 'Event Year', 'Admin Panel', 'businesslounge' );					 

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
				case 'title':
					return 'LINE';

				case 'content':
					return 'VISUAL';

				case 'day':
					return 'LINE';

				case 'month':
					return 'LINE';

				case 'year':
					return 'LINE';

				default:
					return '';
			}
		}
	}
}