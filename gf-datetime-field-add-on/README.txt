=== Date Time Field Add-On for Gravity Form ===
Contributors: awais300
Tags: GF, Gravity Form, datetime, date, time, addon
Requires at least: 4.0
Tested up to: 6.4.3
Requires PHP: 7.4
Stable tag: 1.2.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A date-time add-on for Gravity Forms with custom date time format.

== Description ==
A date-time add-on for Gravity Forms with custom date time format:

- This plugin will add new type of field under `Advanced Fields` as `Date-Time`. 
- Simply drag `Date-Time` field into the form.
- You can also add custom date time format under `General` tab. 
- The date time format pattern must follow moment.js tokens. Click [here](https://momentjs.com/docs/#/parsing/string-format/) to view moment.js date and time tokens.


== Translations included ==

* English
* Français (French)

== Installation ==

1. Upload and unzip `gf-datetime-field-add-on.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.2.8 =
* Add a filter hook `gf_awp_calendar_week_start_day` to set start day of the week.

= 1.2.7 =
* Add a filter hook `gf_awp_calendar_hide_past_dates` to hide past date in calendar view.

= 1.2.6 =
* Add a filter hook `gf_awp_calendar_time_format` to change the time format for calendar.
* Add a filter hook `gf_awp_calendar_allow_time` to allow specific time to select. Must use 24 hour format.
* Add a filter hook `gf_awp_calendar_datepicker` to show/hide datepicker.
* Add a filter hook `gf_awp_calendar_timepicker` to show/hide timepicker.
* Add locale feature for date time picker. This uses WordPress locale settings.
* Some minor fixes.

= 1.2.1 =
* Fix JSON error when adding a shortcode and trying to save a page in the block editor.

= 1.2.0 =
* Add a filter hook `gf_awp_datetimepicker_script` to allow users to override JavaScript/jQuery for date-time picker.

= 1.0.1 =
* Fixed date-time picker loading after a Gravity Form is submitted via AJAX

= 1.0 =
* Added a Date Time field for Gravity form
* Added an option to add custom date time format
