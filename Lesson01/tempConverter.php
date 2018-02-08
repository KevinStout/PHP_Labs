<?php

$celsius = 0;
echo"<table>";
echo "<tr><th>Celsius</th><th>Fahrenheit</th></tr>";

for ($i=0; $i < 10; $i++) { 
    
   $fahrenheit = 9/5*($celsius + 32);
   echo "<tr><td>$celsius</td><td>$fahrenheit</td></tr>";
   $celsius += 5;   
}

?>