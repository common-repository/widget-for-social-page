<?php
/**
 * Plugin Name: Widget for Social Page
 * Description: It will embed your facebook page into a widget area. You can add a widget in any of your widget areas and It will show your facebook page.
 * Version: 1.0.0
 * Author: MhrTheme
 * Author URI: https://mhrtheme.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: widget-for-social-page
 * Domain Path: /languages
 */

/**
 * Include Assets
 */
add_action('wp_enqueue_scripts', 'widget_for_social_page_scripts');

function widget_for_social_page_scripts() {
	wp_register_style( 'widget-for-social-page-style', plugins_url('/assets/css/widget-for-social-page.css', __FILE__ ) );
    wp_enqueue_style( 'widget-for-social-page-style' );

    wp_enqueue_script( 'widget-for-social-page-script', plugins_url('/assets/js/widget-for-social-page.js', __FILE__ ), array( 'jquery' ) );
}

if(file_exists(dirname(__File__).'/includes/widget-for-social-page-embed.php')) {
	require_once(dirname(__File__).'/includes/widget-for-social-page-embed.php');
}
