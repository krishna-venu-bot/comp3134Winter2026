
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? basename($_GET['q']) : '.';

// Prevent accessing non-existing directories
if (!file_exists($path)) {
    die("Path does not exist");
}

// Prevent accessing files (only allow directories)
if (strpos($path, '.') !== false && $path !== '.') {
    die("Invalid input");
}

print "<pre>";
print_r(scandir($path));
print "</pre>";
?>
