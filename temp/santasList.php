<?php
$xmlList = simplexml_load_file("santasList.xml") or die("Error: Cannot create object");
foreach($xmlList->child as $list){
	$status=$list->status;
	$name=$list->name;
	$age=$list->age;
	$req=$list->request;
	
	echo "<div style='width:30%'><p style='color:red;border-bottom:2px red solid;font-weight:900;'>Status: " . $status . "<br>" .
	"<span style='background-color:white;color:black;'>Name: " . $name . "<br>" .
	"Age: " . $age . "<br>" .
	"Request: " . $req . "</span></p></div>";
	
}
?>