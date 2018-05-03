<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
		<title>References as Function Arguments</title>
	</head>
	<body>
	<?php

		function ref_test(&$var) {
			$var = $var * 2;
		}
		$a = 10;
		ref_test($a);
		echo $a;

	?>
	</body>
</html>
