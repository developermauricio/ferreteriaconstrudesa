<?php
/**
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 *
 * @wordpress-plugin
 * Plugin Name:       WhatsApp Chat by NinjaTeam
 * Plugin URI:        https://ninjateam.org/wordpress-whatsapp-chat
 * Description:       Integrate your WhatsApp experience directly into your website. This is one of the best way to connect and interact with your customer.
 * Version:           2.3.3
 * Author:            NinjaTeam
 * Author URI:        https://ninjateam.org
 * Text Domain:       ninjateam-whatsapp
 * Domain Path:       /languages
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

function nta_whatsapp_action_links($links)
{
    $links = array_merge(array(
        '<a href="' . esc_url(admin_url('/admin.php?page=floating-widget-whatsapp')) . '">' . __('Settings', 'ninjateam-whatsapp') . '</a>',
    ), $links);
    return $links;
}
add_action('plugin_action_links_' . plugin_basename(__FILE__), 'nta_whatsapp_action_links');

function nta_whatsapp_uninstall_hook()
{
    delete_option('nta_whatsapp_setting');
    delete_option('nta_wabutton_setting');
    delete_option('nta_wa_woobutton_setting');
}

register_uninstall_hook(__FILE__, 'nta_whatsapp_uninstall_hook');

function nta_whatsapp_languages_init()
{
    $current_user = wp_get_current_user();

    if (!($current_user instanceof WP_User)) {
        return;
    }

    if (function_exists('get_user_locale')) {
        $language = get_user_locale($current_user);
    } else {
        $language = get_locale();
    }
    
    load_textdomain("ninjateam-whatsapp", NTA_WHATSAPP_PLUGIN_DIR . '/languages/' . $language  . '.mo');
}

add_action('plugins_loaded', 'nta_whatsapp_languages_init');

define('NTA_WHATSAPP_VERSION', '1.0.0');
define('NTA_WHATSAPP_MINIMUM_WP_VERSION', '4.1.1');
define('NTA_WHATSAPP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('NTA_WHATSAPP_PLUGIN_DIR', plugin_dir_path(__FILE__));

define('NTA_WHATSAPP_DEFAULT_AVATAR', '<svg width="48px" height="48px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
    <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
    S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"/>
    <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
    c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
    c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"/>
    <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
    c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
    c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
    c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
    c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
    l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"/>
</svg>');

require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-post-type.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-popup.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-setting.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-class.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-shortcode.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-woocommerce.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-ads.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/nta-whatsapp-wpml.php';
require_once NTA_WHATSAPP_PLUGIN_DIR . 'includes/Helper.php';

$nta_whatsapp = NTA_Whatsapp::getInstance();

//Gutenberg
if ( function_exists( 'register_block_type' ) ) {
    // Gutenberg is available.
    require_once plugin_dir_path( __FILE__ ) . 'gutenberg/init.php';
}

