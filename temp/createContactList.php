<?php
	//connect to server and select database; you may need it
	//$mysqli = mysqli_connect("localhost", "root", "", "testdb");
	$mysqli = mysqli_connect("localhost:3306", "lisabalbach_balbachl", "CIT92062", "lisabalbach_testdb");

	//if connection fails, stop script execution
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$get_master_name = "SELECT * FROM master_name";
	$get_master_res = mysqli_query($mysqli, $get_master_name) or die(mysqli_error($mysqli));

	$xml = "<contactList>";
	while($r = mysqli_fetch_array($get_master_res)){
	 $xml .= "<address>";
	 $xml .= "<id>".$r['id']."</id>";
	 $xml .= "<first>".$r['f_name']."</first>";  
 	 $xml .= "<last>".$r['l_name']."</last>";
 	 $xml .= "<addDt>".$r['date_added']."</addDt>";  
  	 $xml .= "<modDt>".$r['date_modified']."</modDt>";    
     $xml .= "</address>";  
	}
$xml .= "</contactList>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("contacts.xml");
echo "<h2>contacts.xml has been created</h2>";
echo "<p><a href='viewContacts.php'>[View Contact List]</a>";
?>