=== BNS Login ===
Contributors: cais
Donate link: http://buynowshop.com/
Tags: login, dashboard, admin
Requires at least: 2.7.0
Tested up to: 2.8.4
Stable tag: 1.3.1

A plugin providing a link to the dashboard; and, a log in and out link.

== Description ==

A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links.

Additonal WordPress MU compatibility added at version 1.1 - When a user logs out via the plugin they will be returned to the main domain (home page) of the WordPress MU installation.

== Installation ==

1. Extract the files from the compressed "zip" file (note the location of the extracted folder/files)
2. Upload the contents of the `bns-login` folder (from above) to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

-- or -

1. Go to 'Plugins' menu under your Dashboard
2. Click on the 'Add New' link
3. Search for bns-login
4. Install.
5. Activate through the 'Plugins' menu

== Frequently Asked Questions ==

= Is it really that simple? =

Yes, it really is.

= Can the plugin be styled? =

Yes, the plugin text is wrapped in its own `<div id="bns-logged-in" class="bns-login">` or `<div id="bns-logged-out" class="bns-login">` depending on the login status of the user. Just add your preferred properties to the end of your style.css file.

== Screenshots ==

1. Logged in text.
2. Logged out text.

== Changelog ==

= 1.3.1 =
* minor code error correction

= 1.3 =
* Code clean up
* Comments and documentation added
* Version control added
* localization code init function

= 1.2 =
* Added localization code

= 1.1 =
* Added WordPressMU Compatibility - Logout returns user to main domain (home) of WPMU installation.
* Corrected deprecated parameter variable 'siteurl' to 'url'

= 1.0 =
* Initial Release
