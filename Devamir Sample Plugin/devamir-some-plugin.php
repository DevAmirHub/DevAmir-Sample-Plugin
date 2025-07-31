<?php
/**
 * Plugin Name:       DevAmir Sample Plugin
 * Description:       A simple WordPress plugin with procedural structure and clean file separation.
 * Version:           1.0.0
 * Author:            DevAmir
 * Text Domain:       devamir-sample-plugin
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Define constants for plugin paths and URLs
define( 'DEVAMIR_PLUGIN_VERSION', '1.0.0' );
define( 'DEVAMIR_PLUGIN_FILE', __FILE__ );
define( 'DEVAMIR_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
define( 'DEVAMIR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DEVAMIR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include main plugin files
require_once DEVAMIR_PLUGIN_DIR . 'includes/functions.php';
require_once DEVAMIR_PLUGIN_DIR . 'includes/hooks.php';
require_once DEVAMIR_PLUGIN_DIR . 'includes/activate.php';
require_once DEVAMIR_PLUGIN_DIR . 'includes/deactivate.php';

// Register activation and deactivation hooks
register_activation_hook( __FILE__, 'devamir_plugin_activate' );
register_deactivation_hook( __FILE__, 'devamir_plugin_deactivate' );

// Load plugin text domain for translations
function devamir_load_textdomain() {
    load_plugin_textdomain( 'devamir-sample-plugin', false, dirname( DEVAMIR_PLUGIN_BASENAME ) . '/languages' );
}
add_action( 'plugins_loaded', 'devamir_load_textdomain' );
