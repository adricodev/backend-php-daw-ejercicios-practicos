<?php
$zapatillas =[
    "Nike air Max"=>120.5,
    "Adidas Ultraboost" =>150.00,
    "Puma Rider"=>89.99,
    "New Balance 550"=>110.00,
    "Vans Old Skook"=>75.00
];

function filtroPorPresupuesto($zapatillas, $presupuesto){
    echo"<ul>";
    foreach($zapatillas as $modelo =>$precio){
        if($precio <= $presupuesto){
            echo"<li>$modelo - $precio $</li>";
        }else{
            echo "<li>El Modelo $modelo sale del presupuesto $presupuesto$</li>";
        }
    }
    echo "</ul>";
}

filtroPorPresupuesto($zapatillas,100);