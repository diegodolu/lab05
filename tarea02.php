<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos Gaseosa</title>
</head>
<body>
    <form method="post" action="">
        Precio actual de gaseosa: <br> <input type="number" name="precioActual"> <br>
        Unidades adquiridas: <br> <input type="number" name="cantGaseosa"> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php 
    $rebaja = 0.05;
    $dscto_especial = 0.07;
    $obsequio = 2;
    $precio_actual = $_POST['precioActual'];
    $cantidad = $_POST['cantGaseosa'];
    
    $nuevo_precio = $precio_actual  - $precio_actual * $rebaja;
    $importe_compra = $nuevo_precio * $cantidad;
    $total_dscto = $precio_actual * $dscto_especial * $cantidad;
    $importe_pagar = $importe_compra - $total_dscto;

    echo "El nuevo precio de la gaseosa es: " . $nuevo_precio . "<br>";
    echo "El importe de la compra es: " . $importe_compra . "<br>";
    echo "El importe del descuento es: " . $total_dscto . "<br>";
    echo "El importe a pagar es: " . $importe_pagar . "<br>";
    echo "La cantidad de caramelos obsequiados son: " . $obsequio * $cantidad . "<br>";


?>