<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
		<title>Reference Assignment</title>
	</head>
	<body>
	<?php

	$a = 1;
	$b = $a;
	$b = 2;
	echo "a:{$a} / b: {$b}<br />";
	// returns 1/2

	$a = 1;
	$b =& $a;
	$b = 2;
	echo "a:{$a} / b: {$b}<br />";
	// returns 2/2

	unset($b);
	echo "a:{$a} / b: {$b}<br />";

	?>
	</body>
</html>
