
<?php
   $a = shell_exec( "git config --global user.name ");
   $e = array("saravana", "harsha");
   print_r($a);
   print_r($e);
   $b = shell_exec( "git config --global branch.master.remote");
   print_r($b);
   $c = shell_exec( "git config --global remote.heroku.url");
   print_r($c);
   $d = shell_exec( "git config --global user.email" );
   print_r($d);
?>
