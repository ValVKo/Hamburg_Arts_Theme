<?php
namespace Etn\Core\Addons;
defined( 'ABSPATH' ) || exit;
class Helper {

	use \Etn\Traits\Singleton;
	/**
	 * Check active module
	 */
	public function check_active_module( $modules_name = '' ) {
		$addons_options = get_option( 'etn_addons_options' );
		$enable_module  = false;
		switch ( $modules_name ) {
		case 'dokan':
			if ( class_exists( 'WeDevs_Dokan' ) ) {
				$enable_module = ( empty( $addons_options['dokan'] ) || $addons_options['dokan'] == "on" ) ? true : false;
				if ( $enable_module && class_exists( 'Woocommerce' ) && 0 !== get_current_user_id() ) {
					$enable_module = true;
				} else {
					$enable_module = false;
				}
			} else {
				$enable_module = ( ! empty( $addons_options['dokan'] ) && $addons_options['dokan'] == "on" ) ? true : false;
			}
			break;
		case 'buddyboss':
			$enable_module = ! empty( $addons_options['buddyboss'] ) && $addons_options['buddyboss'] == "on" ? true : false;
			break;
		case 'certificate_builder':
			$enable_module = ! empty( $addons_options['certificate_builder'] ) && $addons_options['certificate_builder'] == "on" ? true : false;
			break;
		case 'rsvp':
			$enable_module = ( empty( $addons_options['rsvp'] ) || $addons_options['rsvp'] == "on") ? true : false;
			break;
		case 'google_meet':
			$enable_module = ( empty( $addons_options['google_meet'] ) || $addons_options['google_meet'] == "on") ? true : false;
			break;
		default:
			$enable_module = ! empty( $addons_options[$modules_name] ) && $addons_options[$modules_name] == "on" ? true : false;
			break;
		}
		return $enable_module;
	}
}