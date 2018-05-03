<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php
$a = 'Kevin';
$b = 'Mary';
$c = 'Joe';
$d = 'Larry';
$e = 'Audrey';

$students = array('a', 'c', 'e');

foreach($students as $seat) {
	echo $$seat . "<br />";
}

?>
