<?php

$phpfiles = glob("*.php");

echo "<h1>PHP ESSENTIALS</h1>";

foreach($phpfiles as $phpfile)
{
echo "<br><a href=$phpfile>".basename($phpfile)."</a></ br>";
}
echo "<p><a href='adv_essentials/index.php' style='color:red;'>more advanced essentials &raquo;</a>";
?>
