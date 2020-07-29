<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

    //create new top-level menu
    add_menu_page('My Cool Plugin Settings', 'KQXS', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('../assets/img/LG_03.jpg', __FILE__) );

    //call register settings function
    add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}


function register_my_cool_plugin_settings() {
    //register our settings
    register_setting( 'my-cool-plugin-settings-group', 'new_option_name' );
    register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
    register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}

function my_cool_plugin_settings_page() {
    ?>
    <div class="main_kqxs_wiew_shortcode">
        <h2>Shortcode KQXS</h2>

    </div>
<?php }
