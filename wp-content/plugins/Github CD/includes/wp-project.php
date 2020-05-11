
<?php
   $a = shell_exec( "git config --global user.name store-22 2>&1");
   $e = array("saravana", "harsha");
   print_r($a);
   print_r($e);
   $b = shell_exec( "git config --global branch.master.remote heroku 2>&1");
   print_r($b);
   $c = shell_exec( "git config --global remote.heroku.url https://git.heroku.com/my-wordpress44.git 2>&1");
   print_r($c);
   $d = shell_exec( "git config --global user.email 64090712+store-22@users.noreplay.github.com 2>&1");
   print_r($d);
?>
