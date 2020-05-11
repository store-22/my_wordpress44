<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php  
   $a = shell_exec( "git config --global user.name 2>&1");
   $b = shell_exec( "git config --global branch.master.remote 2>&1");
   $c = shell_exec( "git config --global remote.heroku.url 2>&1");
   $d = shell_exec( "git config --global user.email 2>&1");
    ?>
    <div class="jumbotron text-left">
  <h1>Github Connection </h1>
  <p>Repository details</p> 
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
?>
</body>
</html>
 

