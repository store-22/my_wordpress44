
<?php
   $e = shell_exec("git config -l 2>&1");
   echo "<pre>" . $e . "<pre>";
?>
