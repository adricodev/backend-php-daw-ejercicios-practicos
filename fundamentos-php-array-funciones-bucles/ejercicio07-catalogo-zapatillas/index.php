    <?php
    //Ejercicio con Array asociativo.
    $zapatillas = [
        "Nike Air Max" => 120.50,
        "Adidas ultraboost"=>150.00,
        "Puma Rider" => 89.99,
        "New Balance 550"=>110.00
    ];

    echo "<h2>Catálogo de zapatillas</h2>";
    function analizarCatalogo($zapatillas){
        echo "<ul>";
        $cantidad = count($zapatillas);
        $total =0;
        $media = 0;
        foreach($zapatillas as $modelo => $precio){
            echo "<li>$modelo-$precio</li>";
            $total += $precio;
        }
        $media = $total/$cantidad;
        echo "<h2>Total catálogo: $total</h2>"."<br>";
        echo "<h2>Media de precio del catálogo: $media</h2>";
        echo"</ul>";

    }

    analizarCatalogo($zapatillas);