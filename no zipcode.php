<?php
/**
 * Plugin Name:   no zip code
 * Description:   A plugin that includes custom code snippets
 * Version:       1.0.0
 * Author:        ofek gabay
 */
 
 
add_filter( 'woocommerce_checkout_fields' , 'bbloomer_remove_billing_postcode_checkout' );
 
function bbloomer_remove_billing_postcode_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
  return $fields;
}