<?php
  
  $user = 'root';
  $pass = '';
  $server = 'localhost';
  $db = 'tulip_love';

  $mysqli = mysqli_connect($server, $user, $pass, $db);
  $mysqli->set_charset('utf8');

  if ($mysqli->connect_error){
    die ('Connect Error');
  }
?>
