<?php
$json = file_get_contents("jsonDinner.json");
$phpArr = json_decode($json,true);
$display = "<h1>Olive Garden Menu</h1>";
foreach ($phpArr as $item) { 
    $display .= "<p><span style='font-weight:900'>Name:</span>" . $item['Entree'] . "</p>";
    $display .= "<p><span style='font-weight:900'>Description:</span>" . $item['Description'] . "</p>";
    $display .= "<p><span style='font-weight:900'>Price:</span>" . $item['Price'] . "</p>";
    $display .= "<p><span style='font-weight:900'>Calories:</span>" . $item['Calories'] . "</p><hr>";            
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DisplayJSON Menu</title>
<link href="jsonMenu.css" rel="stylesheet" type="text/css">
</head>
<body>
<section>
<?php echo $display ?>
</section>
</body>
</html>