<?php

$videoJuegos=["Fifita","Minecraft","Zelda","God of war"];

function obtenerTotalElementos($lista){
    $elementos=count($lista);
    return $elementos;
}

$totalElementos = obtenerTotalElementos($videoJuegos);

echo $totalElementos;