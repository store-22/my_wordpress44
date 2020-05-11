
<?php
   $a = shell_exec( "git config --global user.name 2>&1");
   $e = array("saravana", "harsha");
   print_r($a);
   print_r($e);
   $b = shell_exec( "git config branch.master.remote 2>&1");
   print_r($b);
   $c = shell_exec( "git config remote.heroku.url 2>&1");
   print_r($c);
   $d = shell_exec( "git config user.email 2>&1");
   print_r($d);
    ?>
