<!DOCTYPE html>
<html>
<head>
    <title>Pulgadas a centimetros</title>
</head>

<body>
    <h1>Convertidor de pulgadas a centimetros</h1>

    <form method="post" action="">
        Ingrese las pulgadas:
        <input type="number" name="pulgadas" step="any" required>
        <input type="submit" value="Calcular">
        <br> <br>
</form>
<?php

 const PULGADA_A_CENTIMETROS = 2.54;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $pulgadas = $_POST["pulgadas"];
    if($pulgadas<0)
        {
            //respuesta al usuario si introuduce un numero negativo
            echo "El numero a convertir no puede ser negativo";
        }
    else
        {
            //conversion de pulgadas a centimetros
            $centimetros = $pulgadas * PULGADA_A_CENTIMETROS;
            //resultado impreso a pantalla
            echo "$pulgadas pulgadas en centimetros son $centimetros";
        }

    }
?>
</body>
</html>
