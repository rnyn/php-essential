<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>"; ?>
    <?php

echo __FILE__ ."<br />";
echo __LINE__ ."<br />"; // be careful once you include files
echo dirname(__FILE__) ."<br >";
echo __DIR__ ."<br />"; // only PHP 5.3

echo file_exists(__FILE__) ? 'yes' : 'no';
echo "<br />";
echo file_exists(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";
echo file_exists(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br />";

echo is_file(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";
echo is_file(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br />";

echo is_dir(dirname(__FILE__)."/basic.html") ? 'yes' : 'no';
echo "<br />";
echo is_dir(dirname(__FILE__)) ? 'yes' : 'no';
echo "<br />";
echo is_dir('..') ? 'yes' : 'no';
echo "<br />";

?>
