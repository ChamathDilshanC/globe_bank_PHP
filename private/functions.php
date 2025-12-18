<?php

function url_for($script_path){
  if($script_path[0] != '/'){
    $script_path = '/' . $script_path;
  }
  // If WWW_ROOT is empty or false, use '/' as default
  $root = (defined('WWW_ROOT') && WWW_ROOT) ? WWW_ROOT : '/';
  // Remove trailing slash from root to prevent double slashes
  $root = rtrim($root, '/');
  return $root . $script_path;
}

function u ($string=""){
  return urlencode($string);
}

function raw_u ($string=""){
  return urldecode($string);
}

function hsc ($string= ""){
  return htmlspecialchars($string);
}
?>
