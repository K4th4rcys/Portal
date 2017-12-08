<?php
  define('DB_HOST', '192.168.0.14');
  define('DB_NAME', 'user');
  define('DB_USER', 'max');
  define('DB_PASSWORD', 'password');

  $pass = hash('sha256', $_POST[new_pass]);
  $user = $_POST['new_user'];


  $con=mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
  $db=mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
  /* $ID = $_POST['user'];
  $Password = $_POST['pass'];*/
  function SignIn()
  {
      session_start();
      //starting the session for user profile page
      if (!empty($_POST['new_user'])) { //checking the 'user' name which is from Sign-In.html, is it empty or have some text

       $query = mysql_query("INSERT INTO 'members'('name', 'username', 'password') VALUES ('$_POST[name]', '$_POST[new_user]', '{$pass}')") or die(mysql_error());
       $qz = mysql_query("SELECT * FROM user where username = '$_POST[new_user]' AND pass = '{$pass}'");
          $row = mysql_fetch_array($query) or die(mysql_error());
          if (!empty($row['username']) and !empty($row['pass'])) {
              $_SESSION['username'] = $row['pass'];
              $response =  "success";
          } else {
              $response = "failure";
          }
      }
      return $response;
  }
  if (isset($_POST['submit'])) {
    if(SignIn() == "failure"){
      
    }
  }


?>
