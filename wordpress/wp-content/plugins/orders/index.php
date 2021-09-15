<?php
/*
    Plugin Name: Orders
    Plugin URI: http://cheffjeff.nl
    Author: Jeffrey Nijkamp
    Author URI: http://cheffjeff.nl
*/

if(!defined('ABSPATH')){
    die;
}

function orders_admin_menu()
{
    add_menu_page(
        'Orders', 
        'Orders', 
        'manage_options', 
        'orders_admin_menu', 
        'display_orders', 
        'dashicons-clipboard', 
        4
    );
}
add_action('admin_menu', 'orders_admin_menu');

function display_orders()
{
    include(plugin_dir_path( __FILE__ ).'orders-display.php');
}