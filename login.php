<!DOCTYPE html>
<!--
The code contained in this portal website is to remain in this website and not
be used in any other location except with the express permission of it's creator,
Maxwell Gariety. This includes on personal projects.
-->
<html>
    <head>
      <?php
        session_start();
        include("/Resources/php/userdb.php");
      ?>
        <meta charset="UTF-8">
        <title>Login || The Gariety Portal</title>
        <script type='text/javascript' src='Resources/js/jquery-3.2.1.js'></script>
        <script type='text/javascript' src='Resources/js/jquery-ui.js'></script>
        <script type='text/javascript' src='Resources/js/login.js'></script>
        <link rel="stylesheet" type="text/css" href="Resources/css/login.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/general.css">
        <link rel="icon" type="image/png" href="Resources/images/favicon.ico">
    </head>
    <body>
      <div id="logo">Web-Gariety</div>
      <div id="login_content" class="login">
        <form id="logform" class="login_form">
          <table>
            <tr><th colspan="2"><h2 style="text-align:center; padding-top:20px;">Please Log In</h2></th></tr>
            <tr><td>Username:</td><td><input type="text" name="username" placeholder="Username"></input></td></tr>
            <tr><td>Password:</td><td><input type="password" name="password" placeholder="Password"></input></td></tr>
          </table>
          <br />
          <table>
            <tr>
              <td><input type="button" id="create_account" class="login_btn" value="Create Account"/></td>
              <td style="width:20px;"></td>
              <td><input type="button" id="login" class="login_btn" value="Submit" /></td>
            </tr>
          </table>
        </form>
      </div>
      <div id="new_user" class="login">
        <form id="create_user" class="login_form">
          <table>
            <tr><th colspan="2"><h2 style="text-align:center; padding-top:20px;">Please Create an Acount</h2></th></tr>
            <tr><td>Name:</td><td><input type="text" name="name" placeholder="Name"></input></td></tr>
            <tr><td>Username:</td><td><input type="text" name="new_user" placeholder="Username"></input></td></tr>
            <tr><td>Password:</td><td><input type="password" name="new_pass" placeholder="Password"></input></td></tr>
          </table>
          <br />
          <table>
            <tr>
              <td><input type="button" id="log_in" class="login_btn" value="Use Log In"/></td>
              <td style="width:20px;"></td>
              <td><input type="button" id="submit" class="login_btn" value="Submit" /></td>
            </tr>
          </table>
        </form>
      </div>
      <div id="ajax_loader">
        <div id="textbox">
          <div id="loader1"></div>
          <div id="loader2"></div>
          <div id="loader3"></div>
          <div id="loader4"></div>
        </div>
      </div>

    </body>
</html>
