<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de area y perimetro de circulos</title>

    <style>
        body {
            background-color: lightblue;
            font-family: Arial;
        }

        h1 {
            color: darkblue;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 400px;
        }

        input {
            background-color: lightgray;
        }

        input[type="submit"] {
            background-color: darkblue;
            color: white;
        }

        .correcto {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Calculadora de área y perímetro de círculos</h1>
    
    <form method="post" action="">
        Ingrese el radio del circulo:
        <input type="number" name="radio" step="any" required>
        <input type="submit" value="Calcular">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
        $radio = $_POST["radio"];
        
        if ($radio < 0)
            {
                echo "<p class='error'>El radio no puede ser negativo.</p>";
            }
        else
            {
                //formula para calcular area y perimetro 
                $area = round(pi() * $radio * $radio, 3);
                $perimetro = round(2 * pi() * $radio, 3);

                //resultado del radio y perimetro 
                echo "<p class='correcto'>Para el circulo de radio $radio el area es $area y el perimetro es $perimetro</p>";
            }
        }
    ?>

</body>
</html>
