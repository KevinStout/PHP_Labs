<?php
	$chocolates = '{
	"manufacturer":[
		{
		"name":"Godiva",
		"founder":"Joseph Draps, 1920s",
		"country":"Brussels, Belgium"
		},
		{
		"name":"Teuscher",
		"founder":"Dolf Family, 70 years ago",
		"country":"Zurich, Switzerland"
		},
		{
		"name":"Vosges Haut-Chocolat",
		"founder":"Katrina Markoff",
		"country":"Chicago, Illinois, USA"
		},
		{
		"name":"Scharffen Berger Chocolate Maker, Inc",
		"founder":"Robert Steinberg and John Scharffenberger, 1997, San Francisco",
		"country":"Berkeley, California, USA"
		},
		{
		"name":"Jacques Torres Chocolate",
		"founder":"Jacques Torres, 2000, New York",
		"country":"New York, New York, USA"
		}
	]	
}';
    $display="<div id='chocolate'><h1>World's Top Chocolatiers</h1>";
	$chocolateArr = json_decode($chocolates,true);
	foreach ($chocolateArr['manufacturer'] as $yum){
	  $name = $yum['name'];
	  $founder = $yum['founder'];
	  $country = $yum['country'];
      $display.= "<h2>" . $name . "</h2>" . "<p>Founded by: " . $founder . "<br>Made in: " . $country . "</p>";
	 }
	 $display .= "</div>";
?>
<!DOCTYPE html>
<html>
<head>
<title>Chocolatiers</title>
<style type="text/css">
body{
	background-image:url('images/Teuscher-Chocolates.jpg');
	background-repeat:no-repeat;
}
h1{
	font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	color:peru;
	text-shadow: 2px 2px 2px black;
}
h2{
	font-family:"Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
	color:peru;
	text-shadow: 2px 2px 2px black;
	border-bottom:2px peru solid;
}
p{
	margin-left:0.5in;
	font-family:"Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
	font-size:12pt;
}
#chocolate{
	width:600px;
	border:2px peru solid;
	box-shadow:5px 5px 5px peru;
	background-color:white;
	opacity:.9;
	padding:20px;
}
</style>
</head>
<body>
<?php 
 echo $display;
?> 
</body>
</html>	 
