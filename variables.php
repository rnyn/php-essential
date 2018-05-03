<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Variables</title>
  </head>
  <body>
  <?php
  echo "<h1>SOURCE CODE</h1>";
  highlight_file("variables.php");
  echo "<hr><h1>OUTPUT</h1>";

  $var1 = 10;
  echo $var1;

  echo "<br />";

  $var1 = 100;
  echo $var1;

  echo "<br />";

  $var2 = "Hello world";
  echo $var2;

  ?>
  </body>
</html>
