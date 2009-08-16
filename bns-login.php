<?php
/*
Plugin Name: BNS Login
Plugin URI: http://buynowshop.com/
Description: A simple plugin providing a link to the dashboard; and, a method to log in and out of your blog in the footer of the theme. This is ideal for those not wanting to use the meta widget/code links. 
Version: 0.9
Author: Edward "cais" Caissie
Author URI: http://edwardcaissie.com/
*/

function bns_addlogin() {
  $login_url = get_bloginfo('siteurl') . '/wp-admin/';
  if ( is_user_logged_in() ) {
    echo '<div class="bns-login" id="bns-logged-in">' . 'You are logged in! ';
    echo '<a href="' . wp_logout_url( get_bloginfo('url') ) . '" title="Logout">Logout</a>';
    echo ' or go to the <a href="' . $login_url . '" title="dashboard">dashboard</a>.' . '</div>';

  } else {

    echo '<div class="bns-login" id="bns-logged-out">' . '<a href="' . $login_url . '" title="Log in here">Log in here!</a>' . '</div>';

  }
}
add_action('wp_footer', 'bns_addlogin');
?>
