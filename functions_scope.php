<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Scope</title>
  </head>
  <body>

    <?php
    echo "<h1>SOURCE CODE</h1>";
    highlight_file("functions_scope.php");
    echo "<hr><h1>OUTPUT</h1>";

      $bar = "outside";   // global scope

      function foo() {
        global $bar;
        if (isset($bar)) {
          echo "foo: " . $bar . "<br />";
        }
        $bar = "inside";  // local scope
      }

      echo "1: " . $bar . "<br />";
      foo();
      echo "2: " . $bar . "<br />";


    ?>

  </body>
</html>
