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
//HOOK3

//[laptop] shortcode
function wzr_mobile_shortcode($atts, $content = null){ 
  if( !wp_is_mobile() ){ 
    return wpautop( do_shortcode( $content ) ); 
  } else {
    return null; 
  } 
}
add_shortcode('laptop', 'wzr_mobile_shortcode');

//[mobile] shortcode

function wzr_laptop_shortcode($atts, $content = null){ 
  if( wp_is_mobile() ){ 
    return  wpautop( do_shortcode( $content ) ); 
  } else {
    return null; 
  } 
}
add_shortcode('mobile', 'wzr_laptop_shortcode');
