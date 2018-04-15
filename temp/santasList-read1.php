<?php
$xmlList = simplexml_load_file("santasList.xml") or die("Error: Cannot create object");
echo $xmlList->child->status . "<br>";
echo $xmlList->child->name . "<br>";
echo $xmlList->child->age . "<br>";
echo $xmlList->child->request . "<br>";
?>