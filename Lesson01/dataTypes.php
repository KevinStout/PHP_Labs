<?php
    $number = 2;
    $numberFloat = 4.56;
    $words = "hello";
    $trueFalse = true;
    $cars = array("volvo", "BMW", "Toyota");

    TestingData($number);
    TestingData($numberFloat);
    TestingData($words);
    TestingData($trueFalse);
    TestingData($cars);

    function TestingData($value){
        switch ($value) {
            case is_int($value):
                echo "this is an int with a value of '".$value."'";
                echo "<br/>";
                    break;
            case is_float($value):
                echo "this is a float with a value of '".$value."'";
                echo "<br/>";
                    break;
            case is_string($value):
                echo "this is a string with a value of '".$value."'";
                echo "<br/>";
                    break;
            case is_bool($value):
                echo "this is a bool with a value of '".$value."'";
                echo "<br/>";
                    break;
            case is_array($value):
            $arrayLength = sizeof($value);
             for ($i=0; $i < $arrayLength ; $i++) { 
                echo "this is an array with a value of "."'".$value[$i]."'"." in position ".$i;
                echo "<br/>";
             };                
                    break;
            default:
                echo "did not work";
                break;
        };

    };

?>
