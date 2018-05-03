<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

class Person {
	function say_hello() {
		echo "Hello from inside the class ". get_class($this) .".<br />";
	}
	function hello() {
		$this->say_hello();
	}
}

$person = new Person();
$person->say_hello();
$person->hello();

?>
