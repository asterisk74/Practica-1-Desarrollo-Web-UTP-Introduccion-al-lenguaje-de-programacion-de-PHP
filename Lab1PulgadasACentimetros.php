<!DOCTYPE html>
<html>
<head>
    <title>Pulgadas a centimetros</title>
</head>

<body>
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

    $centimetros = $pulgadas * PULGADA_A_CENTIMETROS;

    echo "$pulgadas pulgadas en centimetros son $centimetros";
    }
?>
</body>
</html>