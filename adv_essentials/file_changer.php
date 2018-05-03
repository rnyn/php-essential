<?php
    $this_file = __FILE__;
    echo "<h1>SOURCE CODE</h1>";
    highlight_file($this_file);
    echo "<hr><h1>OUTPUT</h1>";
?>
<?php
// If safe mode is on (in php.ini) then this PHP script
// will only be able to modify files that have the same
// owner as this script has.

echo fileowner('file_permissions.php');
echo "<br />";

// if we have Posix installed
$owner_id = fileowner('file_permissions.php');
$owner_array = posix_getpwuid($owner_id);
echo $owner_array['name'];

echo "<br />";

chown('file_permissions.php', 'kevin');
// chown only works if PHP is superuser
// making webserver/PHP a superuser is a big security issue

// if we have Posix installed
$owner_id = fileowner('file_permissions.php');
$owner_array = posix_getpwuid($owner_id);
echo $owner_array['name'];

echo "<br />";

echo substr(decoct(fileperms('file_permissions.php')), 2);
chmod('file_permissions.php', 0444);
echo substr(decoct(fileperms('file_permissions.php')), 2);

echo "<br />";
echo is_readable('file_permissions.php') ? 'yes' : 'no';
echo "<br />";
echo is_writable('file_permissions.php') ? 'yes' : 'no';
echo "<br />";
?>
