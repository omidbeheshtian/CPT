<?php
add_action('init', 'example_post_type');
function example_post_type()
{
    $labels = array(
        'name' => 'example ها',
        'singular_name' => 'example ها',
        'add_new' => 'اضافه کردن example',
        'add_new_item' => 'اضافه کردن example ها',
        'edit_item' => 'ویرایش example',
        'new_item' => 'example جدید',
        'all_items' => 'همه example ها',
        'view_item' => 'دیدن example',
        'search_items' => 'جستجو در example ها',
        'not_found' => 'هیچ exampleی یافت نشد',
        'not_found_in_trash' => 'هیچ exampleی در زباله دان نیست',
        'parent_item_colon' => '',
        'menu_name' => 'example ها',
    );

    $args = array(
        'labels' => $labels,
        'description' => __('example'),
        'rewrite' => array('slug' => 'example'),/*your link after your site */
        'public' => true,
        'has_archive' => true,
        'show_in_nav_menus' => false,
        'menu_icon' => 'dashicons-megaphone',/*your icon*/
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

// register taxonomy

function creat_example_tax(){
    register_taxonomy(
        'type',
        'example',
        array(
            'label' => 'نوع example',
            'rewrite' => array( 'slug' => 'type' ),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'creat_example_tax');

