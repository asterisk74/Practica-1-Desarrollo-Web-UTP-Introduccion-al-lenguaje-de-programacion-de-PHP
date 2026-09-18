<!DOCTYPE html>
<html>
<head>
    <title>Operaciones Matemáticas</title>

    <style>
        body {
            background-color: aliceblue;
            font-family: Arial;
        }

        h1 {
            color: navy;
        }

        h2 {
            color: steelblue;
        }

        .resultado {
            color: black;
        }
    </style>
</head>

<body>

<?php

echo "<h1>Operaciones Matemáticas</h1>";

//Suma
echo "<h2>Suma</h2>";

$num = 4;
$num2 = 7;
$suma = $num + $num2;

echo "<p class='resultado'>La suma de $num y $num2 es: $suma</p>";

//Resta
echo "<h2>Resta</h2>";

$num = 10;
$num2 = 3;
$resta = $num - $num2;

echo "<p class='resultado'>La resta de $num y $num2 es: $resta</p>";

//Multiplicacion
echo "<h2>Multiplicacion</h2>";

$num = 5;
$num2 = 6;
$multiplicacion = $num * $num2;

echo "<p class='resultado'>La multiplicacion de $num y $num2 es: $multiplicacion</p>";

//Division
echo "<h2>Division</h2>";

$num = 20;
$num2 = 4;
$division = $num / $num2;

echo "<p class='resultado'>La division de $num y $num2 es: $division</p>";

//Potenciacion
echo "<h2>Potenciacion</h2>";

$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;

echo "<p class='resultado'>La potencia de $base elevado a $exponente es: $potencia</p>";

//Modulo
echo "<h2>Modulo Parte 1</h2>";

$num = 15;
$num2 = 4;
$modulo = $num % $num2;

echo "<p class='resultado'>El modulo de $num y $num2 es: $modulo</p>";

//Redondeo
echo "<h2>Redondeo</h2>";

$num = 4.6;

$redondeado = round($num);
$redondeado_arriba = ceil($num);
$redondeado_abajo = floor($num);

echo "<p class='resultado'>El numero redondeado es: $redondeado</p>";
echo "<p class='resultado'>El numero redondeado hacia arriba es: $redondeado_arriba</p>";
echo "<p class='resultado'>El numero redondeado hacia abajo es: $redondeado_abajo</p>";

//Modulo parte 2
echo "<h2>Modulo Parte 2</h2>";

$modulo1 = (5 % 3);
$modulo2 = (5 % -3);
$modulo3 = (-5 % 3);
$modulo4 = (-5 % -3);

echo "<p class='resultado'>El resultado de (5 % 3) es: $modulo1</p>";
echo "<p class='resultado'>El resultado de (5 % -3) es: $modulo2</p>";
echo "<p class='resultado'>El resultado de (-5 % 3) es: $modulo3</p>";
echo "<p class='resultado'>El resultado de (-5 % -3) es: $modulo4</p>";

//Valor absoluto
echo "<h2>Valor absoluto</h2>";

$num = -7;
$valor_absoluto = abs($num);

echo "<p class='resultado'>El valor absoluto de $num es: $valor_absoluto</p>";

?>

</body>
</html>
