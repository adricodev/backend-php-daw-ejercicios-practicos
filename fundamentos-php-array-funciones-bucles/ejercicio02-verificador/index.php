<?php
$peliculas = ["Marix","Interstellar","Gladiator"];
$peliculasVacias=[];

//Uso metodo empty para si el Array NO está vacio (!empty) da true y accede al bucle.
function recorrerPeliculas($peliculas){
    if(!empty($peliculas)){
        foreach ($peliculas as $pelis) {
            echo "<br>";
            echo $pelis . "<br>";
        }
        }else{
        echo "<br>";
        echo "No hay peliculas para listar.<br>";
    }
}

echo "Imprimiendo array Peliculas";
recorrerPeliculas($peliculas);

echo "<br>";

echo "Imprimiendo array vacio de peliculas a ver que pasa";
recorrerPeliculas($peliculasVacias);