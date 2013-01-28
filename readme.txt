=== Scheduled Content (by Sizeable) ===
Contributors: szbl,theandystratton
Donate link: 
Tags: schedule, embed content, schedule content
Requires at least: 3.0
Tested up to: 3.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin 

== Description ==



== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use [szbl_scheduled_content start="January 1, 2013" end="January 15, 2013"]

== Frequently asked questions ==

= What formats can I use in the start/end attributes? =

The plugin uses PHP's strtotime() function, so any valid date/time format should work.

= Does my content have to have a start date? I just want it to expire =

Omit the start attribute and your content will simply expire.

= Does my content have to have an end date? I just want it to not start until a specific date =

Omit the end attribute and your content will never expire, it will just be hidden until the start attribute's date.

= What timezone does this plugin use? =

We make every effort to use the timezone settings within your WordPress installation (comparisons are made using date_i18n which inherits the WP timezone settings).

= Can I turn off nested shortcode processing? =

Yes. Use the attribute "shortcodes" and set it's value to false:

[szbl_scheduled_content start="March 4, 2013" shortcodes="false"]

= Can I turn off auto-formatting of the content? =

Yes. Use the attribute "content_filters" and set it's value to false:

[szbl_scheduled_content start="March 4, 2013" content_filters="false"]

By default the plugin will apply the same filters as post/page content on the content of the shortcode.

== Screenshots ==



== Changelog ==



== Upgrade notice ==



== Arbitrary section 1 ==

