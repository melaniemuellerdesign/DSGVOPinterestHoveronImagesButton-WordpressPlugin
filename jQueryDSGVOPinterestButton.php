<?php
/*
Plugin Name: jQuery DSGVO Pinterest Hover on Images
Plugin URI: https://schokoviel.de/plugins/jQueryDSGVOPinterestButton
Description: jQuery Pinterest Hover on Images
Version: 1.0
Author: Melanie Müller
Author URI: http://schokoviel.de
License: GPLv2
*/

//jQuery to footer
function pinterest_scripts_function() {

  wp_enqueue_script( 'dsgvopinteresthover', plugins_url( '/js/dsgvopinteresthover.js', __FILE__ ), array( 'jquery' ) );
  wp_enqueue_style('dsgvopinteresthover-css', plugins_url( '/css/dsgvopinteresthover.css', __FILE__ ), array(), '1.1', 'all' );
}

add_action('wp_enqueue_scripts','pinterest_scripts_function');
