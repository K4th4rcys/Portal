<?php
  $pass = hash('sha256', $_POST[password]);
  $user = $_POST['username'];
  $reply;

  $db = new mysqli('192.168.0.14', 'max', 'password', 'user');

  if($db->connect_errno > 0){
      $reply['error'] = 'Unable to connect to database [' . $db->connect_error . ']';
  }


  $sql = <<<SQL
    SELECT 'password'
    FROM `users`
    WHERE `username` = $user
SQL;

if(!$result = $db->query($sql)){
  $reply['error'] = 'There was an error running the query [' . $db->error . ']';
}

if ($result == $pass) {
      $_SESSION['user'] = $user;
      $reply['status'] = 'success';
    } else {
      $reply['status'] = 'failed';
      unset($_SESSION['user']);
    }
  echo $reply;
 ?>
