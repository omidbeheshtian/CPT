<?php
// Hook into the init action and create custom post type
add_action('init', 'create_custom_post_type');

// Add taxonomy support when registering custom post type
function create_custom_post_type() {
    $options = get_option('custom_post_types_options');
    $post_type_name = isset($options['post_type_name']) ? $options['post_type_name'] : 'custom_post_type';

    $labels = array(
        'name' => ucfirst($post_type_name),
        'singular_name' => ucfirst($post_type_name),
        // Add other labels as needed
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('custom_taxonomy'), // Add this line for taxonomy support
        // Add other arguments as needed
    );

    register_post_type($post_type_name, $args);
}
add_action('init', 'create_custom_post_type');

