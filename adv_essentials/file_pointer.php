<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

$file = 'filetest.txt';
if($handle = fopen($file, 'w')) {  // overwrite
  fwrite($handle, "123\n456\n789");

	$pos = ftell($handle);

	fseek($handle, $pos-6);
	fwrite($handle, "abcdef");

	rewind($handle);
	fwrite($handle, "xyz");

  fclose($handle);
}

// Beware, it will OVERTYPE!!!
// NOTE: a and a+ modes will not let you move the pointer

?>
