<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php

class Table {
	public $legs;
	static public $total_tables=0;

  function __construct($leg_count=4) {
		$this->legs = $leg_count;
		Table::$total_tables++;
  }
  function __destruct() {
    Table::$total_tables--;
  }

}
$table = new Table();
echo $table->legs ."<br />";

echo Table::$total_tables ."<br />"; // 1
$t1 = new Table(5);
echo Table::$total_tables ."<br />";
$t2 = new Table(6);
echo Table::$total_tables ."<br />";


?>
