<?php
  require_once '../resources/library/config.php';
  ehco "Hello";
  $connect = new mysqli(HOST, USER, PASSWORD, DATABASE);
  
  if($connect->connect_error) {
    die('Connection to database failed!');
  }
  
  $GLOBALS["connect"] = $connect;
?>
