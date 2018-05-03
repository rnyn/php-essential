<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
		<title>Variable Variables</title>
	</head>
	<body>
	<?php
	$a = "hello";
	$hello = "Hello everyone.";
	echo $a ."<br />";
	echo $hello."<br />";

	echo $$a."<br />";

	// What does $$var[1] mean?
	// #1: get the first element then evaluate dynamically?
	// #2: evaluate dynamically then get the first element?

	// Use {} to make it clear:
	// echo ${$var[1]};  // for #1
	// echo ${$var}[1];	 // for #2

	?>
	</body>
</html>
