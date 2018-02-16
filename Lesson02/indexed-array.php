<?php   

$salePrice = array(9.99, 15.99, 24.99, 29.99);
$regPrice = array(15.00, 25.00, 30.00, 40.00);
$quantity = array(1, 2, 3, 4);
$shadePlants = array("Lily-of-the-Valley", "Gibraltar Azalea", "Hydrangea", "Japanese Painted Fern", "Silver Gem Appalachian Blue Violet", "snowbelle Mockorange");
$sunPlants = array("Jewel of Desert Peridot Ice Plant", "Rose", "Hollyhock", "peony", "Tutti Fruitti Hummingbird Mint", "Bergenia Dragonfly 'Sakura'", "Indian Summer Peruvian Lily", "Kaleidoscope Butterfly Bush");

echo "<h1 style='font-family:batang, calibri, cambria, serif; color:green;'>Shade Plants</h1>";
for ($i=0; $i < count($shadePlants); $i++) { 
    echo $shadePlants[$i]."<br/>";
}

echo "<hr/><h1 style='font-family:batang, calibri, cambria, serif; color:green;'>Sun Plants</h1>";
for ($i=0; $i < count($sunPlants); $i++) { 
    echo $sunPlants[$i]."<br/>";
}

echo "<hr/><h1 style='font-family:batang, calibri, cambria, serif; color:green;'>Quantity and Pricing</h1>";
printf("<pre><span style='font-family:batang, calibri, cambria, serif; font-size:12pt;'>");
for ($i=0; $i < count($quantity); $i++) { 
    printf("%4d item at $ %-6.2f each is on sale for <span style='color:red'> $ %-6.2f </span>each<br/>", $quantity[$i], $regPrice[$i], $salePrice[$i]);    
}
printf("</span></pre>");

?>