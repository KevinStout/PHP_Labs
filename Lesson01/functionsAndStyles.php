<?php
function TextAndStyle($txt, $color, $size){
    echo "<span style=\"color:$color;font-size:$size\">".$txt."</span><br>";
}

TextAndStyle("Hello World", "orange", "20pt");
TextAndStyle("What is the weather today?", "blue", "30pt");
TextAndStyle("Lets go skiing", "green", "15pt");
?>