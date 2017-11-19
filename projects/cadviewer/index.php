<!DOCTYPE html>
<!--
The code contained in this portal website is to remain in this website and not
be used in any other location except with the express permission of it's creator,
Maxwell Gariety. This includes on personal projects.
-->
<html>
    <head>
      <?
        if(!isset($_SESSION[user_perms])){
          header("login.php");
        }
      ?>
        <meta charset="UTF-8">
        <title>The Gariety CADViewer</title>
        <script type='text/javascript' src='/Resources/js/jquery-3.2.1.js'></script>
        <script type='text/javascript' src='/Resources/js/jquery-ui.js'></script>
        <script type='text/javascript' src='../../../Resources/js/three.js'></script>
        <script type='text/javascript' src='resources/js/cad.js'></script>
        <link rel="stylesheet" type="text/css" href="resources/css/cad.css">
        <link rel="stylesheet" type="text/css" href="/Resources/css/general.css">
    </head>
    <body>
      <div id="option_pane">
        <div id="title"></div>
        <div id="context_pane">
          <div id="new_file">

          </div>
        </div>
        <div id="footer"></div>
      </div>
      <div id="content">
      </div>
    </body>
</html>
