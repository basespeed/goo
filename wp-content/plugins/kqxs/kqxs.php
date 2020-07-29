<?php
/**
 * Plugin Name:   Kết quả sổ số
 * Plugin URI:    https://takecare.vn
 * Description:   Design by Takecare
 * Author:        Thanh Tung
 * Author URI:    https://takecare.vn
 * Version:       1.0
 * Text Domain:   kqxs
 *
 * @package   kqxs
 * @category  Core
 * @author    Thanh Tung
 * @copyright Copyright (c) 2020, Thanh Tung.
 * @license   https://opensource.org/licenses/MIT
 * @since     1.0
 */

//include css
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'style_kq', plugins_url( 'assets/css/style.css', __FILE__ ), array(), '1.1', 'all');

    //wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function ns_admin_custom_css() {
    wp_enqueue_style( 'style_kq', plugins_url( 'assets/css/admin.css', __FILE__ ), array(), '1.1', 'all');
}
add_action( 'admin_init', 'ns_admin_custom_css' );


add_shortcode('live_mb', function (){
    $html = '<div class="live_iframe_kq" style="width: 100%;height: 479px;overflow:hidden;border-bottom: 1px solid #CCCCCC;"><iframe frameborder="0" style="overflow: scroll;" height="1000px" scrolling="yes" src="https://xoso.me/embedded/kq-mienbac" width="100%"></iframe></div>';
    return $html;
});


include "inc/main.php";
