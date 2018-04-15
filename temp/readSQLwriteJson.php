<?php 
$mysqli = mysqli_connect("localhost", "root", "", "testdb");//

//$query="SELECT * FROM products LIMIT 20"; 
$query="SELECT * FROM products"; 
$result=$mysqli->query($query)
	or die ($mysqli->error);

//store the entire response
$response = array();

//the array that will hold the titles and links
$posts = array();

while($row=$result->fetch_assoc()) //mysql_fetch_array($sql)
{ 
$manufacturer=$row['manufacturer']; 
$founder=$row['founder']; 
$city=$row['city']; 
$state=$row['state']; 
$country=$row['country']; 

//each item from the rows go in their respective vars and into the posts array
$posts[] = array('manufacturer'=> $manufacturer, 'founder'=> $founder, 'city'=>$city, 'state'=>$state, 'country'=>$country); 

} 

//the posts array goes into the response
$response['chocolatier'] = $posts;

//creates the file
$fp = fopen('chocolate.json', 'w');
fwrite($fp, json_encode($response));
fclose($fp);

$display_block="<p>The chocolatier information has been written to json</p>";
$display_block.="<p><a href='viewjsondata.php'>View chocolate info</a></p>";
?> 
<!DOCTYPE html>
<html>
<head>
<title>Create Json File</title>    
</head>    
<body>
<?php echo $display_block ?>    
</body>
</html>