<?php
    $number = 2;
    $numberFloat = 4.56;
    $words = "hello";
    $trueFalse = true;
    $nullValue = null;

    TestingData($number);
    TestingData($numberFloat);
    TestingData($words);
    TestingData($trueFalse);
    TestingData($nullValue);

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
            case is_($value):
                echo "this is a null with a value of "."'".$value."'";
                echo "<br/>";
                    break;
            default:
                echo "did not work";
                break;
        };

    };

?>
