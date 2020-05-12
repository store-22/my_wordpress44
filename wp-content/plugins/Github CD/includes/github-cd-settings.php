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

   $a = shell_exec( "git config --global user.name 2>&1");
   $b = shell_exec( "git config --global branch.master.remote 2>&1");
   $c = shell_exec( "git config --global remote.heroku.url 2>&1");
   $d = shell_exec( "git config --global user.email 2>&1");
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
        <td><?php echo $a; ?></td>
      </tr>
      <tr>
        <td>Github Brach</td>
        <td><?php echo $b; ?></td>
      </tr>
      <tr>
        <td>Github URL</td>
        <td><?php echo $c; ?></td>
      </tr>
      <tr>
        <td>Github EMAIL</td>
        <td><?php echo $d; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
   $file = parse_ini_file( ".git/config" );
  print_r($file);
  print_r($file['url']);
  print_r($file['fetch']);
}
?>
</body>
</html>


