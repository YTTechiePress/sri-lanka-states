<?php
/**
 * Plugin Name: Sri Lanka States
 * Plugin URI: http://github.com/yttechiepress/sri-lanka-states
 * Author: Techiepress
 * Author URI: http://github.com/yttechiepress/sri-lanka-states
 * Description: Add Sri Lanka States
 * Version: 0.1.0
 * License: GPL2 or later
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: sri-lanka-states
*/

defined('ABSPATH') or die();

add_filter( 'woocommerce_states', 'techiepress_sri_lanka_states_addition');

function techiepress_sri_lanka_states_addition( $states ) {
    
  // Add more states here.
    $states['LK'] = array(
        'LK001' => 'Colombo',
        'LK002' => 'Matale',
        'LK003' => 'Kandy',
    );

    return $states;
}
