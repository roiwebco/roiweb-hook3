<?php
/*
Plugin Name: Shortcode for laptop & mobile
Plugin URI: https://roiweb.co
Description: Shortcode for laptop & mobile | Hook 003
Author: ROIWEB.CO
Author URI: https://roiweb.co
Version: 1.0.0
*/
//Exit if accessed directly
if (!defined('ABSPATH'))exit;
//[laptop]shortcode
function rwc_mobile_shortcode($atts, $content = null){ 
  if( !wp_is_mobile() ){ 
    return wpautop( do_shortcode( $content ) ); 
  } else {
    return null; 
  } 
}
add_shortcode('laptop', 'rwc_mobile_shortcode');
//[mobile]shortcode
function rwc_laptop_shortcode($atts, $content = null){ 
  if( wp_is_mobile() ){ 
    return  wpautop( do_shortcode( $content ) ); 
  } else {
    return null; 
  } 
}
add_shortcode('mobile', 'rwc_laptop_shortcode');
