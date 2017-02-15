<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" action="IT306Lab1.php" >
          F  <input type="text" name="name" id="f"/></br>
          S <input type="text" name="name" id="s"/></br>
          T <input type="text" name="name" id="t"/></br>
          <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    $USER = "Serdar";
    echo 'My username is ' .$_ENV["USER"] . '!';
    $site_path_var = $_SERVER["SITE_HTMLROOT"];
    echo $site_path_var;
    ?>

  </body>
</html>
