<?php
function doDB() {
	global $mysqli;

	//connect to server and select database; you may need it
	//$mysqli = mysqli_connect("localhost", "root", "", "ks_mtbforum");
	$mysqli = mysqli_connect("localhost:3306", "lisabalbach_stout14", "CIT1802509", "lisabalbach_testdb"); 

	//if connection fails, stop script execution
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
}
?>

