<?php
/*
Plugin Name: Custom Post Type
Description: Generate Custom Post Types For Wordpress
Version: 1.0
Author: Omid Beheshtian
*/

// Activation and Deactivation Hooks
register_activation_hook(__FILE__, 'your_plugin_activation_function');
register_deactivation_hook(__FILE__, 'your_plugin_deactivation_function');