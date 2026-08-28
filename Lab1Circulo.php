<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de area y perimetro de circulos</title>
</head>

<body>
    <form method="post" action="">
        Ingrese el radio del circulo:
        <input type="number" name="radio" step="any" required>
        <input type="submit" value="Calcular">
        <br> <br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $radio = $_POST["radio"];

    $area = round(pi() * $radio * $radio, 3);
    $perimetro = round(2 * pi() * $radio, 3);

    echo "Para el circulo de radio $radio el area es $area y el perimetro es $perimetro";
    }
?>
</body>
</html>
