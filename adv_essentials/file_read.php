<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

$file = 'filetest.txt';
if($handle = fopen($file, 'r')) { // read
	$content = fread($handle, 6); // each character is 1 byte
	fclose($handle);
}

echo $content;
echo "<br />";
echo nl2br($content);
echo "<hr />";

// use filesize() to read the whole file
$file = 'filetest.txt';
if($handle = fopen($file, 'r')) {  // read
  $content = fread($handle, filesize($file));
  fclose($handle);
}

echo nl2br($content);
echo "<hr />";

// file_get_contents(): shortcut for fopen/fread/fclose
// companion to shortcut file_put_contents()
$content = file_get_contents($file);
echo $content;
echo "<hr/>";


// incremental reading
$file = 'filetest.txt';
$content = "";
if($handle = fopen($file, 'r')) {  // read
	while(!feof($handle)) {
		$content .= fgets($handle);
	}
  fclose($handle);
}

echo $content;
echo "<hr/>";



?>
