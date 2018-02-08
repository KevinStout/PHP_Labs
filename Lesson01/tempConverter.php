<?php

$celsius = 0;

echo"<table>";
echo "<tr><th>Celsius</th><th>Fahrenheit</th></tr>";

for ($i=0; $i < 10; $i++) { 
    
   $fahrenheit = 9/5*($celsius + 32);
   echo "<tr><td style=\"text-align:center\">$celsius</td><td style=\"text-align:center\">$fahrenheit</td></tr>";
   $celsius += 5;   
}

?>