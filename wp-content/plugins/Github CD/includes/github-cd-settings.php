<?php
//initialize settings
  //add_action('admin_menu','clivern_plugin_top_menu');
  //function helloworld() {
  //    echo "hello world";
  //}
  //add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);

  //add settings
 // function clivern_plugin_top_menu(){
  //  add_menu_page('Github CD', 'Github CD', 'manage_options', __FILE__, 'helloworld');
  //  add_sub_menu();
  //}
  
  function pluginMenu () {
      add_menu_page( 'Github CD', 'Github CD', 'manage_options', 'my-menu', 'clivern_render_custom_page');
      add_submenu_page('my-menu', 'settings', 'settings', 'manage_options', 'my-settings', 'clivern_render_custom_page');
  }
  add_action( 'admin_menu', 'PluginMenu' );

function clivern_render_custom_page() { ?>
   <h1>Github Connection</h1>
  <?php
}


