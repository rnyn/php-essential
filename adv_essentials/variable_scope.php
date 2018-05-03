<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
		<title>Variable Scope</title>
	</head>
	<body>
	<?php

	$var = 1;
	function test1() {
		$var = 2;
		echo $var . "<br />";
	}
	test1();
	echo $var . "<br />";

	echo "<hr />";

	$var = 1;
	function test2() {
		global $var;
		$var = 2;
		echo $var . "<br />";
	}
	test2();
	echo $var . "<br />";

	echo "<hr />";

	$var = 1;
	function test3() {
		static $var = 2;
		echo $var . "<br />";
		$var++;
	}
	test3();
	test3();
	test3();
	echo $var . "<br />";
	?>
	</body>
</html>
