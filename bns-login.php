<?php
/*
Plugin Name: BNS Login
Plugin URI: http://buynowshop.com/plugins/bns-login/
Description: A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links. 
Version: 1.3.3.1
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
Text Domain: bns-login
*/

/*
**
* Copyright 2009, 2010 Edward Caissie 
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
* 
* Plugin Changelog: see readme.txt
**
*/

add_action ('init', 'bns_login_init');
function bns_login_init() {
		$plugin_dir = basename(dirname(__FILE__));
		load_plugin_textdomain( 'bns-login', 'wp-content/plugins/' . $plugin_dir, $plugin_dir );
	}
	
global $wp_version;
$exit_ver_msg = 'BNS Login requries a minimum of WordPress 2.7, <a href="http://codex.wordpress.org/Upgrading_WordPress">Please Update!</a>';
if (version_compare($wp_version, "2.7", "<"))
	{
		exit ($exit_ver_msg);
	}

add_action('wp_footer', 'bns_addlogin');
function bns_addlogin() {
		$login_url = get_bloginfo('url') . '/wp-admin/';
		if ( is_user_logged_in() ) {
			echo '<div id="bns-logged-in" class="bns-login">' . __('You are logged in! ', 'bns-login');
			
			if (function_exists(get_current_site)) { // WPMU Test - will return to WPMU installation main page
				$current_site = get_current_site();
				$home_domain = 'http://' . $current_site->domain . $current_site->path;
				echo '<a href="' . wp_logout_url( $home_domain ) . '" title="' . __('Logout', 'bns-login') . '">' . __('Logout', 'bns-login') . '</a>';
			} else {
				echo '<a href="' . wp_logout_url( get_bloginfo('url') ) . '" title="' . __('Logout', 'bns-login') . '">' . __('Logout', 'bns-login') . '</a>';
			}
			echo __(' or go to the ', 'bns-login') . '<a href="' . $login_url . '" title="' . __('dashboard', 'bns-login') . '">' . __('dashboard', 'bns-login') . '</a>.</div>';
		
		} else { // Return to blog home page
			echo '<div id="bns-logged-out" class="bns-login"><a href="' . $login_url . '" title="' . __('Log in here', 'bns-login') . '">' . __('Log in here!', 'bns-login') . '</a></div>';
		}
	}
?>