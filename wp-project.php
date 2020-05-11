<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
   $a = shell_exec( "git config --global user.name store-22 2>&1");
   $b = shell_exec( "git config branch.master.remote heroku 2>&1");
   $c = shell_exec( "git config remote.heroku.url https://git.heroku.com/my-wordpress44.git 2>&1");
   $d = shell_exec( "git config user.email 64090712+store-22@users.noreplay.github.com 2>&1");
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
</body>
</html>