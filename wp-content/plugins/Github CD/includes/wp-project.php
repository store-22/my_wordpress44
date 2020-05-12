<?php
   $file = parse_ini_file(".git/config");
  print_r($file);
  print_r($file['url']);
  print_r($file['fetch']);

?>