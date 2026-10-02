<?php
$frutas = ["manzana","naranja","platano"];
$coches = ["BMW","Ferrari", "Toyota"];

function recorrerLista(array $lista){
    for($i = 0; $i < count($lista); $i++){
        echo $lista[$i]."<br>";
    }
}

recorrerLista($frutas);
recorrerLista($coches);
