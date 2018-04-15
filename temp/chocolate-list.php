<?php
$xmlList = simplexml_load_file("chocolate.xml") or die("Error: Cannot create object");
foreach($xmlList->manufacturer as $yum){
	$name=$yum->name;
	$founder=$yum->founder;
	$location=$yum->country;

	
	echo "<div style='width:40%'><p style='color:brown;border-bottom:2px brown solid;font-weight:900;'>Chocolatier: " . $name . "<br>" .
	"<span style='background-color:white;color:black;'>Founder: " . $founder . "<br>" .
	"Location: " . $location . "</span></p></div>";
}
?>