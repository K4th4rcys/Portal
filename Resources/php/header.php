<?php
  session_start();
  echo("header here");
  if(!isset($_SESSION['user'])) {
  header("Location: /login.php");
  }
  exit;

 ?>
