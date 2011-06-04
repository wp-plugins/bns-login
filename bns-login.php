<?php
/*
Plugin Name: BNS Login
Plugin URI: http://buynowshop.com/plugins/bns-login/
Description: A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links.
Version: 1.6
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/*  Last revision: June 4, 2011 version 1.6  */

/*  Copyright 2009-2011  Edward Caissie  (email : edward.caissie@gmail.com)

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
$exit_ver_msg = 'BNS Login requries a minimum of WordPress 3.0, <a href="http://codex.wordpress.org/Upgrading_WordPress">Please Update!</a>';
if ( version_compare( $wp_version, "3.0", "<" ) ) { // for `home_url()`
	exit ( $exit_ver_msg );
}

// Add BNS Login Scripts and Stylesheets
function BNS_Login_Scripts_and_Styles() {
    /* Scripts */
    /* Styles */
  	wp_enqueue_style( 'BNS-Login-Style', plugin_dir_url( __FILE__ ) . '/bns-login-style.css', array(), '1.6', 'screen' );
  	wp_enqueue_style( 'BNS-Login-Custom-Style', plugin_dir_url( __FILE__ ) . '/bns-login-custom-style.css', array(), '1.6', 'screen' );
}
add_action( 'wp_enqueue_scripts', 'BNS_Login_Scripts_and_Styles' );

function Add_BNS_Login() {
  	$login_url = home_url( '/wp-admin/' );
  	if ( is_user_logged_in() ) {
  		echo '<div id="bns-logged-in" class="bns-login">' . __( 'You are logged in! ' );
  		if ( function_exists( 'get_current_site' ) ) { // WPMU, Multisite - logout returns to WPMU, or Multisite, main domain page
  			$current_site = get_current_site();
  			$home_domain = 'http://' . $current_site->domain . $current_site->path;
  			echo '<a href="' . wp_logout_url( $home_domain ) . '" title="' . __( 'Logout' ) . '">' . __( 'Logout' ) . '</a>';
  		} else {
  			echo '<a href="' . wp_logout_url( home_url() ) . '" title="' . __( 'Logout' ) . '">' . __( 'Logout' ) . '</a>';
  		}
  		echo __( ' or go to the ' ) . '<a href="' . $login_url . '" title="' . __( 'dashboard' ) . '">' . __( 'dashboard' ) . '</a>.</div>';
  	} else { // Return to blog home page
  		echo '<div id="bns-logged-out" class="bns-login"><a href="' . $login_url . '" title="' . __( 'Log in here' ) . '">' . __( 'Log in here!' ) . '</a></div>';
  	}
}
add_action( 'wp_footer', 'Add_BNS_Login' );
?>