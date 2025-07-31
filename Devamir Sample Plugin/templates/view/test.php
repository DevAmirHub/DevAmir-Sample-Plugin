<?php
/**
 * Footer view template
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Display the plugin status message safely
echo '<p style="text-align:center; font-size:12px; color:#666;">';
echo 'Plugin Status: ' . esc_html( devamir_get_sample_option() );
echo '</p>';
