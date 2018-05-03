<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

class Person {
	function say_hello() {
		echo "Hello from inside a class.<br />";
	}
}

$methods = get_class_methods('Person');
foreach($methods as $method) {
	echo $method . "<br />";
}

if(method_exists('Person', 'say_hello')) {
	echo "Method does exist.<br />";
} else {
	echo "Method does not exist.<br />";
}
?>
