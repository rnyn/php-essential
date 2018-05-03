<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

// 1. Close files first. Can't delete open files.
// 2. Must have write permission on the folder containing the file.

// Delete files (carefully) with:
unlink("filetest.txt");


?>
