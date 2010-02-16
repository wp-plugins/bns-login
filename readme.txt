=== BNS Login ===
Contributors: cais
Donate link: http://buynowshop.com/
Tags: login, dashboard, admin
Requires at least: 2.7
Tested up to: 2.9.2
Stable tag: 1.3.3.2

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

Reading this article for further assistance: http://wpfirstaid.com/2009/12/plugin-installation/

== Frequently Asked Questions ==

= Is it really that simple? =

Yes, it really is.

= Can the plugin be styled? =

Yes, the plugin text is wrapped in its own `<div id="bns-logged-in" class="bns-login">` or `<div id="bns-logged-out" class="bns-login">` depending on the login status of the user. Just add your preferred properties to the end of your style.css file.

== Screenshots ==
1. Logged in text.
2. Logged out text.

== Other Notes ==
* Copyright 2009, 2010  Edward Caissie

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

== Upgrade Notice ==
Please stay current with your WordPress installation, your active theme, and your plugins.

== Changelog ==
= 1.3.3.2 =
* compatible with WordPress version 2.9.2
* updated license declaration

= 1.3.3.1 =
* clarified the plugin's release under a GPL license

= 1.3.3 =
* compatibility check for 2.9.1 completed

= 1.3.2 =
* compatibility check for 2.9 completed

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