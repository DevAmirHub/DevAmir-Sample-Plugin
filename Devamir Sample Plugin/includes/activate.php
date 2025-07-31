<?php
/**
 * Plugin activation logic
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function devamir_plugin_activate() {
    // This function runs when the plugin is activated

    // Example: Add an option to the database
    add_option( 'devamir_sample_option', 'Plugin Activated' );
}
