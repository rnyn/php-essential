<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
		<title>Dates and Times: Unix</title>
	</head>
	<body>
	<?php
		echo time();
		echo "<br />";
		echo mktime(2, 30, 45, 10, 1, 2009);
		echo "<br />";
		// checkdate()
		echo checkdate(12,31,2000) ? 'true' : 'false';
		echo "<br />";
		echo checkdate(2,31,2000) ? 'true' : 'false';
		echo "<br />";

		$unix_timestamp = strtotime("last Monday");
		echo $unix_timestamp . "<br />";
	?>
	</body>
</html>
