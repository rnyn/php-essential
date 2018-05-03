<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>"; ?>
		<?php

class Person {

}

//$classes = get_declared_classes();
//foreach($classes as $class) {
//	echo $class ."<br />";
//}

if(class_exists("Person")) {
	echo "That class has been defined.<br />";
} else {
	echo "Class not defined!<br />";
}

?>
