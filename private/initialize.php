<?php

//  Define constants
// __FILE__: Returns the path of the current file
// __DIR__: Returns the directory of the current file
// dirname(): Returns the parent directory of a path

//  Define paths
  define("PRIVATE_PATH", __DIR__);
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');


  require_once('functions.php');
?>
