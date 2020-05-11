<?php
  function pluginMenu () {
      add_menu_page( 'Github CD', 'Github CD', 'manage_options', 'my-menu', 'clivern_render_custom_page');
      add_submenu_page('my-menu', 'settings', 'settings', 'manage_options', 'my-settings', 'clivern_render_custom_page');
  }
  add_action( 'admin_menu', 'PluginMenu' );

function clivern_render_custom_page() { 
  require_once( 'wp-project.php' );
  
}
?>


