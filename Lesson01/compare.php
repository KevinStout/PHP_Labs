<?php

$number1 = 10;
$number2 = 5;

echo "the first value is = ".$number1."<br/>";
echo "the second value is = ".$number2."<br/>";

if($number1 == $number2){
    echo "The values are the same"."<br/>";
}else{
    echo "the values are not the same"."<br/>";
    if($number1 < $number2){
        echo "the first value is less than the second"."<br/>";
    }else{
        echo "the first value is not less than the second"."<br/>";
        if($number1 > $number2){
            echo "the first value is greater than the second"."<br/>";
        } else{
            echo "the first value is not greater than the second"."<br/>";            
        }
    }
}

if($number1 <= $number2){
    echo "the first value is less than or equal to the second"."<br/>";
}else{
    echo "the first value is not less than or equal to the second"."<br/>";
}

?>