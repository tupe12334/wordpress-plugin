<?php
/**
 * Plugin Name:   email
 * Description:   A plugin that includes custom code snippets
 * Version:       1.0.0
 * Author:        ofek gabay
 */

function sv_unrequire_wc_phone_field( $fields ) {
    $fields['billing_email']['required'] = false;
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'sv_unrequire_wc_phone_field' );