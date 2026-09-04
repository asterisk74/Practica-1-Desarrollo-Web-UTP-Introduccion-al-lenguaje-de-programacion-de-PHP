<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de area y perimetro de circulos</title>
</head>

<body>
    <h1>Calculadora de área y perímetro de círculos</h1>
    
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
    
    if ($radio<0)
        {
            echo "El radio no puede ser negativo.";
        }
    else
        {
            //formula para calcular area y perimetro 
            $area = round(pi() * $radio * $radio, 3);
            $perimetro = round(2 * pi() * $radio, 3);

            //resultado del radio y perimetro 
            echo "Para el circulo de radio $radio el area es $area y el perimetro es $perimetro";
        }
    }
?>
</body>
</html>
