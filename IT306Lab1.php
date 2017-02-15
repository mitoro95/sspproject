<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $USER = "Serdar";
    echo 'My username is ' .$_ENV["USER"] . '!';
    $site_path_var = $_SERVER["SITE_HTMLROOT"];
    echo $site_path_var;
    ?>

  </body>
</html>
