<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

  $page_title = "Template Test";
  $content = "This is a test of templating using variables.";

  include('template1.php');
?>
