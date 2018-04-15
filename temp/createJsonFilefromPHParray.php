<?php
include 'php-dinner-array.php';
$myfile = fopen("jsonDinner.json", "w") or die("Unable to open file!");
$printString = json_encode($dinner);
fwrite($myfile, $printString);
echo "The jsonDinner file has been created";
fclose($myfile);
?>