<?php
/*
Plugin Name: Date Time Field Add-On for Gravity Form
Description: Add a datetime field for gravity form with an option for custom date time format
Version: 1.2.8
Author: AWP
Author URI: https://awaiswp.is-a-fullstack.dev/contact/
Text Domain: datetimefieldaddon
Domain Path: /languages
*/

namespace Awaiswp;

define( 'AWAISWP_GF_DATE_TIME_FIELD_ADDON_VERSION', '1.2.8' );
add_action( 'gform_loaded', array( 'Awaiswp\Awaiswp_GF_Datetime_Field_AddOn_Bootstrap', 'load' ), 5 );

class Awaiswp_GF_Datetime_Field_AddOn_Bootstrap {

	public static function load() {
		if ( ! method_exists( 'GFForms', 'include_addon_framework' ) ) {
			return;
		}

		require_once 'class-awaiswp-datetime-gf-field-addon.php';
		\GFAddOn::register( 'Awaiswp\Addon\Awaiswp_GF_DateTime_Field_Addon' );
	}

}
