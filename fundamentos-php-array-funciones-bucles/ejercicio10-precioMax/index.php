<?php
$zapatillas = [
    "Nike Air Max" =>120.50,
    "Adidas Ultraboost"=>150.00,
    "Puma Rider"=>89.99,
    "New Balance 550"=>110.00,
    "Vans Old Skook"=>75.00
];

function findMaxPrice($zapatillas){
    $priceTop=0;
    $modelTop="";
    foreach($zapatillas as $model => $price){
        if($price>$priceTop){
            $modelTop=$model;
            $priceTop=$price;
        }
    }
    echo"El modelo más caro es: $modelTop con un precio de: $priceTop";
}

findMaxPrice($zapatillas);
