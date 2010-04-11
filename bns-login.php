<?php
/*
Plugin Name: BNS Login
Plugin URI: http://buynowshop.com/plugins/bns-login/
Description: A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links.
Version: 1.4
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GPL2
*/

/*  Copyright 2009-2010  Edward Caissie  (email : edward.caissie@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

    The license for this software can also likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html
*/

global $wp_version;
$exit_ver_msg = 'BNS Login requries a minimum of WordPress 2.7, <a href="http://codex.wordpress.org/Upgrading_WordPress">Please Update!</a>';
if (version_compare($wp_version, "2.7", "<"))
	{
		exit ($exit_ver_msg);
	}

/* Add BNS Login style sheet */
add_action( 'wp_head', 'add_BNS_Login_Header_Code' );
function add_BNS_Login_Header_Code() {
  echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('url') . '/wp-content/plugins/bns-login/bns-login-style.css" />' . "\n";
}

add_action('wp_footer', 'bns_addlogin');
function bns_addlogin() {
		$login_url = get_bloginfo('url') . '/wp-admin/';
		if ( is_user_logged_in() ) {
			echo '<div id="bns-logged-in" class="bns-login">' . __('You are logged in! ');

			if (function_exists(get_current_site)) { // WPMU, Multisite - logout returns to WPMU, or Multisite, main domain page
				$current_site = get_current_site();
				$home_domain = 'http://' . $current_site->domain . $current_site->path;
				echo '<a href="' . wp_logout_url( $home_domain ) . '" title="' . __('Logout') . '">' . __('Logout') . '</a>';
			} else {
				echo '<a href="' . wp_logout_url( get_bloginfo('url') ) . '" title="' . __('Logout') . '">' . __('Logout') . '</a>';
			}
			echo __(' or go to the ') . '<a href="' . $login_url . '" title="' . __('dashboard') . '">' . __('dashboard') . '</a>.</div>';

		} else { // Return to blog home page
			echo '<div id="bns-logged-out" class="bns-login"><a href="' . $login_url . '" title="' . __('Log in here') . '">' . __('Log in here!') . '</a></div>';
		}
	}
?>