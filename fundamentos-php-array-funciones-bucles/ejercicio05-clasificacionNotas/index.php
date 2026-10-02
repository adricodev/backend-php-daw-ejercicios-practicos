<?php

$puntuaciones = [4,8,6,10,3,7];

function clasificarNotas($notas){
    foreach($notas as $nota) {
        if ($nota >= 9) {
            echo "Nota $nota: Sobresaliente";
            echo "<br>";
        } else if ($nota >= 7) {
            echo "Nota $nota: Notable";
            echo "<br>";
        } else if ($nota >= 5) {
            echo "Nota $nota: Aprobado";
            echo "<br>";
        } else {
            echo "Nota $nota: Suspenso, has pinchado la asignatura";
            echo "<br>";
        }
    }
    return $nota;
}

clasificarNotas($puntuaciones);