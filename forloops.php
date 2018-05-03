<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: for</title>
  </head>
  <body>

    <?php

    echo "<h1>SOURCE CODE</h1>";
    highlight_file("forloops.php");
    echo "<hr><h1>OUTPUT</h1>";
     // while loop example
      $count = 0;
      while ($count <= 10) {
        echo $count . ", ";
        $count++;
      }
    ?>
    <br />
    <?php

      for($count = 0; $count <= 10; $count++) {
        echo $count . ", ";
      }

    ?>

    <br />
    <?php

      for ($count = 20; $count > 0; $count--) {
        if ($count % 2 == 0) {
          echo "{$count} is even.<br />";
        } else {
          echo "{$count} is odd.<br />";
        }
      }

    ?>


  </body>
</html>
