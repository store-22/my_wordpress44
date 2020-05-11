
<?php
   $a = shell_exec( "git config --system user.name 2>&1" );
   $b = shell_exec( "git config --system branch.master.remote 2>&1");
   $c = shell_exec( "git config --system remote.heroku.url 2>&1");
   $d = shell_exec( "git config --system user.email 2>&1" );
   print_r($a);
   print_r($b);
   print_r($c);
   print_r($d);
?>
