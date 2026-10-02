<?php

$puntuaciones = [4, 8, 2, 6, 10, 3, 7, 5];

function obtenerAprobados($lista){
    $aprobados = [];
    foreach($lista as $notas){
        if($notas >= 5) {
            $aprobados[] = $notas;
        }
    }
    return $aprobados;
}

$listaAprobados = obtenerAprobados($puntuaciones);

echo "<h1>Lista de aprobados:</h1>";
foreach($listaAprobados as $nota){
    echo $nota;
    echo "<br>";
}