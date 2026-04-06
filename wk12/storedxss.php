<?php
$file = fopen("storedxss.txt", "r");
$content = fread($file, filesize("storedxss.txt"));
fclose($file);

echo $content;
?>
