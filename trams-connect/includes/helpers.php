<?php
// Enqueue admin styles and scripts.
function trams_connect_enqueue_admin_assets() {
    wp_enqueue_style('trams-connect-admin', TRAMS_CONNECT_PLUGIN_URL . 'assets/css/style.css', [], TRAMS_CONNECT_VERSION);
    wp_enqueue_script('trams-connect-admin', TRAMS_CONNECT_PLUGIN_URL . 'assets/js/script.js', ['jquery'], TRAMS_CONNECT_VERSION, true);
}
add_action('admin_enqueue_scripts', 'trams_connect_enqueue_admin_assets');

// Enqueue public styles and scripts.
function trams_connect_enqueue_public_assets() {
    wp_enqueue_style('trams-connect-public', TRAMS_CONNECT_PLUGIN_URL . 'assets/css/style.css', [], TRAMS_CONNECT_VERSION);
    wp_enqueue_script('trams-connect-public', TRAMS_CONNECT_PLUGIN_URL . 'assets/js/script.js', ['jquery'], TRAMS_CONNECT_VERSION, true);
}
add_action('wp_enqueue_scripts', 'trams_connect_enqueue_public_assets');
