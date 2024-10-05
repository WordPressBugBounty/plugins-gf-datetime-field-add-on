<?php

namespace Awaiswp\Addon;

\GFForms::include_addon_framework();

/**
 * This class is responsille for adding the date time field addon.
 */
class Awaiswp_GF_DateTime_Field_Addon extends \GFAddOn {

	protected $_version                  = AWAISWP_GF_DATE_TIME_FIELD_ADDON_VERSION;
	protected $_min_gravityforms_version = '1.9';
	protected $_slug                     = 'datetimefieldaddon';
	protected $_path                     = 'gf-datetime-field-add-on/gf-datetime-field-add-on.php';
	protected $_full_path                = __FILE__;
	protected $_title                    = 'DateTime Field Add-On for Gravity Form';
	protected $_short_title              = 'Date Time Field Add-On';

	/**
	 * @var object $_instance If available, contains an instance of this class.
	 */
	private static $_instance = null;

	/**
	 * Returns an instance of this class, and stores it in the $_instance property.
	 *
	 * @return Object $_instance An instance of this class.
	 */
	public static function get_instance() {
		if ( self::$_instance == null ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Include the field early so it is available when entry exports are being performed.
	 */
	public function pre_init() {
		parent::pre_init();

		if ( $this->is_gravityforms_supported() && class_exists( 'GF_Field' ) ) {
			require_once 'includes/class-awaiswp-datetime-gf-field.php';
			require_once 'includes/class-awaiswp-datetime-field-settings.php';
		}
	}

	public function init_admin() {
		parent::init_admin();
	}


	// # SCRIPTS & STYLES --------------------------------------------------------------------------------------------

	/**
	 * Include my_styles.css when the form contains a 'simple' type field.
	 *
	 * @return Array
	 */
	public function styles() {
		$styles = array(
			array(
				'handle'  => 'datetimepicker',
				'src'     => $this->get_base_url() . '/css/jquery.datetimepicker.css',
				'version' => $this->_version,
				'enqueue' => array(
					array( 'field_types' => array( 'awaiswp_datetime' ) ),
				),
			),
		);

		return array_merge( parent::styles(), $styles );
	}


	/**
	 * Include script when the form contains a 'awaiswp_datetime' type field.
	 *
	 * @return Array
	 */
	public function scripts() {
		$scripts = array(
			array(
				'handle'  => 'moment',
				'enqueue' => array(
					array( 'field_types' => array( 'awaiswp_datetime' ) ),
				),
			),
			array(
				'handle'  => 'datetimepicker',
				'src'     => $this->get_base_url() . '/js/jquery.datetimepicker.js',
				'version' => $this->_version,
				'deps'    => array( 'jquery' ),
				'enqueue' => array(
					array( 'field_types' => array( 'awaiswp_datetime' ) ),
				),
			),
			array(
				'handle'  => 'datetimescripts',
				'src'     => $this->get_base_url() . '/js/scripts.js',
				'version' => $this->_version,
				'strings' => array(
					'locale' => substr( get_user_locale( get_current_user_id() ), 0, 2 ),
				),
				'deps'    => array( 'moment', 'jquery' ),
				'enqueue' => array(
					array( 'field_types' => array( 'awaiswp_datetime' ) ),
				),
			),

		);

		return array_merge( parent::scripts(), $scripts );
	}

}
