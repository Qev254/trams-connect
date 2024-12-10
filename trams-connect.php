<?php
/**
 * Plugin Name:       TRAMS Connect
 * Plugin URI:        https://github.com/kelvin-k/trams-connect
 * Description:       A communication plugin to manage trainee outreach, newsletters, feedback, and more.
 * Version:           1.0.0
 * Author:            Kelvin K
 * Author URI:        https://github.com/qev254
 * License:           GPL v2 or later
 * Text Domain:       trams-connect
 * Domain Path:       /languages
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants.
define('TRAMS_CONNECT_VERSION', '1.0.0');
define('TRAMS_CONNECT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TRAMS_CONNECT_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include helpers.
require_once TRAMS_CONNECT_PLUGIN_DIR . 'includes/helpers.php';

// Initialize core features.
require_once TRAMS_CONNECT_PLUGIN_DIR . 'includes/admin/class-admin.php';
require_once TRAMS_CONNECT_PLUGIN_DIR . 'includes/public/class-public.php';

// Hook for plugin activation.
register_activation_hook(__FILE__, 'trams_connect_activate');
function trams_connect_activate() {
    // Code for setting up database or initial options goes here.
}
