
<?php
   $a = shell_exec( "git config --local user.name" );
   $e = array("saravana", "harsha");
   print_r($a);
   print_r($e);
   $b = shell_exec( "git config --local branch.master.remote");
   print_r($b);
   $c = shell_exec( "git config --local remote.heroku.url");
   print_r($c);
   $d = shell_exec( "git config --local user.email" );
   print_r($d);
?>
