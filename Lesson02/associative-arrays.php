<?php   

$salePrice = array(1=>9.99, 2=>15.99, 3=>24.99, 4=>29.99);
$regPrice = array(1=>15.00, 2=>25.00, 3=>30.00, 4=>40.00);

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
foreach ($salePrice as $key => $value) {
    echo "A quantity of ".$key." is on sale for <span style='color:red;'>".$value."</span><br/>";
}
printf("</span></pre>");

?>