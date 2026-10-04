<?php
//Arrays multidimensionales

$inventarioZapatos=[
    "Nike Air Max"=>["Precio"=>120.50, "Stock"=>5],
    "Adidas ultraboost"=>["Precio"=>150.00, "Stock"=>2],
    "Puma Rider"=>["Precio"=>89.99, "Stock"=>10],
    "New Balance 550"=>["Precio"=>110.00, "Stock"=>00]
];

function verInventario($inventario){
    echo"<ul>";
    foreach($inventario as $modelo => $detalles){
        if($detalles["Stock"]>0){
            echo "<li>$modelo- ".$detalles["Precio"]."$</li>";
        }else{
            echo "<li>$modelo Está agotado</li>";
        }
    }
    echo"</ul>";
}

verInventario($inventarioZapatos);