<?php

/**
 * Plugin Name: IC-API
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin para adicionar shortcodes de APIs no Site IC
 * Author: EvM.
 * Version: 1.0
 * Text Domain: IC-API
 * Plugin IC-API
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// ***************** Add style & script on Theme
function header_style_and_script()
{
    wp_enqueue_style('style', '/wp-content/plugins/icapi/includes/layout/layout-icapi.css');
    wp_enqueue_script('scripts', '/wp-content/plugins/icapi/includes/layout/layout-icapi.js');
}
add_action('wp_head', 'header_style_and_script');


// ***************** Add style & script for Admin
function admin_style_and_script()
{
    wp_enqueue_style('style', '/wp-content/plugins/icapi/includes/assets/icapi.css');
    wp_enqueue_script('scripts', '/wp-content/plugins/icapi/includes/assets/icapi.js');
}
add_action('admin_enqueue_scripts', 'admin_style_and_script');


// ***************** Page About
function menu_icapi()
{
    add_menu_page('ICAPI', 'ICAPI', 'edit_posts', 'icapi', 'function_about', 'dashicons-screenoptions', 1);
}
add_action('admin_menu', 'menu_icapi');

function function_about()
{
    include ABSPATH . '/wp-content/plugins/icapi/includes/about.php';
}
add_action('function_about', 'function_about');


// ***************** Include Settings
include ABSPATH . '/wp-content/plugins/icapi/includes/settings.php';

// ***************** Include APIs
include ABSPATH . '/wp-content/plugins/icapi/includes/icapis.php';