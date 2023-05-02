<?php

if (!function_exists('extract_request')) {
  function extract_request(){
    return json_decode(file_get_contents('php://input'), true);
  }
}


?>