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
  define("SHARED_STAFF_PATH", SHARED_PATH . '/staff');
  define("SHARED_SUBJECT_PATH", SHARED_PATH . '/subjects');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"

  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public');
  if($public_end === false) {
    // Server is running from /public, so WWW_ROOT is just '/'
    $doc_root = '/';
  } else {
    // Server is running from a parent directory, include path up to /public
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end + 7);
  }
  define("WWW_ROOT", $doc_root);



  require_once('functions.php');
?>
