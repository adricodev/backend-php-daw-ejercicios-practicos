<?php
$arrayVideojuegos=["Fifa","Zelda","Gran Turismo","GTA"];

//Añadimos a variable el juego a buscar para pasarlo por parametro.
$juegoBuscado = "Fifa";
$juegoBuscado2 = "Gear of War";

function buscarJuego($juego, $lista){
    $encontrado=in_array($juego,$lista);
    return $encontrado;
}

$resultado = buscarJuego($juegoBuscado,$arrayVideojuegos);
$resultado2 = buscarJuego($juegoBuscado2,$arrayVideojuegos);


if($resultado == true){
    echo "Juego $juegoBuscado está en la lista";
    echo "<br>";
}else{
    echo "No se encontró $juegoBuscado";
    echo "<br>";
}

if($resultado2 == true){
    echo "Juego $juegoBuscado2 está en la lista";
    echo "<br>";
}else{
    echo "No se encontró $juegoBuscado2";
    echo "<br>";
}

