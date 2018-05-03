<?php

$phpfiles = glob("*.php");

echo "<h1>PHP ESSENTIALS</h1>";

foreach($phpfiles as $phpfile)
{
echo "<br><a href=$phpfile>".basename($phpfile)."</a></ br>";
}
