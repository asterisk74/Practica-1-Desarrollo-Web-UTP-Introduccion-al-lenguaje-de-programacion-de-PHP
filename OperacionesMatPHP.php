<?php

echo "<h1>Operaciones Matemáticas</h1>";

//Suma
echo "<h2>Suma</h2>";

$num = 4;
$num2 = 7;
$suma = $num + $num2;

echo "La suma de $num y $num2 es: $suma <br><br>";

//Resta
echo "<h2>Resta</h2>";

$num = 10;
$num2 = 3;
$resta = $num - $num2;

echo "La resta de $num y $num2 es: $resta <br><br>";

//Multiplicacion
echo "<h2>Multiplicacion</h2>";

$num = 5;
$num2 = 6;
$multiplicacion = $num * $num2;

echo "La multiplicacion de $num y $num2 es: $multiplicacion <br><br>";

//Division
echo "<h2>Division</h2>";

$num = 20;
$num2 = 4;
$division = $num / $num2;

echo "La division de $num y $num2 es: $division <br><br>";

//Potenciacion
echo "<h2>Potenciacion</h2>";

$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;

echo "La potencia de $base elevado a $exponente es: $potencia <br><br>";

//Modulo
echo "<h2>Modulo Parte 1</h2>";

$num = 15;
$num2 = 4;
$modulo = $num % $num2;

echo "El modulo de $num y $num2 es: $modulo <br><br>";

//Redondeo
echo "<h2>Redondeo</h2>";

$num = 4.6;

$redondeado = round($num);
$redondeado_arriba = ceil($num);
$redondeado_abajo = floor($num);

echo "El numero redondeado es: $redondeado <br><br>";
echo "El numero redondeado hacia arriba es: $redondeado_arriba <br><br>";
echo "El numero redondeado hacia abajo es: $redondeado_abajo <br><br>";

//Modulo parte 2
echo "<h2>Modulo Parte 2</h2>";

$modulo1 = (5 % 3);
$modulo2 = (5 % -3);
$modulo3 = (-5 % 3);
$modulo4 = (-5 % -3);

echo "El rsultado de (5 % 3) es: $modulo1 <br><br>";
echo "El rsultado de (5 % -3) es: $modulo2 <br><br>";
echo "El rsultado de (-5 % 3) es: $modulo3 <br><br>";
echo "El rsultado de (-5 % -3) es: $modulo4 <br><br>";

//Valor absoluto
echo "<h2>Valor absoluto</h2>";

$num = -7;
$valor_absoluto = abs($num);

echo "El valor absoluto de $num es: $valor_absoluto <br><br>";
?>
