
<?php
   $a = exec( "git config --global help 2>&1" );
   $b = exec( "git config --global branch.master.remote 2>&1");
   $c = exec( "git config --global remote.heroku.url 2>&1");
   $d = exec( "git config --global hostname 2>&1" );
   print_r($a);
   print_r($b);
   print_r($c);
   print_r($d);
?>
