<?php
/**
 * @author RT-Themes
 */

if( ! class_exists("RTFramework_WPML_Elementor_Maps") ){
	class RTFramework_WPML_Elementor_Maps extends WPML_Elementor_Module_With_Items  {

		/**
		 * @return string
		 */
		public function get_items_field() { 
			return 'locations';
		}

		/**
		 * @return array
		 */
		public function get_fields() {
			return array( 'lat','lon','title','content');
		}

		/**
		 * @param string $field
		 *
		 * @return string
		 */
		protected function get_title( $field ) {
			switch( $field ) {
				case 'lat':
					return esc_html_x( 'Latitude', 'Admin Panel', 'businesslounge' );

				case 'lon':
					return  esc_html_x( 'Longitude', 'Admin Panel', 'businesslounge' );

				case 'title':
					return esc_html_x("Location Title", 'Admin Panel','businesslounge');

				case 'content':
					return esc_html_x( 'Location Description', 'Admin Panel', 'businesslounge' ); 
					
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
				case 'lat':
					return 'LINE';

				case 'lon':
					return 'LINE';

				case 'title':
					return 'LINE';

				case 'content':
					return 'TEXTAREA';


				default:
					return '';
			}
		}
	}
}