<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos Sueldo</title>
</head>
<body>
    <form method="post" action="">
        Importe total vendido del mes: <br> <input type="number" name="importeTotalMes"> <br>
        Cantidad de hijos en edad escolar: <br> <input type="number" name="cantidadHijos"> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php 
    $bono_hijo = 50;
    $sueldo_basico = 600;
    $total_vendido = $_POST['importeTotalMes'];
    $cantidad_hijos = $_POST['cantidadHijos'];
    $bonificacion = $cantidad_hijos * $bono_hijo;
    $comision = 0.075 * $total_vendido;
    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
    $dscto = 0.11 * $sueldo_bruto;
    $sueldo_neto = $sueldo_bruto - $dscto;
    echo "La comisión es: " . $comision . "<br>";
    echo "La bonificación por tener " . $cantidad_hijos . " hijos es: " . $bonificacion . "<br>";
    echo "El sueldo bruto es: " . $sueldo_bruto . "<br>";
    echo "El descuento es: " . $dscto . "<br>";
    echo "El sueldo neto del vendedor es: " . $sueldo_neto . "<br>";

?>
