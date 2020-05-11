
<?php
   $a = exec( ".git/config git config --global --list 2>&1" );
   echo "<pre>" .$a. "<pre>";
?>
