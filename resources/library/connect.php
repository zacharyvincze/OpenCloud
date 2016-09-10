<?php
  require_once '../resources/configuration/config.php';
  require_once '../resources/library/secure-session.php';

  sec_session_start();

  $connect = new mysqli(HOST, USER, PASSWORD, DATABASE);

  if($connect->connect_error) {
      die('Connection to database failed!');
  }

  $GLOBALS["connect"] = $connect;
?>
