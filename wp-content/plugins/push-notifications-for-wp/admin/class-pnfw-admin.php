<?php

if (!defined('ABSPATH')) {
 exit; // Exit if accessed directly
}

$admin_dashboard = new PNFW_Admin();

final class PNFW_Admin {
  public function __construct() {
    add_action('admin_menu', array($this, 'menus'));

    add_action('admin_enqueue_scripts', array($this, 'load_admin_meta_box_script'));

  add_action('admin_head', array($this, 'admin_header'));





 }

 function admin_header() {
  echo '<style type="text/css">';

  // Common
  echo '.textfield { width: 100%; }';

  // App Subscribers page
  echo '.wp-list-table .column-username { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-email { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-user_categories { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-devices { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-excluded_categories { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';

  // Tokens page
  echo '.wp-list-table .column-id { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-token  { max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-user_id { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-timestamp { overflow: hidden; text-overflow: ellipsis; }';
  echo '.wp-list-table .column-os { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-lang { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-status { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';

  // Debug page
  echo '.wp-list-table .column-type { width: 9%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }';
  echo '.wp-list-table .column-timestamp { width: 16%; overflow: hidden; text-overflow: ellipsis; }';
  echo '.wp-list-table .column-text { overflow: hidden; text-overflow: ellipsis; }';

  echo '.log-type-' . PNFW_SYSTEM_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #cccccc; }';
  echo '.log-type-' . PNFW_IOS_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #3980d5; }';
  echo '.log-type-' . PNFW_ANDROID_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #99cc00; }';
  echo '.log-type-' . PNFW_KINDLE_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #fd9924; }';
  echo '.log-type-' . PNFW_FEEDBACK_PROVIDER_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #3980d5; }';
  echo '.log-type-' . PNFW_ALERT_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #f27d7d; }';
  echo '.log-type-' . PNFW_SAFARI_LOG . ' { width: 20px; height: 20px; border-radius: 50%; background-color: #1fbbd7; }';
  echo '.log-type-other { width: 20px; height: 20px; border-radius: 50%; background-color: #be2ad5; }';
  echo '</style>';
 }

 function menus() {
  $admin_capability = 'activate_plugins';
  $editor_capability = 'publish_pages';

  $menu_slug = 'push-notifications-for-wordpress';

  $page_hook_suffix = add_menu_page(
   __('Push Notifications', 'push-notifications-for-wp'),
   __('Push Notifications', 'push-notifications-for-wp'),
   $editor_capability,
   $menu_slug,
   array($this, 'stats_page'),
   plugin_dir_url(__FILE__) . '../assets/imgs/icon-menu.png',
   200);







  $page_hook_suffix = add_submenu_page(
   $menu_slug,
   __('Settings', 'push-notifications-for-wp'),
   __('Settings', 'push-notifications-for-wp'),
   $admin_capability,
   'pnfw-settings-identifier',
   array($this, 'settings_page'));

  add_action('admin_print_scripts-' . $page_hook_suffix, array($this, 'plugin_admin_scripts'));





  $page_hook_suffix = add_submenu_page(
   $menu_slug,
   __('OAuth', 'push-notifications-for-wp'),
   __('OAuth', 'push-notifications-for-wp'),
   $admin_capability,
   'pnfw-oauth-identifier',
   array($this, 'oauth_page'));





  $page_hook_suffix = add_submenu_page(
   $menu_slug,
   __('App Subscribers', 'push-notifications-for-wp'),
   __('App Subscribers', 'push-notifications-for-wp'),
   $editor_capability,
   'pnfw-app-subscribers-identifier',
   array($this, 'app_subscribers_page'));





  $page_hook_suffix = add_submenu_page(
   $menu_slug,
   __('Tokens', 'push-notifications-for-wp'),
   __('Tokens', 'push-notifications-for-wp'),
   $editor_capability,
   'pnfw-tokens-identifier',
   array($this, 'tokens_page'));





  $page_hook_suffix = add_submenu_page(
   $menu_slug,
   __('Debug', 'push-notifications-for-wp'),
   __('Debug', 'push-notifications-for-wp'),
   $admin_capability,
   'pnfw-debug-identifier',
   array($this, 'debug_page'));




 }

 function stats_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-stats.php';

  PNFW_Admin_Stats::output();
 }

 function settings_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-settings.php';

  PNFW_Admin_Settings::output();
 }

 function oauth_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-oauth.php';

  PNFW_Admin_OAuth::output();
 }

 function app_subscribers_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-subscribers.php';

  PNFW_Admin_Subscribers::output();
 }

 function tokens_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-tokens.php';

  PNFW_Admin_Tokens::output();
 }

 function debug_page() {
  require_once dirname(__FILE__ ) . '/class-pnfw-admin-debug.php';

  PNFW_Admin_Debug::output();
 }
 function plugin_admin_scripts() {
  wp_enqueue_media();
  wp_enqueue_script('admin_settings', plugin_dir_url(__FILE__) . '../assets/js/admin_settings.js', array('jquery'));
  wp_localize_script('admin_settings', 'data', array(
   'uploader_title' => __('Upload', 'push-notifications-for-wp'),
   'uploader_button_text' => __('Select', 'push-notifications-for-wp')
  ));
 }

 function load_admin_meta_box_script() {
  global $pagenow;

  if (is_admin() && ($pagenow == 'post-new.php' || $pagenow == 'post.php')) {
   wp_register_script(
    'admin_meta_box',
    plugin_dir_url(__FILE__) . '../assets/js/admin_meta_box.js',
    array('jquery'),
    null,
    false);

   wp_enqueue_script('admin_meta_box');

   wp_localize_script('admin_meta_box',
    'strings',
    array(
     'str1' => __('Send and make visible only to', 'push-notifications-for-wp') . ':',
     'str2' => __('Make visible only to', 'push-notifications-for-wp') . ':'
    )
   );
  }
 }
}
