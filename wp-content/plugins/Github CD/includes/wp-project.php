
<?php
   $a = exec( "git config --list 2>&1" );
   print_r($a);
?>
