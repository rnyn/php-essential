<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body>
    <?php
    echo "<h1>SOURCE CODE</h1>";
    highlight_file("debugging.php");
    echo "<hr><h1>OUTPUT</h1>";
      $number = 99;
      $string = "Bug?";
      $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

      var_dump($number);
      var_dump($string);
      var_dump($array);

    ?>
    <br />
    <pre>
    <?php
      // print_r(get_defined_vars());
    ?>
    </pre>
    <br />
    <?php

      function say_hello_to($word) {
        echo "Hello {$word}!<br />";
        var_dump(debug_backtrace());
      }

      say_hello_to('Everyone');
    ?>
  </body>
</html>
