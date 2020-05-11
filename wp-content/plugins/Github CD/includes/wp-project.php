
<?php
   $a = exec( "git config --global user.name store-22 2>&1" );
   $b = exec( "git config --global branch.master.remote heroku  2>&1");
   $c = exec( "git config --global remote.heroku.url https://git.heroku.com/my-wordpress44.git 2>&1");
   $d = exec( "git config --global user.email 64090712+store-22@users.noreplay.github.com 2>&1" );
   print_r($a);
   print_r($b);
   print_r($c);
   print_r($d);
?>
