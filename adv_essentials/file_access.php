<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

$file = 'filetest.txt';
if($handle = fopen($file, 'w')) {
	fclose($handle);
} else {
	echo "Could not open file for writing.";
}

?>
