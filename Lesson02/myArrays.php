<?php

$pricing = array(100.00, 200.00, 300.00, 400.00, 500.00, 600.00);
$categories = array(0=>"All Mountain", 1=>"Powder", 2=>"Carving", 3=>"Twin Tip", 4=>"Park and Pipe", 5=>"Alpine Touring");
$companyAndSkis = array(
    array("Armada", "ARV", "ARW", "Tracer"),
    array("Volkl", "Revolt", "Mantra", "Confession"),
    array("Atomic", "Vantage", "Punx", "Backland"),
    array("Rossignol", "Sassy", "Temptation", "Sky7"),
    array("Nordica", "Enforcer", "Astral", "Soul Rider"),
    array("Head", "Kore", "Rally", "Joy"), 
);

printArray($pricing, $categories, $companyAndSkis);

array_push($pricing, 50.00);

$num = count($companyAndSkis);
$companyAndSkis[$num + 1] = array("Line", "Pandora", "Soulmate", "Gizmo");
$categories[6]="Used";

printArray($pricing, $categories, $companyAndSkis);

function printArray($pricing, $categories, $companyAndSkis){    
        echo "<h1 style='font-family:batang, calibri, cambria, serif; color:blue;'>New Skis This Winter</h1>";
        echo "<h2 style='font-family:batang, calibri, cambria, serif; color:skyblue;'>Brand, Ski Name and Type</h2>";
        printf("<pre> %-15s %-15s %-15s %-10s %-15s %-15s %-20s<br/>", "Brand", "Name", "Type", "Name", "Type", "Name", "Type");
        printf("===================================================================================================<br/>");
        foreach ($companyAndSkis as $cas) {
            printf("%-15s %-10s %-20s %-10s %-15s %-10s %-20s<br/>", $cas[0], $cas[1], $categories[5], $cas[2], $categories[3], $cas[3], $categories[4]);    
        }
        printf("</pre>");

        echo "<h2 style='font-family:batang, calibri, cambria, serif; color:skyblue;'>Brand, Ski Name and Price</h2>";
        printf("<pre> %-15s %-15s %-10s %-10s %-15s %-10s %-20s<br/>", "Brand", "Name", "Price", "Name", "Price", "Name", "Price");
        printf("==================================================================================================<br/>");
        foreach ($companyAndSkis as $cas) {
            printf("%-15s %-10s %-15.2f %-10s %-15.2f %-10s %-15.2f<br/>", $cas[0], $cas[1], $pricing[5], $cas[2], $pricing[3], $cas[3], $pricing[4]);    
        }
        printf("</pre>");

        echo "<h2 style='font-family:batang, calibri, cambria, serif; color:skyblue;'>Ski Type and Price</h2>";
        printf("<pre> %-15s %-15s<br/>", "Type", "Price");
        printf("================================================<br/>");
        for ($i=0; $i < count($categories); $i++) { 
            printf("%-15s %-5.2f<br/>", $categories[$i], $pricing[$i]);
        }
    }


?>