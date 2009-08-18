<?php
/*<?php
/*
Plugin Name: BNS Login
Plugin URI: http://buynowshop.com/
Description: A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links. 
Version: 1.2
Author: Edward "cais" Caissie
Author URI: http://edwardcaissie.com/
*/

function bns_addlogin() {
  $login_url = get_bloginfo('url') . '/wp-admin/';
  if ( is_user_logged_in() ) {
    echo '<div id="bns-logged-in" class="bns-login">' . __('You are logged in! ');
    if (function_exists(get_current_site)) {
      $current_site = get_current_site();
      $home_domain = 'http://' . $current_site->domain . $current_site->path;
      echo '<a href="' . wp_logout_url( $home_domain ) . '" title="' . __('Logout') . '">' . __('Logout') . '</a>';
    } else {
      echo '<a href="' . wp_logout_url( get_bloginfo('url') ) . '" title="' . __('Logout') . '">' . __('Logout') . '</a>';
    }
    _e(' or go to the ') . '<a href="' . $login_url . '" title="' . __('dashboard') . '">' . __('dashboard') . '</a>.</div>';
  } else {
    echo '<div id="bns-logged-out" class="bns-login"><a href="' . $login_url . '" title="' . __('Log in here') . '">' __('Log in here!') . '</a></div>';
  }
}
add_action('wp_footer', 'bns_addlogin');
?>
