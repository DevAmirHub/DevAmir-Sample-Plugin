<?php

/**
 * General helper functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Get plugin activation status option value
 *
 * @return string
 */
function devamir_get_sample_option()
{
    return get_option('devamir_sample_option', 'Option not set');
}
