<?php
$xmlList = simplexml_load_file("category.xml") or die("Error: Cannot create object");
foreach($xmlList->category as $cat){
	$id=$cat->id;
	$title=$cat->title;
	$time=$cat->time;
	$owner=$cat->owner;		
	echo "<div style='width:40%'><p style='color:green;border-bottom:2px green solid;font-weight:900;'>ID: " . $id . "<br>" .
	"<span style='background-color:white;color:black;'>Title: " . $title . "<br> Time Added: ". $time . "<br>" .
	"Owner: " . $owner . "</span></p></div>";
}
?>