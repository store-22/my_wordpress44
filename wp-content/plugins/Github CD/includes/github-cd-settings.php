<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

  function pluginMenu () {
      add_menu_page( 'Github CD', 'Github CD', 'manage_options', 'my-menu', 'clivern_render_custom_page');
      add_submenu_page('my-menu', 'settings', 'settings', 'manage_options', 'my-settings', 'clivern_render_custom_page');
  }
  add_action( 'admin_menu', 'PluginMenu' );

function clivern_render_custom_page() { 
   $file = parse_ini_file( "config" );
     print_r($file);
    ?>
    <div class="jumbotron text-left">
  <h1>Github Connection </h1>
  <p><strong>Repository details</strong></p> 
</div>
  
<div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Github connection</th>
        <th>details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Github username</td>
        <td><?php print_r($file['user name']); ?></td>
      </tr>
      <tr>
        <td>Github Brach</td>
        <td><?php print_r($file['remote']); ?></td>
      </tr>
      <tr>
        <td>Github URL</td>
        <td><?php print_r($file['url']); ?></td>
      </tr>
      <tr>
        <td>Github EMAIL</td>
        <td><?php print_r($file['user email']) ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
 
}
?>
</body>
</html>


