<?php
// Add admin menu
add_action('admin_menu', 'custom_post_types_plugin_menu');

function custom_post_types_plugin_menu() {
    add_menu_page(
        'Custom Post Types Plugin',
        'Custom Post Types',
        'manage_options',
        'custom_post_types_plugin',
        'custom_post_types_plugin_page'
    );
}

// Settings page callback
function custom_post_types_plugin_page() {
    ?>
    <div class="wrap">
        <h2>Custom Post Types Plugin</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom_post_types_settings');
            do_settings_sections('custom_post_types_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings and fields
add_action('admin_init', 'custom_post_types_plugin_settings');

function custom_post_types_plugin_settings() {
    register_setting('custom_post_types_settings', 'custom_post_types_options');

    add_settings_section(
        'custom_post_types_section',
        'Custom Post Type Settings',
        'custom_post_types_section_callback',
        'custom_post_types_settings'
    );

    add_settings_field(
        'post_type_name',
        'Post Type Name',
        'post_type_name_callback',
        'custom_post_types_settings',
        'custom_post_types_section'
    );
}

function custom_post_types_section_callback() {
    echo '<p>Configure the custom post type settings.</p>';
}

function post_type_name_callback() {
    $options = get_option('custom_post_types_options');
    $post_type_name = isset($options['post_type_name']) ? $options['post_type_name'] : '';

    echo "<input type='text' name='custom_post_types_options[post_type_name]' value='$post_type_name' />";
}
