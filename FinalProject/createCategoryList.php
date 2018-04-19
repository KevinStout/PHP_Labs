<?php
	
	include 'connect.php';
	doDB();	

	//if connection fails, stop script execution
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$get_forum_category = "SELECT * FROM ks_forum_category";
	$get_category_res = mysqli_query($mysqli, $get_forum_category) or die(mysqli_error($mysqli));

	$xml = "<categoryList>";
	while($r = mysqli_fetch_array($get_category_res)){
	 $xml .= "<category>";
	 $xml .= "<id>".$r['category_id']."</id>";
	 $xml .= "<title>".$r['category_title']."</title>";  
 	 $xml .= "<time>".$r['category_create_time']."</time>";
 	 $xml .= "<owner>".$r['category_owner']."</owner>"; 	   
     $xml .= "</category>";  
	}
$xml .= "</categoryList>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("category.xml");
echo "<h2>category.xml has been created</h2>";
echo "<p><a href='viewCategory.php'>[View Contact List]</a>";
?>