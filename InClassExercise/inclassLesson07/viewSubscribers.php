<!DOCTYPE html>
<html>
<head>
<title>Mailing List Subscribers</title>
</head>
<body>
<h1>Mailing List Subscribers</h1>
<?php
	include 'connect-include.php';
	doDB();
	$list_sql = "SELECT * FROM subscribers";
	$list_res = mysqli_query($mysqli, $list_sql) or die(mysqli_error($mysqli));

	while ($row = mysqli_fetch_array($list_res)) {
		$id = $row['id'];
		$email=$row['email'];
		echo "<p style='color:red;font-family:calibri, cambria, san-serif;'>Email=" . $email . "</p>";
	}
	
	mysqli_close($mysqli);
?>
</body>
</html>