<?php

/**
 * Plugin hooks and actions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Display footer message using a template view
 */
add_action('wp_footer', 'devamir_display_footer');

function devamir_display_footer()
{
    // Include the template view
    include DEVAMIR_PLUGIN_DIR . 'templates/view';
}
