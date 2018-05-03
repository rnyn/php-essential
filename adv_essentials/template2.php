<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<html>
	<head>
	  <title>{page_title}</title>
	</head>
	<body>

		<h1>{page_title}</h1>

		<p>{content}</p>

	</body>
</html>
