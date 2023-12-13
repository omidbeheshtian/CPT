<?php
add_action('init', 'example_post_type');

function example_post_type() {
    $labels = array(
        'name' => __('Examples'),
        'singular_name' => __('Example'),
        'add_new' => __('Add New Example'),
        'add_new_item' => __('Add New Example'),
        'edit_item' => __('Edit Example'),
        'new_item' => __('New Example'),
        'all_items' => __('All Examples'),
        'view_item' => __('View Example'),
        'search_items' => __('Search Examples'),
        'not_found' => __('No examples found'),
        'not_found_in_trash' => __('No examples found in Trash'),
        'parent_item_colon' => '',
        'menu_name' => __('Examples'),
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Example'),
        'rewrite' => array('slug' => 'example'),
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => false,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );

    register_post_type('example', $args);
}

// Register taxonomy
function create_example_tax() {
    register_taxonomy(
        'type',
        'example',
        array(
            'label' => __('Example Type'),
            'rewrite' => array('slug' => 'example-type'),
            'hierarchical' => true,
        )
    );
}

add_action('init', 'create_example_tax');