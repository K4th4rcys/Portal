<?php
  define('DB_HOST', '192.168.0.14');
  define('DB_NAME', 'user');
  define('DB_USER', 'max');
  define('DB_PASSWORD', 'password');

  $pass = hash('sha256', $_POST[password]);
  $user = $_POST['username'];
  $reply;
  $con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
  /* $ID = $_POST['user'];
  $Password = $_POST['pass'];*/
  function SignIn()
  {
      session_start();
      //starting the session for user profile page
      if (!empty($_POST['user'])) { //checking the 'user' name which is from Sign-In.html, is it empty or have some text
       $query = mysql_query("SELECT * FROM UserName where userName = '{$user}' AND pass = '{$pass}'") or die(mysql_error());
          $row = mysql_fetch_array($query) or die(mysql_error());
          if (!empty($row['username']) and !empty($row['password'])) {
              $_SESSION['username'] = $row['username'];
              $reply = "success";
          } else {
              $reply = "failure";
          }
      }
  } if (isset($_POST['submit'])) {
    if( SignIn() == "success") {

      $_SESSION['user'] = $user;
    }
  }
  echo $reply;
 ?>
