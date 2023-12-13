<?php
ob_start();
/*
Plugin Name: Custom Post Types
Description: Generate Custom Post Types For Wordpress Very Easy!!
Version: 1.0
Author: Omid Beheshtian
*/

// Activation and Deactivation Hooks
register_activation_hook(__FILE__, 'custom_post_types_activation_function');
register_deactivation_hook(__FILE__, 'custom_post_types_deactivation_function');

// Include necessary files
include_once(plugin_dir_path(__FILE__) . 'includes/admin.php');
include_once(plugin_dir_path(__FILE__) . 'includes/functions.php');
include_once(plugin_dir_path(__FILE__) . 'includes/settings.php');

ob_end_flush();