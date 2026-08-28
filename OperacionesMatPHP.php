<?php
//Suma
$num = 4;
$num2 = 7;
$suma = $num + $num2;

echo "La suma de $num y $num2 es: $suma <br>";

//Resta
$num = 10;
$num2 = 3;
$resta = $num - $num2;

echo "La resta de $num y $num2 es: $resta <br>";

//Multiplicacion
$num = 5;
$num2 = 6;
$multiplicacion = $num * $num2;

echo "La multiplicacion de $num y $num2 es: $multiplicacion <br>";

//Division
$num = 20;
$num2 = 4;
$division = $num / $num2;

echo "La division de $num y $num2 es: $division <br>";

//Potenciacion
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;

echo "La potencia de $base elevado a $exponente es: $potencia <br>";

//Modulo
$num = 15;
$num2 = 4;
$modulo = $num % $num2;

echo "El modulo de $num y $num2 es: $modulo <br>";

//Redondeo
$num = 4.6;

$redondeado = round($num);
$redondeado_arriba = ceil($num);
$redondeado_abajo = floor($num);

echo "El numero redondeado es: $redondeado <br>";
echo "El numero redondeado hacia arriba es: $redondeado_arriba <br>";
echo "El numero redondeado hacia abajo es: $redondeado_abajo <br>";

//Modulo parte 2
echo (5 % 3)."<br>";
echo (5 % -3)."<br>";
echo (-5 % 3)."<br>";
echo (-5 % -3)."<br>";

//Valor absoluto
$num = -7;
$valor_absoluto = abs($num);

echo "El valor absoluto de $num es: $valor_absoluto <br>";
?>
