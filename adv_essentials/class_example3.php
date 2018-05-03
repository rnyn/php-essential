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

$person = new Person();
$person2 = new Person();

echo get_class($person) . "<br />";

if(is_a($person, 'Person')) {
	echo "Yup, it's a Person.<br />";
} else {
	echo "Not a Person.<br />";
}

$person->say_hello();


?>
