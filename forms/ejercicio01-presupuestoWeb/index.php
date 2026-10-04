<?php
$items = [
        "Teclado mecanico RGB" => 89.99,
        "Ratón inalámbrico Pro" => 59.50,
        "Auriculares Gaming" => 110.00,
        "Monitor 27 pulgadas 4K" => 320.00,
        "Soporte para portátil" => 29.99,
        "Micrófono USB Streaming" => 129.00,
        "Alfombrilla XL" => 19.99
];

$resultado = "";

if(isset($_POST["presupuesto"])){
    $presupuestoUser = $_POST["presupuesto"];

    $resultado .= "<ul>";
    foreach($items as $producto => $precio){
        if($precio <= $presupuestoUser){
            $resultado .= "<li>$producto - $precio €</li>";
        }
    }
    $resultado .= "</ul>";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscador de productos</title>
</head>
<body>

<h1>Buscador de Gadgets por Presupuesto</h1>

<form action="" method="POST">
    <label for="presupuesto">Indica la cuantía a gastar (€):</label>
    <input type="number" id="presupuesto" name="presupuesto" required>
    <button type="submit">Buscar</button>
</form>

<div>
    <?php echo $resultado; ?>
</div>

</body>
</html>