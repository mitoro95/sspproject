<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" action="IT306Lab1.php" >
          F  <input type="text" name="first" id="f"/></br>
          S <input type="text" name="second" id="s"/></br>
          T <input type="text" name="third" id="t"/></br>
          <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    $a=$_POST('first');
    echo "First is " . $a;
    ?>

  </body>
</html>
