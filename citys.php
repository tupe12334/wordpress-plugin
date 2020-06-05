<?php
/**
 * Plugin Name:   citys
 * Description:   A plugin that includes custom code snippets
 * Version:       1.0.0
 * Author:        ofek gabay
 */

// Change "city" checkout billing and shipping fields to a dropdown
add_filter( 'woocommerce_checkout_fields' , 'override_checkout_city_fields' );
function override_checkout_city_fields( $fields ) {

    // Define here in the array your desired cities (Here an example of cities)
    $option_cities = array(
         '' => __( 'בחר עיר' ),
        'קריית מוצקין' => 'קריית מוצקין',
        'קריית חיים' => 'קריית חיים',
        'קריית ביאליק' => 'קריית ביאליק',
        'קריית ים' => 'קריית ים',
        'קריית שמואל' => 'קריית שמואל',
    );

    $fields['billing']['billing_city']['type'] = 'select';
    $fields['billing']['billing_city']['options'] = $option_cities;
    $fields['shipping']['shipping_city']['type'] = 'select';
    $fields['shipping']['shipping_city']['options'] = $option_cities;

    return $fields;
}